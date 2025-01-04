@extends('layouts/base')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Search a event</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search..." >
    </form>
</div>

<div id="event-container" class="col-md-12">
    <h2>Nexts events</h2>
    <p class="subtitle">See the nexts days events</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/queria.jpeg" alt="{{$event->title}}" >
                <div class="card-body">
                    <p class="card-date">02/01/25</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X Participants</p>
                    <a href="#" class="btn btn-primary"> Know more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection