<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.head')
</head>

<body>
    <div id="app">
        @include('layouts.homenavbar')
        <main>
            <div class="container-fluid">
                <div class="row">
                    <!--LEFT SIDE -->
                    <div class="col-lg" style="background-color:#F4EFEB">
                        <h1 class="mb-1 py-5 ml-5 pl-5 display-3 font-weight-bold"> Desk Reservation</h1>
                        <form class="ml-5 pl-5 mr-5 pr-5 mt-5 pt-5">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">Title</label>
                                    <input type="text" class="form-control rounded border border-dark" id="title" placeholder="Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control rounded border border-dark" id="description" placeholder="Description">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Select date:</label>
                                    <input type="date" class="form-control rounded border border-dark" id="date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control rounded border border-dark" id="location" placeholder="Location">
                                </div>
                            </div>
                            <div class="d-flex pt-4">
                                <p class="opacity-50 my-auto font-italic mr-4">Due to strict implementation of health guidelines and safety protocols,<br> some seats may currently be unavailable for reservation.</p>

                                <div class="ml-auto my-auto">
                                    <button type="button" class="btn btn-lg btn-warning text-white" id="reserveDesk">Reserve Desk</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--RIGHT SIDE -->
                    <div class="col-lg-6 text-center">
                        <div class="container">
                            <div class="w-150 h-150">
                                <img src="{{ asset('images/map-90.png') }}" class="my-5" alt="Responsive image">
                            </div>
                            <h2 class="font-weight-bold text-center pb-3">DESK LOCATIONS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>