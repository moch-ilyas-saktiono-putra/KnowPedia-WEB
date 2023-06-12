<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Get To Know</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/gettoknow.css')}}" />
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

    <!-- Founder Text -->
    <div class="founder">
        <h1 class="fw-bold">Founder</h1>
    </div>

    <!-- Founder Pict-->
    <div class="d-flex flex-row justify-content-center gap-5 mb-5">
        <!-- Ilyas -->
        <div class="pict text-center">
            <img src="{{asset('image/properti/Ilyas.jpg')}}" alt="" />
            <p class="mt-3 mb-0">Moch Ilyas Saktiono Putra</p>
        </div>
        <!-- Christian -->
        <div class="pict text-center">
            <img src="{{asset('image/properti/chris.jpg')}}" alt="" />
            <p class="mt-3 mb-0">Christian Abraham Putra</p>
        </div>
    </div>

    <!-- What Is Know Pedia -->
    <div class="text-center">
        <h2 class="knowpedia-logo fw-bold">Know<span>Pedia</span></h2>
    </div>

    <!-- Content -->
    <div class="text-center ms-5 me-5 mb-5">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
            ratione quo dolores. Voluptatum, hic animi expedita aperiam optio
            adipisci aliquam sed dolore ea facere explicabo libero fugit quidem iure
            numquam dolores quibusdam nemo voluptates a sequi praesentium odit. Id
            in corporis nihil dolor molestias eius vel impedit exercitationem
            deserunt, eaque optio pariatur veniam ad autem? Asperiores corrupti
            autem quisquam. Consectetur, illum repellendus. Aliquam iure incidunt
            mollitia cum enim autem asperiores voluptatum vero molestias odio
            commodi eligendi corporis nobis consectetur dolorum at sed aspernatur
            harum consequatur quae, deleniti, porro eos minus. Consequuntur placeat
            aliquam aspernatur voluptate dolorem officia earum dicta similique.
        </p>
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