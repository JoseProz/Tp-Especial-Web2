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
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Precio</th>
             <th scope="col">Disponibilidad</th>
            </tr>
            </thead>
            <tr>
                <td>{$hotel->nombre}</td>
                <td>{$hotel->telefono}</td>
                <td>{$hotel->direccion}</td>
                <td>{$hotel->precio}</td>
                <td>{$hotel->ocupado}</td>
             </tr>
            </tbody>
            <tr>
                </table>
   
        <form class="form-inline"action="editarHotel" method="post">
            <div class="form-group mx-sm mb-2">
                 <tr><td><input type="hidden" class="form-control" value="{$hotel->id_hotel}" name="id_hotel"placeholder="ID"></td>
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
                 <label for="inputState">Seleccione Ciudad:</label>
                 <select  class="form-control" name="id_destino">
                   <option> Seleccione  </option>
                       {foreach from=$destinos item=$destino}
                         <option value="{$destino->id_destino}">{$destino->nombreDestino} </option>
                       {/foreach}
                    </select>
               </div> 
             <td><button type="submit" class="btn btn-primary mb-2">Editar</button></td></tr>
       </form>
    </body>
</html>