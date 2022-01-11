@extends('simple.simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do assinatura</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Q caracter assinatura</th>
                        <th scope="col">Assinatura padrão</th>
                        <th scope="col">Q assinatura usada</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Data de atualização</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$signature['id']}}</th>
                        <td>{{$signature['q_signature_characters']}}</td>
                        <td>{{$signature['default_subscription']}}</td>
                        <td>{{$signature['subscription_usage']}}</td>
                        <td>{{$signature['created_at']}}</td>
                        <td>{{$signature['updated_at']}}</td>
                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('getAll')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection



