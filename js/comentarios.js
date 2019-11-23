"use strict"


let app = new Vue({
    el: "#template-vue-comentario",
    data: {
        subtitle: "Comentarios de Hotel",
        comentarios: [], 
        auth: true
    }
});

function getComentarios() {
    let id = document.querySelector("#id_hotel").value;
    console.log(id);
    fetch("api/mostrarHotel/"+id+"/comentario")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

getComentarios();

document.querySelector("#form-insertar").addEventListener('submit',addComentario);

function addComentario(e){
    e.preventDefault();

    let data={
        id_usuario: document.querySelector("#idUser").value,
       
        id_hotel: document.querySelector("#id_hotel").value,
        mensaje: document.querySelector("#mensaje").value,
        puntaje: document.querySelector("#valoracion").value,
    }
    
    fetch('api/comentario', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}