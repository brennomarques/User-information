<h1>Detalhes do documento</h1>
<br>
<hr>
    <h5>ID: {{$document['id']}}</h5>
    <h5>Titulo: {{$document['title']}}</h5>
    <h5>Tamanho do documento em MB: {{$document['document_size']}}</h5>
    <h5>Nº de assinaturas do documento: {{$document['subscription_numbers']}}</h5>
    <h5>Assinatura do responsável: {{$document['signature_responsible']}}</h5>
    <h5>Quantidade de páginas (1 ou 10): {{$document['number_page']}}</h5>
    <h5>Documento Criado em: {{$document['created_at']}}</h5>
    <h5>Documento Atualizado em: {{$document['updated_at']}}</h5>
<hr>

<br><br>

<a href="{{route('document')}}">Voltar</a>


