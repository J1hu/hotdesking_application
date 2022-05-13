<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include('layouts.head')

</head>

<body>
    <div id="app">
        @include('layouts.navbar')

        <div class="alert alert-danger d-none mt-2" id="errorMsg" role="alert">
            Something went wrong!
        </div>

        <main class="py-4" style="background-image:url(images/bg.png);  background-repeat: no-repeat;  background-size: cover; background-position: center;">
            <div class="container">
                <div class=" border-0 my-5">
                    <div class="card-body py-5 px-5 ">
                        <div class="container">
                            <div class="row justify-content-center ">
                                <div class="col-md-8">
                                    <div class="card mb py-5 px-5" style="background-color:#f4efeb;">
                                        <div class="card-body py-5 px-5">
                                            <div>
                                                <div class="d-flex justify-content-center">
                                                    <img src="{{URL('images/hot-desk-icon-white.png')}}" width="235" height="235">
                                                </div>
                                                <br>
                                                <div class="row mb-3 ">
                                                    <div class="col-md-6 offset-md-3">
                                                        <input id="email" placeholder="Email" type="email" class="form-control" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6 offset-md-3">
                                                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                                                    </div>
                                                </div>

                                                <div class="row mb-5">
                                                    <div class="col-md-6 text-center offset-md-3">
                                                        <button id="userLogin" type="submit" class="btn btn-warning mb-2 text-white">
                                                            Login
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('layouts.scripts')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


</html>