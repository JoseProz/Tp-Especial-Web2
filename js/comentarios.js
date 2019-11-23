"use strict"


let app = new Vue({
    el: "#template-vue-comentario",
    data: {
        subtitle: "Comentarios de Hotel",
        comentarios: [], 
        admin: setAdmin()
    }
});

function setAdmin(){
    let tipo=document.querySelector("#tipoUser").value;
    if(tipo==1){
        tipo=true;
    }
    else{ tipo=false}
    return tipo;

}

function getComentarios() {
    let id = document.querySelector("#id_hotel").value;
    fetch("api/mostrarHotel/"+id+"/comentario")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

getComentarios();
