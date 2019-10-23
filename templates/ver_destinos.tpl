{include file="header.tpl"}

            {foreach from=$destinos  item=destino}
                <li class="list-group-item list-group-item-secondary">*{$destino->id_destino}, destino : {$destino->nombre}, descripcion : {$destino->descripcion}, temporada alta :  {$destino->temporada_alta}, puntaje:  {$destino->puntaje} 
                - <a href='borrar/{$destino->id_destino}'>Borrar</a>
                - <a href='editar/{$destino->id_destino}'>Editar</a>
                - <a href='mostrarHoteles/{$destino->id_destino}'>Mostrar Hoteles</a>
                </li>

            {/foreach}

            <form action="insertar" method="post">
                <div class="form-group">
                Nombre:<input type="text" name="nombre">
                Descripcion:<input type="text" name="descripcion">
                Temporada Alta:<input type="text" name="temporada_alta">
                Puntaje:<input type="number" name="puntaje">
                <button type="submit" class="btn btn-outline-primary">Insertar</button>
                </div>
            </form>
            <form action="editarTabla" method="post">
                Id:<input type="number" name="id_destino">
                Nombre:<input type="text" name="nombre">
                Descripcion:<input type="text" name="descripcion">
                Temporada Alta:<input type="text" name="temporada_alta">
                Puntaje:<input type="number" name="puntaje">
                <button type="submit" class="btn btn-outline-primary">Editar</button>
                  </form>
    </body>
</html>
