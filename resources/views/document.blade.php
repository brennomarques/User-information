<h1>Meu documento</h1>
<br>
<hr>
    @foreach ($documents as $doc)
        <li>{{$doc}}</li><a href="{{route('display', $doc->id)}}">Ver documento</a><br>
    @endforeach
<hr>
