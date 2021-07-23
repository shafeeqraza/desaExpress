<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset("assets/public/style.css") }}">
    <title>Document</title>
</head>

<body>
    <div class="signin-bg">

        <div class="signin-main">
            <div class="desaexpress-logo">
                <a href=""><img src="{{ asset("assets/public/1x/desaexpress-logo.png") }}" alt=""></a>
            </div>
            <h1>Sign In</h1>
            <div class="signin-content d-flex">
                <div class="email-input">
                    <label class="mb-3" for="">Email</label>
                    <input class="col-lg-12 mb-3" type="email">
                </div>
                <div class="password-input">
                    <label class="mb-3 mt-3" for="password">Password</label>
                    <input type="password" class="col-lg-12 mb-3" id="password">
                </div>
                <a class="mb-3" href="{{ route("forgot-password") }}">Forgot Password?</a>
            </div>
            <div class="signin-btn d-flex">
                <button class="btn btn-lg mb-4 mt-3">Sign In</button>
                <label for="">Create an account? <a href="{{ route("register") }}">Click Here</a> </label>
            </div>
        </div>
    </div>
</body>

</html>
