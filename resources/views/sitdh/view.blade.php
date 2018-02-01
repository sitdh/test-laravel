<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sitdhibong Laokok</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel 
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Price</td>
                            <td>Publish Date</td>
                            <td>Website</td>
                        </tr>
                    </thead>

                    <tbody>
                      <form action="/sitdh/{{ $book->id }}/edit" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <tr>
                            <td>
                                <input type="text" name="title" placeholder="Title" value="{{ $book->title }}">
                            </td>
                            <td>
                                <input type="text" name="author" placholder="Author" value="{{ $book->author }}">
                            </td>
                            <td>
                                <input type="text" name="price" placholder="Price" value="{{ $book->price }}">
                            </td>
                            <td>
                                <input type="text" name="publish_date" placholder="Publish date" value="{{ $book->publish_date }}">
                            </td>
                            <td>
                                <input type="text" name="website" placholder="Book website" value="{{ $book->website }}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"><input type="submit" value="ส่งข้อมูล"></td>
                        </tr>
                      </form>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>


