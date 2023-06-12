<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KnowPedia - Login</title>
  <link rel="stylesheet" href="{{asset('css/login.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800;900&display=swap"
    rel="stylesheet" />
  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
</head>

<body>
  <script src="js/signup.js"></script>
  <div class="login-bg">
    <div class="login-card">
      <form class="form" method="POST" action="/register">
        @csrf
        <a class="logo" href="Dashboard.html">Know<span style="color: #ef8c33">Pedia.</span>
        </a>
        <div class="text-input-container">
          <label>Name</label>
          <input class="text-input" type="text" id="name" name="name" placeholder="Christian"  />
          @if ($errors->has('name'))
          <div style="background-color: red">
            {{$errors->first('name')}}
          </div>
          @endif
        </div>
        <div class="text-input-container">
          <label>E-mail</label>
          <input class="text-input" type="email" name="email" id="email" placeholder="chris@mail.com"  />
          @if ($errors->has('email'))
          <div style="background-color: red">
            {{$errors->first('email')}}
          </div>
          @endif
        </div>
        <div class="text-input-container">
          <label>Password</label>
          <input class="text-input" type="password" name="password" id="password" placeholder="Password"  />
          @if ($errors->has('password'))
          <div style="background-color: red">
            {{$errors->first('password')}}
          </div>
          @endif
        </div>
        <div class="text-input-container">
          <label>Confirm Password</label>
          <input class="text-input" type="password" name="password_confirmation" id="password" placeholder="Password"
             />
        </div>
        <button class="cta-button" type="submit" onclick="validation()">
          Sign Up
        </button>
      </form>
    </div>
  </div>
</body>

</html>