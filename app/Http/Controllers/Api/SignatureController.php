<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateSignature;
use App\Http\Resources\SignatureResource;
use App\Http\Resources\SignatureResourceCollection;
use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    private $model;

    public function __construct(Signature $model) {
        $this->model = $model;
    }

    public function insert(ValidateSignature $payload) {
        $response = Signature::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return response()->json($response);
    }

    public function update(ValidateSignature $payload, $id) {

        $response = Signature::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Problema ao atualizar a assinatura']);
        }
        $response->update($payload->all());
        return response()->json(['code' => '200', 'message' => 'Assinatura atualizada']);

    }

    public function delete($id) {
        $response = Signature::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Assinatura não encontrado']);
        }

        $response->delete();
        return response()->json(['code' => '200', 'message' => 'Assinatura excluida']);
    }

    public function show($id) {
        $signature = Signature::where('id', $id)->first();
        if(!$signature) {
            return response()->json(['code' => '500', 'message' => 'Sem resultado']);
        }
        return new SignatureResource($signature);

    }

    public function get(Request $request) {
        $signature = $this->model;

        if ($request->has('fields')) {
            $fields = $request->get('fields');
            $signature = $signature->selectRaw($fields);
        }

        return new SignatureResourceCollection($signature->paginate(8));

    }
}
