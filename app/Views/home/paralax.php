 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>IoTHME</title>
     <link rel="shortcut icon" type="image/png" href="<?= base_url('/favicon.ico'); ?>" />
     <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/home/css/style.css">
     <!-- Custom Fonts -->
     <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="<?= base_url('assets') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

     <script src="<?= base_url('assets') ?>/home/js/jquery.js" type="text/javascript"></script>
     <script src="<?= base_url('assets') ?>/home/js/jquery.nicescroll.min.js" type="text/javascript"></script>
     <script src="<?= base_url('assets') ?>/home/js/parallaxImg.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/home/css/demotheme.css">
     
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
     <script type="text/javascript">
         $(document).on("ready", function() {
             var parallaxSettings = {
                 initialOpacity: 1, //from 0 to 1, e.g. 0.34 is a valid value. 0 = transparent, 1 = Opaque
                 opacitySpeed: 0.1, //values from 0.01 to 1 -> 0.01: slowly appears on screen; 1: appears as soon as the user scrolls 1px
                 pageLoader: true
             };

             parallaxImgScroll(parallaxSettings);
         });
     </script>

 </head>

 <?php
    $session = session();
    ?>

 <body>
     <header>
         <?= $this->include('layout/navbar'); ?>
     </header>
     <section id="section">
         <article id="article" class="parallax-img-container">
             <h1>ITERA IoT HME</h1>
             <h3>It's Free you can make an Internet of Think project here</h3>

             <!-- images for parallax -->
             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-02.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="1.2" data-ps-vertical-position="-20" data-ps-horizontal-position="5" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-02.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.6" data-ps-vertical-position="-50" data-ps-horizontal-position="30" />


             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1.5" data-ps-speed="1" data-ps-vertical-position="-100" data-ps-horizontal-position="0" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.3" data-ps-vertical-position="-310" data-ps-horizontal-position="0" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.2" data-ps-vertical-position="-250" data-ps-horizontal-position="0" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/smoke-01.png" class="parallax-move" data-ps-z-index="1" data-ps-speed="0.2" data-ps-vertical-position="-400" data-ps-horizontal-position="30" />

             <img src="<?= base_url('assets') ?>/home/img/assassins/ironman.png" class="parallax-move" data-ps-z-index="3" data-ps-speed="1" data-ps-vertical-position="-200" data-ps-horizontal-position="0" />


         </article>
     </section>
     <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6 px-10">
                        <a class="portfolio-box"  href="<?= base_url('manual/index') ?>">
                            <img class="img-fluid" src="<?= base_url('assets') ?>/img/default.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">All</div>
                                <div class="project-name">Default</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-10">
                        <a class="portfolio-box" href="<?= base_url('lampu/index') ?>">
                            <img class="img-fluid" src="<?= base_url('assets') ?>/img/lampu.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Control</div>
                                <div class="project-name">Control Sederhana</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-10">
                        <a class="portfolio-box" href="<?= base_url('gauge/index') ?>">
                        <img class="img-fluid" src="<?= base_url('assets') ?>/img/gauge.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Monitoring</div>
                                <div class="project-name">Gauge</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-10">
                        <a class="portfolio-box" href="<?= base_url('grafik/index') ?>">
                        <img class="img-fluid" width="auto" height="auto" src="<?= base_url('assets') ?>/img/grafik.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Monitoring</div>
                                <div class="project-name">Grafik</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-10">
                        <a class="portfolio-box" href="<?= base_url('dokumentasi') ;?>">
                            <img class="img-fluid" src="<?= base_url('assets') ?>/img/dokumentasi.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Example</div>
                                <div class="project-name">Dokumentasi</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 p-10">
                        <a class="portfolio-box" href="<?= site_url('advance') ;?>">
                        <img class="img-fluid" src="<?= base_url('assets') ?>/img/andvance.jpg" alt="">
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">All</div>
                                <div class="project-name">Advance</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Footer-->
        <footer class="bg-dark py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © IoTHME 2020</div></div>
        </footer>
     <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>