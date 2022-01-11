<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateDocument;
use App\Http\Resources\DocumentResource;
use App\Http\Resources\DocumentResourceCollection;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    private $model;

    public function __construct(Document $model) {
        $this->model = $model;
    }

    public function insert(ValidateDocument $payload) {
        $response = Document::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return response()->json($response);
    }

    public function update(ValidateDocument $payload, $id) {

        $response = Document::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Problema ao atualizar documento']);
        }
        $response->update($payload->all());
        return response()->json(['code' => '200', 'message' => 'Documento atualizada']);

    }

    public function delete($id) {
        $response = Document::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Documento não encontrado']);
        }

        $response->delete();
        return response()->json(['code' => '200', 'message' => 'Documento excluido']);
    }

    public function show($id) {
        $document = Document::where('id', $id)->first();
        if(!$document) {
            return response()->json(['code' => '500', 'message' => 'Sem resultado']);
        }
        return new DocumentResource($document);

    }

    public function get(Request $request) {
        $document = $this->model;

        if ($request->has('fields')) {
            $fields = $request->get('fields');
            $document = $document->selectRaw($fields);
        }

        return new DocumentResourceCollection($document->paginate(8));

    }

}
