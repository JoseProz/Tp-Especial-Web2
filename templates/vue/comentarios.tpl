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
                <p class="mb-1">editar/eliminar</p>
            </a>
        </li>
     </ul>
 </section>
 {/literal}
 

 
 <form class="form-inline"action="insertar" method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="text" class="form-control" name="mensaje"placeholder="Mensaje"></td>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="number" class="form-control" name="valoracion"placeholder="puntaje"></td>
                </div>
                <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td>
              </form>