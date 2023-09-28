<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">AEUA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{Request::is('/') ? 'active':''}}"><a href="{{url('/')}}" class="nav-link">Home</a></li>
          <li class="nav-item {{Request::is('about-us') ? 'active':''}}"><a href="{{url('about-us')}}" class="nav-link">About Us</a></li>
          <li class="nav-item {{Request::is('events*') ? 'active':''}}"><a href="{{url('events')}}" class="nav-link">Events & Calls</a></li>
          <li class="nav-item {{Request::is('newsletters*') ? 'active':''}}"><a href="{{url('newsletters')}}" class="nav-link">Newsletter</a></li>
          <li class="nav-item {{Request::is('funding*') ? 'active':''}}"><a href="{{url('funding')}}" class="nav-link">Funding</a></li>
          <li class="nav-item {{Request::is('contact*') ? 'active':''}}"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
</nav>