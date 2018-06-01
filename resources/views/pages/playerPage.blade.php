@extends('layouts.main')
@section('content')
<div class="card player-info">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<img class="player-pic" src="{{ asset('img/default-user.png') }}" alt="Player Image">
				<div class="player-header-info">
    				<h4>Chris Surran</h4>
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
             	Player Transcript: 
             	Player SAT:
             	Player PSAT:
             	Player ACT: 
             	GPA: 
             	NCAA Clearinghouse PIN:
         	 </div>
             <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
             	Player Email:
             	Player Phone:
             	Player Address:
             </div>
        </div>
	</div>
</div>
@stop