<?php

class MicroGallery {
  public $imgDir = '../img/';
  public $templdir = '../templates/';

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
    $images = $this->getImages();
    var_dump($images);
  }
}
