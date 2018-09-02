<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link href="{{ asset('/css/my.css') }}" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <header>
        <div class="section">
            <div class="container">
                <div class="header-top">
                    <h1>XCast</h1>
                    <a href="#">Sign In</a>
                </div>
                <nav>
                    <a href="#">Catalog</a>
                    <a href="#">Series</a>
                    <a href="#">Podcast</a>
                    <a href="#">Discussion</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="box">Some Content</div>
                </div>
                <div class="col">
                    <div class="box">Some Content</div>
                </div>
                <div class="col">
                    <div class="box">Some Content</div>
                </div>
                <div class="col">
                    <div class="box">Some Content</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
