/*$(document).ready(function() {
    ListarCategorias();
    ListaTendencia();
});*/
/*refactoring */
document.addEventListener('DOMContentLoaded', function () {
    ListarCategorias();
    ListaTendencia();
});

const insertdata = document.querySelector('.articles-section');
const titleweb = document.querySelector(".shop-title");
const titlemovil = document.querySelector(".shop-title-mobile");
const contentcat = document.querySelector(".contenedor_categorias");

/* Template Item*/
const templateCategory = document.getElementById('template-catlist').content;
const fragmentHome = document.createDocumentFragment();

/*function ListarCategorias() {
    $.post("../controladores/ajaxListaCategorias.php?op=listar", {}, function(respuesta) {
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
}*/
async function ListarCategorias(){
    await fetch("../controladores/ajaxListaCategorias.php?op=listar")
    .then(response => response.json())
    .then(data=>{
        data.forEach(e=> {
            templateCategory.querySelector('a').setAttribute('href','categorias.php?categoria='+e.cat_id);
            templateCategory.querySelector('a').textContent = e.cat_nombre;
            const clone = templateCategory.cloneNode(true);
            fragmentHome.appendChild(clone);
        });
        contentcat.appendChild(fragmentHome);
    });
    

}

/*async function  ListaTendencia() {
   await fetch("../controladores/ajaxListaCategorias.php?op=listarTendencia")
    .then(response => response.json())
    .then(data=>{
        data.forEach(e=> {
            templateItems.querySelector('a').setAttribute('href','producto.php?pro='+e.id);
            templateItems.querySelector('img').setAttribute('src', e.imagen);
            templateItems.querySelector('h3').textContent = e.nombre;
            templateItems.querySelector('span').setAttribute('style',`background:${e.color1}`);
            templateItems.querySelector('p').textContent = 'S/.'+e.precio;

            const clone = document.cloneNode(templateItems,true);
            fragment.appendChild(clone);
        });
        insertdata.appendChild(fragment);
       
    });*/


    function ListaTendencia() {
        $.post("../controladores/ajaxListaCategorias.php?op=listarTendencia", {}, function(respuesta) {
            //console.log(respuesta);
            const data = JSON.parse(respuesta);
            //console.log(data);
            var cadena = "";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena +="<article class='article-card'><a href='producto.php?pro="+data[i]["id"]+"'><img src='"+data[i]["imagen"]+"' alt=''></a><h3>"+data[i]["nombre"]+"</h3></article>";
                }
                $(".articles-section").append(cadena);
            }
        });
    
        $.post("../controladores/ajaxListaCategorias.php?op=ImgTendencia", {}, function(respuesta) {
            //console.log(respuesta);
            const data = JSON.parse(respuesta);
            //console.log(data);
            const tendencia="<img src='"+data[0]["tendencia"]+"' alt=''>";
            $(".shop-title").html(tendencia);
            $(".shop-title-mobile").html(tendencia);
        });
        
    }
    

  
    
    
