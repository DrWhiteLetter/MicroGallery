<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/microGallery.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<head>
<body>

  <div id="page" class="container">
    <div class="row">
      <?php
      include __DIR__."/class/MicroGallery.php";
      $g = new MicroGallery();
      $g->showGallery();
      ?>
    </div>
  </div>

</body>
</html>
