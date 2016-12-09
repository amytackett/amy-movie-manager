<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', config('adminlte.title'))</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 36px;
            }
            
            img {
                max-width: 600px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@yield('title', config('adminlte.title'))</div>
                <div><a href="/movies"><img src="https://www.publicdomainpictures.net/pictures/20000/velka/shegoat.jpg#.WEr5OmYT6hw.link" /></a></div>
            </div>
        </div>
    </body>
</html>
