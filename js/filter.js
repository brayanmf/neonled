
document.addEventListener('DOMContentLoaded', function () {


const textSearch = document.querySelector('.textSearch');
const textSearched = document.getElementById('textSearch');
const results = document.getElementById("articles-section");
const colorFilter = document.getElementById('contenedor-color');
const btnRecomend = document.querySelector('.recomendado');


const $a=document.querySelector(".contenedor_categorias")
const $b=document.querySelector(".contenedor_tamano");

var id=0;

$a.addEventListener("click", (e)=>{
    id=0
    e.preventDefault();
    if(e.target.classList.contains('a')){
        let id2 = e.target.parentElement.querySelector('.a').dataset.id;
        id=id2;
        results.innerHTML = "";
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=filtertendencia&id='+id2)
            .then(response => response.json())
            .then(data=>{
                pintarItems(data);                
            });
       })();
       (async ()=>{
       await fetch("../controladores/ajaxListaCategorias.php?op=ImgTendencia&id="+id2) 
       .then(response => response.json())
       .then(data=>{
           let img=document.querySelector(".shop-title img")
            let figure=document.querySelector(".shop-title")
            console.log(data[0]["tendencia"]);
            figure.removeChild(img);
            const lista = document.createElement('img');
            lista.setAttribute('src',data[0]["tendencia"]);          
            document.querySelector(".shop-title").appendChild(lista);
            document.querySelector(".shop-title-mobile").appendChild(tendencia);
        })
        })();         
    }
    e.stopPropagation();
});

$b.addEventListener("click", (e)=>{
   
    e.preventDefault();
    if(e.target.classList.contains('a')){
        let id2 = e.target.parentElement.querySelector('.a').dataset.id;

        results.innerHTML = "";
        (async ()=>{
            await fetch('../controladores/ajaxListaTamano.php?op=filtertamano&tamano='+id2)
            .then(response => response.json())
            .then(data=>{
                console.log(data)
                pintarItems(data);                
            });
        })();  
            
     }

     e.stopPropagation();
 });

textSearch.addEventListener("keyup", (e)=>{
    e.preventDefault();
    let  textSearch = textSearched.value;   
    if(textSearch !="" || typeof textSearch !=null || textSearch.length>=1 ){
        results.innerHTML = "";
   
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=prodsearch&serch='+textSearch)
            .then(response => response.json())
            .then(data=>{
                console.log(data)
                pintarItems(data);                
            });
       })();  
        
    }

});

colorFilter.addEventListener('click', (e)=>{
    e.preventDefault();
    if(e.target.classList.contains('bola')){
        let idcolorFilter = e.target.parentElement.querySelector('.bola').dataset.id;
        
        results.innerHTML = "";
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=flitercolor&color='+idcolorFilter+'&id='+id)
            .then(response => response.json())
            .then(data=>{
                pintarItems(data);                
            });
       })();       
        
    }

    e.stopPropagation();
});

btnRecomend.addEventListener('click', (e)=>{
    e.preventDefault();
    results.innerHTML = "";
    
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=btnRecomd')
            .then(response => response.json())
            .then(data=>{
                console.log(data);
                pintarItems(data);                
            });
       })();
       e.stopPropagation();
});

/*btnRango.addEventListener('click', (e)=>{
    e.preventDefault();
    results.innerHTML = "";
        (async ()=>{
            await fetch('../controladores/ajaxListaPrecio.php?op=precio&min='+min+'&max='+max)
            .then(response => response.json())
            .then(data=>{
                pintarItems(data);                
            });
       })();
});*/

function pintarItems(data){/*rellena */
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

}

});