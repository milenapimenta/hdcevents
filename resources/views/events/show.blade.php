@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="col-md-6" id="image-container">
            <img class="img-fluid" src="/img/events/{{$event->image}}" alt="{{$event->title}}">
        </div>
        <div class="col-md-6" id="info-container">
            <h1>{{$event->title}}</h1>
            <p class="event-city">
                <ion-icon name="pin"></ion-icon>
                {{$event->city}}
            </p>
            <p class="events-participants">
                <ion-icon name="people"></ion-icon>
                X participantes
            </p>
            <p class="event-owner">
                <ion-icon name="star"></ion-icon>
                {{$eventOwner['name']}}
            </p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach ($event->items as $item)
                    <li>
                        <ion-icon name="play"></ion-icon> <span>{{$item}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">
                {{$event->description}}
            </p>
        </div>
    </div>
</div>

@endsection
