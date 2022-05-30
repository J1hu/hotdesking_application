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

<body style="background-color:#F4EFEB">
    <div id="app">
        @include('layouts.simplenav')
        <main class="mb-5 py-5">
            <div class="container" >
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Frequently Asked Questions</h1>
                </div>
                <div class="list-group w-100 mt-2">
                    <a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">What is E-machine Hot Desking?</h5>
                        </div>
                        <p class="mb-1">
                            E-machine is a web application that offers booking services.
                        </p>
                        <small data-toggle="collapse" data-target="#shortExampleAnswer1collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer1collapse">
                            It provides collaborative and innovative office space solutions for people to grow.
                            It is commonly defined as flexible, membership-based workspaces where various groups of freelancers,
                            remote workers, and other independent professionals collaborate in a shared, community setting.
                        </div>
                    </a>
                    <!--<a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Where is the company located?</h5>
                        </div>
                        <p class="mb-1">
                            E-machine is located in MacArthur Highway, Sampaloc, 2016 Apalit, Philippines.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer2collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>-->
                        <!-- Collapsed content -->
                        <!--<div class="collapse mt-3" id="shortExampleAnswer2collapse">
                            Due to pandemic protocols, on-site services will be limited.
                            Fortunately, we offer online services through our website and customer support team.
                        </div>
                    </a>-->
                    <a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Where to register account?</h5>
                        </div>
                        <p class="mb-1">
                            The admin will manage the registration.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer3collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer3collapse">
                            A verified employee would be given by the admin their email and password through their email which they will
                            use to login the site. After logging in, the user will now be able to access the dashboard and booking services.
                        </div>
                    </a>
                    <a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Is it available in mobile phones?</h5>
                        </div>
                        <p class="mb-1">
                            The E-machine hot desking is currently unavailable to mobile phone users.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer4collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer4collapse">
                            The E-machine dev team is currently planning to make it available in th future. We will further announce for
                            any updates in the near future.
                        </div>
                    </a>

                    <a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">What happens if a user does not log out of a Hot Desk device and a new user wants to log in?</h5>
                        </div>
                        <p class="mb-1">
                            If more than one user use only one device to access the hot desk, the current user will need to log out.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer5collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer5collapse">
                            The next user will not be able to access the next user's account unless the previous user log out. However, users can also try
                            to login in a different window.
                        </div>
                    </a>

                    <a href="javascript:void(0);" data-mdb-toggle="collapse" aria-expanded="false" aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Where to contact for site issues?</h5>
                        </div>
                        <p class="mb-1">
                            If the user encounters any bugs or issues while using the site, contact us through our designated customer support hotlines.
                        </p>
                        <small class="text-muted" data-toggle="collapse" data-target="#shortExampleAnswer6collapse" aria-expanded="true" aria-controls="collapseOne"><u>Learn more</u></small>
                        <!-- Collapsed content -->
                        <div class="collapse mt-3" id="shortExampleAnswer6collapse">
                            The following are the E-machine hot desk hotlines.

                            Phone: +639077046793

                            Email: e-machine.hotdesk@gmail.com

                            Website: www.e-machine.com

                            User can also interact with our facebook via livechat with our support team.
                            https://web.facebook.com/E-Machine-Hot-Desk-102697895774208
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