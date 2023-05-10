<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="{{ url('/css/style1.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <div class="main-wrap">
        <div class="form-wrap">
            <h1>SIGN <span>UP</span></h1>
            <br><br>
            <script>

            </script>
            <form class="form" method="POST" action="{{ url('Sign-up') }}">
                <span>
                    @if (Session::has('success'))
                        {{ Session::get('success') }}
                    @endif
                    @if (Session::has('failed'))
                        {{ Session::has('failed') }}
                    @endif
                </span>
                @csrf

                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                    required>
                </br>
                <span>
                    @error('Username')
                        {{ $message }}
                    @enderror
                </span>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                    required>
                </br>
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <input type="password" name="Password" id="Password" placeholder="Password"
                    value="{{ old('Password') }}" required>
                </br><br>
                <span>
                    @error('Password')
                        {{ $message }}
                    @enderror
                </span>

                <button type="submit" class="form-btn">SIGN UP</button>
            </form>
            <span class="sign-up-with">Already Account <a href="/Login" class="login">Login</a></span>
        </div>
    </div>
</body>

</html>
