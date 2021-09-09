<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$n1=isset($_GET["num1"])?$_GET["num1"]:0;
$n2=isset($_GET["num2"])?$_GET["num2"]:0;
$i=isset($_GET["increm"])?$_GET["increm"]:0;
if($n1>$n2){
   while($n1>$n2){
         $n1 = $n1 - $i;
         echo "$n1<br/>";
   }
}
if($n1<$n2){
   while($n1<$n2){
    $n1 = $n1 + $i;
    echo "$n1 <br/>";
   }
}
if($n1==$n2){
   echo "Numeros iguais";

}



?>


</body>
</html>