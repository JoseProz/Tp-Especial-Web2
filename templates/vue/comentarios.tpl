{literal}

<section id="template-vue-comentario">
    
    <h2>{{subtitle}}</h2>
    <ul>
        <li v-for="c in comentarios" v-if="c.mensaje != null ">
            <a  class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><span class="badge badge-pill badge-success">{{c.email}}</span><span class="badge badge-pill badge-light"> {{c.mensaje}}</span><span class="badge badge-warning">{{ c.valoracion }}</span></h5>
                    <small>{{c.fecha}}</small>
                </div>
                <p v-if="admin" class="mb-1"><span>editar/eliminar</span></p>
            </a>
        </li>
    </ul>
 </section>
 {/literal}
 
