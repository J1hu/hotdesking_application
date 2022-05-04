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

<body style="background-color: #FFFF;">
    <div id="app">
        @include('layouts.simplenav')
        <main class="mb-5 py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col mt-5">
                        <h3 class="ml-5 pl-5 font-weight-bold"> Get started with Hot Desk</h3>
                        <h1 class="ml-5 pl-5 text-warning display-2 font-weight-bold">User Guide</h1>
                        <div> <br>
                            <p class=" ml-5 pl-5"> Hot Desk is a web application for Hot Desking procedures and services. <br>
                                If you want to get started in using the website, you can use the guides below. <br> After learning how to use the website, you are now ready to use it.
                            </p>
                        </div>
                        <div class="mt-1 ml-5 pl-5 mr-5 pr-5">
                            <a class="btn btn-outline-warning" href="#text-guide" role="button">Step-by-step Guide</a>
                            <a class="btn btn-outline-warning active" href="#video-tutorial" role="button">Video Tutorial</a>
                        </div>
                    </div>

                    <div class="col">
                        <div class=" ml-5 pl-5 mr-5 pr-5">
                            <div class="w-450 h-500">
                                <img src="{{ asset('images/user.jpg') }}" class="" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second section -->
                <div class="m-3" style="background-color:#F4EFEB; border-radius:25px;" id="text-guide">
                    <div class="row m-4">
                        <div class="col">
                            <img src="{{URL('images/workspace.png') }}" width="550" height="450">
                        </div>
                        <div class="col mt-4">
                            <p class="text-left mt-5 text-warning display-2 font-weight-bold">Hot Desk</p>
                            <h1 class="text-left pb-5 display-3 font-weight-bold"><strong>Step-by-Step Guide</strong></h1>
                            <p>Start using the Hot Desk and never forget to set your schedules. Don't know how to use the site? <br>Worry no more! Here is our step-by-step guide for you
                                to follow and get started right away. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third section -->
            <div class="container">
                <!-- Side bar -->
                <!--account set up guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-5 text-warning"><strong>Setting up your account</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 1. Check email for user credentials</h5>
                        <p>Before you access the Hot Desk site, you will receive an email containing your user credentials.
                            After succesfully received the login credentials, you can now try to login to the site through the link provided in the email </p>
                        <img src="{{URL('images/emailnotif.png') }}" width="750" height="350" class="text-left">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 2. Proceed to login page</h5>
                        <p>Upon clicking the link, you will be redirected to the login page of the where you will enter the email and password provided in your email.</p>
                        <img src="{{URL('images/login.png') }}" width="750" height="350">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 3. Explore pages</h5>
                        <p>After login, you will be redirected to dashboard. After that, you can now use and explore.</p>
                        <img src="{{URL('images/dashboard.png') }}" width="750" height="400">
                    </div>
                </div>
                <!--Book a desk guide-->
                <div class="pt-3">
                    <h2 class="text-left pb-5 text-warning"><strong>How to reserve a desk?</strong></h2>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 1. Temporary unavailable</h5>
                        <p>This part is currently not available. Developers will make it possible to fix the issue in no time. Thank you for your kind consideration</p>
                        <img src="{{URL('images/unavailable.png') }}" width="750" height="350" class="text-left">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 2. Temporary unavailable</h5>
                        <p>This part is currently not available. Developers will make it possible to fix the issue in no time. Thank you for your kind consideration</p>
                        <img src="{{URL('images/unavailable.png') }}" width="750" height="350">
                    </div>
                    <div class="text-left pb-5 mb-3">
                        <h5 class="font-weight-bold">Step 3. Temporary unavailable</h5>
                        <p>This part is currently not available. Developers will make it possible to fix the issue in no time. Thank you for your kind consideration</p>
                        <img src="{{URL('images/unavailable.png') }}" width="750" height="400">
                    </div>
                </div>
                <div class="container" id="video-tutorial">
                    <div class="col mt-5 mb-5">
                        <h3 class="font-weight-bold">Get started a lot faster by watching the tutorial</h3>
                        <h1 class="text-warning display-3 font-weight-bold">Hot Desk Video Guide</h1>
                        <div> <br>
                            <p> Not fond of reading? We got your back!<br>
                                You can now learn how to use the hot desk through watching the video provided.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Video Tutorial -->
                <div class="container pb-5">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" width="860" height="484" src="https://www.youtube.com/embed/Ve4tF4Y_Fc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                    <br>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="card-header font-weight-bold">
                            User Feedback
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Thank you for your support.</h5>
                            <p class="card-text">Was this article helpful? Submit your feedback about the site for future improvements and fixes.</p>
                            <a class="btn btn-outline-warning active" href="https://tinyurl.com/2p82zkcc" role="button" target="_blank">Submit Feedback</a>
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