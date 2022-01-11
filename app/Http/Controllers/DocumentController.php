<?php

namespace App\Http\Controllers;

use App\Models\{Document};
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function index() {
        $documents = Document::all();
        return view("document.document", compact("documents"));
    }

    function displayDocument($id) {
        $document = Document::find($id);
        return view('document.displayDocument', compact('document'));
    }
}
