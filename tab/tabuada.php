<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
      $n = isset($_GET["num"])?$_GET["num"]:0;
      $t = 1;
      do{ 
      	$r = $n * $t;
      	$t++;
      	echo "$r<br/>";
                
    



      }while($t<=10);





	?>

</body>
</html>