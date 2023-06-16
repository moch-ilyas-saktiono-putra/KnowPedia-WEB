<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/search.css')}}" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <!-- Font Awsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <a class="logo fw-bold" href="Dashboard.html"
        >Know<span style="color: #ef8c33">Pedia.</span>
      </a>
      <div>
        <a href="Write.html">
          <button type="button" class="outline">Write</button>
        </a>
        <a href="profile.html">
          <button type="button" class="cta">Log In</button>
        </a>
      </div>
    </nav>
    <hr />

    <!-- Explore -->
    <div class="text-center">
      <h1 id="explore" class="fw-bold mb-4">Explore !</h1>
    </div>

    <!-- Search Bar -->
    <div class="search mb-5">
      <form method="GET" action="/searching"></form>
      <button>
        <i class="fa-solid fa-magnifying-glass"></i>
        <input id="search" type="text" placeholder="Write here" value="" />
      </button>
    </div>

    <!-- Content Display-->
    <div class="display">
      <!-- Content -->
      <a class="text-decoration-none" href="Article.html">
        <div class="content mb-3">
          <img src="https://picsum.photos/200" alt="" />
          <div>
            <h5 class="fw-bold">Lorem ipsum dolor sit amet</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              itaque perspiciatis neque veritatis officiis praesentium!
              Reiciendis error alias voluptatibus officiis modi laudantium
              ratione, deserunt eligendi?
            </p>
          </div>
        </div>
      </a>
      <!-- Content -->
      <a class="text-decoration-none" href="Article.html">
        <div class="content mb-3">
          <img src="https://picsum.photos/200" alt="" />
          <div>
            <h5 class="fw-bold">Lorem ipsum dolor sit amet</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              itaque perspiciatis neque veritatis officiis praesentium!
              Reiciendis error alias voluptatibus officiis modi laudantium
              ratione, deserunt eligendi?
            </p>
          </div>
        </div>
      </a>
      <!-- Content -->
      <a class="text-decoration-none" href="Article.html">
        <div class="content mb-3">
          <img src="https://picsum.photos/200" alt="" />
          <div>
            <h5 class="fw-bold">Lorem ipsum dolor sit amet</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              itaque perspiciatis neque veritatis officiis praesentium!
              Reiciendis error alias voluptatibus officiis modi laudantium
              ratione, deserunt eligendi?
            </p>
          </div>
        </div>
      </a>
      <!-- Content -->
      <a class="text-decoration-none" href="Article.html">
        <div class="content mb-3">
          <img src="https://picsum.photos/200" alt="" />
          <div>
            <h5 class="fw-bold">Lorem ipsum dolor sit amet</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              itaque perspiciatis neque veritatis officiis praesentium!
              Reiciendis error alias voluptatibus officiis modi laudantium
              ratione, deserunt eligendi?
            </p>
          </div>
        </div>
      </a>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
  <footer class="footer mt-5">
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
