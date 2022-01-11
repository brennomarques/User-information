<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAnalyses;
use App\Http\Resources\AnalysesResource;
use App\Http\Resources\AnalysesResourceCollection;
use App\Models\Analyses;
use Illuminate\Http\Request;

class AnalysesController extends Controller
{
    private $model;

    public function __construct(Analyses $model) {
        $this->model = $model;
    }

    public function insert(ValidateAnalyses $payload) {
        $response = Analyses::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return response()->json($response);
    }

    public function update(ValidateAnalyses $payload, $id) {

        $response = Analyses::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Problema ao atualizar analise']);
        }
        $response->update($payload->all());
        return response()->json(['code' => '200', 'message' => 'Analise foi atualizado']);

    }

    public function delete($id) {
        $response = Analyses::find($id);

        if (!$response){
            return response()->json(['code' => '500', 'message' => 'Analise não encontrado']);
        }

        $response->delete();
        return response()->json(['code' => '200', 'message' => 'Analise foi excluido']);
    }

    public function show($id) {
        $analyses = Analyses::where('id', $id)->first();
        if(!$analyses) {
            return response()->json(['code' => '500', 'message' => 'Sem resultado']);
        }
        return new AnalysesResource($analyses);

    }

    public function get(Request $request) {
        $analyses = $this->model;

        if ($request->has('fields')) {
            $fields = $request->get('fields');
            $analyses = $analyses->selectRaw($fields);
        }

        return new AnalysesResourceCollection($analyses->paginate(8));

    }
}
