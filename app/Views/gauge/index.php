<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IoTHME</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('/hme.png'); ?>" />

<script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
<link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://oss.maxcdn.com/libs/normalize-css/3.0.0/normalize.min.css"/>
        <link href="<?= base_url('assets') ?>/css/coming-soon.css" rel="stylesheet">
        <style>
body {
  background: #222;
}
#carbonads a{color:#fff;text-decoration:none}#carbonads a:hover{color:#fff}
        </style>
    </head>
    <body>
    <div class="masthead-bg"> <?= $this->include('layout/navbar'); ?></div>
        <div id="momoland">
            <div class="wrapper">
                        <h1>Gauge</h1>
                        <div class="container">
                            <h3>Buat Projek Monitoring dengan mudah di sini, klik Dokumentasi untuk jika ada kesulitan dalam menggunakannya, klik creat new projek untuk membuat projek baru, dan klik About template untuk memberikan masukan , saran dab bugs yang anda alami agar dapat ditingkatkan lagi kedepannya</h3>
                        </div>
                       
                        <div id="carbon-block"></div>
                    <div>
                    
                             <a href="<?= base_url('dokumentasi/index/gauge'); ?>">
                                 <button class="btn btn-outline-warning btn-lg" type="button" id="submit-button">Documentasion......
                                 </button>
                             </a>
                        
                             <a href="<?= base_url('gauge/created'); ?>">
                                 <button class="btn btn-outline-primary btn-lg" type="button" id="submit-button">Create New Projek
                                 </button>
                             </a>
                         
                             <a href="<?= base_url('aboutTemplate/index/gauge'); ?>">
                                 <button class="btn btn-outline-info btn-lg" type="button" id="submit-button">About Template...
                                 </button>
                             </a>
                    </div>
            </div>
        </div>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <script src="<?= base_url('assets') ?>/js/daisy.js" defer></script>
        <script src="<?= base_url('assets') ?>/js/coming-soon.js" defer></script>
        <script>
        try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
        } catch (error) {
        console.log(error);
        }
        </script>
        <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
