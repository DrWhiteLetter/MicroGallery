<?php

class MicroGallery {
  public $imgDir = 'img/';
  public $templDir = 'templates/';

  function getImages() {
    $images = array();
    $dir = opendir($this->imgDir);
    $extensions = array("jpg", "bmp", "gif", "jpeg", "png");

    while ( ($file = readdir($dir)) !== false ) {
      $fExt = pathinfo($file, PATHINFO_EXTENSION);
      if ( in_array($fExt, $extensions) ) {
        $images[] = $file;
      }
    }
    return $images;
  }

  function showGallery() {
    $html = array();
    $templateItem = file_get_contents($this->templDir."imageItem.html");
    $images = $this->getImages();
    foreach ( $images as $item ) {
      $tmp = $templateItem;
      $html[] = preg_replace("/\[\[image_path\]\]/", $this->imgDir.$item, $tmp);
    }
    echo implode($html);
  }
}
