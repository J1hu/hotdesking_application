<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.head')
</head>

<body>
    @include('layouts.homenavbar')
    <div class="container pb-5">
        <h1 class="text-left pt-5 display-4"><b>All Bookings</b></h2>
            <h4 class="text-left pb-4">These are all the employee's bookings</h4>
            <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-ride="carousel" data-pause="hover">
                <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody id="bookingList">
                    </tbody>
                </table>

                @include('layouts.scripts')
            </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


</html>