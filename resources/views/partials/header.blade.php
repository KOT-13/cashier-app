<div class="navbar navbar-inverse bg-dark">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">Animalgram</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/subscribe">Subscribe</a></li>

            @if(Auth::user())
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link">Logout</button>
                    </form></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</div>