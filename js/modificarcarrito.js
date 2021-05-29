$(document).ready(function() {
    ListarCarrito();
    MontoTotal();
    CantidadProducto();
});

function ListarCarrito() {
    const id = $("#cliente").val();
    $.post("../controladores/ajaxModificarCarrito.php?op=listar", {id:id}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<div class='cantidad'><div class='cantidad__section'><div class='cantidad__imagen'><img class='imagen' src='"+data[i]["imagen"]+"' alt=''></div><div class='cantidad__precio'><h2 class='cantidad__titulo'>"+data[i]["producto"]+"</h2><p>S/. "+data[i]["precio"]+"</p></div></div><div class='cantidad__numero'><div class='numeros'><button class='cantidad__link'onclick='DisminuirProducto("+data[i]["id"] +","+data[i]["precio"]+","+data[i]["cantidad"]+")'>-</button><input class='cantidad_producto' value='"+ data[i]["cantidad"]+ "' min='0' /><button class='cantidad__link'onclick='AumentarProducto("+data[i]["id"] +","+data[i]["precio"]+","+data[i]["cantidad"]+")'>+</button></div><a class='link' href='#' onclick='Eliminar("+data[i]["id"]+")'>eliminar</a></div></div>";
            }
            $(".contenedor_carrito").html(cadena);
        } 
    });
}

function MontoTotal() {
    const id = $("#cliente").val();
    $.post("../controladores/ajaxModificarCarrito.php?op=montototal", {id:id}, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "null") {

        }else{
            const data = JSON.parse(respuesta);
            //console.log(data);
            var montoTotal = "<p>Total</p><p>S/. "+data+"</p><input type='hidden' id='montototal' value='"+data+"'>";
            $(".resumen__total").html(montoTotal);
        }
    });
}

function CantidadProducto() {
    const id = $("#cliente").val();
    $.post("../controladores/ajaxModificarCarrito.php?op=cantidadproducto", {id:id}, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "null") {
        }else{
            const data = JSON.parse(respuesta);
            //console.log(data);
            var productoTotal = "<h1 class='main__texto'>Bolsa de compras( "+data+" productos)</h1>";
            $(".main__titulo").html(productoTotal);
        }
    });
}

function AumentarProducto(id,precio,cantidad) {
    //console.log(id);
    const datos = {
        id: id,
        precio:precio,
        cantidad:cantidad,
    };
    //console.log(datos);
    $.post("../controladores/ajaxModificarCarrito.php?op=aumentarproducto",datos, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "Cambio+") {
            CantidadProducto();
            MontoTotal();
            ListarCarrito();
        }else{
            Alertas("Opps...", "Se producido un error", "error");
        }
    });
}

function DisminuirProducto(id,precio,cantidad) {
    const datos = {
        id: id,
        precio:precio,
        cantidad:cantidad,
    };
    //console.log(datos);
    $.post("../controladores/ajaxModificarCarrito.php?op=disminuirproducto",datos, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "Cambio-") {
            CantidadProducto();
            MontoTotal();
            ListarCarrito();
        }else{
            if (respuesta == "cantidad0") {
                Alertas("Error", "La cantidad no puede ser 0, eliminar el producto si desea.", "error");
            }else{
                Alertas("Opps...", "Se producido un error", "error");
            }
            
        }
    });
}


function Eliminar(id){
    //console.log(id);
	Swal.fire({
		icon: "warning",
		title: "¿Desea eliminar este producto?",
		showCancelButton: true,
		confirmButtonColor:"#3085d6",
		cancelButtonColor:"#d33",
  		confirmButtonText:"Eliminar",
  		cancelButtonText:"Cancelar"
	}).then((result) => {
		if (result.isConfirmed) {
			$.post("../controladores/ajaxModificarCarrito.php?op=eliminar", {id:id}, function(response){	
                //console.log(response);
                window.location = '../vistas/bolsa_compras.php';   
            });
		} 
	});	
};




//Alertas
function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}
