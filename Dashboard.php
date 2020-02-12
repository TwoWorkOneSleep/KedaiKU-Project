<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KedaiKU</title>
    <!--======= ADDITIONS ==========-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--=====--------------========-->
    <!-- === LINK STYLE === -->
    <link rel="icon" type="image/png" href="Dist/Tiny/Kedaiku-Icon.png" />
    <link rel="stylesheet" href="Includes/vendor/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="Style/all.min.css">
    <link rel="stylesheet" href="Style/dashboard.css">
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
                    <img src="Dist/Tiny/Kedaiku.png" width="150" height="40" class="d-inline-block align-top" alt="KedaiKU Icon" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="Navbar-toogler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline my-2 my-lg-0 searchBar">
                    <input class="form-control mr-sm-2 srcCol" type="search" placeholder="Search Data/Employee" aria-label="Search">
                    <button class="btn btn-white my-2 my-sm-0 btn-icon" type="submit">
                        <i class="fas fa-circle-notch"></i>
                    </button>
                </form>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <button type="button" class="btn btn-light" style="border-radius: 50px;box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.1);">
                                    <i class="far fa-bell"></i>
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <button type="button" class="btn btn-light" style="border-radius: 50px;box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.1);">
                                    <i class="far fa-envelope"></i>
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Process/LogOut.php">
                                <button type="button" class="btn btn-light font-weight-bold" style="border-radius: 50px;box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.2);">
                                    <i class="fas fa-sign-out-alt"></i> LogOut
                                </button>
                            </a>
                        </li>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" width="40" height="40" class="rounded-circle z-depth-0" alt="avatar image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-secondary" style="margin-right: -30px;" aria-labelledby="navbarDropdownMenuLink-5">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- =======================================  End Navbar  ================================================= -->
    <!-- ============================== Content =================================== -->
    <div class="container">
        <div class="row working-area">
            <div class="col-md-2">
                <div class="sidebar">
                    <header>My App</header> <!-- Useless -->
                    <ul>
                        <li><a class="Icon1" href="#"><img src="Dist/Tiny/Dashboard.svg" width="22" height="22" alt="Dashboard" /></a></li>
                        <li><a class="Icon1" href="#"><img src="Dist/Tiny/Employee.svg" width="28" height="28" alt="Employee" /></a></li>
                        <li><a class="Icon1" href="#"><img src="Dist/Tiny/Gudang.svg" width="28" height="28" alt="Resource" /></a></li>
                        <li><a class="Icon1" href="#"><img src="Dist/Tiny/Graph.svg" width="25" height="25" alt="Graph" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row working-area">
            <div class="col-md-8">
                <div class="menu-content">

                </div>
            </div>
        </div>
    </div>
    <!-- ============================== ======= =================================== -->
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
    <script type="text/javascript">
        $('.dropdown-toggle').click(function() {
            $(this).next('.dropdown-menu').slideToggle(500);
        });
    </script>
</body>

</html>