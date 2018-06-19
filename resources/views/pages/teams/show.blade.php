@extends('layouts.main')
@section('content')
    <div class="team-page">
        <div class="coaches-section">
            <h1 class="team-page-team-name">{{$team->teamName}}</h1>
            <h2>Coaches</h2>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <a class="card-link" href="/player"><div class="card bg-light mx-auto">
                            <img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Coach Name</p>
                            </div>
                        </div></a>
                </div>
                <div class="col-md-4">
                    <a class="card-link" href="/player"><div class="card bg-light mx-auto">
                            <img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Coach Name</p>
                            </div>
                        </div></a>
                </div>
                <div class="col-md-4">
                    <a class="card-link" href="/player"><div class="card bg-light mx-auto">
                            <img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Coach Name</p>
                            </div>
                        </div></a>
                </div>
            </div>
        </div>

        <div class="upcoming-tournaments-section">
            <h2>Upcoming Tournaments</h2>
            <div class="row no-gutters">
                <div class="col-sm-6">
                    <div class="card bg-light">
                        <div class="card-header">Cowboy Cup</div>
                        <div class="card-body">
                            <ul>
                                <li>Dates: November 11-12, 2017</li>
                                <li>Location: Russell Creek Park Plano, TX</li>
                                <li>Player Waiver: CLICK HERE</li>
                                <li>Tournament Website: CLICK HERE</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-light">
                        <div class="card-header">Cowboy Cup</div>
                        <div class="card-body">
                            <ul>
                                <li>Dates: November 11-12, 2017</li>
                                <li>Location: Russell Creek Park Plano, TX</li>
                                <li>Player Waiver: CLICK HERE</li>
                                <li>Tournament Website: CLICK HERE</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="roster-section">
            <h2>Roster</h2>
            <div class="card bg-light">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Player Name</th>
                                <th>Position</th>
                                <th>Jersey Number</th>
                                <th>Phone Number</th>
                                <th>Spring Team</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($team->players as $player)
                                <tr>
                                    <td>{{$player->PlayerFName}} {{$player->PlayerLName}}</td>
                                    <td>{{$player->PlayerPosition}}</td>
                                    <td>{{\App\Http\Controllers\PlayerController::checkIfNull($player->PlayerJerseyNumber)}}</td>
                                    <td>{{$player->PlayerPhone}}</td>
                                    <td>{{$player->PlayerSpringTeam}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop