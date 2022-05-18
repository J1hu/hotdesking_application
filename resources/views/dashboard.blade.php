<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include('layouts.head')
</head>

<body>
    @include('layouts.homenavbar')
    <div class="container">

        <div class="alert alert-danger d-none mt-2" id="errorMsg" role="alert">
            Something went wrong!
        </div>

        <h1 class="text-left pt-5 display-4"><strong>Dashboard</strong></h2>
            <div>
                <h5 class="text-left pb-4">These are your bookings, <span class="pr-1" id="userName"></span>
                </h5>
            </div>
            <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="table-responsive" data-bs-interval="false" data-ride="carousel" data-pause="hover">
                <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Location</th>
                            <th scope="col">Cancellation</th>
                        </tr>
                    </thead>
                    <tbody id="userBookingList"></tbody>
                </table>
            </div>

            <div class="container pb-5 pt-5">
                <div class="row">
                    <div class="col-sm pb-3 pt-3 d-flex justify-content-center">
                        <div class="card" style="width: 18rem; border-radius: 15px; background: rgba(9, 9, 9, 0.8);">
                            <div class="card-body" style="color: #EA7101;">
                                <div class="d-flex justify-content-center">
                                    <img src="{{URL('images/reserved.png') }}" class="figure-img img-fluid rounded mt-4 ml-3 mb-4" width="66" height="59">
                                    <div class="col-sm mt-2">
                                        <h5 class="text-left align-center mt-3">Reserved</h5>
                                        <h1 class="text-left">+80</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm pb-3 pt-3 d-flex justify-content-center">
                        <div class="card" style="width: 18rem; border-radius: 15px; background: rgba(9, 9, 9, 0.8);">
                            <div class="card-body" style="color: #EA7101;">
                                <div class="d-flex justify-content-center">
                                    <img src="{{URL('images/available.png') }}" class="figure-img img-fluid rounded mt-4 ml-3 mb-4" width="66" height="59">
                                    <div class="col-sm mt-2">
                                        <h5 class="text-left align-center mt-3">Available</h5>
                                        <h1 class="text-left">+56</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.scripts')
                </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>