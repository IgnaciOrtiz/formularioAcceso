<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\User;

class RegistroController extends Controller
{
    //
    public function show(){
        return view('auth.registro');
    }

    public function register(RegistroRequest $request){
        $user = User::create($request->validated());
        return back()->with('mensaje', 'Registro añadido correctamente.');
    }
}
