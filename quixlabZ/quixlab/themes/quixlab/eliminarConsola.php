<?php  
	
	 $link = new mysqli("localhost","root","","revolution");
	 $salida = "";
	 $sql = "select id,plataforma,serial,cantidad from consolas";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "delete from consolas where id = ".$q.";";
    
	}

	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>

