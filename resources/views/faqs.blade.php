<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        @include('layouts.simplenav')
        <main class="mb-5 py-5">
            <div class="container">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Frequently Asked Questions</h1>
                </div>
                <div class="list-group w-100 mt-2">
                    <a href="#shortExampleAnswer1collapse" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Where is Gamora?</h5>
                        </div>
                        <p class="mb-1">
                            Short & concise version of the answer.
                        </p>
                        <small data-toggle="collapse" data-target="#shortExampleAnswer1collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer1collapse">
                            Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                            high
                            life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident.
                        </div>
                    </a>
                    <a href="#shortExampleAnswer2collapse" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Who is Gamora?</h5>
                        </div>
                        <p class="mb-1">
                            Short & concise version of the answer.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer2collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer2collapse">
                            Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                            high
                            life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident.
                        </div>
                    </a>
                    <a href="#shortExampleAnswer3collapse" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Why is Gamora?</h5>
                        </div>
                        <p class="mb-1">
                            Short & concise version of the answer.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer3collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer3collapse">
                            Detailed and comprehensive answer goes here. pariatur cliche reprehenderit, enim eiusmod
                            high
                            life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident.
                        </div>
                    </a>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>