{include file="header.tpl"}

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#id</th>
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
<strike><tr><th scope="row">{$hotel->id_hotel}</th>
<td>{$hotel->nombre}</td>
<td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td>
<td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->id_destino}</td></strike>
<td><a href='inicializar/{$hotel->id_hotel}'>Inicializar</a> -<a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td></tr>
{else}
<tr><th scope="row">{$hotel->id_hotel}</th>
<td>{$hotel->nombre}</td><td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td><td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->id_destino}</td>
<td><a href='finalizar/{$hotel->id_hotel}'>Ocupado Totalidad</a>- <a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td></tr>
{/if}

{/foreach}

 <form class="form-inline"action="insertarHotel" method="post">
            <div class="form-group mx-sm mb-2">
                <tr><td></td>
                <td><input type="text" class="form-control" name="nombre"placeholder="Hotel"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="telefono"placeholder="Teléfono"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="direccion"placeholder="Direcciónn"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="precio"placeholder="Precio"></td>
            </div>
            <td></td>
            <div class="form-group mx-sm mb-2">
               <td><input type="numb" class="form-control" name="id_destino"placeholder="id"></td>
            </div>
            <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td></tr>
        </form>
    {****************************************************************************************************}    
<form class="form-inline"action="editarHotel" method="post">
           <div class="form-group mx-sm mb-2">
                <tr><td><input type="number" class="form-control" name="id_hotel"placeholder="ID"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="nombre"placeholder="Hotel"></td>
            </div><div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="telefono"placeholder="Teléfono"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="direccion"placeholder="Dirección"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="precio"placeholder="Precio"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="id_destino"placeholder="id_destino"></td>
            </div>
            <td><button type="submit" class="btn btn-primary mb-2">Editar</button></td></tr>
        </form>
</table>
</body>
</html>
