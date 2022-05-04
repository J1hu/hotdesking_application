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
        @include('layouts.navbar')
        <main class="container">

            <div class="m-3" style="background-color:#F4EFEB; border-radius:25px;">
                <div class="row m-4">
                    <div class="col mt-4">
                        <p class="text-left pt-5 mt-5">User friendly workspace scheduling software</p>
                        <h1 class="text-left pb-5 display-4"><strong>#GetThingsDone</strong></h1>
                        <p>Hot Desk ensures a worthy service that allows organizations to automate booking tasks hassle free.</p>
                    </div>
                    <div class="col">
                        <img src="{{URL('images/workspace.png') }}" width="550" height="450">
                    </div>
                </div>
            </div>

            <div class="pt-3">
                <h2 class="text-center pb-5 display-4"><strong>E-Machine</strong></h2>
                <div class="text-center pb-5 mb-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
                </div>
            </div>

            <div class="pt-3 pb-3" style="background-color:#F4EFEB; border-radius:25px;">
                <h2 class="text-center pb-5 display-4"><strong>Booking Status</strong></h2>
                <div class="row">
                    <div class="col text-center">
                        <h2>14</h2>
                        <h3><strong>Occupied</strong></h3>
                    </div>
                    <div class="col text-center display-5">
                        <h2>80</h2>
                        <h3><strong>Reserved</strong></h3>
                    </div>
                    <div class="col text-center display-5">
                        <h2>56</h2>
                        <h3><strong>Available</strong></h3>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-center pb-5 pt-5 display-4" id="features"><strong>Features</strong></h2>
                <div>
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="{{URL('images/booking.png') }}" width="500" height="300">
                            </div>
                            <div class="col">
                                <h3 class="text-center pt-5">Booking</h3>
                                <p>Desk reservation made easy through hot desk software, with a simple and intuitive user interface for work scheduling, you cannow have a colaborative and ideal workplace in the organization.</p>
                                <li>Effortless reservation and booking depends on your preferred day and time.</li>
                                <li>Flexible changes into your work calendar.</li>
                                <li>Easily book and reserve desks with an interactive map.</li>
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-center pt-5">Dashboard View</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
                            </div>
                            <div class="col pt-5 d-flex justify-content-center">
                                <img src="{{URL('images/dashboard.png')}} " width="372" height="372">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5 mt-5">
                        <div class="row">
                            <div class="col d-flex justify-content-center pb-5">
                                <img src="{{URL('images/map.png')}}" width="500" height="300">
                            </div>
                            <div class="col">
                                <h3 class="text-center mb-4 pt-4">Office Map & Desk Locations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col ">
                                <h3 class="text-center mb-4 pt-5">Work Calendar</h3>
                                <p>Build to operate the organization’s activities with more effective and efficient to boost productivity within the company. </p>
                                <li>Easily back track all the activities done in the records.</li>
                                <li>Hassle-free management with simple and easy to use set-up.</li>
                            </div>
                            <div class="col pt-5 d-flex justify-content-center">
                                <img src="{{URL('images/calendar.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5 pb-5 mt-5">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="{{URL('images/help.png')}}" width="500" height="270">
                            </div>
                            <div class="col pb-5">
                                <h3 class="text-center mb-4 pt-5 d-flex justify-content-center">Help & Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel est sed metus commodo vehicula. Pellentesque sed massaaccumsan, dapibus augue ac, tincidunt lorem. Nam tincidunt sem sed luctus auctor. Praesent felis felis, maximus nec scelerisque </p>
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