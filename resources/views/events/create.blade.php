@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group my-2">
            <label class="my-2" for="image">Imagem do Evento:</label> <br>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o nome do evento...">
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Digite o nome da cidade...">
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="title">O evento é privado?</label>
            <select type="text" class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group my-2">
            <label class="my-2" for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name ="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name ="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name ="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name ="items[]" value="Open food"> Open food
            </div>
            <div class="form-group">
                <input type="checkbox" name ="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-lg my-3 fw-bold" value="Criar Evento">
    </form>
</div>

@endsection
