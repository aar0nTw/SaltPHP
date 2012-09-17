<?php


class Salt
{
  static $self_instance;
  public $basePaths = array();
  public function __construct()
  {

  }

  public static function need($files)
  {
    $files = func_get_args();
    Salt::$self_instance ?: Salt::$self_instance = new Salt();
    Salt::$self_instance -> requireSource($files);
  }

  public static function basePath($args)
  {
    Salt::$self_instance ?: Salt::$self_instance = new Salt();
    Salt::$self_instance -> basePaths = func_get_args();
  }

  public function requireSource($files=array())
  {
    //echo $files;
    if (is_array($files)) {
      // code...
      foreach ($files as $file) {
        $file = ltrim($file);
        $file = str_replace('.php','',$file);
        $file = $file.'.php';
        foreach ($this -> basePaths as $dir) {
          $sourcefile = $dir.DIRECTORY_SEPARATOR.$file;
          if(file_exists($sourcefile)){
            require $file;
            return;
          }
        }

        if(file_exists($file))
          require $file;
      }
    }else{
      throw new Exception("Error Processing Request", 1);
    }
  }
}
