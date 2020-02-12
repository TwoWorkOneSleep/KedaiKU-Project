<?php

require_once("Process/Cek-Login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Selamat Datang | KedaiKU</title>
    <!--======= ADDITIONS ==========-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css'>
    <!--=====--------------========-->
    <!-- === LINK STYLE === -->
    <link rel="icon" type="image/png" href="Dist/Tiny/Kedaiku-Icon.png" />
    <link rel="stylesheet" href="Includes/vendor/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="Style/all.min.css">
    <link rel="stylesheet" href="Style/login.css" type="text/css">
    <!-- ====== END ====== -->
    <!--=====  FONTS   ======-->
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css" />
    <!--=====----------======-->
</head>

<body>
    <!-- =======================================  Navbar  =================================================== -->
    <header class="Navbar_area">
        <div class="nav-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="menuNav">
                <a class="navbar-brand" href="#">
                    <img src="Dist/Tiny/Kedaiku.png" width="150" height="40" class="d-inline-block align-top" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="Navbar-toogler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <button type="button" class="btn btn-light" style="border-radius: 50px;">
                                    <i class="far fa-bell"></i>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- =======================================  End Navbar  ================================================= -->
    <!-- =======================================  Login Form  =================================================== -->
    <div class="container-fluid">
        <div class="row working-area">
            <div class="col-lg-6 area-left">
                <div class="d-flex justify-content-center align-items-center login-container">
                    <form class="login-form text-center" action="" method="POST">
                        <h1 class="mb-5 font-weight-light">Selamat Datang <img src="Dist/Tiny/Kedaiku-Member.png" width="195" height="60" alt="" /></h1>
                        <!-- ==== Alert Data ==== -->
                        <?php if (isset($error)) : ?>

                            <p style="color: red; font-style: italic;">Data yang kamu masukan salah!</p>

                        <?php endif ?>
                        <!-- ==================== -->
                        <div class="form-group">
                            <input type="text" name="username" class="form-control rounded-pill form-control-lg" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control rounded-pill form-control-lg" placeholder="Password" />
                        </div>
                        <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">Ingat Kata Sandi</label>
                                </div>
                            </div>
                            <a href="#">Tidak ingat kata sandi?</a>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-sm rounded-pill btn-custom btn-block font-weight-bold myBtn" style="font-family: Quicksand;font-size: 20px;">Masuk</button>
                        <p class="mt-3 font-weight-normal">
                            Belum punya akun? <a href="SignUp.php"><strong>Daftar Sekarang</strong></a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 area-right">
                <div id="carouselExampleIndicators" class="my-slider carousel slide picture-img" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Dist/Background/Pict_2.png" class="d-block w-100" alt="Pict Iconic 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Dist/Background/Pict_3.png" class="d-block w-100" alt="Pict Iconic 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Dist/Background/Pict_4.png" class="d-block w-100" alt="Pict Iconic 3">
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev indicator-edit" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================================================================== -->
    <!-- =======================================  Footer  =================================================== -->
    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="Dist/Tiny/Kedaiku.png" alt="logo" style="width: 150px;height: 40px;"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2020 All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================== Custom Javacsript  =================================== -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/1d8f554057.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="Plugins/main.js" text="text/javascript"></script>
    <!-- ============ Sweet Alert ============-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.all.min.js"></script>
    <!-- ============ =========== ============-->
    <!-- === Custom Javascript === -->
    <script type="text/javascript">
        document.querySelector(".myBtn").addEventListener('click', function() {
            swal("Our First Alert", "With some body text and success icon!", "success");
        });
    </script>
    <!-- ========================= -->
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                call_to_action: "Message us", // Call to action
                button_color: "#A8CE50", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
    <!-- ===================================================================================== -->
</body>

</html>