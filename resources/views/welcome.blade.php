<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Card Design</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <link href="{{ asset('/css/my.css') }}" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="flex items-center justify-center">
    <div class="card flex rounded">
        {{-- Left Side --}}
        <div class="card-left flex justify-between flex-col rounded p-8 items-center text-center text-white">
            <a href="#" class="card-skill-button no-underline rounded-full py-1 px-6 text-inherit">PHP</a>
            <img src="{{ asset('/php.jpg') }}" alt="" height="100px !important" width="118px;">
            <span class="card-difficulty text-xs">Intermediate Difficulty</span>
        </div>
        {{-- RIght Side --}}
        <div class="card-right flex flex-col text-grey-darker p-4">
            <h3 class="card-title text-black font-light text-3xl mb-6"><a href="#" class="no-underline text-inherit">Testing
                    Jorgon</a></h3>
            <p class="card-excerpt flex-1 text-sm">
                There's no two ways about it: terminology in testing world is incridibly overwhelning.
                Let's fix that! Bit by bit, we will break all of this confusing concepts down as best as we can.
            </p>
            <div class="card-meta flex">
                <div class="flex items-center mr-4">
                    <img src="{{ asset('/book.png') }}" class="mr-2">
                    5 Lessons
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('/time.png') }}" class="mr-2">
                    53:10 min
                </div>
            </div>
        </div>
    </div>

</body>

</html>
