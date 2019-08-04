<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
Use Exception;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLogin()
    {

        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            return view('pages/home');
        }
        // Si no hay sesión activa mostramos el formulario
        return view('/pagesElectivas/login2');
    }

    public function postLogin()
    {

        // Obtenemos los datos del formulario

        $datos= request()->all();

        $data = [
            'email' => $datos['correo'],
            'password' => $datos['password']
        ];

        $hashedPassword = Hash::make($datos['password']);
        //echo $hashedPassword;

        // Verificamos los datos
        if (Auth::attempt($data, true)) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {

            // Si nuestros datos son correctos mostramos la página de inicio
            return view('pages/home');
        }
        echo 'no encontrado';

        return view('pagesElectivas/login2');


    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        return view('pagesElectivas/login2');
    }
}
