<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";
	 $sql = "select id,plataforma,serial,cantidad from consolas;";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "SELECT id,plataforma,serial,cantidad FROM consolas WHERE grupo LIKE '%".$q."%'";
		
	}
	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));
/*	$resultado = $conn->query($sql);
	if (!$resultado) {
    trigger_error('Invalid query: ' . $conn->error);
	}*/
	if($resultado -> num_rows > 0){
		$salida.= "<table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>id</th>
                            <th>plataforma</th>
                            <th>serial</th>
                            <th>cantidad</th>
                          
                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['plataforma']."</td>
                                    <td>".$ver['serial']."</td>
                                    <td>".$ver['cantidad']."</td>
                                  
                                    <td><button type='button' value='".$ver['id']."' id='eliminar' onclick='preg(".$ver['id'].");' class='btn btn-primary'>Eliminar
                                    </td>
                                   <td><input type='checkbox' name='keyToDelete' value='".$ver['id']."'</td>
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>