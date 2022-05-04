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
        @include('layouts.homenavbar')
        <main>
            <div class="container-fluid">
                <div class="row">

                    <!--LEFT SIDE -->
                    <div class="col-lg-8" style="background-color:#F4EFEB">
                        <h1 class="mb-1 py-5 ml-5 pl-5"> Desk Reservation</h1>
                        <form class="ml-5 pl-5 mr-5 pr-5">
                            <div class="row">
                                <div class="form-group col-md-6 ">
                                    <label for="inputLocation4">Select desk location:</label>
                                    <input type="text" class="form-control rounded border border-dark" id="inputText4" list="desks" placeholder="Choose an available desk">
                                    <datalist id="desks">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="A1">
                                        <option value="B1">
                                        <option value="B1">
                                        <option value="B1">
                                        <option value="B1">
                                        <option value="B1">
                                    </datalist>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputDate4">Select date:</label>
                                    <input type="date" class="form-control rounded border border-dark" id="inputPassword4">
                                </div>
                            </div>
                            <!--<div class="row mb-2 pb-2">
                                    <b-form-timepicker class="col-md-6">
                                        <label for="inputTime4">Select start time:</label>
                                        <input type="time" class="form-control rounded border border-dark" id="inputTime4">
                                    </b-form-timepicker>
                                    <b-form-timepicker class="col-md-6">
                                        <label for="inputPassword4">Select end time:</label>
                                        <input type="time" class="form-control rounded border border-dark" id="inputTime4">
                                    </b-form-timepicker>
                                </div>-->
                            <div class="d-flex pt-4">
                                <p class="opacity-50 my-auto font-italic mr-4">Due to strict implementation of health guidelines and safety protocols,<br> some seats may currently be unavailable for reservation.</p>
                                <div class="ml-auto my-auto">
                                    <button type="submit" class="btn btn-lg btn-warning text-white">Reserve desk</button>
                                </div>
                            </div>
                        </form>
                        <div class="mx-5 px-5 my-4 py-4">
                            <img src="{{ asset('images/calendar-view.png') }}" class="rounded mx-auto d-block w-75 h-75" alt="Responsive image">
                        </div>
                    </div>

                    <!--RIGHT SIDE -->
                    <div class="col-lg-4">
                        <div class="container">
                            <div class="w-150 h-150">
                                <img src="{{ asset('images/map-90.png') }}" class="d-block mx-auto my-5" alt="Responsive image">
                            </div>
                            <h2 class="font-weight-bold text-right pb-3">DESK LOCATIONS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
</body>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>