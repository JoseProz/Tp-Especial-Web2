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
             <th scope="col">Ocupado</th>
            </tr>
            </thead>
            <tr>
               <td>{$hotel->nombre}</td>
               <td>{$hotel->telefono}</td>
               <td>{$hotel->direccion}</td>
               <td>{$hotel->precio}</td>
                <td>{$hotel->ocupado}</td>
              </tr>
            </table>
              
             <input type="hidden" id="id_hotel" value="{$hotel->id_hotel}">
          

         {include file="vue/comentarios.tpl"}
        
            <form id ="form-insertar" class="form-inline" action="insertarComent" method="post">
                <input type="hidden" id="tipoUser" name= "tipo" value="{$tipo}">
                <input type="hidden" id="id_user" name= "idUser" value="{$idUser}">
                <input type="hidden" id="id_hotel" name="id_hotel" value="{$hotel->id_hotel}">
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="text" class="form-control" id="mensaje"name="mensaje"placeholder="Mensaje"></td>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <td><input type="number" class="form-control" id="valoracion" name="valoracion"placeholder="puntaje"></td>
                </div>
                <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td>
              </form>
          <script src="./js/comentarios.js"></script>

</body>
</html>