/**
 * Created by PhpStorm.
 * User: chris
 * Date: 6/14/18
 * Time: 1:15 PM
 */

@extends('layouts.main')
@section('content')
    <div class="card player-info">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <img class="player-pic" src="{{ asset('img/default-user.png') }}" alt="Player Image">
                    <div class="player-header-info">
                        <h4>{{ $player->PlayerFName }} Surran</h4>
                        <ul>
                            <li>Position: Defense </li>
                            <li>Grad Year: 2017 </li>
                            <li>School: Jesuit College Prep </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="college-info">
                        Status: Uncommitted
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
                                <div class="video-responsive"><iframe src="https://www.youtube.com/embed/T4HwEkqVI1Y" frameborder="0" class="highlight-video"></iframe></div>
                            </div>
                        </div>

                        <div class="col-md-3 side-facts">
                            <h4>General Info</h4>
                            <ul>
                                <li class="text-muted">Player Spring Team</li>
                                <li class="font-weight-light side-data">Jesuit College Prep</li>
                                <li class="text-muted">Player Height</li>
                                <li class="font-weight-light side-data">6'1"</li>
                                <li class="text-muted">Player Weight</li>
                                <li class="font-weight-light side-data">200lbs</li>
                                <li class="text-muted">Lacrosse Honors</li>
                                <li class="font-weight-light side-data">N/A</li>
                                <li class="text-muted">Player Twitter</li>
                                <li class="font-weight-light side-data">@JezLax2</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="academics" role="tabpanel" aria-labelledby="academics-tab">
                    <h2>Player Academics</h2>
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <ul>
                                <li>Player SAT: 2400</li>
                                <ul class="test-scores">
                                    <li>Reading: 800</li>
                                    <li>Math: 800</li>
                                    <li>Writing and Language: 800</li>
                                    <li>Essay: 800</li>
                                </ul>
                                <li>Player PSAT: 3640</li>
                                <ul class="test-scores">
                                    <li>Reading: 800</li>
                                    <li>Math: 800</li>
                                    <li>Writing and Language: 800</li>
                                </ul>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Player ACT: 33 </li>
                                <ul class="test-scores">
                                    <li>Reading: 33</li>
                                    <li>Math: 33</li>
                                    <li>English: 33</li>
                                    <li>Science: 33</li>
                                </ul>
                                <li>Player Transcript:</li>
                                <li>GPA: 4.0/4.0</li>
                                <li>NCAA Clearinghouse PIN: 324212</li>
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
                                <li class="address">3424 San Patricio Drive</li>
                                <li class="address">Plano TX</li>
                                <li class="address">75025</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li class="text-muted">Contacts</li>
                                <li class="address">Player Cell: 214-436-7867</li>
                                <li class="address">Player Email: jcp15320@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
