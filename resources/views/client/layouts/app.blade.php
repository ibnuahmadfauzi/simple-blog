<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/pawprint.png">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <title>
        Simple Blog | Home Page
    </title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- CSS File --}}
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="bg-light">

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Header Section --}}
                <header class="py-5 d-flex align-items-center justify-content-between">
                    <div class="logo d-flex align-items-center">
                        <img src="/assets/images/favicon/pawprint.png" class="me-3" height="50">
                        <h2 class="p-0 m-0 fw-bold">Simple Blog</h2>
                    </div>
                    <div class="github-button">
                        <a class="btn btn-sm btn-dark px-4">
                            <i class="bi bi-github"></i> <span class="ms-2">GitHub</span>
                        </a>
                    </div>
                </header>
                {{-- end Header Section --}}

                {{-- Profile Section --}}
                <div class="profile-section d-flex align-items-center">
                    <div class="image me-5">
                        <img src="https://img.stablecog.com/insecure/1920w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp"
                            height="150px" class="rounded-circle">
                    </div>
                    <div class="description fw-bold">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, sunt animi harum nisi
                            voluptatibus eveniet.
                        </p>
                        <p>
                            Ipsa, corporis, doloremque repudiandae architecto inventore autem corrupti ipsum voluptate
                            numquam, illum ab asperiores perspiciatis provident totam consequatur temporibus est.
                        </p>
                    </div>
                </div>
                {{-- end Profile Section --}}

                {{-- Mavbar --}}
                <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4">
                    <div class="container-fluid">
                        <span></span>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"><i
                                            class="bi bi-house-fill"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#"><i
                                            class="bi bi-file-person-fill"></i> Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#"><i
                                            class="bi bi-file-code-fill"></i> Programming</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control form-control-sm bg-light me-2" type="search"
                                    placeholder="Search . . ." aria-label="Search">
                                <button class="btn btn-sm btn-secondary" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </nav>
                {{-- end Navbar --}}

                <hr class="my-1">

                {{-- Main Content --}}
                @yield('content')
                {{-- end Main Content --}}

                <hr class="my-1">

                {{-- Footer --}}
                <footer class="py-2">
                    <div class="sosmed-icon d-flex justify-content-center">
                        <a href="#" class="btn btn-secondary btn-sm mx-1">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="#" class="btn btn-secondary btn-sm mx-1">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="#" class="btn btn-secondary btn-sm mx-1">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-secondary btn-sm mx-1">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        &copy; {{ date('Y') }} - Develop by:&nbsp;<a href="https://ibnuahmadfauzi.github.io/"
                            class="text-decoration-none"> Ibnu Ahmad Fauzi</a>
                    </div>
                </footer>
                {{-- end Footer --}}

            </div>
        </div>

    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
