const verCat = document.querySelector('.ver-menu');
const verColor = document.querySelector('.ver-color');
const verPrecio = document.querySelector('.ver-precio');
const verTamano = document.querySelector('.ver-tamano');
const despliegue = document.querySelector('.contenedor_categorias')
const despliegue2 = document.querySelector('.contenedor-color')
const despliegue3 = document.querySelector('.range')
const despliegue4 = document.querySelector('.contenedor_tamano')
let contador =1;
let count =1;
let countPrecio = 1;
let countTamano = 1;
verCat.addEventListener('click',()=>{
    if(contador==1){
        despliegue.style.setProperty("display", "block");
        contador=2
    }else {
        despliegue.style.setProperty("display", "none");
        contador=1;
       
    }
    console.log(contador)
    
})

verColor.addEventListener('click',()=>{
    if(count==1){
        despliegue2.style.setProperty("display", "grid");
        count=2
    }else {
        despliegue2.style.setProperty("display", "none");
        count=1;
       
    }
    console.log(count)
    
})

verPrecio.addEventListener('click',()=>{
    if(countPrecio==1){
        despliegue3.style.setProperty("display", "block");
        countPrecio=2
    }else {
        despliegue3.style.setProperty("display", "none");
        countPrecio=1;
       
    }
    console.log(countPrecio)
    
})

verTamano.addEventListener('click',()=>{
    if(countTamano==1){
        despliegue4.style.setProperty("display", "block");
        countTamano=2
    }else {
        despliegue4.style.setProperty("display", "none");
        countTamano=1;
       
    }
    console.log(countTamano)
    
})