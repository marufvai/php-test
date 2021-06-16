<?php 
/*            */  
function Functionb($learn, $mair)
{
echo "$learn  <br>";
echo "$mair";
}



$vai = "mor";
switch ($vai) {
  case 'mor';
  echo "slacha";
  break;
  case 'mure';
  echo "muri kha";
  break;
  default:
  echo " no case mached";
  break;

}

$m = 5;
  while ($m <20) {
        echo "number is $m <br>";
        $m++;
  }


  $r = 20;
  do{
    echo " the numver is  $r <br>";
    $r--;
  } while ($r >= 5);

  for ($i= 20; $i<59; $i++){
    echo " for loop $i <br>";


$names = array('rohim', 'kim','sofiq', 'jobbar');
  foreach ($names as $row){
    echo " $row <br>";
};         

  };


  Functionb(" muri kha halar put", "hat pao dimu");   
  $name = array('Rohim', 'korim', 'Abul', 'kasem');
  $roni = count($name);
  for ($i=0; $i < $roni; $i++){
    echo $name[$i];
  }
    
  $a = 411;
  $a= 5;


 
echo "today".date('m-y-d');
echo"<br>";
date_default_timezone_set('Asia/Dhaka');
echo date("h:i  a");
echo date("l")  ;

require "slider/slider.php";   
 readfile("vai.txt") ;
echo rand(10000,99999);
echo "<br>";
echo cos(0);
$num = 10;
$num++;
$num++;
$num++;
$num++;
$num--;
$num++;
$num--;
$num++;
$num++;
$num--;
$num++;
$num++;
$num++;
echo "$num"; 
echo 20%7 ;
define ('VAI','Hell am Vai','true');
$nnaa = 10;




 $a ='Maruf VAI';
$b = "/Vai/i";
$c = 'Sheikh';
$d = preg_split("//",$a);
print_r($d);
echo preg_replace($b,$c,$a);   


?>

<!--

<form action="" method="post">
<input type="text" name="name" placeholder="name"><br><br>
<input type="emai;" name="email" placeholder="email" ><br><br>
<input type="text" name="subject" placeholder="Subject"><br><br>
<textarea name="massage"  id="" cols="30" rows="10"></textarea><br><br>
<input type="submit" name="btn" id="">

 
</form>
