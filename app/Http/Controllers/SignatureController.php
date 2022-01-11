<?php

namespace App\Http\Controllers;

use App\Models\{Signature};
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    function getAll() {
        $signatures = Signature::all();
        return view("document.signature", compact("signatures"));
    }

    function search($id) {
        $signature = Signature::find($id);
        return view("document.signatureDetails", compact('signature'));
    }
}
