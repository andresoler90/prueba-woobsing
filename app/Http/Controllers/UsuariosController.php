<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {

        //$usuarios = Usuarios::query()->first();

        $usuarios = [
            ['nombre' => 'Alex', 'apellido' => 'Escobar', 'telefono' => '999554544'],
            ['nombre' => 'Juan', 'apellido' => 'Gomez', 'telefono' => '999554544'],
            ['nombre' => 'Andres', 'apellido' => 'Marin', 'telefono' => '999554544'],
            ['nombre' => 'Angie', 'apellido' => 'Rivera', 'telefono' => '999554544'],
        ];

        foreach ($usuarios as $usuario){
            echo $usuario['nombre'] . ' ' . $usuario['apellido'] . ' ' . $usuario['apellido'];
            echo '<br>';
        }

    }
}
