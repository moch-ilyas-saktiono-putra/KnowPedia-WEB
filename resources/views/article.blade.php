<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/ArticleSheet.css')}}">
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
            <a href="Write.html">
                <button type="button" class="outline">Write</button>
            </a>
            <a href="profile.html">
                <button type="button" class="cta">Log In</button>
            </a>
        </div>
    </nav>
    <hr />

    <!-- Title -->
    <div class="title">
        <h1 class="fw-bold">
            {{$article->title}}
        </h1>
        <p class="mt-1 mb-0">{{$article->description}}</p>
        <p class="mb-0">{{ $article->created_at}}</p>
    </div>

    <!-- Carousel -->
    <div class="justify-content-center text-center m-5" >
        <img style="width: 800px; height:450px; object-fit:cover;" src="{{asset('thumbnails/'.$article->thumbnail)}}" alt="">
    </div>

    <!-- Article -->
    <div class="article-content">
        <p>{{$article->content}}</p>
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