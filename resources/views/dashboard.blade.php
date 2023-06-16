<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto&display=swap"
    rel="stylesheet" />
  <!-- Icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Font Awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <a class="logo fw-bold" href="Dashboard.html">Know<span style="color: #ef8c33">Pedia.</span>
    </a>
    <div>
      @if (Auth::check())
      <a href="/profile">
        <button type="button" class="cta">Profile</button>
      </a>
      <a href="/logout">
        <button type="button" class="cta">Logout</button>
      </a>
      @else
      <a href="/login">
        <button type="button" class="cta">Login</button>
      </a>
      @endif
    </div>
  </nav>

  <!-- Welcome To KnowPedia -->
  <div class="container">
    <p>Welcome To KnowPedia.</p>
  </div>
  <!-- Main Article -->
  <div class="main-article">
    <h1>Main Article</h1>
  </div>

  <!-- Main Box -->
  <div class="main-box">
    <!-- Left Box -->
    <a href="{{ url("article/$first->id") }}">
      <div class="main-box-left">
        <img style="object-fit: cover" src="{{$first->thumbnail}}" alt="" />
        <div class="left-text">
          <a class="pt-5" href="{{ url("article/$first->id") }}">{{$first->title}}</a>
          <p>
            {{$first->description}}
          </p>
        </div>
      </div>
    </a>

    <!-- Rigth Box -->
    <a href="{{ url("article/$second->id") }}">
      <div class="main-box-left">
        <img style="object-fit: cover" src="{{$second->thumbnail}}" alt="" />
        <div class="left-text">
          <a class="pt-5" href="{{ url("article/$second->id") }}">{{$second->title}}</a>
          <p>
            {{$second->description}}
          </p>
        </div>
      </div>
    </a>
  </div>

  <!-- Seacrh Button -->
  <div class="text-center m-4 d-flex justify-content-center">
    <a style="text-decoration: none" href="{{url("/searching")}}">
      <button class="d-flex" id="search">
        <p class="m-0 me-2" style="font-size: 20px">
          find something you like to read
        </p>
        <span class="material-symbols-outlined pt-1" style="font-size: 20px">
          search
        </span>
      </button>
    </a>
  </div>

  <!-- Get To Know -->
  <div class="get-to-know">
    <a href="{{url('/gtk')}}" class="text-decoration-none">
      <h1>Get To Know Know<span>Pedia.</span></h1>
    </a>
    <p>
      KnowPedia is a web platform for sharing information globally. It provides easy access to reliable knowledge,
      encourages collaboration, and expands understanding on diverse topics.
    </p>
  </div>
  <!-- Daily Insight -->
  <div class="insight-image">
    <img src="{{asset('image/properti/DailyInsight.png')}}" alt="" />
  </div>

  <!-- Daily Insight Content -->
  <div class="box-daily d-flex flex-wrap" style="margin-left: 15%; margin-right:15%;">
    <!-- Contennt -->
    @php
    $count = 0;
    @endphp
    @foreach ($articles as $article)
    @if ($count < 4) <a href="{{ url("article/$article->id") }}">
      <div class="daily-content mb-4">
        <img style="object-fit: cover" src="{{$article->thumbnail}}" alt="" />
        <div class="layer">
          <a href="">
            {{$article->title}}</a>
        </div>
      </div>
      </a>
      @php
      $count++;
      @endphp
      @endif
      @endforeach

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>
<footer class="footer">
  <p class="m-0 fw-bold fs-3">KnowPedia.</p>
  <p style="text-align: center">
    "Awaken your curiosity with the most relevant and up-to-date information"
  </p>
  <div class="media-sosial" style="font-size: 20px">
    <a href=""><i class="fa-brands fa-square-facebook"></i></a>
    <a href=""><i class="fa-brands fa-square-twitter"></i></a>
    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
    <a href=""><i class="fa-solid fa-envelope"></i></a>
  </div>
</footer>

</html>