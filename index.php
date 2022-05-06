<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Dtox</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://technext.github.io/dtox/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="https://technext.github.io/dtox/plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="https://technext.github.io/dtox/plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="https://technext.github.io/dtox/plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://technext.github.io/dtox/plugins/aos/aos.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main Stylesheet -->
    <link href="./style/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="https://technext.github.io/dtox/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://technext.github.io/dtox/images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">Boxsky</a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">TOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#team">Privacy Policy</a>
                        </li>
                       
                    </ul>
                    <a href="#" class="btn btn-primary ml-lg-3 primary-shadow">Follow Github</a>
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(https://technext.github.io/dtox/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>~ Boxsky ~<br>
                        Catbox x Siasky</h1>
                    <p class="mb-4">Pastekan Linknya pada form di bawah ini</p>
                    <div class="form-group">
                        <form action="" method="post">
                            <input type="text" name="data" class="form-control shadow-lg"
                                placeholder="Pastekan Link Video Seperti Catbox dan Siasky"
                                style="border-radius: 50px;" name="" id="">
                            <input type="submit" name="submit" class="btn btn-ouline-success mt-3 btn-block shadow-sm"
                                style="border-radius: 50px; background-color: #8986FF; color:white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="scene">
    <img class="img-fluid hero-bg-1 up-down-animation" src="https://technext.github.io/dtox/images/background-shape/feature-bg-2.png" alt="">
    <img class="img-fluid hero-bg-2 left-right-animation" src="https://technext.github.io/dtox/images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-3 left-right-animation" src="https://technext.github.io/dtox/images/background-shape/seo-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-4 up-down-animation" src="https://technext.github.io/dtox/images/background-shape/green-dot.png" alt="">
    <img class="img-fluid hero-bg-5 left-right-animation" src="https://technext.github.io/dtox/images/background-shape/blue-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-6 up-down-animation" src="https://technext.github.io/dtox/images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-7 left-right-animation" src="https://technext.github.io/dtox/images/background-shape/yellow-triangle.png" alt="">
    <img class="img-fluid hero-bg-8 up-down-animation" src="https://technext.github.io/dtox/images/background-shape/service-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-9 up-down-animation" src="https://technext.github.io/dtox/images/background-shape/team-bg-triangle.png" alt="">
  </div>
    </section>


    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Your Result Here</h2>
                    <p class="mb-5">Play Or Download Your Videos</p>
                </div>
                <div class="col-lg-12 col-sm-10 col-12 mx-auto">
                    <?php

if (isset($_POST['submit'])) {
   $data = $_POST['data'];
   $domain = parse_url($data, PHP_URL_HOST);

    if (empty($data)) {
        echo "<script>alert('Data Tidak Boleh Kosong')</script>";
    }
    if ($domain == 'files.catbox.moe' || $domain == 'siasky.net') {
        

   $ch = curl_init($data);
   curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
   curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch, CURLOPT_TIMEOUT,10);
   $output = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   curl_close($ch);
    if ($httpcode == 200) {
        echo '<div class="alert alert-success" role="alert">
        Link Valid
        </div>';

        echo '
        <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener("mouseenter", Swal.stopTimer)
              toast.addEventListener("mouseleave", Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: "success",
            title: "Video Di Temukan, Scroll Ke Bawah "
          })
        </script>
        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="text-align:center">
                                
                                    <a href="down.php?d='.$data.'" class="btn btn-ouline-success mt-3 btn-sm shadow-sm"
                                    style="border-radius: 50px; background-color: #8986FF; color:white"><i class="ti-download"></i> Download</a>

                                </div>
                            </div>
                            <div class="col-md-12 mt-3 text-center">
                                <video src="'.$data.'" controls controlsList="nodownload"></video>
                            </div>
                        </div>
                    </div>
        
        
        ';
    
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Link Invalid
        </div>';
        echo '
        <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener("mouseenter", Swal.stopTimer)
              toast.addEventListener("mouseleave", Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: "error",
            title: "Video Tidak Ada Mohon Di Cek Kembali."
          })
        </script>
        
        ';
    }




    }else{
        echo '<div class="alert alert-danger" role="alert">
        Link Invalid
        </div>';
        echo '
        <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener("mouseenter", Swal.stopTimer)
              toast.addEventListener("mouseleave", Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: "error",
            title: "Video Tidak Ada Mohon Di Cek Kembali."
          })
        </script>
        
        ';
    }




}

?>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation"
            src="https://technext.github.io/dtox/images/background-shape/seo-ball-2.png" alt="background-shape">
    </section>
    <!-- /newsletter -->

    <!-- footer -->
    <footer class="footer-section footer"
        style="background-image: url(https://technext.github.io/dtox/images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                    Boxsky
                </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="index.html">Home</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">About</a></li>
                        <li class="list-inline-item"><a href="about.html">Service</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#team">TOS</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#pricing">Privacy Policy</a></li>
                    </ul>
                </nav>
                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="https://fb.me/uhuy.kun"><i class="ti-facebook"></i></a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="black" href="https://github.com/imyhacker"><i class="ti-github"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="https://technext.github.io/dtox/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://technext.github.io/dtox/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="https://technext.github.io/dtox/plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="https://technext.github.io/dtox/plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="https://technext.github.io/dtox/plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="https://technext.github.io/dtox/js/script.js"></script>

    
</body>

</html>