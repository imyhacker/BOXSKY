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
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ngapi.php">API</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#tos">TOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#pp">Privacy Policy</a>
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
                                placeholder="Pastekan Link Video Seperti Catbox dan Siasky" style="border-radius: 50px;"
                                name="" id="">
                            <input type="submit" name="submit" class="btn btn-ouline-success mt-3 btn-block shadow-sm"
                                style="border-radius: 50px; background-color: #8986FF; color:white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation"
                src="https://technext.github.io/dtox/images/background-shape/feature-bg-2.png" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation"
                src="https://technext.github.io/dtox/images/background-shape/seo-ball-1.png" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation"
                src="https://technext.github.io/dtox/images/background-shape/seo-half-cycle.png" alt="">
            <img class="img-fluid hero-bg-4 up-down-animation"
                src="https://technext.github.io/dtox/images/background-shape/green-dot.png" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation"
                src="https://technext.github.io/dtox/images/background-shape/blue-half-cycle.png" alt="">
            <img class="img-fluid hero-bg-6 up-down-animation"
                src="https://technext.github.io/dtox/images/background-shape/seo-ball-1.png" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation"
                src="https://technext.github.io/dtox/images/background-shape/yellow-triangle.png" alt="">
            <img class="img-fluid hero-bg-8 up-down-animation"
                src="https://technext.github.io/dtox/images/background-shape/service-half-cycle.png" alt="">
            <img class="img-fluid hero-bg-9 up-down-animation"
                src="https://technext.github.io/dtox/images/background-shape/team-bg-triangle.png" alt="">
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
            icon: "info",
            title: "Data Tidak Boleh Kosong!"
          })
        </script>';
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
                <div class="col-lg-4 text-center text-lg-left mb-lg-0">
                    <!-- logo -->
                    <h4>Boxsky</h4>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="/">Home</a></li>
                        <li class="list-inline-item"><a class="page-scroll" data-bs-toggle="modal" data-bs-target="#about">About</a></li>
                        <li class="list-inline-item"><a href="ngapi.php">API</a></li>
                        <li class="list-inline-item"><a class="page-scroll" data-bs-toggle="modal" data-bs-target="#tos">TOS</a></li>
                        <li class="list-inline-item"><a class="page-scroll" data-bs-toggle="modal" data-bs-target="#pp">Privacy Policy</a></li>
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
    <!-- Modal -->
    <div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About This Website</h5>
                </div>
                <div class="modal-body">
                    <p>
                        This app is an app to download videos from CATBOX.MOE and SIASKY.NET
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terms Of Service</h5>
                </div>
                <div class="modal-body">
                    <h6>Website Terms and Conditions of Use</h6>

                    <h4>1. Terms</h4>

                    <p>By accessing this Website, accessible from https://bsky.herokuapp.com/, you are agreeing to be
                        bound by these Website Terms and Conditions of Use and agree that you are responsible for the
                        agreement with any applicable local laws. If you disagree with any of these terms, you are
                        prohibited from accessing this site. The materials contained in this Website are protected by
                        copyright and trade mark law.</p>

                    <h4>2. Use License</h4>

                    <p>Permission is granted to temporarily download one copy of the materials on BOXSKY's Website for
                        personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer
                        of title, and under this license you may not:</p>

                    <ul>
                        <li>modify or copy the materials;</li>
                        <li>use the materials for any commercial purpose or for any public display;</li>
                        <li>attempt to reverse engineer any software contained on BOXSKY's Website;</li>
                        <li>remove any copyright or other proprietary notations from the materials; or</li>
                        <li>transferring the materials to another person or "mirror" the materials on any other server.
                        </li>
                    </ul>

                    <p>This will let BOXSKY to terminate upon violations of any of these restrictions. Upon termination,
                        your viewing right will also be terminated and you should destroy any downloaded materials in
                        your possession whether it is printed or electronic format.</p>
                    <h4>3. Disclaimer</h4>

                    <p>All the materials on BOXSKY’s Website are provided "as is". BOXSKY makes no warranties, may it be
                        expressed or implied, therefore negates all other warranties. Furthermore, BOXSKY does not make
                        any representations concerning the accuracy or reliability of the use of the materials on its
                        Website or otherwise relating to such materials or any sites linked to this Website.</p>

                    <h4>4. Limitations</h4>

                    <p>BOXSKY or its suppliers will not be hold accountable for any damages that will arise with the use
                        or inability to use the materials on BOXSKY’s Website, even if BOXSKY or an authorize
                        representative of this Website has been notified, orally or written, of the possibility of such
                        damage. Some jurisdiction does not allow limitations on implied warranties or limitations of
                        liability for incidental damages, these limitations may not apply to you.</p>

                    <h4>5. Revisions and Errata</h4>

                    <p>The materials appearing on BOXSKY’s Website may include technical, typographical, or photographic
                        errors. BOXSKY will not promise that any of the materials in this Website are accurate,
                        complete, or current. BOXSKY may change the materials contained on its Website at any time
                        without notice. BOXSKY does not make any commitment to update the materials.</p>

                    <h4>6. Links</h4>

                    <p>BOXSKY has not reviewed all of the sites linked to its Website and is not responsible for the
                        contents of any such linked site. The presence of any link does not imply endorsement by BOXSKY
                        of the site. The use of any linked website is at the user’s own risk.</p>

                    <h4>7. Site Terms of Use Modifications</h4>

                    <p>BOXSKY may revise these Terms of Use for its Website at any time without prior notice. By using
                        this Website, you are agreeing to be bound by the current version of these Terms and Conditions
                        of Use.</p>

                    <h4>8. Your Privacy</h4>

                    <p>Please read our Privacy Policy.</p>

                    <h4>9. Governing Law</h4>

                    <p>Any claim related to BOXSKY's Website shall be governed by the laws of id without regards to its
                        conflict of law provisions.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                </div>
                <div class="modal-body">
                
    <strong>Privacy Policy</strong> <p>
                  Ariikun built the Boxsky app as
                  a Commercial app. This SERVICE is provided by
                  Ariikun  and is intended for use as
                  is.
                </p> <p>
                  This page is used to inform visitors regarding my
                  policies with the collection, use, and disclosure of Personal
                  Information if anyone decided to use my Service.
                </p> <p>
                  If you choose to use my Service, then you agree to
                  the collection and use of information in relation to this
                  policy. The Personal Information that I collect is
                  used for providing and improving the Service. I will not use or share your information with
                  anyone except as described in this Privacy Policy.
                </p> <p>
                  The terms used in this Privacy Policy have the same meanings
                  as in our Terms and Conditions, which are accessible at
                  Boxsky unless otherwise defined in this Privacy Policy.
                </p> <p><strong>Information Collection and Use</strong></p> <p>
                  For a better experience, while using our Service, I
                  may require you to provide us with certain personally
                  identifiable information, including but not limited to Downloader Videos. The information that
                  I request will be retained on your device and is not collected by me in any way.
                </p> <div><p>
                    The app does use third-party services that may collect
                    information used to identify you.
                  </p></li><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></ul></div> <p><strong>Log Data</strong></p> <p>
                  I want to inform you that whenever you
                  use my Service, in a case of an error in the app
                  I collect data and information (through third-party
                  products) on your phone called Log Data. This Log Data may
                  include information such as your device Internet Protocol
                  (“IP”) address, device name, operating system version, the
                  configuration of the app when utilizing my Service,
                  the time and date of your use of the Service, and other
                  statistics.
                </p> <p><strong>Cookies</strong></p> <p>
                  Cookies are files with a small amount of data that are
                  commonly used as anonymous unique identifiers. These are sent
                  to your browser from the websites that you visit and are
                  stored on your device's internal memory.
                </p> <p>
                  This Service does not use these “cookies” explicitly. However,
                  the app may use third-party code and libraries that use
                  “cookies” to collect information and improve their services.
                  You have the option to either accept or refuse these cookies
                  and know when a cookie is being sent to your device. If you
                  choose to refuse our cookies, you may not be able to use some
                  portions of this Service.
                </p> <p><strong>Service Providers</strong></p> <p>
                  I may employ third-party companies and
                  individuals due to the following reasons:
                </p> <ul><li>To facilitate our Service;</li> <li>To provide the Service on our behalf;</li> <li>To perform Service-related services; or</li> <li>To assist us in analyzing how our Service is used.</li></ul> <p>
                  I want to inform users of this Service
                  that these third parties have access to their Personal
                  Information. The reason is to perform the tasks assigned to
                  them on our behalf. However, they are obligated not to
                  disclose or use the information for any other purpose.
                </p> <p><strong>Security</strong></p> <p>
                  I value your trust in providing us your
                  Personal Information, thus we are striving to use commercially
                  acceptable means of protecting it. But remember that no method
                  of transmission over the internet, or method of electronic
                  storage is 100% secure and reliable, and I cannot
                  guarantee its absolute security.
                </p> <p><strong>Links to Other Sites</strong></p> <p>
                  This Service may contain links to other sites. If you click on
                  a third-party link, you will be directed to that site. Note
                  that these external sites are not operated by me.
                  Therefore, I strongly advise you to review the
                  Privacy Policy of these websites. I have
                  no control over and assume no responsibility for the content,
                  privacy policies, or practices of any third-party sites or
                  services.
                </p> <p><strong>Children’s Privacy</strong></p> <div><p>
                    These Services do not address anyone under the age of 13.
                    I do not knowingly collect personally
                    identifiable information from children under 13 years of age. In the case
                    I discover that a child under 13 has provided
                    me with personal information, I immediately
                    delete this from our servers. If you are a parent or guardian
                    and you are aware that your child has provided us with
                    personal information, please contact me so that
                    I will be able to do the necessary actions.
                  </p></div> <!----> <p><strong>Changes to This Privacy Policy</strong></p> <p>
                  I may update our Privacy Policy from
                  time to time. Thus, you are advised to review this page
                  periodically for any changes. I will
                  notify you of any changes by posting the new Privacy Policy on
                  this page.
                </p> <p>This policy is effective as of 2022-05-07</p> <p><strong>Contact Us</strong></p> <p>
                  If you have any questions or suggestions about my
                  Privacy Policy, do not hesitate to contact me at riihaxor3@gmail.com.
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>