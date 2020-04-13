 <?php 
 	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution1");
	 $salida = "";
     if(isset($_POST['id'])){
         $var = $link->real_escape_string($_POST['id']);     
      }
      echo "var  fv " . $var;
         $query = "SELECT monedas FROM gamers WHERE id=".$var.";";   
         $resultado = mysqli_query($link, $query);
        echo " QUERY   " . $query;
		echo " RESULTADO1fv  " . $resultado;


	if($resultado -> num_rows > 0){
		echo " RESULTADO2fv " . $resultado;
		$ver = $resultado -> fetch_assoc();
		$salida.= $ver['monedas'];
	
	}

	echo $salida;
	$link -> close();
 ?>