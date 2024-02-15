@extends('layout.layout')

@section('Account')
    <div class="left-content">
    </div>
    <div class="big-logo">
      <img src="{{asset('images/logo2.png')}}"  style="width: 100%; height: 100%;"   alt="">
    </div>
    <div class="containers">
      <input type="checkbox" id="check">
      <div class="login-form">
        <div class="logo">
          <img src="{{asset('images/logo-transparent-png.png')}}" alt="">
        </div>
        <div>
          <form action="" class="form">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
              <a href="" class="pass-forgot">Forgot your password?</a>
            </div>
            <div class="form-floating">
              <button><span>Login</span> <i class="fa fa-check"></i></button>
           </div>   
          </form>
          <div class="signup">
            <span class="signup">Don't have an account?
                <label for="check">Signup</label>
            </span>
        </div>
        </div>
      </div>
      <div class="registration-form">
        <h2>Registration</h2>
        <div>
          <form method="POST" action="{{route('register')}}" class="form">
            @csrf
            @method('post')
            <div class="d-flex">
                <div class="form-floating mb-3 flex-grow-1">
                    <input type="text" class="form-control" id="floatingInput1" name="first_name" placeholder="ex.name@gmail.com">
                    <label for="floatingInput1">First Name</label>
                    @error('first_name')
                      <p style="font-size: 10px; color: red;margin:0; padding:0;">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="form-floating mb-3 ms-2 flex-grow-0" style="width: 30%;">
                    <input type="text" class="form-control" id="floatingInput2" name="middle_name" placeholder="ex.name@gmail.com">
                    <label for="floatingInput2">Mi.</label>
                    @error('middle_name')
                      <p style="font-size: 10px; color: red;margin:0; padding:0;">{{ $message }}</p>
                    @enderror
                </div>
            </div>          
            <div class="d-flex">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="last_name" placeholder="ex.name@gmail.com" >
                <label for="floatingInput1">Last Name</label>
                @error('last_name')
                  <p style="font-size: 10px; color: red; margin:0; padding:0;">{{ $message }}</p>
                @enderror
              </div>
            </div>          
            <div class="d-flex">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput1" name="email" placeholder="ex.name@gmail.com">
                <label for="floatingInput1">Email</label>
                @error('email')
                  <p style="font-size: 10px; color: red;margin:0; padding:0;">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="d-flex">
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                  <p style="font-size: 10px; color: red;margin:0; padding:0;">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <input type="text" name="status" value="1" hidden>
            <div class="d-flex">
              <div class="form-floating mb-3">
                <button><span>Register</span> <i class="fa fa-check"></i></button>
              </div> 
            </div>     
          </form>
          <div class="signup">
            <span class="signup">Already have an account?
                <label for="check">Login</label>
            </span>
        </div>
        </div>
      </div>
    </div>
@endsection