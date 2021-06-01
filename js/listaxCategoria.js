$(document).ready(function() {
    ListarCategorias();
    ListaxCategoria();
});

function ListarCategorias() {
    $.post("../controladores/ajaxListaxCategoria.php?op=listar", {}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<li><a href='categorias.php?categoria="+data[i]["cat_id"]+"'>"+data[i]["cat_nombre"]+"</a></li>";
            }
            $(".contenedor_categorias").html(cadena);
        } 
    });
}

function ListaxCategoria() {
    var id = document.getElementById("categoria").value;
    //console.log(id);
    $.post("../controladores/ajaxListaxCategoria.php?op=listarxCategoria", {id:id}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
     
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                var cadena2=""
                for(var z = 0;z < data[i][1].length; z++){
                    cadena2 +="<div class='c' style='background:"+data[i][1][z]["rgb"]+";'></div>"
          
            }
               
            cadena +="<article class='article-card'><a href='producto.php?pro="+data[i][0]["id"]+"'><img src='"+data[i][0]["imagen"]+"' alt=''></a><h3>"+data[i][0]["nombre"]+"</h3><div class='cuadrado'>"+
            cadena2 +"</div><p>"+data[i][0]["precio"]+"</p></article>";
            }
            $(".articles-section").html(cadena);
        }
     
    });
    $.post("../controladores/ajaxListaxCategoria.php?op=ImgCategoria", {id:id}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        const categoria="<img src='"+data[0]["categoria"]+"' alt=''>";
        $(".shop-title").html(categoria);
        $(".shop-title-mobile").html(categoria);
    });
}