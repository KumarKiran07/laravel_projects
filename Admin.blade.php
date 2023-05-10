<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="{{url('/css/style1.css')}}">        <!--Add your CSS file link-->
    </head>
    <body >
       <div class="main-wrap">
           <div class="form-wrap">
               <h1>Admin <span></span></h1><br><br>
               {{-- <h6>Welcome to Wavefire Coding</h6> --}}
               <form class="form" action="{{url('Admin-penal')}}" method="POST">
                @if (Session::has('success'))
                {{Session::has('success')}}
                @endif
                @if (Session::has('fails'))
                {{Session::has('fails')}}
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
                   <br><br>
               </form>
           </div>
       </div>
    </body>
</html>
