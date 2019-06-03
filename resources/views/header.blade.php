<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ set_active ('/')}}">
              <a class="nav-link scroll" href="{{ url('/#section1') }}">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ set_active ('About')}}">
              <a class="nav-link scroll" href="{{ url('/#section2') }}">about</a>
            </li>
            <li class="nav-item {{ set_active ('Contact')}}">
              <a class="nav-link scroll" href="{{ url('/#section3') }}">contact</a>
            </li>
            {{-- <li class="nav-item {{ Request::is('Work') ? 'active' : ''}}">
            <a class="nav-link" href="Work">Work</a>
            </li> --}}
          </ul>
        </div>
      </nav>
