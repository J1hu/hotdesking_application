<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>

    @include('layouts.head')
</head>

<body>
    <div class="container my-5 px-5 py-5" style="background-color:#F4EFEB">
        <h1 class="mb-1 pb-4 font-weight-bold">Register User</h1>
        <div class="form-group col-md-5">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control rounded border border-dark" id="firstname" placeholder="First Name">
        </div>
        <div class="form-group col-md-5">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control rounded border border-dark" id="lastname" placeholder="Last Name">
        </div>
        <div class="form-group col-md-5">
            <label for="email">Email</label>
            <input type="text" class="form-control rounded border border-dark" id="email" placeholder="Email">
        </div>
        <div class="form-group col-md-5">
            <label for="password">Password</label>
            <input type="text" class="form-control rounded border border-dark" id="password" placeholder="Password">
        </div>

        <div class="justify-content-center pt-4 col-md-5">
            <button type="button" class="btn btn-lg btn-warning text-white btn-block" id="saveUser">Save</button>
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>