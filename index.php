<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
