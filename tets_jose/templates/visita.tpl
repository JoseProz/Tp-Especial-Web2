{include file="header.tpl"}

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    <th scope="col">id_destino</th>
                    </tr>
                </thead>

{foreach from=$ver_hoteles item=hotel}
{if $hotel->ocupado eq 1}
<strike><tr><td>{$hotel->nombre}</td><td>{$hotel->telefono}</td><td>{$hotel->direccion}</td><td>{$hotel->precio}</td><td>{$hotel->ocupado}</td><td>{$hotel->id_destino}</td></strike></tr>
{else}
<tr><td>{$hotel->nombre}</td><td>{$hotel->telefono}</td><td>{$hotel->direccion}</td><td>{$hotel->precio}</td><td>{$hotel->ocupado}</td><td>{$hotel->id_destino}</td></tr>
{/if}

{/foreach}

</table>
</body>
</html>

