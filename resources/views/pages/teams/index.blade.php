@extends('layouts.main')
@section('content')
    <div class="row sort-row">
        <label class="sort-label" for ="sort">Sort Teams By:</label>
        <select class="sort-select" name="sort" id ="sort">
            <option value="name">Name</option>
            <option value="age">Age</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="teams-page-header">All Teams</h2>
        </div>
    </div>
    <div class="card-columns">
        @foreach ($teams as $team)
            <a class="card-link" href="{{route('teams.show', $team->id)}}">
                <div class= "card bg-light md-3 team-card">
                    <div class="card-header">
                        <h5 class="card-title">{{$team->teamName}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row team-info">
                            <div class= "col-6 side-first">
                                <ul class ="team-info">
                                    <li class= "region">
                                        Region: {{$team->teamRegion}}
                                    </li>
                                    <li class= "roster">
                                        Roster Size: {{$team->players->count()}}
                                    </li>
                                    <li class= "next">
                                        NxT: Cowboy Cup
                                    </li>
                                </ul>
                            </div>
                            <div class= "col-6 side-second">
                                <ul class ="roster-info">
                                    <li class= "attack">
                                        Attack: {{$team->players()->where('PlayerPosition', 'Attack')->count()}}
                                    </li>
                                    <li class= "midfield">
                                        Midfield: {{$team->players()->where('PlayerPosition', 'Mid field')->orWhere('PlayerPosition', 'Face-Off')->count()}}
                                    </li>
                                    <li class= "defense">
                                        Defense: {{$team->players()->where('PlayerPosition', 'LSM')->orWhere('PlayerPosition', 'Defense')->count()}}
                                    </li>
                                    <li class= "goalie">
                                        Goalies: {{$team->players()->where('PlayerPosition', 'Goalie')->count()}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


    </div>






@stop