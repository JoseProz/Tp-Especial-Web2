"use strict"


let app = new Vue({
    el: "#template-vue-comentario",
    data: {
        subtitle: "Comentarios de Hotel",
        comentarios: [], 
        admin: setAdmin()
    },
    methods:{
        eliminarComentario: function(){
           let id=document.querySelector("#id_comentario").value;
            let URL='api/comentarios/'+id;
            fetch(URL, {
                method: 'DELETE',
                headers: {'Content-Type': 'application/json'}
             })
             .then(response => {
                 getComentarios();
             })
             .catch(error => console.log(error));
        
        }
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

function getComentarios(){
    let id = document.querySelector("#id_hotel").value;
    fetch("api/hoteles/"+id+"/comentarios")
    .then(response => response.json())
    .then(comentarios => {
        app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

getComentarios();

document.querySelector("#form-insertar").addEventListener('submit',addComentario);
//document.querySelector("#eliminarComentario").addEventListener('click',eliminarComentario);

function addComentario(e){
    e.preventDefault();
    

    let data={
        id_hotel: document.querySelector("#id_hotel").value,
        id_usuario: document.querySelector("#id_user").value,
        mensaje: document.querySelector("#mensaje").value,
        valoracion: document.querySelector("#valoracion").value,
    }
    console.log(data);
    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getComentarios();
     })
     .catch(error => console.log(error));
}


/*function eliminarComentario(e){
    e.preventDefault();

    let id={
        id_comentario: document.querySelector("#idComent").value,
    }
    fetch('api/comentarios/id',{
        method:'DELETE',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(id)
    })
    .then(response => {
        getComentarios();
    })
    .catch(error => console.log(error));
    


}*/