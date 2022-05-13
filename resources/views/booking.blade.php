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
            <div class="alert alert-danger d-none mt-2" id="errorMsg" role="alert">
                Something went wrong!
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!--LEFT SIDE -->
                    <div class="col-lg" style="background-color:#F4EFEB">
                        <h1 class="mb-1 py-5 ml-5 pl-5 display-3 font-weight-bold"> Desk Reservation</h1>
                        <form class="ml-5 pl-5 mr-5 pr-5 mt-5 pt-5 mb-5 pb-5">
                            <div class="row mb-5 pb-5">
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
                                    <label for="location">Select desk location:</label>
                                    <select id="location" name="location" class="form-control rounded border border-dark">
                                        <option selected disabled>Choose an available desk...</option>
                                        <optgroup label="A desk-area">
                                            <option>A1</option>
                                            <option>A2</option>
                                            <option>A3</option>
                                            <option>A4</option>
                                        </optgroup>
                                        <optgroup label="B desk-area">
                                            <option>B1</option>
                                            <option>B2</option>
                                            <option>B3</option>
                                            <option>B4</option>
                                        </optgroup>
                                        <optgroup label="C desk-area">
                                            <option>C1</option>
                                            <option>C2</option>
                                            <option>C3</option>
                                            <option>C4</option>
                                        </optgroup>
                                        <optgroup label="D desk-area">
                                            <option>D1</option>
                                            <option>D2</option>
                                            <option>D3</option>
                                            <option>D4</option>
                                        </optgroup>
                                        <optgroup label="E desk-area">
                                            <option>E1</option>
                                            <option>E2</option>
                                            <option>E3</option>
                                            <option>E4</option>
                                        </optgroup>
                                        <optgroup label="F desk-area">
                                            <option>F1</option>
                                            <option>F2</option>
                                            <option>F3</option>
                                            <option>F4</option>
                                        </optgroup>
                                        <optgroup label="G desk-area">
                                            <option>G1</option>
                                            <option>G2</option>
                                            <option>G3</option>
                                            <option>G4</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex pt-5 mt-5">
                                <p class="opacity-50 my-auto font-italic mr-4">Due to strict implementation of health guidelines and safety protocols,<br> some seats may currently be unavailable for reservation.</p>

                                <div class="ml-auto my-auto">
                                    <button type="button" class="btn btn-lg btn-warning text-white" id="reserveDesk">Reserve Desk</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--RIGHT SIDE -->
                    <div class="col-lg-6 text-center mt-5 pt-5">
                        <div class="container">
                            <div class="w-150 h-150">
                                <img src="{{ asset('images/map.png') }}" class="my-5" alt="Responsive image">
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