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
    <div class="row">
    	<div class="col-6 col-md-3">
    		<div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    </div>
    <div class="row">
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    </div>
    <div class="row">
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    </div>
    <div class="row">
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    </div>
    <div class="row">
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    	<div class="col-6 col-md-3">
    		<a class="card-link" href="/player"><div class="card bg-light mx-auto">
        		<img class="card-img-top" src="{{ asset('img/default-user.png') }}" alt="Card image cap">
                <div class="card-body"><p class="card-text">Player Name</p></div>
        	</div></a>
    	</div>
    </div>
    
</div>
@stop