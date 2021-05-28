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
                cadena +="<article class='article-card'><a href='producto.php?pro="+data[i]["id"]+"'><img src='"+data[i]["imagen"]+"' alt=''></a><h3>"+data[i]["nombre"]+"</h3></article>";
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