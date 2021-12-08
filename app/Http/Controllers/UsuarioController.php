<?php

namespace App\Http\Controllers;

use App\Models\{Usuario, Document};

class UsuarioController extends Controller
{
    function index(){
        $usuario = Usuario::userInformation();
        $document = Document::get();
        // $document = Document::all();
        return view('admin.usuario', compact('usuario', 'document'));
    }
}
