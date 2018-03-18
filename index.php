<?php
$configs = include('config.php');
include __DIR__."/class/MicroGallery.php";
?>
<!DOCTYPE html>
<html lang="en">
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

  <title><?=$configs['page']['title']?></title>
<head>
<body>

  <!-- Headline -->
  <header class="fixed-top">
    <div class="container">
      <h1><?=$configs['page']['headline']?></h1>
    </div>
  </header>

  <main role="main" id="page" class="container">

    <div class="row">
      <!-- Init and start the MicroGallery -->
      <?php
      $g = new MicroGallery();
      // Options
      $g->maxItems = $configs['gallery']['maxItems'];
      $g->sortReverse = $configs['gallery']['sortReverse'];
      $g->showGallery();
      ?>
    </div>
  </div>

</body>
</html>
