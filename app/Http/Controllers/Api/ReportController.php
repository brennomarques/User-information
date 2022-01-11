<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{Analyses, Document, Signature};
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function search() {
        $document = Document::all();
        $signature = Signature::all();
        $analyses = Analyses::all();

        return response()->json(['document' => $document, 'signature' => $signature, 'analyses' => $analyses]);
    }
}
