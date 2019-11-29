{include file="header.tpl"}
  <form action="editarTabla" method="get" enctype="multipart/form-data">
            <input type="num" value="{$id}">
            <input type="text" value="{$destino->nombreDestino}">
            <input type="text" value="{$destino->descripcion}">
            <input type="text" value="{$destino->temporada_alta}">
            <input type="numb" value="{$destino->puntaje}">
            <input type="file" class="form-control" name="img" value="{$destino->img}">
            <input type="submit" value="Guardar">
            </form>
   

    </body>
</html>