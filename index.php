<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<head>
<body>

<?php
include __DIR__."/class/MicroGallery.php";
$g = new MicroGallery();
$g->getImages();
?>

</body>
</html>
