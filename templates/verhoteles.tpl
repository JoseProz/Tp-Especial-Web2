{include file="header.tpl"}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ExploArgentina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ir a 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="hoteles">Lista de Hoteles</a>
          <a class="dropdown-item" href="destinos">Lista de Destinos</a>
        </div>
      </li>
    </ul>
     <form class="form-inline my-2 my-lg-0" action="logout" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0 btn-light" type="submit">logout</button>
    </form>
  </div>
</nav>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Disponiblidad</th>
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>
                    </tr>
                </thead>

{foreach from=$ver_hoteles item=hotel}
{if $hotel->ocupado eq 1}
<tr>
<td>{$hotel->nombre}</td>
<td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td>
<td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->nombreDestino}</td>
<td><a href='inicializar/{$hotel->id_hotel}'>Inicializar</a></td><td><a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td>
<td><a href='vereditarHotel/{$hotel->id_hotel}'>Editar</a></td></tr>
{else}
<tr>
<td>{$hotel->nombre}</td><td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td><td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->nombreDestino}</td>
<td><a href='finalizar/{$hotel->id_hotel}'>Ocupado Totalidad</a></td><td><a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td>
<td><a href='vereditarHotel/{$hotel->id_hotel}'>Editar</a></td></tr>
{/if}

{/foreach}

 <form class="form-inline"action="insertarHotel" method="post">
            <div class="form-group mx-sm mb-2">
                <tr>
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
               <td>
                  <select  class="form-control" name="id_destino">
                      <label>Seleccione Ciudad:</label>
                        {foreach from=$destinos item=$destino}
                        <option value="{$destino->id_destino}" placeholder="Seleccione Ciudad">{$destino->nombreDestino} </option>
                        {/foreach}
                     </select>
                </td>
            </div>
            <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td></tr>
        </form>
    {****************************************************************************************************}    
</table>
</body>
</html>
