@extends('layouts.main')
@section('title','HDC Events')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($events as $event )
            <tr>
                <td scropt="row">{{$loop->index + 1}}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title}}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a><a href="#">Apagar</a></td>
            </tr>
        @endforeach
    </tbody>

    @else
        <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif
</div>
@endsection
