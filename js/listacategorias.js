
document.addEventListener('DOMContentLoaded', function () {
    ListarCategorias();
    ListaTendencia();
    ListarTamano();
 /*   ListaRango();*/
});

const insertdata = document.querySelector('.articles-section');
const titleweb = document.querySelector(".shop-title");
const titlemovil = document.querySelector(".shop-title-mobile");
const contentcat = document.querySelector(".contenedor_categorias");
const contenttam = document.querySelector(".contenedor_tamano");
const rango = document.querySelector(".js-range-slider");

/* Template Item*/
const templateCategory = document.getElementById('template-catlist').content;
const fragmentHome = document.createDocumentFragment();


async function ListarCategorias(){
    await fetch("../controladores/ajaxListaCategorias.php?op=listar")
    .then(response => response.json())
    .then(data=>{
        data.forEach(e=> {
            templateCategory.querySelector('a').setAttribute('class',"a");
            templateCategory.querySelector('a').setAttribute('data-id',e.cat_id);
            templateCategory.querySelector('a').textContent = e.cat_nombre;
            const clone = templateCategory.cloneNode(true);
            fragmentHome.appendChild(clone);
        });
        contentcat.appendChild(fragmentHome);
    });
    

}

async function ListarTamano(){
    await fetch("../controladores/ajaxListaTamano.php?op=listar")
    .then(response => response.json())
    .then(data=>{
      
        data.forEach(e=> {
            
            templateCategory.querySelector('a').setAttribute('class',"a");
            templateCategory.querySelector('a').setAttribute('data-id',e.pro_tamano);
            templateCategory.querySelector('a').textContent = e.pro_tamano;
            const clone = templateCategory.cloneNode(true);
            fragmentHome.appendChild(clone);
        });
        contenttam.appendChild(fragmentHome);
        console.log(fragmentHome);
    });
}

function ListaTendencia() {
    $.post("../controladores/ajaxListaCategorias.php?op=listarTendencia", {}, function(respuesta) {
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
            $(".articles-section").append(cadena);
        }
    });
    
    $.post("../controladores/ajaxListaCategorias.php?op=ImgTendencia&id="+0, {}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
       
        const tendencia="<img src='"+data[0]["tendencia"]+"' alt='' style='width:100%'>";
        $(".shop-title").html(tendencia);
        $(".shop-title-mobile").html(tendencia);
    });
        
}
    

  
    
    
