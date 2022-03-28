<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>art-gallery</title>

    <link rel="icon" href="images/favicon.ico" type="image/icon" sizes="16x16">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="body-content">
        <div id="banner">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand font-28 font-w600" href="#topbar">NRRJ</a>
                    <ul class="navbar-nav font-18">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/images.php">Images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/admin-login.php"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
            </nav>

            <!-------------- image slider --------->
            <div class="gallery-slider">
                <div class="slider-images">
                    <div class="slider" id="lastImg">
                        <img src="images/3d/1.jpg" alt="">
                    </div>
                    <div class="slider">
                        <img src="images/acrylic-paint/1.jpeg" alt="">
                    </div>
                    <div class="slider">
                        <img src="images/Gardenning/1.jpg" alt="">
                    </div>
                    <div class="slider">
                        <img src="images/pencil-art/1.jpg" alt="">
                    </div>
                    <div class="slider">
                        <img src="images/3d/2.jpg" alt="">
                    </div>
                    <div class="slider">
                        <img src="images/acrylic-paint/2.jpg" alt="">
                    </div>
                    <div class="slider" id="firstImg">
                        <img src="images/3d/1.jpg" alt="">
                    </div> 
                </div>

                <button id="prevBtn"> <i class="fas fa-chevron-left"></i> </button>
                <button id="nextBtn"> <i class="fas fa-chevron-right"></i> </button>
            </div>
        </div>


        <!------- most-viewed images -------->
        <div class="most-viewed pt-30 pb-30">
            <h3 class="section-heading text-center fontw-500 pb-30">Most Viewed Images</h3>

            <div class="row viewed-images">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="image">
                        <img src="images/slider/slider1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="image">
                        <img src="images/slider/slider2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="image">
                        <img src="images/slider/slider3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="image">
                        <img src="images/slider/slider4.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    
    <script type="text/javaScript" src="js/popper.min.js"></script>
    <script type="text/javaScript" src="js/bootstrap.min.js"></script>
    <script type="text/javaScript" src="js/jquery.min.js"></script>
    <script type="text/javaScript" src="js/script.js"></script>

</body>
</html>