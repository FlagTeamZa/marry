<?php

namespace plugin;

class FileUtils{
  
  public function exists($path){
      return file_exists($path);
  }
  
  public function folder($path){
    mkdir($path);
  }
  
  public function file($path){
    $file = fopen($path,"w");
  }
  
  public function write($path,$content){
    file_put_contents($path,$content);
  }
  
  public function read($path){
    return @file_get_contents($path);
  }
  
}
