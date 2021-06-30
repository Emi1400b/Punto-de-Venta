<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Empleado;

class UsuarioController extends Controller
{
    public function index() {
        $empleados = Empleado::all();
        return view('auth.register', compact('empleados'));
    }
}
