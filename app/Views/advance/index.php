<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets') ;?>/advance/example/index.css" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= base_url('assets') ;?>/advance/src/dragDropAnnotate.min.css" type="text/css" />
  <script src="<?= base_url('assets') ;?>/advance/src/dragDropAnnotate.min.js"></script>

  <script>
    var anno;

    $(document).ready(function () {

      anno = $("#imageExample").annotable({
        draggable: ".annotation"
      });

      $(".annotation").mouseover(function () {
        anno.highlightAnnotation($(this).attr("annotation-id"));
      });

      anno.on('onMouseMoveOverItem', function (event, coordinate) {
        $('#showPixel').html("[x: " + coordinate.x + " - y: " + coordinate.y + "]");
      });

      anno.on('onAnnotationCreated', function (event, annotation) {
        console.log(annotation);
      });

      anno.on('onAnnotationUpdated', function (event, annotation) {
        console.log(annotation);
      });

      anno.on('onAnnotationRemoved', function (event, annotation) {
        console.log(annotation);
      });

      var myAnnotation = {
        id: 3,
        text: "customAnnotation",
        position: {
          center: { x: 593, y: 353 }
        },
        width: 250,
        height: 400
      };
      anno.addAnnotation(myAnnotation);

      var annos = $(".annotableImage").annotable({ //return array of annotable
        draggable: ".annotation",
        annotationStyle: { //annotation style 
          hiBorderColor: 'red', // border color for highlighted annotation  
          hiBorderSize: 3.2,  //border width for highlighted annotation  [1-12]    
          imageBorder: false, //if false, not show the border on annotation 
        }
      });

      $(".annotableImage").on('onAnnotationCreated', function (event, annotation) {
        console.log(annotation);
      });
    });

  </script>
</head>

<body>
<!-- side nav    -->
  <div class="sidenav">
    <h3>Pilih Komponen</h3>
    <h5><i class="fas fa-feather-alt"></i> Drag and Drop Komponen</h5>
    <div class="annotation" annotation-text="A Dog" annotation-width="500" annotation-height="150" annotation-id="1">1 -
      Layout Horizontal
    </div>
    <div class="annotation" annotation-text="Cat" annotation-width="150" annotation-height="500" annotation-id="2">2 -
      Layout Vertikal
    </div>

    <h3>Komponen Control</h3>
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/Dalmatiner.jpg" annotation-text="Dog" style="height:100px" />
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/BluEye.jpg" annotation-text="Blue eye" style="height:100px" />
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/YellowEye.jpg" annotation-text="Yellow eye" style="height:100px" />
  </div>



  <!-- main  -->

  <div class="main">
    <h2>Tampilan UI/UX</h2>
    <div>
      <button onclick="anno.removeAll('1')">Remove Id 1</button>
      <button onclick="anno.removeAll()">Remove all annotations</button>
      <button onclick="anno.hideAnnotations()">Hide annotations</button>
      <button onclick="anno.showAnnotations()">Show annotations</button>

      <div style="margin-top: 50px;" id="showPixel">[x: 0 - y: 0]</div>
      <img id="imageExample" src="<?= base_url('assets') ;?>/advance/example/784px-Dalmatiner_schw_braun.jpg" width="505">
      <p class="image-caption">
        Die verschiedenen Farben eines Dalmatiners Public Domain. Source:
        <a href="https://commons.wikimedia.org/wiki/File:Dalmatiner_schw_braun.jpg">Wikimedia
          Commons</a>
      </p>
    </div>
            <div class="smartphone ">
                 <div class="content photocromik ">
                     <div class="container">
                         <section class="py-5">
                             <div class="container">
                                 <div class="container text-cenphotocromik ter mb-5">
                                     <h2 class="mb-4 text-center" id="viewNamaProjek"></h2>
                                 </div>
                                 <div class="row pricing" id="mycoba">
                                 </div>
                         </section>
                     </div>
                 </div>
             </div>

    <div style="margin-top: 100px;">
      <img class="annotableImage" src="<?= base_url('assets') ;?>/advance/example/800px-Cat_and_Dog_Game.jpg">
      <p class="image-caption">
        Cat about to play with the dog and his guarded balls. Public Domain. Source:
        <a href="https://commons.wikimedia.org/wiki/File:Cat_and_Dog_Game.jpg">Wikimedia
          Commons</a>
      </p>
    </div>

    <div style="margin-top: 100px;">
      <img class="annotableImage" src="<?= base_url('assets') ;?>/advance/example/712px-June_odd-eyed-cat_cropped.jpg">
      <p class="image-caption">
        A white cat with a one yellow eye and one blue eye. Public Domain. Source:
        <a href="https://commons.wikimedia.org/wiki/File:June_odd-eyed-cat_cropped.jpg">Wikimedia
          Commons</a>
      </p>
    </div>
  </div>
</body>

</html>