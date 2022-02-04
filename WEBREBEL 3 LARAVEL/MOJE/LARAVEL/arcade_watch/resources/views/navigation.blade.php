<nav class="navigation" role="navigation" aria-label="main navigation">

    {{-- LOGIN/REGISTER LINKS --}}
    @guest
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif

    @endguest

    @auth
        {{-- Logged in user --}}
        <a href="/users/{{ auth()->user()->id }}">
            @<strong>{{ auth()->user()->name }}</strong>
        </a>

        {{-- Logout link --}}

      
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
      

    @endauth

</nav>
