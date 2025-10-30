<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hay Go - Sign In or Register (Bootstrap)</title>

    <link rel="stylesheet" href="../src/assets/css/bootstrap.css"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="../src/assets/css/log-in.css">


</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center p-3">

    <div class="w-100 auth-card bg-white shadow-lg overflow-hidden position-relative">

        <button onclick="window.location.href='index.php'" class="btn position-absolute top-0 end-0 m-3 text-secondary"
            aria-label="Close">
            <i class="ri-close-line fs-4" style="color: white"></i>
        </button>

        <div class="p-4 text-center" style="background: var(--haygo-secondary) !important; color: white;">
            <h1 class="h3 fw-bolder mb-1 letter-spacing-tight">
                Hay Go <span style="color: var(--accent-lime);">Rental</span>
            </h1>
            <p class="small fw-light mb-0 opacity-75">Your journey starts here.</p>
        </div>

        <ul class="nav nav-tabs justify-content-center border-0" id="authTab" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link auth-tab active w-100" id="tab-signin" data-bs-toggle="tab"
                    data-bs-target="#content-signin" type="button" role="tab" aria-controls="content-signin"
                    aria-selected="true" onclick="setAuthMode('signin')">
                    <i class="ri-login-box-line me-2"></i>Sign In
                </button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link auth-tab w-100" id="tab-signup" data-bs-toggle="tab"
                    data-bs-target="#content-signup" type="button" role="tab" aria-controls="content-signup"
                    aria-selected="false" onclick="setAuthMode('signup')">
                    <i class="ri-user-add-line me-2"></i>Sign Up
                </button>
            </li>
        </ul>

        <div class="card-body p-4 p-md-5">

            <div id="content-signin" class="auth-content active">
                <h2 class="h4 fw-bold mb-4 text-center" style="color: var(--dark-text);">Welcome Back!</h2>

                <form action="../actions/log_in.php" id="signInForm" class="row g-4" method="post">
                    <div class="col-12">
                        <label for="signin-username" class="form-label mb-1 text-secondary">Username</label>
                        <input type="text" id="signin-username" name="l-username" placeholder="Juan Dela Cruz"
                            class="form-control form-control-lg">
                    </div>

                    <div class="col-12">
                        <label for="signin-password" class="form-label mb-1 text-secondary">Password</label>
                        <input type="password" id="signin-password" name="l-password" placeholder="••••••••"
                            class="form-control form-control-lg">
                    </div>

                    <div class="col-12 text-center">
                        <a href="#" class="small fw-medium text-decoration-none" style="color: var(--haygo-primary-text)"
                            onclick="event.preventDefault(); setAuthMode('forgot')">Forgot Password?</a>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="login" class="btn sign-btn w-100 fw-bold fs-5">
                            Sign In <i class="ri-arrow-right-line ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div id="content-signup" class="auth-content">
                <h2 class="h4 fw-bold mb-4 text-center" style="color: var(--dark-text);">Create Your Account</h2>

                <form action="../actions/sign_up.php" class="row g-4" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="signup-name" class="form-label mb-1 text-secondary">Username</label>
                        <input type="text" name="username" id="signup-name" placeholder="Juan Dela Cruz"
                            class="form-control form-control-lg" required>
                    </div>

                    <div class="col-12">
                        <label for="signup-password" class="form-label mb-1 text-secondary">Password</label>
                        <input type="password" name="password" id="signup-password" placeholder="Admin Pass"
                            class="form-control form-control-lg" required>
                    </div>

                    <div class="col-12">
                        <label for="signup-key" class="form-label mb-1 text-secondary">Admin Key</label>
                        <input type="text" name="adminkey" id="signup-key" placeholder="Admin Key"
                            class="form-control form-control-lg" required>
                    </div>

                    <div class="col-12">
                        <label for="signup-image" class="form-label mb-1 text-secondary">Choose Image</label>
                        <input type="file" name="adminProfile" id="signup-image" class="form-control form-control-lg">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn sign-btn w-100 fw-bold fs-5">
                            Sign Up <i class="ri-user-add-line ms-2"></i>
                        </button>
                    </div>
                </form>

            </div>

            <div id="content-forgot" class="auth-content">
                <h2 class="h4 fw-bold mb-4 text-center" style="color: var(--dark-text);">Reset Password</h2>
                <p class="small text-muted mb-4 text-center">
                    Enter your username and a new password to reset your account.
                </p>

                <form action="../actions/forgot_pass.php" id="forgotForm" class="row g-4" method="post">
                    <div class="col-12">
                        <label for="forgot-username" class="form-label mb-1 text-secondary">Username / Account
                            ID</label>
                        <input type="text" id="forgot-username" required placeholder="e.g., haygo_user123"
                            class="form-control form-control-lg">
                    </div>

                    <div class="col-12">
                        <label for="forgot-password" class="form-label mb-1 text-secondary">New Password</label>
                        <input type="password" id="forgot-password" required placeholder="Enter new strong password"
                            class="form-control form-control-lg">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn reset-btn haygo-dark w-100 fw-bold fs-5">
                            Reset Password <i class="ri-lock-line ms-2"></i>
                        </button>
                    </div>

                    <div class="col-12 text-center small text-muted mt-4">
                        <a href="#" class="fw-medium text-decoration-none haygo-secondary" style="color: var(--primary-blue);"
                            onclick="event.preventDefault(); setAuthMode('signin')">Back to Sign In</a>
                    </div>
                </form>
            </div>

            <div id="messageArea" class="mt-4 p-3 rounded small d-none" role="alert"></div>

        </div>
    </div>

    <script src="../src/assets/js/bootstrap.js"></script>
    <script src="../src/assets/controller/log-in.js"></script>
</body>

</html>