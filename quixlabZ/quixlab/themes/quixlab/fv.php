 <?php 
 	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution1");
	 $salida = "";
     if(isset($_POST['id'])){
         $var = $link->real_escape_string($_POST['id']);     
      }
      echo "var   " . $var;
         $query2 = "SELECT monedas FROM gamers WHERE id=".$var.";";   
         $resultado = mysqli_query($link, $query2);
        echo "QUERY   " . $query2;
		echo " RESULTADO1  " . $resultado;


	if($resultado -> num_rows > 0){
		echo " RESULTADO  " . $resultado;
		$ver = $resultado -> fetch_assoc();
		$salida.= $ver['monedas'];
	
	}

	echo $salida;
	$link -> close();
 ?>