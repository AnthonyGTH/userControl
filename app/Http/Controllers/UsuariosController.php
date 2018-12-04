<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuariosController extends Controller
{
    public function index(){
      $user = User::all();
      return view('admin.usuarios.index', compact('user'));//Listado
    }
    public function create(){
      return view('admin.usuarios.create');//Formulario de registro
    }
    public function register(){
      return view('auth.register');//Formulario de registro
    }
    public function store(Request $request){
      dd($request->all());//registrar nuevo producto en bd
    }
}
