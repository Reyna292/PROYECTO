<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $fecha = $_POST["val-fecha"];
    $hora = $_POST["hora"];
    $consola = $_POST["val-consola"];
    $precioc = $_POST["val-precioC"];
    $juego = $_POST["val-juego"];
    $accesorios = $_POST["val-accesorios"];
    $precio = $_POST["val-precio"];
    $total= $_POST["val-total"];
    $monedass=$_POST["val-monedas"];
    $jugador=$_POST["val-jugador"];

  
       
        $consulta = "INSERT INTO rentas(fecha,hora,consola,juego,accesorios,acc_descripcion,renta_descripcion,total) VALUES ('$fecha','$hora','$consola','$juego','$accesorios','$precio','$precioc','$total')";
      
         $resultado=mysqli_query($link, $consulta);
$consulta2="INSERT INTO gamers(monedas)values('$monedass') where namer_tag = ".$jugador.";";

         $resultado2=mysqli_query($link, $consulta2);


       
}
    
?>







