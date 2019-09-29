<?php
/**
 *default 'blog' function is called automatically...
 *it works when the auto assets is 'on' in config.php
 */
class Blog extends Main
{

  public function blog()
  {
    parent::__construct();
    echo 'Blogs';
    return false;

  }
  public function News(){
      echo 'News';
      return false;
  }
  public function Sub($arg = false) {
      
      echo 'sub news';
      echo $arg;
      return false;
      
      
  }
}


 ?>
