<?php

class MicroGallery {
  public $imgDir = 'img/';
  public $templdir = 'templates/';

  function getImages() {
    $images = array();
    $dir = opendir($this->imgDir);
    $extensions = array("jpg", "bmp", "gif", "jpeg", "png");

    while(($file = readdir($dir)) !== false){
      $fExt = pathinfo($file, PATHINFO_EXTENSION);
      if(in_array($fExt, $extensions){
        $images[] = $file;
      }
    }
    return $images;
  }

  function showGallery() {
    $html = array();
    $templateItem = file_get_contents($this->templates."imageItem.html");
    $images = $this->getImages();
    foreach ( $images as $item ) {
      $tmp = $templateItem;
      $html[] = preg_replace("[[image]]", $item, $tmp);
    }
    echo implode($html);
  }
}
