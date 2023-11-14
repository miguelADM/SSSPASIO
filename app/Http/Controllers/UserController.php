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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{

    public function index()
    {
        $param['users'] = DB::table(function ($subquery) {
            $subquery->select(
                'users.id as id_user',
                'users.name as user_name',
                DB::raw('GROUP_CONCAT(DISTINCT grupo_trabajos.nombre) as grupo_name'),  
                DB::raw('GROUP_CONCAT(DISTINCT enfermedades.nombre) as salud'), 
                'membresias.nombre as membresia_name', 
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo',
                'users.id_rol as rol'
            )
            ->from('users')
            ->join('grupo_trabajo_users', 'users.id', '=', 'grupo_trabajo_users.id_user')
            ->join('grupo_trabajos', 'grupo_trabajo_users.id_grupo_trabajo', '=', 'grupo_trabajos.id')
            ->join('membresias', 'users.membresia_id', '=', 'membresias.id')
            ->join('user_enfermedads', 'users.id', '=', 'user_enfermedads.id_user')
            ->join('enfermedades', 'user_enfermedads.id_enfermedad', '=', 'enfermedades.id')
            ->groupBy('id_user', 'user_name', 'membresia_name', 'periodo', 'email', 'sexo', 'fin_periodo','rol')
            ->orderBy('user_name','ASC');
        }, 'subquery')
        ->paginate(10);
       
        $param['grupos_trabajo'] = GrupoTrabajo::all();
        $param['enfermedades'] = Enfermedades::all();
        $param['membresias'] = Membresias::all();

         return view('admin.users',$param );
    
    }

    
    public function create()
    {
        return route('users.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>'required|unique:users',
            'password'=>['required'],
            'confirm_password'=>'required|same:password',
            'rol'=>['required'],
            'sexo'=>['required'],
            'membresia'=>['required']
        ]);

        $existingUser = User::where('email', $request->email)->first();

    if ($existingUser) {
        return redirect()->back()->with('Email','El email ya esta en el sistema');
    } else {
        // Inserta el nuevo usuario en la base de datos.
    
        // Crear un nuevo usuario
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $encrip = password_hash($request->input('password'), PASSWORD_DEFAULT);
        $user->password = $encrip;
        $user->id_rol = $request->input('rol');
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
        
        $userGrupo = new GrupoTrabajoUser();
        $userGrupo->id_user = $user->id;
        $userGrupo->id_grupo_trabajo = $request->input('grupo'); 
        $userGrupo->save();

        $userEnfermedad = new  UserEnfermedad();
        $userEnfermedad->id_user = $user->id;
        $userEnfermedad->id_enfermedad = $request->input('enfermedad'); 
        $userEnfermedad->save();
        
        return redirect()->route('users.index')->with('Agregado','Usuario Agregado Correctamente');;
        }
    }

    public function show($id)
    {
        $users = DB::table(function ($subquery) use ($id) {
            $subquery->select(
                'id_rol as id_rol',
                'users.id as id_user',
                'users.name as user_name',
                DB::raw('GROUP_CONCAT(DISTINCT grupo_trabajos.nombre) as grupo_name'), 
                DB::raw('GROUP_CONCAT(DISTINCT enfermedades.nombre) as salud'), 
                'membresias.nombre as membresia_name', 
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo',
                'users.password as password',
                'users.expired_at as fin_periodo',
                'users.password as password'
            )
            ->from('users')
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
        
        $param['usuarios'] = User::select(
                'users.id as id_usuario',
                'users.name as usuario_name',
                'grupo_trabajos.nombre as grupo_name',
                'enfermedades.nombre as salud',  
                'membresias.duracion as periodo', 
                'users.email as email', 
                'users.sexo as sexo',
                'users.expired_at as fin_periodo',
                'users.password as password'
            )
        ->join('grupo_trabajo_users', 'users.id', '=', 'grupo_trabajo_users.id_user')
        ->join('grupo_trabajos', 'grupo_trabajo_users.id_grupo_trabajo', '=', 'grupo_trabajos.id')
        ->join('membresias', 'users.membresia_id', '=', 'membresias.id')
        ->join('user_enfermedads', 'users.id', '=', 'user_enfermedads.id_user')
        ->join('enfermedades', 'user_enfermedads.id_enfermedad', '=', 'enfermedades.id')
        ->where('users.id', $id)
        ->get();
        
        $param['grupos_asociados'] = GrupoTrabajoUser::where('id_user', $id)
        ->pluck('id_grupo_trabajo')
        ->toArray();

        $param['enfermedades_asociadas'] = UserEnfermedad::where('id_user', $id)
        ->pluck('id_enfermedad')
        ->toArray();

        $param['rutinas_asociadas'] = UserRutina::where('id_user', $id)
        ->pluck('id_rutina')
        ->toArray();
        
        $param['enfermedades'] = Enfermedades::all();
        $param['grupos_trabajo'] = GrupoTrabajo::all();
        $param['rutinas'] = Rutina::all();
        $param['membresias'] = Membresias::all();
           
       return route('users.index',$param);
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
        return redirect()->route('users.index')->with('Eliminado','Usuario eliminado correctamente!');;
    }
}