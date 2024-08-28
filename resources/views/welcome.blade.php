@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(5 > 2)
    <p>A condição é true</p>
@endif

<p>{{$nome}}</p>

@for ($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
    @if ($i === 2)
        <p>O i é igual a 2</p>
    @endif
@endfor

@foreach ($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@endsection
