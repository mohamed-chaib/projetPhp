
  <?php
  require_once 'User.php';
$user =new User;
  echo User::instance();
  function rec(){
 static $i=1;
 if($i>10){
  return;
 }
 $i++;
 echo $i;
 rec();
  }
  rec()
?>
