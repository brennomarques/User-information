@extends('simple.simple')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <div class="row">
                <div class="col-12">
                    <h1>Informações do usuário</h1>
                    <hr>
                </div>

                <div class="col-12">
                    <p>Nome: {{$usuario['name']}}</p>
                    <p>Idade: {{$usuario['age']}}</p>
                </div>
            </div>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Número de assinaturas</th>
                    <th scope="col">Assinatura do responsável</th>
                    <th scope="col">Número de páginas</th>
                    <th scope="col">Tamanho documento</th>
                    <th scope="col">Data criação</th>
                    <th scope="col">Data atualização</th>

                </thead>
                <tbody>
                    @foreach ($document as $doc)
                        <tr>
                            <th scope="row">{{$doc->id}}</th>
                            <td>{{$doc->title}}</td>
                            <td>{{$doc->subscription_numbers}}</td>
                            <td>{{$doc->signature_responsible}}</td>
                            <td>{{$doc->number_page}}</td>
                            <td>{{$doc->document_size}}</td>
                            <td>{{$doc->created_at}}</td>
                            <td>{{$doc->updated_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('dashboard')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>
        </div>
    </div>
@endsection

