@extends('layouts.main')
@section('content')
<div class="all-players-section">
    <div class="row sort-row">
        <label class="sort-label" for ="sort">Sort Teams By:</label>
        <select class="sort-select" name="sort" id ="sort">
            <option value="name">Name</option>
            <option value="age">Age</option>
            <option value="other">Other</option>
        </select>
    </div>
    <h2>All Players</h2>

    <div class="card-column">
        @foreach ($players as $player)
            <div class="card bg-light">
                <a class="card-link" href="{{route('players.show', $player->id)}}">
                    <img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                    <div class="card-body"><p class="card-text">{{$player->PlayerFName}} {{$player->PlayerLName}}</p></div></a>
            </div>
        @endforeach
    </div>
</div>
@stop