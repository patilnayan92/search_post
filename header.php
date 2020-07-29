<?php
    include("includes/database.php");
    include("includes/function.php");
    if (($_SERVER['REQUEST_URI'] === '/index.php') || ($_SERVER['REQUEST_URI'] === '/index.php/')) {
      header('Location: http://localhost/freelancer/search_post/');
    }
    $sitefullpath="http://localhost/freelancer/search_post/";
    $urlnew1 =explode('/',parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $urlnew=end($urlnew1);
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $last=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $actual_link = "https://$_SERVER[HTTP_HOST]$last";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title Goes Here</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo $sitefullpath?>assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="<?php echo $sitefullpath?>assets/css/fontawesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo $sitefullpath?>assets/css/owl.carousel.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo $sitefullpath?>assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo $sitefullpath?>assets/css/responsive.css">
    
</head>

<body>

    <!-- back to top button begin -->
    <div class="back-to-top-button">
        <button>
            <i class="fas fa-level-up-alt"></i>
        </button>
    </div>
    <!-- back to top button end -->

    <!-- header begin -->
    <div class="header">
        
        <div class="container">
            <div class="header-bottom">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                                <div class="logo">
                                    <a href="<?php echo $sitefullpath?>index.php">
                                        Logo
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 d-xl-none d-lg-none d-block">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                              
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $sitefullpath?>index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $sitefullpath?>blog.php">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $sitefullpath?>faq.php">FAQ</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->