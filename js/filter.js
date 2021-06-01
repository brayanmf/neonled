const textSearch = document.querySelector('.textSearch');
const textSearched = document.getElementById('textSearch');
const results = document.getElementById("articles-section");




const colorFilter = document.getElementById('contenedor-color');
const btnRecomend = document.querySelector('.recomendado');


textSearch.addEventListener("keyup", (e)=>{
    e.preventDefault();
    let  textSearch = textSearched.value;   
    if(textSearch !="" || typeof textSearch !=null || textSearch.length>=1 ){
        results.innerHTML = "";
   
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=prodsearch&serch='+textSearch)
            .then(response => response.json())
            .then(data=>{
                pintarItems(data);                
            });
       })();  
        
    }

});
colorFilter.addEventListener('click', (e)=>{

    //console.log(e.target)
    //console.log(e.target.classList.contains('bola'))
    if(e.target.classList.contains('bola')){
        let idcolorFilter = e.target.parentElement.querySelector('.bola').dataset.id;
        console.log(idcolorFilter);
        results.innerHTML = "";
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=flitercolor&color='+idcolorFilter)
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
        console.log(textSearch);
        (async ()=>{
            await fetch('../controladores/ajaxListaCategorias.php?op=btnRecomd')
            .then(response => response.json())
            .then(data=>{
                pintarItems(data);                
            });
       })();
});






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


    /*data.forEach(e=> {
   
        templateItems.querySelector('a').setAttribute('href','producto.php?pro='+e.id);
        templateItems.querySelector('img').setAttribute('src', e.imagen);
        templateItems.querySelector('h3').textContent = e.nombre;
        templateItems.querySelector('span').setAttribute('style',`background:${e.color1}`);
        templateItems.querySelector('p').textContent = 'S/.'+e.precio;

        const clone = templateItems.cloneNode(true);
        fragment.appendChild(clone);                
    });
    showdata.appendChild(fragment);*/
}




