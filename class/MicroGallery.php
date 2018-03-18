<?php

class MicroGallery {
  public $imgDir = 'img/';
  public $templDir = 'templates/';
  public $sortReverse = true;
  public $maxItems = 10;

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
    if ( $this->sortReverse ) {
      $images = array_reverse($images);
    }
    return $images;
  }

  function showGallery() {
    $html = array();
    $templateItem = file_get_contents($this->templDir."imageItem.html");
    $images = $this->getImages();
    $i = 0;
    foreach ( $images as $item ) {
      $tmp = $templateItem;
      $tmp = preg_replace("/\[\[image_path\]\]/", $this->imgDir.$item, $tmp);
      $tmp = preg_replace("/\[\[image_name\]\]/", $item, $tmp);
      $html[] = $tmp;

      // Max. Items
      $i++;
      if ( $i >= $this->maxItems && $this->maxItems != 0 ) {
        break;
      }
    }
    echo implode($html);
  }
}
