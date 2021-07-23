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
    <div class="forgot-bg">

        <div class="forgot-main">
            <div class="desaexpress-logo">
                <a href=""><img src="{{ asset("assets/public/1x/desaexpress-logo.png") }}" alt=""></a>
            </div>
            <h1>Forgot Password</h1>
            @if (session('status'))
                <div class="bg-success text-light text-center p-2 rounded">
                    <p class="mb-0">{{ session('status') }}</p>
                </div>
            @endif
            <form action="{{ route("forgot-password.post") }}" method="post">
                @csrf
            <div class="forgot-content d-flex">
                <div class="email-input">
                    <label class="mb-3" for="">Email</label>
                    <input class="col-lg-12 mb-3" type="email" name="email" >
                </div>
            </div>
            <div class="forgot-btn d-flex">
                <button class="btn btn-lg mb-4 mt-3">Send</button>
            </div>
        </form>
        </div>
    </div>
</body>

</html>
