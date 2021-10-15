<nav class="navbar navbar-expand-lg navbar-light bg-black" id="barcolor">
    <div class="container-fluid">
        <div class="logo" style="padding: 20px"> <a><img src="/img/chef.png" alt="img-error" width="60" height="60"></a> </div>
        <a class="navbar-brand" href="/" style="padding-right: 70px;font-size:40px">RecipeMaster</a>
        <button name="navtog" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a name="home" class="nav-link active" aria-current="page" href="/" style="font-size: 25px">Home</a>
                </li>
                <li class="nav-item">
                    <a name="about" class="nav-link active" aria-current="page" href="/about" style="font-size: 25px">About</a>
                </li>
                <li class="nav-item">
                    <a name="recipe" class="nav-link active" aria-current="page" href="/recipe/food" style="font-size: 25px">Recipe</a>
                </li>
                @if (!(Auth::guest()))
                    <li>
                        <a class="nav-link active" style="font-size: 25px">Hello, {{Auth::user()->name}}</a>
                    </li> 
                @endif
            </ul>
        </div>
        <div style="float: right; padding-right: 20px">
            <ul class="navbar-nav">
                @if (Auth::guest())
                    @include('auth.login')
                    @include('auth.register')
                @else  
                <li>
                    
                    <a class="nav-link active" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    aria-current="page" style="font-size: 25px">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>      
                @endif
            </ul>
        </div>
    </div>
</nav>