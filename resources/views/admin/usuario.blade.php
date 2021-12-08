<h1>Informções do usuário</h1>
<br>
<hr>
    <p>Nome: {{$usuario['name']}}</p>
    <p>Idade: {{$usuario['age']}}</p>

<hr>

<h1>Informções do Documento</h1>
<br>
<hr>
    @foreach ($document as $doc)
        <li>{{$doc}}</li>
    @endforeach

<hr>


