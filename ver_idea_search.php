<head>
    <title>Ver ideas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <div class="container">
        <img src="img/icon_buscar.png" />
        <center>
            <h2>BUSCA UNA IDEA DE TU INTERÉS</h2>
        </center>
        <form method="POST" action="ver_idea_search.php">
            <div class="form-group">
                <h2>Ingrese código de idea</h2>
                <input type="text" name="codigo_idea" class="form-control" id="codigo_idea">
                <input type="submit" value="Buscar" class="btn btn-success" name="btnbuscar">
                <style>
                    .boton {
                        padding: 10px;
                        background-color: orange;
                        color: black;
                    }

                </style>
                <a href="search_idea.php" class="boton">Ir a menú</a>
        </form>
    </div>


    <?php
     if(isset($_POST['btnbuscar']))
    {
      include("abrir_conexion_search.php");
        $codigo_idea = $_POST['codigo_idea'];
        if($codigo_idea=="")
          {echo "Digite un código, eje: 101";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE codigo_idea = $codigo_idea");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo"<table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>Código de idea</center></b></td>
                    <td><b><center>Descripción</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['codigo_idea']."</td>
                   <td>".$consulta['descripcion']."</td>
                </tr>
              </table>
            ";
              
          }
        }
      include("cerrar_conexion_search.php");
    }
  ?>
