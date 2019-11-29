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
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
             <th scope="col">Mostrar Hoteles</th>
            <th scope="col">borrar</th>
            </tr>
            </thead>
            <tr>
               <td>{$destino->nombreDestino}</td>
               <td>{$destino->descripcion}</td>
               <td>{$destino->temporada_alta}</td>
               <td>{$destino->puntaje}</td> 
             </tr>
            </tbody>
            <tr>
        <form class="form-inline"action="editarTabla" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_destino" value="{$destino->id_destino}">
            <td><input type="text" name="nombre" value="{$destino->nombreDestino}"></td>
            <td><input type="text" name="descripcion" value="{$destino->descripcion}"></td>
            <td><input type="text"  name="temporada_alta" value="{$destino->temporada_alta}"></td>
            <td><input type="number" name="puntaje" value="{$destino->puntaje}"></td>
            <td><input type="file" class="form-control" name="img" value="{$destino->img}"></td>
            <td><button type="submit" class="btn btn-primary mb-2">Editar</button></td>
        </form>
        </table>
   

    </body>
</html>