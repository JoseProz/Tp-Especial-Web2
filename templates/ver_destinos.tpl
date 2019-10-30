{include file="header.tpl"}
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
            </tr>
            </thead>
            {foreach from=$destinos  item=destino}
            <tr>
            <th scope="row">{$destino->id_destino}</th>
               <td>{$destino->nombre}</td>
               <td>{$destino->descripcion}</td>
               <td>{$destino->temporada_alta}</td>
               <td>{$destino->puntaje}</td>
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
            
    </body>
</html>
