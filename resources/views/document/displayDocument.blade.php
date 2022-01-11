@extends('simple.simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do documento</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Tamanho do documento em MB</th>
                        <th scope="col">Nº de assinaturas do documento</th>
                        <th scope="col">Assinatura do responsável</th>
                        <th scope="col">Quantidade de páginas (1 ou 10)</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de atualização</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$document['id']}}</th>
                        <td>{{$document['title']}}</td>
                        <td>{{$document['document_size']}}</td>
                        <td>{{$document['subscription_numbers']}}</td>
                        <td>{{$document['signature_responsible']}}</td>
                        <td>{{$document['number_page']}}</td>
                        <td>{{$document['created_at']}}</td>
                        <td>{{$document['updated_at']}}</td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('document')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar documento</a>
            </div>

        </div>
    </div>

@endsection
