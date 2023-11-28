<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GrupoTrabajo;
use App\Models\Enfermedades;
use App\Models\Membresias;


class UsersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $param['users'] = User::paginate(10);
        $param['grupos'] = GrupoTrabajo::all();
        $param['enfermedades'] = Enfermedades::all();
        $param['membresias'] = Membresias::all();

        return view('admin/users', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'sexo' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'rol' => 'required',
            'membresia' => 'required',
        ]);

        try {
            $user = new User();
            $user->email = $request->email;
            $user->telefono = $request->tel;
            $user->password = bcrypt($request->password);
            $user->status = 1;
            $user->sexo = $request->sexo;
            $user->id_membresia = $request->membresia;
            $user->id_grupo = $request->grupo;
            $user->id_rol = $request->rol;
            $user->save();
            return redirect()->route('users')->with('success', 'Usuario creado correctamente');
        } catch (\Exception $th) {
            return redirect()->route('users')->with('error', 'Error al crear usuario');
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   

        $request->validate([
            'email_edit' => 'required|email',
            'sexo_edit' => 'required',
            'rol_edit' => 'required',
            'membresia_edit' => 'required',
        ]);
        
        try {
            $user = User::find($request->id_user);
            $user->email = $request->email_edit;
            $user->telefono = $request->tel_edit;
            $user->sexo = $request->sexo_edit;
            $user->id_membresia = $request->membresia_edit;
            $user->id_grupo = $request->grupo_edit;
            $user->id_rol = $request->rol_edit;
            $user->status = 1;
            if($request->password_edit != null){
                $user->password = bcrypt($request->password_edit);
            }
            $user->save();
            return redirect()->route('users')->with('success', 'Usuario actualizado correctamente');
        } catch (\Exception $th) {
            \Log::error($th->getMessage());
            return redirect()->route('users')->with('error', 'Error al actualizar usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->delete();
            return response()->json(['success' => 'Usuario eliminado correctamente']);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Error al eliminar usuario']);
        }
    }

}
