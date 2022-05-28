<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //VISTA DE LISTA USUARIO
    public function usuario(){
        $users = User::paginate(5);
        return view('auth.listUsuario', compact('users'));
    }

    //ELIMINAR CLIENTES DE LA BD
    public function delete_user($id){
        User::destroy($id);
        return back() ->with('usuarioeliminado', 'Usuario eliminado con exito');
    }
}
