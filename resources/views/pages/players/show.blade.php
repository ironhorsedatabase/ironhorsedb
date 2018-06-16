@extends('layouts.main')
@section('content')
    <div class="card player-info">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <img class="player-pic" src="{{ asset('img/default-user.png') }}" alt="Player Image">
                    <div class="player-header-info">
                        <h4>{{ $player->PlayerFName}} {{$player->PlayerLName}}</h4>
                        <ul>
                            <li>Position: {{ $player->PlayerPosition }} </li>
                            <li>Grad Year: {{ $player->PlayerHSGradYear }} </li>
                            <li>School: {{ $player->PlayerSchool }} </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="college-info">
                        Status: {{\App\Http\Controllers\PlayerController::checkIfNull($player->PlayerCommitted, "Uncommitted")}}
                        <img src="{{ asset('img/IronHorseLacrosse_4C.png') }}" alt="College pic">
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs card-header-tabs player-tabs" id="playerTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="academics-tab" data-toggle="tab" href="#academics" role="tab" aria-controls="academics" aria-selected="false">Academics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="false">Contact</a>
                </li>
            </ul>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">

                    <div class="row no-gutters">

                        <div class="col-md-9 order-md-2">
                            <div class="player-highlight-section">
                                <h2>Player Highlight Video</h2>
                                <div class="video-responsive"><iframe src=" {{\App\Http\Controllers\PlayerController::checkIfNull($player->playerHighlightVideo, "https://www.youtube.com/embed/5HJXhvX8XuE")}} " frameborder="0" class="highlight-video"></iframe></div>
                            </div>
                        </div>

                        <div class="col-md-3 side-facts">
                            <h4>General Info</h4>
                            <ul>
                                <li class="text-muted">Player Spring Team</li>
                                <li class="font-weight-light side-data">{{ $player->PlayerSpringTeam }}</li>
                                <li class="text-muted">Player Height</li>
                                <li class="font-weight-light side-data"> {{\App\Http\Controllers\PlayerController::getHumanHeight($player->playerHeight) }}</li>
                                <li class="text-muted">Player Weight</li>
                                <li class="font-weight-light side-data">{{$player->playerWeight}}lbs</li>
                                <li class="text-muted">Lacrosse Honors</li>
                                <li class="font-weight-light side-data">N/A</li>
                                <li class="text-muted">Player Twitter</li>
                                <li class="font-weight-light side-data">{{\App\Http\Controllers\PlayerController::checkIfNull($player->PlayerTwitter)}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="academics" role="tabpanel" aria-labelledby="academics-tab">
                    <h2>Player Academics</h2>
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <ul>
                                <li>Player SAT: {{\App\Http\Controllers\PlayerController::checkIfNull($player->playerSAT)}}</li>
                                <ul class="test-scores">
                                    <li>Reading: N/A</li>
                                    <li>Math: N/A</li>
                                    <li>Writing and Language: N/A</li>
                                    <li>Essay: N/A</li>
                                </ul>
                                <li>Player PSAT: {{\App\Http\Controllers\PlayerController::checkIfNull($player->playerPSAT)}}</li>
                                <ul class="test-scores">
                                    <li>Reading: N/A</li>
                                    <li>Math: N/A</li>
                                    <li>Writing and Language: N/A</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Player ACT: {{\App\Http\Controllers\PlayerController::checkIfNull($player->playerACT)}} </li>
                                <ul class="test-scores">
                                    <li>Reading: N/A</li>
                                    <li>Math: N/A</li>
                                    <li>English: N/A</li>
                                    <li>Science: N/A</li>
                                </ul>
                                <li>Player Transcript: N/A</li>
                                <li>GPA: {{\App\Http\Controllers\PlayerController::checkIfNull($player->playerGPA)}} /4.0</li>
                                <li>NCAA Clearinghouse PIN: {{\App\Http\Controllers\PlayerController::checkIfNull($player->ncaaClearinghousePin)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <h2>Contact Info</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li class="text-muted">Address 1</li>
                                <li class="address">{{$player->PlayerStreet}}</li>
                                <li class="address">{{$player->PlayerCity}} {{$player->PlayerState}}</li>
                                <li class="address">{{$player->PlayerZip}}</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li class="text-muted">Contacts</li>
                                <li class="address">Player Phone: {{$player->PlayerPhone}}</li>
                                <li class="address">Player Email: {{$player->PlayerEmail}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
