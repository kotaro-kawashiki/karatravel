<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b2f3ff;">
  <a class="navbar-brand" href="/">Household Account</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      @if (Auth::check())
      <a class="nav-item nav-link active" href="logout">Logout <span class="sr-only">(current)</span></a>
      @endif
    </div>
  </div>
</nav>
