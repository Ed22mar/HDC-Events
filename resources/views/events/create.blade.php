@extends('layouts.main')
@section('title','HDC Create')
@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Eventos</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem Evento:</label>
            <input type="file" name="image" id="" class="from-control-file">
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento..">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">City:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="City..">
        </div>
        <div class="form-group">
            <label for="title">O evento é private?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">SIM</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Description:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento.."></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestruturas:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="mesas"> Mesas
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
