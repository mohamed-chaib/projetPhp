<?php
class User
{
  public static $name = "mohamed";
  public static function instance(){
    return self::$name;
  }
 
  
}
?>