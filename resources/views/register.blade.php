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
    <div class="container mt-5 pl-5 pr-5">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Fist Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Password">
        </div>

        <div class="text-center justify-content-center">
            <button type="button" class="btn btn-primary" id="saveUser">Save</button>
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>