<!DOCTYPE html>
<html>
 <head>
  <title>Lesson 10</title>
 </head>
 <body>

<?php
 echo "l;kdls;ljjdfg;lkkjdfgs;ljhhdfg;ljhfd<br>";
 echo "l;kdls;ljjdfg;lkkjdfgs;ljhhdfg;ljhfd<br>";

 $a=1;
 $b="This is a string";
 $c=1.18;

 $d=$b."<br>".$b."<br>".$b."<br>";

 echo $d;

 $arr=array( 1=>"Monday", 2=>3.14, 3=>"Wednseday" );

 echo $arr[4]."<br>";

 $arr[2]="Friday";
 $arr[]="Saturday";

 echo $arr[4]."<br>";

 $arr2[]="AB";
 $arr2[]="BVV";

 $arr2=array(0=>"AB",1=>"BVV");

 echo $arr2[1]."<br>";

 echo '$b=$b<br>';

 $arr3=array(
             "one"=>"banana",
             "two"=>"orange",
             "three"=>"tomato"
            );

 $massiv="arr";

 if ($massiv=="arr")
 {
  foreach ($arr as $kk=>$vv)
  {
   echo "arr[".$kk."]=".$vv."<br>\n";
  }
 }
 else if ($massiv=="arr2")
 {
  foreach ($arr2 as $kk=>$vv)
  {
   echo "arr2[".$kk."]=".$vv."<br>\n";
  }
 }
 else
 {
  foreach ($arr3 as $kk=>$vv)
  {
   echo "arr3[".$kk."]=".$vv."<br>\n";
  }
 }

 echo "massiv=<b>".$massiv."</b><br>\n";

echo "<br>\n";

for ($i=1;$i<=4;$i=$i+1)
{
 echo "arr[".$i."]=".$arr[$i]."<br>\n";
}

echo "<br>\n";

foreach($arr3 as $kk=>$vv)
{
 echo "arr3[".$kk."]=".$vv."<br>";
}



echo "<br>\n";

foreach ($_GET as $kk=>$vv)
{
 echo '$_GET['.$kk.']='.$vv."<br>\n";
}

?>

 </body>
</html>