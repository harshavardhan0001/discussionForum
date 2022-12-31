<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discussion Forum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .flex-center {
                margin: 2em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container top-left links">
                    <h1><b>Discussion Forum</b></h1>
                    <h2 style="text-align:center"><b>Discussions</b></h2>
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">-</div>
                    <div class="col-md-2">
                        <a href="#" style="text-align:right">Add new Answer</a>
                    </div>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="container">
                <main class="bd-content" role="main">
                    <div class= "posts card card-body bg-light">
                        <a href="/posts/view/1">
                            <h3 class="bd-title" id="content">Discussion 1 title</h3>
                        </a>
                        
                        <p class="bd-lead">Discussion 1 description, Discussion 1 description  Discussion 1 description</p>
                        <div class="d-inline-flex ai-center"><a>Harsha, 30-12-2022 08:46AM</a></div>
                        <button class="btn btn-sm float-right">Join Discussion</button>
                    </div>
                    <br>
                    <div class= "posts card card-body bg-light">
                        <a href="/posts/view/2">
                            <h3 class="bd-title" id="content">Discussion 2 title</h3>
                        </a>
                        <p class="bd-lead">Discussion 2 description  title Discussion 2 title Discussion 2 title</p>
                        <div class="d-inline-flex ai-center"><a>Harsha, 31-12-2022 12:12PM</a></div>
                        <button class="btn btn-sm float-right">Join Discussion</button>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
