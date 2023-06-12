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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <script src="js/signup.js"></script>
  <div class="login-bg">
    <div class="login-card">
      <form class="form" method="POST" action="/login">
        @csrf

        <a class="logo" href="Dashboard.html">Know<span style="color: #ef8c33">Pedia.</span>
        </a>
        @if (session()->has('error_message'))
        <div style="background-color: red">
          {{session()->get('error_message')}}
        </div>
        @endif
        <div class="text-input-container">
          <label>E-mail</label>
          <input name="email" class="text-input" type="email" id="email" placeholder="chris@mail.com" required />
        </div>
        <div class="text-input-container">
          <label>Password</label>
          <input name="password" class="text-input" type="password" id="password" placeholder="Password" required />
        </div>
        <div class="dont-have-account">
          <p>Don't have an account?</p>
          <a href="/register">Sign Up</a>
        </div>
        <button href="" class="cta-button" type="submit">Log In</button>
      </form>
      <!-- dont have an account -->
    </div>
  </div>
</body>

</html>