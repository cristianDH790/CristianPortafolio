const mostrar=document.getElementById("mostrar")
const menu_mostrado=document.getElementById("menu")
mostrar.addEventListener("click",e=>{
menu_mostrado.classList.toggle("navegacion-active")
})
//cerrar menu opciones
const opciones=document.getElementById("opcion")
opciones.addEventListener("click",e=>{
    menu_mostrado.classList.toggle("navegacion-active")
})
//cerrar menu opciones
const opciones1=document.getElementById("opcion1")
opciones1.addEventListener("click",e=>{
    menu_mostrado.classList.toggle("navegacion-active")
})
//cerrar menu opciones
const opciones2=document.getElementById("opcion2")
opciones2.addEventListener("click",e=>{
    menu_mostrado.classList.toggle("navegacion-active")
})
//cerrar menu opciones
const opciones3=document.getElementById("opcion3")
opciones3.addEventListener("click",e=>{
    menu_mostrado.classList.toggle("navegacion-active")
})
//cerrar menu salir
const cerrar=document.getElementById("cerrar")
cerrar.addEventListener("click",e=>{
    menu_mostrado.classList.toggle("navegacion-active")
})