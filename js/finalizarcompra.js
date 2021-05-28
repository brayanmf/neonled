$(document).ready(function() {
    MontoTotal();
});

function MontoTotal() {
    const id = $("#cliente").val();
    $.post("../controladores/ajaxModificarCarrito.php?op=montototal", {id:id}, function(respuesta){
        //console.log(respuesta);
        if (respuesta == "null") {

        }else{
            const data = JSON.parse(respuesta);
            //console.log(data);
            var subTotal = "<p>Sub-Total Productos</p><span id='subtotal'>S/. "+data+"</span>";
            $(".subtotal").html(subTotal);
            
            var montoTotal = "<p>Total</p><span id='total'>S/. "+data+"</span><input type='hidden' id='monto123' value='"+data+"'>";
            $(".total").html(montoTotal);
        }
    });
}

function Delivery() {
    const check = $("#delivery").val(); //capturo el valor 0 o 1
    const monto = $("#monto123").val(); //captura el valor decimal del monto
    const monto1= parseInt(monto); //el valor decimal del monto esta en entero
    //console.log(total);
    //console.log(check);
    if (check == 0) {
        const total = monto1-15; // resto - 15
        $('#total').html("S/. "+total+".00");
        $('#monto123').val(total);
        $("#delivery").val(1);
    }else{
        const total = monto1+15; // sumo + 15
        $('#total').html("S/. "+total+".00"); 
        $('#monto123').val(total); //aumento en 15 el monto1
        $("#delivery").val(0); 
    }
}
