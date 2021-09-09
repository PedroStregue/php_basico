<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
      $est = isset($_GET["estados"])?$_GET["estados"]:0;
      switch($est){
 		case 16:
 		case 21:
 		case 24:
 		   echo "Você está na região sul<br/>";
 		break; 
 		case 2:
 		case 5:
 		case 6:
 		case 10:
 		case 15:
 		case 17:
 		case 18:
 		case 20:
 		case 26:
 		   echo "voce está na região nordeste<br/>";
 		break;
 		case 1:
 		case 3:
 		case 4:
 		case 14:
 		case 22:
 		case 23:
 		case 27:
 		   echo "voce esta na região norte<br/>";
 		break;
 		case 8:
 		case 13:
 		case 19:
 		case 25:
 		    echo "voce está na região sudeste<br/>";
 		break;
 		case 7:
 		case 9:
 		case 11:
 		case 12:
 		    echo "voce está na região centro oeste<br/>";         
      }





	?>
     <a href="javascript:history.go(-1)">volta pai</a>
</body>
</html>