<?php

class MicroGallery {
  public $imgDir = 'img/';
  public $templDir = 'templates/';
  public $sortReverse = false; // Nur wenn die Sortierung nicht nach der Zeit erfolgt!
  public $sortByTime = true;
  public $maxItems = 10;

  function getImages() {
    $images = array();
    $times = array();
    $dir = opendir($this->imgDir);
    $extensions = array("jpg", "bmp", "gif", "jpeg", "png");

    while ( ($file = readdir($dir)) !== false ) {
      $fExt = pathinfo($file, PATHINFO_EXTENSION);
      if ( in_array($fExt, $extensions) ) {
        $images[] = $file;
        $times[] = filemtime($this->imgDir . '/' . $file);
      }
    }
    if ( $this->sortReverse && !$this->sortByTime ) {
      $images = array_reverse($images);
    }
    if ( $this->sortByTime ) {
      array_multisort($images, SORT_DESC, $times);
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
