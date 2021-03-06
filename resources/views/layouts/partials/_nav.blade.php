<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="/">
  	<img src = "{{ URL::asset('img/IronHorseLacrosse_4C.png') }}">
  	Iron Horse
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/teams">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('players.index')}}">Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tournaments</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/myteams">My Teams</a>
          <a class="dropdown-item" href="/mytournaments">My Tournaments</a>
          <a class="dropdown-item" href="#">My Iteneraries</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Create Team</a>
          <a class="dropdown-item" href="#">Create Player</a>
          <a class="dropdown-item" href="#">Create Tournament</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Update Information</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sign Out</a>
          
          
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-nav my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>