{include file="header.tpl"}
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
            <th scope="col">borrar</th>
            <th scope="col">editar</th>
            </tr>
            </thead>
            {foreach from=$destinos  item=destino}
            <tr>
            <th scope="row">{$destino->id_destino}</th>
               <td>{$destino->nombre}</td>
               <td>{$destino->descripcion}</td>
               <td>{$destino->temporada_alta}</td>
               <td>{$destino->puntaje}</td>
               <td><a href='borrarDestino/{$destino->id_destino}'>Borrar</a></td>
               <td><a href='EditarDestino/{$destino->id_destino}'>Editar</a></td>
             </tr>
            {/foreach}
            </tbody>
        </table>

              <form class="form-inline"action="insertar" method="post">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="nombre"placeholder="Destino">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="descripcion"placeholder="Descripcion">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="temporada_alta"placeholder="Temporada Alta">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="puntaje"placeholder="Puntaje">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Insertar</button>
        </form>
        {****************************************************************************************************}
         <form class="form-inline"action="editarTabla" method="post">
            <div class="form-group mx-sm mb-2">
                <input type="number" class="form-control" name="id_destino"placeholder="ID">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="nombre"placeholder="Destino">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="descripcion"placeholder="Descripcion">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="temporada_alta"placeholder="Temporada Alta">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="puntaje"placeholder="Puntaje">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Editar</button>
        </form>
    </body>
</html>
