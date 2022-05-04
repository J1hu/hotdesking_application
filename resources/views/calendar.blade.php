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
    <div class="container pb-5">
        <h1 class="text-left pt-5 pb-5 display-4"><b>Calendar</b></h2>
            <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-ride="carousel" data-pause="hover">
                <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Chair #1</th>
                            <th scope="col">Chair #2</th>
                            <th scope="col">Chair #3</th>
                            <th scope="col">Chair #4</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
</body>

@include('layouts.scripts')

</html>