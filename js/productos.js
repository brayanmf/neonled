$(document).ready(function() {
    DetalleProducto();
    /*
    $("#precio1").hide();
    $("#producto1").hide();
    $("#tamano1").hide();
    $("#cliente").hide();
    */
});

function DetalleProducto(){
    var prod = document.getElementById("producto").value;
    //console.log(prod);
    $.post("../controladores/ajaxProductos.php?op=detalleProducto", {prod:prod}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        const imagen="<img class='image-led' id='imagen' src='"+data["imagen"]+"' alt='Imagen del Producto LED'>";
        $(".box-imagen").html(imagen);
        $("#nombreproducto").text(data.nombre);
        $("#precio").text("S/. "+data.precio);
        $("#tamano").text(data.tamano);

        $("#precio1").val(data.precio);
        $("#producto1").val(data.nombre);
        $("#tamano1").val(data.tamano);
    });
}


function Atras() {
  window.history.back();
}
