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
        <button type="button" class="cta">Write</button>
      </a>
      <a href="/logout">
        <button type="button" class="cta">Log Out</button>
      </a>
      @else
      <a href="/login">
        <button type="button" class="cta">Write</button>
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
    <a href="Article.html">
      <div class="main-box-left">
        <img
          src="https://digitalhub.fifa.com/transform/b817ecc7-f044-45b8-8f67-a084a5d10e39/Argentina-v-France-Final-FIFA-World-Cup-Qatar-2022?io=transform:fill,height:868,width:1536&quality=100"
          alt="" />
        <div class="left-text">
          <a href="#">Lorem ipsum dolor sit amet.</a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus nam officia fugit repudiandae natus. Libero!
          </p>
        </div>
      </div>
    </a>

    <!-- Rigth Box -->
    <div class="right-box-direction">
      <!-- Top -->
      <a href="Article.html">
        <div class="main-box-right mt-0">
          <img src="{{ asset('image/properti/Walpaper.jpg') }}" alt="" />
          <div class="right-text">
            <a href="">Lorem ipsum dolor sit amet.</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptates, fuga.
            </p>
          </div>
        </div>
      </a>

      <!-- Bottom -->
      <a href="Article.html">
        <div class="main-box-right">
          <img src="{{ asset('image/properti/Walpaper.jpg') }}" alt="" />
          <div class="right-text">
            <a href="">Lorem ipsum dolor sit amet.</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptates, fuga.
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- Seacrh Button -->
  <div class="text-center m-4 d-flex justify-content-center">
    <a style="text-decoration: none" href="Seacrh.html">
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
    <a href="GetToKnow.html" class="text-decoration-none">
      <h1>Get To Know Know<span>Pedia.</span></h1>
    </a>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa ad facere
      iste nostrum consectetur nesciunt commodi velit perferendis assumenda?
      Quam eius sequi assumenda iure, alias necessitatibus ducimus quasi
      labore vero quaerat neque illo quas tempore laboriosam, voluptates et
      saepe magni eligendi dicta totam. Accusantium possimus aliquam vel porro
      sequi placeat fuga, a in totam! Unde facilis possimus officiis in
      nesciunt dignissimos maxime temporibus laboriosam odio eligendi
      similique reprehenderit incidunt pariatur nulla ipsum, fugiat libero
      rerum?
    </p>
  </div>
  <!-- Daily Insight -->
  <div class="insight-image">
    <img src="{{asset('image/properti/DailyInsight.png')}}" alt="" />
  </div>

  <!-- Daily Insight Content -->
  <div class="box-daily d-flex flex-wrap">
    <!-- Contennt -->
    <a href="Article.html">
      <div class="daily-content mb-4">
        <img src="{{ asset('image/properti/Thumbnail.jpg') }}" alt="" />
        <div class="layer">
          <a href="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam,
            molestias itaque placeat explicabo ex maxime.</a>
        </div>
      </div>
    </a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>
<footer class="footer">
  <p class="m-0 fw-bold fs-3">KnowPedia.</p>
  <p style="text-align: center">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste perspiciatis
    necessitatibus itaque soluta eos, non amet. Possimus illum eum eaque cum,
    provident ratione molestias ad.
  </p>
  <div class="media-sosial" style="font-size: 20px">
    <a href=""><i class="fa-brands fa-square-facebook"></i></a>
    <a href=""><i class="fa-brands fa-square-twitter"></i></a>
    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
    <a href=""><i class="fa-solid fa-envelope"></i></a>
  </div>
</footer>

</html>