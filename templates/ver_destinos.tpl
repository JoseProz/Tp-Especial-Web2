{include file="header.tpl"}

            {foreach from=$destinos  item=destino}
                <li>*{$destino->id_destino}, destino : {$destino->nombre}, descripcion : {$destino->descripcion}, temporada alta :  {$destino->temporada_alta}, puntaje:  {$destino->puntaje}</li>
            
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
    </body>
</html>
