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

<body style="background-color: #F4EFEB;">
    <div id="app">
        @include('layouts.simplenav')
        <main>
            <div class="container">
                <div class="mask justify-content-center mb-5 py-5">
                    <div class="container">
                        <h1 class="col text-center">Help Center</h1>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto ">
                                <div class="p-2">
                                    <div class="input-group input-group-lg rounded border border-dark">
                                        <input type="text" class="form-control form-control-lg rounded" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" />
                                        <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3"> <br>
                                <p class="opacity-50 text-center"> Get started in using our website through our help center. If you need <br> any help, feel free to contact our support team.</p>
                            </div>
                            <div class="card-deck pt-5">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="{{ asset('images/user-guide.png') }}" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">User Guide</h5>
                                        <p class="card-text text-center">Our Hotdesking provide a guide for the user. If you need guide how to use the system just click the view</p>
                                        <div class="text-center">
                                            <a href="{{ url('userguide') }}" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="{{ asset('images/faqs.png') }}" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">FAQs</h5>
                                        <p class="card-text text-center">Our Hotdesking provide information on frequent questions or concern. If you need answer for your questions, just click the view</p>
                                        <div class="text-center">
                                            <a href="{{ url('faqs') }}" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="{{ asset('images/privacy.png') }}" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">Privacy Disclaimer</h5>
                                        <p class="card-text text-center">Our Hotdesking provide privacy statement to have a Data Privacy for the user. To know the details just click the view</p>
                                        <div class="text-center">
                                            <a href="{{ url('privacy') }}" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
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