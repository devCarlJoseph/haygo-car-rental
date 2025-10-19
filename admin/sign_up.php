<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayGo Car Rental</title>
    <link rel="stylesheet" href="../src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/assets/css/style.css">

    <script src="../src/assets/js/bootstrap.js"></script>
    <script src="../src/assets/js/j_query.js"></script>
</head>

<body class="inder-regular">
    <section class="container-fluid p-0 m-0 d-flex justify-content-center align-items-center"
        style="height: 100vh; background: #FFF1E6;">
        <div class="d-flex justify-content-between align-items-center"
            style="width: 61.625rem; height: 37.313rem; background: #FFB896;">
            <div>

            </div>
            <div class="bg-white" style="width: 26.5rem; height: 37.313rem;">
                <div class="d-flex justify-content-end" style="margin-top: 0.875rem; margin-right: 0.875rem; cursor: pointer; color: #D8AD97;">
                    <a href="../actions/sign_up.php" style="color: #D8AD97;"><i class="fa-solid fa-xmark"></i></a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <img src="../src/assets/images/admin_logo.png" style="width: 4.75rem; height: 3.063rem; margin-top: 2.063rem;">
                    </div>
                    <div>
                        <h2 class="mt-4" style="font-size: 1.875rem; color: #FF884D;">Sign Up as Admin</h2>
                    </div>
                    <div>
                        <form action="../actions/sign_up.php" method="post">
                            <div class="d-flex flex-column gap-1 mt-3">
                                <label style="font-size: 0.938rem; color: #363636;">Username</label>
                                <input class="p-2 rounded-2" type="text" name="username" id="" placeholder="Enter Username" style="width: 21.188rem; height: 2.25rem; font-size: 0.938rem; color: #B5B5B5; border: 1px solid #F68A52;">
                            </div>
                            <div class="d-flex flex-column gap-1 mt-2">
                                <label style="font-size: 0.938rem; color: #363636;">Password</label>
                                <input class="p-2 rounded-2" type="text" name="password" id="" placeholder="Enter Password" style="width: 21.188rem; height: 2.25rem; font-size: 0.938rem; color: #B5B5B5; border: 1px solid #F68A52;">
                            </div>  
                            <div class="d-flex flex-column gap-1 mt-2">
                                <label style="font-size: 0.938rem; color: #363636;">Admin Key</label>
                                <input class="p-2 rounded-2" type="text" name="adminkey" id="" placeholder="Enter Admin Key" style="width: 21.188rem; height: 2.25rem; font-size: 0.938rem; color: #B5B5B5; border: 1px solid #F68A52;">
                            </div>       
                            <input type="file" name="adminProfile" class="mt-3 form-control" style="cursor: pointer; width: 21.188rem ">             
                            <div class="mt-4">
                                <button class="border border-none text-white rounded-2" style="width: 21.188rem; height: 2.375rem; background: #E98C5E; font-size: 0.938rem;">Sign Up</button>
                            </div> 
                            <div class="text-center pt-2">
                                <p style="color: #807D7D; font-size: 0.875rem;">Already have an account? <a href="log_in.php" style="color: #D8AD97; cursor: pointer;"><span>Log in</span></a></p>
                            </div>                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>