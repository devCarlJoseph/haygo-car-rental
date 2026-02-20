<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayGo Car Rental</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.css"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <link rel="stylesheet" href="src/assets/css/hero.css">
    <link rel="stylesheet" href="src/assets/css/about.css">
    <link rel="stylesheet" href="src/assets/css/contact.css">
    <link rel="stylesheet" href="src/assets/css/help.css">
    <link rel="stylesheet" href="src/assets/css/blog.css">
    <link rel="stylesheet" href="src/assets/css/fleet.css">
    <link rel="stylesheet" href="src/assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="src/assets/js/jquery.js"></script>

</head>

<body>
    <!-- Top Bar (Inspired by tzrent.com) -->
    <div class="haygo-top-bar bg-dark py-2 text-white small d-none d-lg-block">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row align-items-center">
                <div class="col-6">
                    <span class="me-4"><i class="ri-phone-fill haygo-primary me-1"></i> +63 912 345 6789</span>
                    <span><i class="ri-mail-fill haygo-primary me-1"></i> hello@haygo.rentals</span>
                </div>
                <div class="col-6 text-end">
                    <span><i class="ri-time-fill haygo-primary me-1"></i> Mon - Sun: 8:00 AM - 8:00 PM</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Header / Navigation Bar -->
    <header class="haygo-glass sticky-top z-5 transition-all w-100">
        <div class="container-fluid px-4 px-lg-5">
            <nav class="navbar navbar-expand-lg py-3">
                <!-- Logo -->
                <div class="d-flex align-items-center">
                    <img src="src/assets/images/logo.png" class="navbar-logo" alt="HayGo Logo">
                    <a href="index.php" class="navbar-brand fs-3 fw-bold haygo-dark text-decoration-none">
                        Hay<span class="haygo-primary">Go</span>
                    </a>
                </div>

                <!-- Toggler for Mobile -->
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#haygoNavbar"
                    aria-controls="haygoNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav Items (Collapsible) -->
                <div class="collapse navbar-collapse" id="haygoNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item"><a href="index.php" class="nav-link px-3 fw-semibold h-color">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link px-3 fw-semibold h-color">About Us</a></li>
                        <li class="nav-item"><a href="fleet.php" class="nav-link px-3 fw-semibold h-color">Fleet</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link px-3 fw-semibold h-color">Contact Us</a></li>
                        <li class="nav-item"><a href="help.php" class="nav-link px-3 fw-semibold h-color">Help</a></li>
                        <li class="nav-item"><a href="user/log_in.php" class="nav-link px-3 fw-semibold h-color">My Trips</a></li>

                        <!-- Portal Button -->
                        <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                            <a href="login.php" class="h-button text-decoration-none d-inline-block">
                                Portal Access
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
