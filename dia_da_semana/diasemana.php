<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
     <?php 
       $dia = isset($_GET["diadasemana"])?$_GET['diadasemana']:0;
       switch($dia){
  		  case 2:
  		  case 3:
  		  case 4:
  		  case 5:
  		  case 6:
  		     echo "vai pra escola caralho";
  		     break;
  		  case 1:
  		  case 7:
  		     echo "ta de folga pai";
  		     break;
  		  default:
  		     echo "dia da semana invalido cabeça de pica";  	
       }






     ?>
     <a href="javascript:history.go(-1)">Go back</a>






	</body>
</html>