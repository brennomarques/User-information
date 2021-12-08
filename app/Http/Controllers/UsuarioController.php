<?php

namespace App\Http\Controllers;

use App\Models\{Usuario, Document};
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    function index(){
        $usuario = Usuario::userInformation();
        Log::info("Informações do usário carregado.");
        $document = Document::get();
        Log::info("O documento carregado.");
        // $document = Document::all();
        return view('admin.usuario', compact('usuario', 'document'));
    }
}
