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
    <!-- Cod Box Copy begin -->
    <link href="<?= base_url('assets') ?>/Copy-To-Clipboard/prism/prism.min.css" rel="stylesheet">
        <link href="<?= base_url('assets') ?>/Copy-To-Clipboard/code-box-copy/css/code-box-copy.css" rel="stylesheet">
        <script src="<?= base_url('assets') ?>/Copy-To-Clipboard/prism/prism.min.js"></script>
        <script src="<?= base_url('assets') ?>/Copy-To-Clipboard/clipboard/clipboard.min.js"></script>
        <script src="<?= base_url('assets') ?>/Copy-To-Clipboard/code-box-copy/js/code-box-copy.js"></script>
        <!-- Cod Box Copy end -->
        
    
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
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Quick start</a></li>
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
                <p  align=”justify” class="lead mb-5">ITERAIOTHME adalah sebuat platfrom IoT yang dibuat untuk memenuhi kebutuhan dari pengembangan alat berbasis IoT diindonesia. ITERAIOTHME dibuat dengan latar belakang masalah yang dialami mahasiswa karena kesulitan dalam membuat server dan aplikasi mobile untuk monitoring maupun pengontrolan berbasis internet, karena itu kami hadir dan menyediakan platfrom IoT yang dapat membundel masalah tersebut dengan membuat banyak template projek dengan interface yang dapat sesuaikan sesuai kebutuhan, lalu kami juga menawarkan menu advance untuk penyesuaian interface yang lebih fleksibel, lalu kami menyediakan link public view untuk projek yang dibuat agar bisa dibuild menjadi aplikasi mobile bisa melalui convert ataupun menggunakan class webView, harapan kami kedepannya platfrom ini dapat membuild projek user menjadi app mandiri sesuai kehendak user.</p>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
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
                <p>Memungkinkan kamu untuk membuat projek yang lebih professional dan flexibel, kamu bisa membuat membuat interface projek kamu sesuai keinginan, kamu haya perlu mendrag komponen yang disediakan dan meletekannya ditempat yang kamu inginkan, kamu juga dapat mengatur warna, ukuran dan lainya.</p>
                <hr>
                <div class="subheading mb-3">Build App</div>
                <h5>COMING SOON......</h5>
                <p>Nantikan fitur ini semoga ceoat terealisasikan. fitur ini dapat membuild projek kamu menjadi apllikasi mobile, tanpa memerlukan pihak luar untuk membuildnya.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Contoh Projek IoT</h2>
                <div class="subheading mb-3">Quickstart</div>
                <p>Di bawah ini adalah beberapa contoh kode yang dapat anda gunakan untuk mengirim data dari proyek yang telah anda buat ke ITERAIOTHME.</p>
                <ul>
                    <li>
                        <h5>ESP 32 (Wi-Fi)</h5>
                    </li>
                </ul>
                <h6>Control</h6>
                <div class="code-box-copy">
                    <button class="code-box-copy__btn" data-clipboard-target="#example-head" title="Copy"></button>
                    <pre><code class="language-html" id="example-head">
#include <'ESP8266WiFi.h'>
#include <'WiFiClient.h'> 
#include <'ESP8266HTTPClient.h'>
#include <'ArduinoJson.h'>

const char* wifiName = "iteraiothme"; //sesuaikan dengan ssid wifi kamu
const char* wifiPass = "iterabisa"; //sesuaikan dengan password wifi kamu

//Web Server address to read/write from 
const char *host = "https://iteraiothme/api/";//sesuiakan dengan api dari projek kamu
#define LED_PIN 2
void setup() {
  pinMode(2, OUTPUT);
  digitalWrite(2, LOW);
  Serial.begin(115200);
  delay(10);
  Serial.println();
  
  Serial.print("Connecting to ");
  Serial.println(wifiName);

  WiFi.begin(wifiName, wifiPass);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());   //You can get IP address assigned to ESP
}

void loop() {
  HTTPClient http;    //Declare object of class HTTPClient

  Serial.print("Request Link:");
  Serial.println(host);
  
  http.begin(host);     //Specify request destination
  
  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload from server

  Serial.print("Response Code:"); //200 is OK
  Serial.println(httpCode);   //Print HTTP return code

  Serial.print("Returned data from Server:");
  Serial.println(payload);    //Print request response payload
  
  if(httpCode == 200)
  {
    // Allocate JsonBuffer
    // Use arduinojson.org/assistant to compute the capacity.
    const size_t capacity = JSON_OBJECT_SIZE(3) + JSON_ARRAY_SIZE(2) + 60;
    DynamicJsonBuffer jsonBuffer(capacity);
  
   // Parse JSON object
    JsonObject& root = jsonBuffer.parseObject(payload);
    if (!root.success()) {
      Serial.println(F("Parsing failed!"));
      return;
    }
  
    // Decode JSON/Extract values
     const char* namaprojek = root["namaprojek"];
     const char* created = root["created_by"];
     int lampu_1 = root["datafield_1"]; //sesuaikan dengan banyak field control yang kamu aktifkan dan yang akan kamu gunakan 
  
    // Decode JSON/Extract values
    Serial.println(F("Response:"));
    Serial.println(namaprojek);
    Serial.println(created);


    Serial.println(lampu_1);
 //sesuaikan dengan banyak field control yang kamu aktifkan dan yang akan kamu gunakan 
     if(lampu_1 == 1){
      digitalWrite(2, HIGH);
       Serial.println("lampu 1 on");
      }
      else if (lampu_1 == 0){
      digitalWrite(2, LOW);
      Serial.println("lampu 1 off");
        }

    
  }
  else
  {
    Serial.println("Error in response");
  }

  http.end();  //Close connection
  
  delay(5000);  //GET Data at every 5 seconds
}
                    </code></pre>
                </div>
                <h6>Monitoring</h6>
                <div class="code-box-copy">
                    <button class="code-box-copy__btn" data-clipboard-target="#example-head" title="Copy"></button>
                    <pre><code class="language-html" id="example-head">

#include <'ESP8266WiFi.h'>
#include <'ESP8266HTTPClient.h'>
#include <'WiFiClient.h'>

const char* ssid = "iteraiothme"; //sesuaikan ssid wifi kalian
const char* password = "iterabisa"; //masukkan passwor wifi kalian

//Your Domain name with URL path or IP address with path
String serverName = "https://iteraiothme.com/api/";//ganti dengan api dari projek kamu

// the following variables are unsigned longs because the time, measured in
// milliseconds, will quickly become a bigger number than can be stored in an int.
unsigned long lastTime = 0;
// Timer set to 10 minutes (600000)
//unsigned long timerDelay = 600000;
// Set timer to 5 seconds (5000)
unsigned long timerDelay = 5000;

void setup() {
  Serial.begin(115200); 

  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());
 
  Serial.println("Timer set to 5 seconds (timerDelay variable), it will take 5 seconds before publishing the first reading.");
}

void loop() {
  //Send an HTTP POST request every 10 minutes
  if ((millis() - lastTime) > timerDelay) {
    //Check WiFi connection status
    if(WiFi.status()== WL_CONNECTED){
      HTTPClient http;

      String serverPath = serverName + "?datafield_1=80&datafield_2=30&datafield_3=50"; //mengirim data secara manual 80,30,50
//kamu bisa merubahnya sesuai kebutuhan
//untuk merubah gunakan --> datafield_'field ke berapa'='data yang dikirimkan';
//datafield_'field ke berapa'sebagai KEY dan data yang dikirimkan sebagai VALUE nya 

      
      // Your Domain name with URL path or IP address with path
      http.begin(serverPath.c_str());
      
      // Send HTTP GET request
      int httpResponseCode = http.GET();
      
      if (httpResponseCode>0) {
        Serial.print("HTTP Response code: ");
        Serial.println(httpResponseCode);
        String payload = http.getString();
        Serial.println(payload);
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
      }
      // Free resources
      http.end();
    }
    else {
      Serial.println("WiFi Disconnected");
    }
    lastTime = millis();
  }
}
                    </code></pre>
                </div>
                <hr>
                <p>Untuk kedepannya ITERAIOTHME akan menyediakan Library untuk ARDUINO yang akan mempermudah user dalam penggunaannya</p>
                <hr>
                <ul>
                    <li>
                        <h5>Cara membuild projek menjadi app</h5>
                    </li>
                </ul>
                <div class="container">
                    <h6>MIT APP INVERTOR</h6>
                    <p>
                        login menggunakan akun kalian, dan buatlah projek baru.
                    </p>
                    <div class="container">                        
                        <img width="100%" src="<?= base_url('assets') ;?>/img/projek.png" alt="">
                    </div>
                    <br>
                    <p>
                        Gunakan fitur webView.
                    </p>
                    <div class="container">
                        <img width="100%" src="<?= base_url('assets') ;?>/img/create.png" alt="">
                    </div>
                    <br>
                    <p>
                        Buka menu block untuk dan rangkailah logic seperti berikut, masukkan kolom url dengan url public view dari projek kamu.
                    </p>
                    <div class="container">
                        <img width="100%" src="<?= base_url('assets') ;?>/img/block.png" alt="">
                    </div>
                    <br>
                    <p>Build App</p>
                    <div class="container">
                        <img width="100%" src="<?= base_url('assets') ;?>/img/build.png" alt="">
                    </div>
                    <br>
                    <p>Setelah menjadi App</p>
                    <div class="container">
                        <img height="20%" src="<?= base_url('assets') ;?>/img/hasil.png" alt="">
                    </div>
                    <br>
                    <p>Kedepannya harapan kami, website ini mampu membuild projek yang dibuat user secara langsung, tanpa menggunakan bantuan dari pihak lain.</p>
                </div>
                    <br>
                <a href="" class="btn-lg btn-primary">Contoh Projek</a>
            </div>
        </section>
    </div>
    <script>
            $('.code-box-copy').codeBoxCopy({
                tooltipText: 'Copied',
                tooltipShowTime: 1000,
                tooltipFadeInTime: 300,
                tooltipFadeOutTime: 300
            });
        </script>
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