<div style="margin-bottom: 1%;margin-left: 129px; width: 1082px;">
    <ul class="nav nav-pills">
        <li class="nav-item">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info" >Login</a>
                        <a href="{{ route('register') }}" class="btn btn-info">Register</a>
                    @endauth
                </div>
            @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tasks">To-do</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
</div>