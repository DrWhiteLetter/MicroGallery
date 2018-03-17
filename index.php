<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/microGallery.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>

  <title>MicroGallery</title>
<head>
<body>

  <div id="page" class="container">

    <!-- Headline -->
    <h1>MicroGallery</h1>

    <div class="row">
      <!-- Init and start the MicroGallery -->
      <?php
      include __DIR__."/class/MicroGallery.php";
      $g = new MicroGallery();
      $g->showGallery();
      ?>
    </div>
  </div>

</body>
</html>
