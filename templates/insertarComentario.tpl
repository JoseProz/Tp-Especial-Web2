 {include file="header.tpl"}

            {include file="vue/comentarios.tpl"}
 
 
 
 
 <form class="form-inline"action="insertar" method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="text" class="form-control" name="mensaje"placeholder="Mensaje"></td>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="number" class="form-control" name="valoracion"placeholder="puntaje"></td>
                </div>
                <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td>
              </form>