@extends('simple.simple')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Meus documentos</h1>
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
                    <th scope="col">Ação</th>

                </thead>
                <tbody>
                    @foreach ($documents as $doc)
                        <tr>
                            <th scope="row">{{$doc->id}}</th>
                            <td>{{$doc->title}}</td>
                            <td>{{$doc->subscription_numbers}}</td>
                            <td>{{$doc->signature_responsible}}</td>
                            <td>{{$doc->number_page}}</td>
                            <td>{{$doc->document_size}}</td>
                            <td width="10"><a href="{{route('display', $doc->id)}}" class="btn btn-outline-primary" title="Ver detalhes"><i class="fa fa-eye"></i></a></td>
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

