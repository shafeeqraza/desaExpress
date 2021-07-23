<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/public/style.css') }}">

    <title>Document</title>
</head>

<body>
    <div class="signup-bg">

        <div class="signup-main">
            <div class="desaexpress-logo">
                <a href=""><img src="{{ asset('assets/public/1x/desaexpress-logo.png') }}" alt=""></a>
            </div>
            <h1 class="mb-3">Sign Up</h1>
            <form action="{{ route('register.post') }}" method="post">
                @csrf
                <div class="signup-content d-flex">
                    <label class="mb-3" for="">Type</label>
                    <div class="type-input col-lg-12">
                        <select class="col-lg-12 mb-3" name="type" id="">
                            <option value="">Select type</option>
                            <option value="dispatcher" @if (@old('type') == 'dispatcher') selected @endif>Dispatcher</option>
                            <option value="driver" @if (@old('type') == 'driver') selected @endif>Driver</option>
                        </select>
                    </div>
                    @error('type')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="fullname-input">
                        <label class="mb-3 mt-3" for="">Full Name</label>
                        <input type="text" name="name" class="col-lg-12 mb-3" value="{{ @old('name') }}">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="email-input">
                        <label class="mb-3 mt-3" for="">Email Address</label>
                        <input type="email" name="email" class="col-lg-12 mb-3" type="email"
                            value="{{ @old('email') }}">
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="password-input">
                        <label class="mb-3 mt-3" for="">Password</label>
                        <input type="password" name="password" class="col-lg-12 mb-3" />
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="confirm-password-input">
                        <label class="mb-3 mt-3" for="">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="col-lg-12 mb-3">
                    </div>
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="signup-btn d-flex">
                    <button class="btn btn-lg mb-4 mt-3">Sign Up</button>
                    <label for="">Already have an account? <a href="{{ route('login') }}">Click Here</a> </label>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
