<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ //obtener una coleccion de usuarios
        $users = User::Users(0)->get();
        return response()->json($users);
    }
    public function store(Request $request)
    {
        //almacenar desde la base de datos
        $user = new User(); 
        $store = $user->store($request->all());
        return response()->json($store);
 
    }
    public function show($id){// obtienes el usuario
        $user = User::findOrFail($id);
        return response()->json($user);

    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
