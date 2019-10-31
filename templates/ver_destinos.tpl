{include file="header.tpl"}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>




        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
            <th scope="col">borrar</th>
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
