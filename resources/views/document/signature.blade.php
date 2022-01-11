 @extends('simple.simple')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Lista de assinaturas</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Q caracter assinatura</th>
                    <th scope="col">Assinatura padrão</th>
                    <th scope="col">Q assinatura usada</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Atualizado em</th>
                    <th scope="col">Ação</th>

                </thead>
                <tbody>
                    @foreach ($signatures as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->q_signature_characters}}</td>
                            <td>{{$item->default_subscription}}</td>
                            <td>{{$item->subscription_usage}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td width="10"><a href="{{route('search', $item->id)}}" class="btn btn-outline-primary" title="Ver detalhes"><i class="fa fa-eye"></i></a></td>
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
