
    <body>
        <div class="container jumbotron">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <center>
            <strong>
              <h1 style="font-size:50px;padding-top:250px"> WELCOME TO LARAVEL..</h1>
            </strong>   
            </center>   
            </div>
        </div>
    </body>

