$(document).ready(function() {
    
});

$("#agregar_carrito").click(function() {
    AgregarProductoCarrito();
});

function AgregarProductoCarrito() {
    const datos = {
        producto: $('#producto').val(),
        precio:   $('#precio1').val(),
        tamano:   $('#tamano1').val(),
        cantidad: $('#cantidad').val(),
        cliente:  $('#cliente').val(),
        imagen:   $('#imagen').attr("src"), 
    };
    //console.log(datos);

$.post("../controladores/ajaxAgregarProductoCarrito.php?op=agregarproducto", datos, function(respuesta) {
        console.log(respuesta);
            //const data = JSON.parse(respuesta);
            //console.log(data[0]["cliente"]);
            if (respuesta == "guardado") {
                Alertas("Producto agregado al carrito", "", "success");
            }else{
                Alertas("Error, producto al carrito.", "", "error");
            }
            switch (respuesta) {
                case "guardado":
                        Alertas("Producto agregado al carrito", "", "success");
                break;
                
                case "vacio":
                    Alertas("Error, falta completar datos o la cantidad es incorrecta (max 5).", "", "error");
                break;

                case "producto_repetido":
                    Alertas("El producto ya ha sido agregado al carrito.", "", "error");
                break;
                
                default:
                    Alertas("Ha ocurrido un error.", "", "error");
                break;
            }
    });
   
}

//Alertas
function Alertas(titulo, descripcion, tipoAlerta) {
    Swal.fire(titulo, descripcion, tipoAlerta);
}

