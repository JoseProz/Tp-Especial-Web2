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
            <th scope="col">Ciudad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
             <th scope="col">Mostrar Hoteles</th>
            <th scope="col">borrar</th>
            </tr>
            </thead>
            <tr>
               <td>{$iddestino->nombreDestino}</td>
               <td>{$iddestino->descripcion}</td>
               <td>{$iddestino->temporada_alta}</td>
               <td>{$iddestino->puntaje}</td> 
               <td><a href='mostrarHoteles/{$iddestino->id_destino}'>Mostrar Hoteles</a></td>
               <td><a href='borrarDestino/{$iddestino->id_destino}'>Borrar</a></td>
             </tr>
            
            </tbody>
        </table>
       
        <img src='{$iddestino->img}'><button><a href='eliminarImg/{$iddestino->id_destino}'>Borrar</a></button>
         
</body>
</html>
