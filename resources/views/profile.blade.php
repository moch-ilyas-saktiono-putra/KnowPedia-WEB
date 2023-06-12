<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('css/profile.css')}}" />
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
    <a class="logo fw-bold" href="/">Know<span style="color: #ef8c33">Pedia.</span>
    </a>
    <div>
      <a href="/write">
        <button type="button" class="outline">Write</button>
      </a>
    </div>
  </nav>

  <!-- Banner -->
  <div class="banner d-flex flex-column p-0" style="align-items: center">
    <!-- Backgorund Image -->
    <img class="position-relative" style="
          object-fit: cover;
          margin-right: 5%;
          margin-left: 5%;
          width: 87%;
          height: 350px;
          border-radius: 10px;
        " src="{{asset('image/properti/Walpaper.jpg')}}" alt="" />

    <!-- Profile Name -->
    <div class="profile-name d-flex flex-row align-items-center position-absolute"
      style="margin-top: 55px; margin-top: 100px">
      <img style="
            border-radius: 100%;
            height: 150px;
            width: 150px;
            object-fit: cover;
          " src="{{asset('image/properti/Ilyas.jpg')}}" alt="" />
      <h1 class="fw-bold ms-4" style="color: white">
        {{$user->name}}
      </h1>
    </div>

    <!-- Magic Word -->
    <div style="width: 80%; text-align: center">
      <h5 class="fw-bold mt-4">
        Utility is the primary goal of disseminating information, so let's
        write an article based on facts.
      </h5>
    </div>
  </div>
  <hr />

  <!-- Article Published -->
  <div class="article-published justify-content-center align-items-center text-center mb-5">
    <h2 class="fw-bold m-3 mb-5" style="color: #ef8c33">Article Published</h2>

    <!-- Article Box -->
    <div style="
          display: flex;
          height: auto;
          flex-wrap: wrap;
          justify-content: center;
        ">
      <!-- Article -->

      <div class="article-box d-flex flex-wrap justify-content-center">
        <!-- Card -->
        @foreach ($articles as $article)
        <a class="text-decoration-none" href="/article/{{ $article->id }}">
          <div class="card d-flex flex-row p-3 mb-4 ms-4 me-4" style="border: solid #4b2648; border-radius: 30px">
            {{-- Thumbnail --}}
            <div>
              <img style="
              width: 190px;
              height: 190px;
              object-fit: cover;
              border-radius: 20px 20px 20px 20px;
            " src="{{asset('thumbnails/'.$article->thumbnail)}}" alt="" />
              <div class="d-flex text-bottom mt-3">
                <button href="{{url("edit/$article->id")}}" type="button" class="btn btn-primary" style="margin-right:
                  10px;
                  text-alignt">Edit</button>
                <form action="/delete/{{ $article->id }}" method='POST'>
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
            </div>
            <div class="title-desk ms-2" style="width: 300px">

              <div>{{-- Title --}}
                <h5 class="fw-bold text-start" style="color: #4b2648">
                  {{$article->title}}
                </h5>
                {{-- Desk --}}
                <p style="font-size: 12px; text-align: left; color: black">
                  {{$article->description}}
                </p>
              </div>

            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Bootsrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

<!-- Footer -->
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