{include file="header.tpl"}
    <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    </tr>
                </thead>
    {foreach from=$ver_hoteles item=hotel}
    {if $hotel->ocupado eq 1}
    <strike><tr><td>{$hotel->nombre}</td><td>{$hotel->telefono}</td><td>{$hotel->direccion}</td><td>{$hotel->precio}</td><td>{$hotel->ocupado}</td><td>{$hotel->id_destino}</td></strike><td><a href='inicializar/{$hotel->id_hotel}'>Inicializar</a> -<a href='borrar/{$hotel->id_hotel}'>Borrar</a></td></tr>
    {else}
    <tr><td>{$hotel->nombre}</td><td>{$hotel->telefono}</td><td>{$hotel->direccion}</td><td>{$hotel->precio}</td><td>{$hotel->ocupado}</td><td>{$hotel->id_destino}</td><td><a href='finalizar/{$hotel->id_hotel}'>Ocupado Totalidad</a>- <a href='borrar/{$hotel->id_hotel}'>Borrar</a></td></tr>
    {/if}

{/foreach}
