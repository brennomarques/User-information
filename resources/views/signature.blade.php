<h1>Listar assinaturas</h1>
<br>
<hr>
    @foreach ($signatures as $item)
        <li>ID: {{$item->id}} </li>
        <li>Q caracter assinatura: {{$item->q_signature_characters}} </li>
        <li>Assinatura padrão: {{$item->default_subscription}} </li>
        <li>Q assinatura usada: {{$item->subscription_usage}} </li>
        <li>Criado em: {{$item->created_at}} </li>
        <li>Atualizado em: {{$item->updated_at}} </li>
        <br>
        <a href="{{route('search', $item->id)}}">Ver detalhes</a><br>
        <hr>
    @endforeach

