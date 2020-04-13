var id = document.getElementById("val-consola").value;;
$(traer(id));
function obtenerID2(){
     id = document.getElementById("val-consola").value;
    console.log("IDD "+id);
    traer(id);
}

function traer(id){
    console.log("ID2 "+id);
    $.ajax({
        url:'./fv3.php',
        type: 'POST',
        dataType: 'html',
        data:{id: id},
    })
    .done(function (respuesta) {
      // $("#val-monedas").html(respuesta);

       console.log("fv3  "+respuesta+ "   sss");
       document.getElementById('val-juego').value =respuesta;
    })
    .fail(function () {
        console.log('error');
    })
}
