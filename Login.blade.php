<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="{{url('/css/style1.css')}}">        <!--Add your CSS file link-->
    </head>
    <body >
       <div class="main-wrap">
           <div class="form-wrap">
               <h1>LOGIN <span></span></h1><br>
               {{-- <h6>Welcome to Wavefire Coding</h6> --}}
               <form class="form" action="{{url('Login-user')}}" method="POST">
                @if (Session::has('success'))
                {{Session::get('success')}}
                @endif
                @if (Session::has('failed'))
                {{Session::get('failed')}}
                @endif
                @csrf
                   <input type="email" name="email" id="email" placeholder="Email">
                   <span>
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                    </br>
                   <input type="password" name="Password" id="Password" placeholder="Password">
                   <span>
                    @error('Password')
                        {{$message}}
                    @enderror
                </span>
                    </br><br>

                   <button type="submit" class="form-btn">LOGIN</button>
               </form>
               <span class="sign-up-with">Already have an Account <a href="/Signup" class="login">Sign Up</a></span>
               <span class="sign-up-with">Are you Admin <a href="/Admin" class="login">Admin</a></span>
           </div>
       </div>
    </body>
</html>
