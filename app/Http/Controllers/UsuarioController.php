<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class UsuarioController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function cadastrarUsuario ($nome,$eMail,$sexo,$telefone,$CPF,$DataNasc) {

        // return response()->json(
        //     [                 
        //         'id' => "1"
        //     ]);
        return app('db')->select("SELECT idUsuario as id FROM usuario");
    }
    public function listarUsuarios () 
    {
        // $usuarios = [
        //     [ 
        //         "id" => "000001",
        //         "nome" => "volmar",
        //         "eMail" => "volmar@gmail.com",
        //         "sexo" => "Masculino",
        //         "telefone" => "49 3567-0000",
        //         "CPF" => "000.111.222-33",
        //         "DataNasc" => "24-12-1924"    
        //     ],  
        //     [
        //         "id" => "000002",
        //         "nome" => "guilherme",
        //         "eMail" => "guilhermer@gmail.com",
        //         "sexo" => "Masculino",
        //         "telefone" => "49 3567-1111",
        //         "CPF" => "012.345.678-90",
        //         "DataNasc" => "05-10-1998"
        //     ] 
        // ];
        return app('db')->select("SELECT idUsuario as id, nome, eMail, sexo, telefone, CPF, dataNasc FROM usuario");
    }
}