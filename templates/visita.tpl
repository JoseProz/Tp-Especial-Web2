{include file="header.tpl"}

            {foreach from=$ver_destinos  item=destino}
                <li class="list-group-item list-group-item-secondary">*{$destino->id_destino}, destino : {$destino->nombre}, descripcion : {$destino->descripcion}, temporada alta :  {$destino->temporada_alta}, puntaje:  {$destino->puntaje}</a></li>
            
            {/foreach}

    </body>
</html>
