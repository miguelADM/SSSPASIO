<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Rutina;
use App\Models\Membresias;
use App\Models\UserRutina;
use App\Models\Enfermedades;
use App\Models\GrupoTrabajo;
use Illuminate\Http\Request;
use App\Models\UserEnfermedad;
use App\Models\GrupoTrabajoUser;
use CreateUserEnfermedadsTable;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        
        $users = DB::table(function ($subquery) {
            $subquery->select(
                'users.id as id_user',
                'users.name as user_name',
                DB::raw('GROUP_CONCAT(DISTINCT grupo_trabajos.nombre) as grupo_name'), 
                DB::raw('GROUP_CONCAT(DISTINCT rutinas.nombre) as rutina_name'), 
                DB::raw('GROUP_CONCAT(DISTINCT enfermedades.nombre) as salud'), 
                'membresias.nombre as membresia_name', 
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo',
            )
            ->from('users')
            ->join('user_rutinas', 'users.id', '=', 'user_rutinas.id_user')
            ->join('rutinas', 'user_rutinas.id_rutina', '=', 'rutinas.id')
            ->join('grupo_trabajo_users', 'users.id', '=', 'grupo_trabajo_users.id_user')
            ->join('grupo_trabajos', 'grupo_trabajo_users.id_grupo_trabajo', '=', 'grupo_trabajos.id')
            ->join('membresias', 'users.membresia_id', '=', 'membresias.id')
            ->join('user_enfermedads', 'users.id', '=', 'user_enfermedads.id_user')
            ->join('enfermedades', 'user_enfermedads.id_enfermedad', '=', 'enfermedades.id')
            ->groupBy('id_user', 'user_name', 'membresia_name', 'periodo', 'email', 'sexo', 'fin_periodo');
        }, 'subquery')
        ->get();
         
    return view('components.usuarios.inicio_usuarios', compact('users'));
    
    }

    public function create()
    {
        $grupos_trabajo = GrupoTrabajo::all();
        $membresias = Membresias::all();
        $enfermedades = Enfermedades::all();
        $rutinas = Rutina::all();
        
        return view('components.usuarios.agregar_usuarios', compact('grupos_trabajo', 'membresias', 'enfermedades','rutinas'));
    }


    public function store(Request $request)
    {
       
    
        // Crear un nuevo usuario
        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->sexo = $request->input('sexo');
        $user->membresia_id = $request->input('membresia'); // Asociar el usuario con la membresía
        
        $today = Carbon::now();
        // Calcular la fecha de vencimiento basada en la duración de la membresía
        if ($request->membresia == '1') {
            // Membresía básica no tiene vencimiento
            $user->expired_at = null;
        } elseif ($request->membresia == '2') {
            // Membresía premium tiene 1 mes de vencimiento
            $user->expired_at = $today->addMonth();
        } elseif ($request->membresia == '3') {
            // Membresía empresarial tiene 2 meses de vencimiento
            $user->expired_at = $today->addMonths(2);
        }
        
        $user->save(); // Guarda el usuario en la base de datos
        
        // Insertar los IDs de grupos desde el arreglo
        $grupoIds = $request->input('grupos', []);
        foreach ($grupoIds as $grupoId) {
            
            $userGrupo = new GrupoTrabajoUser();
            $userGrupo->id_user = $user->id;
            $userGrupo->id_grupo_trabajo = $grupoId; // Asignar el ID del grupo actual
            $userGrupo->save();
        }

        $enfermedadIds = $request->input('enfermedades', []);
        foreach ($enfermedadIds as $enfermedadID) {
            
            $userEnfermedad = new  UserEnfermedad();
            $userEnfermedad->id_user = $user->id;
            $userEnfermedad->id_enfermedad = $enfermedadID; // Asignar el ID del enefermedad actual
            $userEnfermedad->save();
        }
        
        $rutinaId = $request->input('rutinas', []);
        foreach ($rutinaId as $RutinaID) {
            
            $userRutinas = new UserRutina();
            $userRutinas->id_user = $user->id;
            $userRutinas->id_rutina = $RutinaID; // Asignar el ID de la rutina
            $userRutinas->save();
        }

        return redirect()->route('usuarios.index')->with('success','Agregado con exito!');
    }

    public function show($id)
    {
        $users = DB::table(function ($subquery) use ($id) {
            $subquery->select(
                'users.id as id_user',
                'users.name as user_name',
                DB::raw('GROUP_CONCAT(DISTINCT grupo_trabajos.nombre) as grupo_name'), 
                DB::raw('GROUP_CONCAT(DISTINCT rutinas.nombre) as rutina_name'), 
                DB::raw('GROUP_CONCAT(DISTINCT enfermedades.nombre) as salud'), 
                'membresias.nombre as membresia_name', 
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo'
            )
            ->from('users')
            ->join('user_rutinas', 'users.id', '=', 'user_rutinas.id_user')
            ->join('rutinas', 'user_rutinas.id_rutina', '=', 'rutinas.id')
            ->join('grupo_trabajo_users', 'users.id', '=', 'grupo_trabajo_users.id_user')
            ->join('grupo_trabajos', 'grupo_trabajo_users.id_grupo_trabajo', '=', 'grupo_trabajos.id')
            ->join('membresias', 'users.membresia_id', '=', 'membresias.id')
            ->join('user_enfermedads', 'users.id', '=', 'user_enfermedads.id_user')
            ->join('enfermedades', 'user_enfermedads.id_enfermedad', '=', 'enfermedades.id')
            ->where('users.id', $id)
            ->groupBy('id_user', 'user_name', 'membresia_name', 'periodo', 'email', 'sexo', 'fin_periodo');
        }, 'subquery')
        ->get();

        return view('components.usuarios.eliminar_usuarios',compact('users'));
    }

    public function edit($id)
    {
        
        $usuarios = User::select(
                'users.id as id_usuario',
                'users.name as usuario_name',
                'grupo_trabajos.nombre as grupo_name',
                'rutinas.nombre as rutina_name', 
                'enfermedades.nombre as salud',  
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo',
                'users.password as password'
            )
        ->join('user_rutinas', 'users.id', '=', 'user_rutinas.id_user')
        ->join('rutinas', 'user_rutinas.id_rutina', '=', 'rutinas.id')
        ->join('grupo_trabajo_users', 'users.id', '=', 'grupo_trabajo_users.id_user')
        ->join('grupo_trabajos', 'grupo_trabajo_users.id_grupo_trabajo', '=', 'grupo_trabajos.id')
        ->join('membresias', 'users.membresia_id', '=', 'membresias.id')
        ->join('user_enfermedads', 'users.id', '=', 'user_enfermedads.id_user')
        ->join('enfermedades', 'user_enfermedads.id_enfermedad', '=', 'enfermedades.id')
        ->where('users.id', $id)
        ->get();
        
        $grupos_asociados = GrupoTrabajoUser::where('id_user', $id)
        ->pluck('id_grupo_trabajo')
        ->toArray();

        $enfermedades_asociadas = UserEnfermedad::where('id_user', $id)
        ->pluck('id_enfermedad')
        ->toArray();

        $rutinas_asociadas = UserRutina::where('id_user', $id)
        ->pluck('id_rutina')
        ->toArray();
        
        $enfermedades = Enfermedades::all();
        $grupos_trabajo = GrupoTrabajo::all();
        $rutinas = Rutina::all();
        $membresias = Membresias::all();
           
       return view('components.usuarios.actualizar_usuarios',compact('usuarios','membresias','grupos_trabajo','grupos_asociados','enfermedades','enfermedades_asociadas','rutinas_asociadas', 'rutinas'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('users.id',$id)->firstOrFail();
        $user->name = $request->post('nombre');
        $user->password = $request->post('password');        
        $user->email = $request->post('email');
        $user->sexo = $request->post('sexo');
        $user->save();

        //actualizar ids grupos
        $grupoIds = $request->input('grupos', []);
        $relacionesActuales = GrupoTrabajoUser::where('id_user', $id)->pluck('id_grupo_trabajo')->toArray();
        $gruposParaEliminar = array_diff($relacionesActuales, $grupoIds);
        
        GrupoTrabajoUser::where('id_user', $id)
        ->whereIn('id_grupo_trabajo', $gruposParaEliminar)
        ->delete();

        foreach ($grupoIds as $grupoId) {
            $userGrupo = new GrupoTrabajoUser();
            $userGrupo->id_user = $user->id;
            $userGrupo->id_grupo_trabajo = $grupoId;
            $userGrupo->save();
        }

        return redirect()->route('usuarios.index')->with('success','Actualizada con exito con exito!');

    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('usuarios.index')->with('success','Eliminado con exito con exito!');
    }
}
