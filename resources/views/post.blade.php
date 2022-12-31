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
            <div class="top-left links">
                    <h1><b>Discussion Forum</b></h1>
                    <h2 style="text-align:center"><b>View Discussion</b></h2>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/') }}">Home</a>
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
            <div class="container">
                <main class="col-md-12" role="main">
                    <div class="PostDetails">
                        <div class= "posts">
                            <h2 class="bd-title" id="content">Discussion {{$post}} title</h2>
                            
                            <p class="bd-lead">Discussion {{$post}} description, Discussion {{$post}} description  Discussion {{$post}} description</p>
                            <div class="d-inline-flex ai-center"><a>Harsha, 30-12-2022 08:46AM</a></div>

                        </div>
                        <br>
                        <div class="card card-body bg-light">
                            <div class="comment-text  js-comment-text-and-form">
                                <div class="comment-body js-comment-edit-hide">
                                    
                                    <span class="comment-copy">here is Comment {{$post}} for Discussion {{$post}} </span>
                                </div>
                                <div class="d-inline-flex ai-center"><a>Calum , 4 hours ago</a></div>
                            </div>
                            <hr>

                            <div class="comment-text  js-comment-text-and-form">
                                <div class="comment-body js-comment-edit-hide">
                                    
                                    <span class="comment-copy">here is Comment 2 for Discussion {{$post}}</span>
                                </div>
                                <div class="d-inline-flex ai-center"><a>Halpin, 2 hours ago</a></div>
                            </div>
                            <hr>
                                <div class="comment-text  js-comment-text-and-form">
                                    <div class="comment-body js-comment-edit-hide">
                                        <textarea id="" cols="100" rows="2">Add new comment</textarea>
                                    </div>
                                    <button>Save</button>
                                </div>
                        </div>
                        <hr>

                        <br>
                    <span class="float-right"><a href="">Add new Post</a></span>
                    </div>
                    
                    <div class="PostDetails">
                        <div class= "posts">
                            <h2 class="bd-title" id="content">Post 1 title</h2>
                            
                            <p class="bd-lead">Post 1 for the Discussion {{$post}} post description, post detials for the Discussion {{$post}}</p>
                            <div class="d-inline-flex ai-center"><a>Harry, 31-12-2022 07:46AM</a></div>

                        </div>
                        <br>
                        <div class="card card-body bg-light">
                            <div class="comment-text  js-comment-text-and-form">
                                <div class="comment-body js-comment-edit-hide">
                                    
                                    <span class="comment-copy">here is Comment 1 for post  </span>
                                </div>
                                <div class="d-inline-flex ai-center"><a>Calum , 1 hours ago</a></div>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
