<head>
    <title>Aporta una idea</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>

<div class="container">
    <img src="img/icon_ideas.png" />

        <center>
            <h2 class="tm-text-shadow">APORTA UNA IDEA</h2>
        </center>

        <form method="POST" action="dar_idea_search.php">
            <div class="form-group">
                <div class="row tm-page-2-content">
                    <div class="col-md-6 col-sm-12 tm-contact-col">
                        <div class="contact_message">
                            <form action="#contact" method="post" class="contact-form">

                                <div class="form-group">
                                    <input type="text" style="text-align:left" name="nombre" class="form-control" id="nombre" placeholder="Nombre completo" 
                                </div>

                                    <div class="form-group">
                                        <input type="text" style="text-align:left" name="email" class="form-control" id="email" placeholder="Correo electrónico" </div>


                                        <div class="form-group">

                                            <input type="text" style="text-align:left" name="pais" class="form-control" id="pais" placeholder="País" </div>

                                            <div class="form-group">
                                                <input type="text" style="text-align:left" name="codigo_idea" class="form-control" id="codigo_idea" placeholder="Código de idea" </div>

                                                <div class="form-group">
                                                    <input type="text" style="text-align:left" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción" </div>
                                                    <center>
                                                        <input type="submit" value="Enviar" class="btn btn-success" name="btnenviar">

                                                        <style>
                                                            .boton {
                                                                padding: 10px;
                                                                background-color: orange;
                                                                color: black;
                                                            }

                                                        </style>
                                                        <a href="search_idea.php" class="boton">Ir a menú</a>
                                                    </center>

                                                </div>

                                            </div>
                                        </div>

                                        <?php

    if(isset($_POST['btnenviar']))
    {
      include("abrir_conexion_search.php");

      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $pais = $_POST['pais'];
      $codigo_idea = $_POST['codigo_idea'];
      $descripcion = $_POST['descripcion'];

      mysqli_query($conexion, "INSERT INTO $tabla_db1 (nombre,email,pais,codigo_idea,descripcion) values ('$nombre','$email','$pais','$codigo_idea','$descripcion')");
   
      include("cerrar_conexion_search.php");
      echo "Se insertaron Correctamente";
    }
 
  ?>
                                    </div>
