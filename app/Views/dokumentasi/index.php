<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IoTHME</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('/favicon.ico'); ?>" />

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets') ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <script src="<?= base_url('assets') ?>/home/js/jquery.js" type="text/javascript"></script>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets') ?>/css/dokumentasi.css" rel="stylesheet">
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ml-10" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets') ?>/img/logohme.png" alt="" /></span>
        </a>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Get Started</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#control">Control</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#monitoring">Monitoring</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">All</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Build Apps</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Contoh Projek</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <div class="masthead-bg"> <?= $this->include('layout/navbar'); ?></div>
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    ITERA
                    <span class="text-primary">IoTHME</span>
                </h1>
                <div class="subheading mb-5">
                    <a>Alat Untuk mempermudah Anda membuat Projek IoT</a>
                </div>
                <p class="lead mb-5">Kami hadir untuk mempermudah anda dalam pengembangan dan pembelajaran alat berbasis IoT, anda tidak perlu menghabiskan waktu dalam pembuatan server dan aplikasi untuk komunikasi projek anda, anda hanya perlu sedikit waktu untuk membuat sebuah aplikasi dan bisa memfokuskan ke hal pengembangan dibidang yang lainya.</p>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="http://instagram.com/hme_itera"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="control">
            <div class="resume-section-content">
                <h2 class="mb-5">Control</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <hr>
                        <h3 class="mb-0">Pendahuluan</h3>
                        <div class="subheading mb-3">kategory Control</div>
                        <p>kategory ini memungkinkan kamu membuat projek pengontrolan, dengan UI yang sudah disediakan maupun melalui link API Write</p>
                        <div class="subheading mb-3">Apa saja yang bisa dilakukan ?</div>
                        <p>Kamu bisa melakukan manipulasi atau update data yang ada didatabase secara instan, dan bisa kamu manfaatkannya untuk mengedalikan sesuatu sesuai sesuai parameter yang dibuat.</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">API Read</h3>
                        <div class="subheading mb-3">Apa itu API Read ?</div>
                        <p>Setiap template yang memiliki kategory control pasti memiliki API read, lalu apa itu API read dan bagai mana cara menggunakannya ?</p>
                        <p>Api read merupakan link yang terhubung ke database dari projek kamu dalam bentuk json, kamu bisa memanfaatkannya sesuai kebutuhan, link ini hanya bisa membaca data yang ada di database, dan tidak bisa melalukan perubahan atau update ke dalam data base</p>
                        <div class="subheading mb-3">Bagaimana Cara menggunakanya ?</div>
                        <p>Kamu hanya perlu memanggil link tersebut melalui perangkat lunak yang terkoneksi keinternet, lalu lakukanlah reload link agar didapatkan update data sesuai rentan waktu yang kamu inginkan, lalu gunakan data yang kamu dapat dari link tersebut sesuai kebutuhan.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Fitur didalam kategory control</span></div>
                </div>
        </section>
        <hr class="m-0" />
        <!-- monitoring-->
        <section class="resume-section" id="monitoring">
            <div class="resume-section-content">
                <h2 class="mb-5">Monitoring</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <hr>
                        <h3 class="mb-0">Pendahuluan</h3>
                        <div class="subheading mb-3">kategory Monitoring</div>
                        <p>kategory ini memungkinkan kamu membuat projek monitoring, dengan UI/UX yang sudah disediakan maupun melalui link API Read</p>
                        <div class="subheading mb-3">Apa saja yang bisa dilakukan ?</div>
                        <p>Kamu bisa membaca atau melihat data projek kamu kapan saja secara instan dengan bantuan tempalate yang mempermudah kamu dalam melihat data projek kamu dengan tampilan yang bisa kamu pilih sesuai keinginan.</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">API Write</h3>
                        <div class="subheading mb-3">Apa itu API Read ?</div>
                        <p>Setiap template yang memiliki kategory monitoring pasti memiliki API write, lalu apa itu API read dan bagai mana cara menggunakannya ?</p>
                        <p>Api write merupakan URI yang memungkinkan kamu dapat memanipulasi data yang ada didalam database secara instan. </p>
                        <div class="subheading mb-3">Bagaimana Cara menggunakanya ?</div>
                        <p>Kamu hanya menambahkan parameter field diakhir API write tersebut</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Fitur didalam kategory control</span></div>
                </div>
        </section>
        <hr class="m-0" />
        <!-- ALL-->
        <section class="resume-section" id="skills">
        <div class="resume-section-content">
                <h2 class="mb-5">All</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <hr>
                        <h3 class="mb-0">Pendahuluan</h3>
                        <div class="subheading mb-3">kategory All</div>
                        <p>kategory adalah kategory yang menggabungkan fitur dari semua kategory yang ada.</p>
                        <div class="subheading mb-3">Apa saja yang bisa dilakukan ?</div>
                        <p>Kamu bisa mengupdate atau melihat data projek kamu kapan saja secara instan dengan bantuan tempalate yang mempermudah kamu dalam melihat data projek kamu dengan tampilan yang bisa kamu pilih sesuai keinginan.</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Memiliki dua link API</h3>
                        <div class="subheading mb-3">Bisa melakukan control dan monitoring</div>
                        <p>memiliki fitur control dan monitoring.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Fitur didalam kategory all</span></div>
                </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Build Apps</h2>
                <div class="subheading mb-3">Public View</div>
                <p>Kamu bisa menjadikan projekmu menjadi sebuah aplikasi menggukan tools dari pihak ketiga, kamu hanya perlu menggunakan web view untuk merender projek kamu, tersedia Public View yang bisa kamu gunakan untuk aplikasi mu yang ingin berdiri sendiri tanpa adanya authentikasi login.</p>
                <hr>
                <div class="subheading mb-3">menu advance</div>
                <p>Memungkinkan kamu untuk membuat projek yang lebih profesional, kamu bisa membuat menu halaman awal dan lainya lalu menggabungkan dengan projek kamu, kamu bisa langsung mengnjadikan projek ini menjadi aplikasi android dengan cara mengkonvert URI Public View yang sudah disediakan, atau kamu bisa menggunakan tools webview untuk membuild secara gratis.</p>
                <hr>
                <div class="subheading mb-3">Build App</div>
                <h5>COMING SOON......</h5>
                <p>Nantikan fitur ini semoga ceoat terealisasikan. fitur ini dapat membuil projek kamu menjadi apllikasi atau biasa disebut PWA, tanpa memerlukan pihak luar untuk membuildnya.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Contoh Projek IoT</h2>
                <a href="#" class="btn-lg btn-primary">Contoh Projek</a>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script>
        /*!
         * Start Bootstrap - Resume v6.0.1 (https://startbootstrap.com/template-overviews/resume)
         * Copyright 2013-2020 Start Bootstrap
         * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
         */
        (function($) {
            "use strict"; // Start of use strict

            // Smooth scrolling using jQuery easing
            $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
                if (
                    location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                    location.hostname == this.hostname
                ) {
                    var target = $(this.hash);
                    target = target.length ?
                        target :
                        $("[name=" + this.hash.slice(1) + "]");
                    if (target.length) {
                        $("html, body").animate({
                                scrollTop: target.offset().top,
                            },
                            1000,
                            "easeInOutExpo"
                        );
                        return false;
                    }
                }
            });

            // Closes responsive menu when a scroll trigger link is clicked
            $(".js-scroll-trigger").click(function() {
                $(".navbar-collapse").collapse("hide");
            });

            // Activate scrollspy to add active class to navbar items on scroll
            $("body").scrollspy({
                target: "#sideNav",
            });
        })(jQuery); // End of use strict
    </script>
</body>

</html>