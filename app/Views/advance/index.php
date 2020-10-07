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
  <link rel="stylesheet" href="<?= base_url('assets') ;?>/advance/example/index.css" type="text/css" />
  <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= base_url('assets') ;?>/advance/src/dragDropAnnotate.min.css" type="text/css" />
  <script src="<?= base_url('assets') ;?>/advance/src/dragDropAnnotate.min.js"></script>

  <script>
    var anno;

    $(document).ready(function (event, annotation) {
  
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
        $('#isi').html("<div>"+annotation.id+ "</div><div>"+annotation.text+ "</div><div>"+annotation.width+ "</div><div>"+annotation.height+ "</div><div>"+annotation.position.center.x+ "</div>");
      });

      anno.on('onAnnotationUpdated', function (event, annotation) {
        console.log(annotation);
        $('#isi').html("<div>"+annotation.id+ "</div><div>"+annotation.text+ "</div><div>"+annotation.width+ "</div><div>"+annotation.height+ "</div><div>"+annotation.position.center.x+ "</div>");
      });

      anno.on('onAnnotationRemoved', function (event, annotation) {
        console.log(annotation);
      });

      var myAnnotation = {
        <div class="annotation" annotation-text="layout" annotation-width="160" annotation-height="250" annotation-id="2">2 -

      }
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
    <div class="annotation" annotation-text="layout" annotation-width="80" annotation-height="125" annotation-id="1">1 -
      Layout Horizontal
    </div>
    <div class="annotation" annotation-text="layout" annotation-width="160" annotation-height="250" annotation-id="2">2 -
      Layout Vertikal
    </div>

    <h3>Komponen Control</h3>
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/gaugeanotation.jpg" annotation-text="gauge" annotation-width="250" annotation-height="150" style="height:auto" annotation-id="3"/>
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/gaugeanotation.jpg" annotation-text="gauge2" style="height:auto" />
    <img class="annotation" src="<?= base_url('assets') ;?>/advance/example/imageAnnotations/gaugeanotation.jpg" annotation-text="gauge3" style="height:auto" />
  </div>



  <!-- main  -->

  <div class="main">
    <h2>Tampilan UI/UX</h2>
    <div>
      <div style="margin-top: 50px;" id="showPixel">[x: 0 - y: 0]</div>
      <div class="smartphone">
      <img id="imageExample" src="<?= base_url('assets') ;?>/advance/example/bgview.png" height="505px" width="320px"/>
   </div>
  </div>


  <!-- navigasi kanan -->
  <div class="sidekanannav">
    <h3>Component setting</h3>
    <hr>
    <div id="isi"></div>
    <div id="control">
    
    </div>
    <button onclick="anno.hideAnnotations()">Hide annotations</button>
    <button onclick="anno.showAnnotations()">Show annotations</button>
   
      
    <button id="submit" class="btn btn-success">Create</button>
  </div>



</body>

</html>