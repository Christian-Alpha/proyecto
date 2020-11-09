<head>
    <title>Enviar donaciones</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<div class="container">
    <img src="img/icon_donar.png" />
        <body>

            <center>
                <h2 class="tm-text-shadow">Haz una donación</h2>
            </center>

            <form>
                <h2>Datos</h2>
                <div class="form-group">

                    <input type="text" style="text-align:left" name="n_tarjeta" class="form-control" id="codigo_idea" placeholder="Número de tarjeta*">
                </div>
                <div class="form-group">

                    <input type="text" style="text-align:left" name="cantidad" class="form-control" id="cantidad" placeholder="Cantidad*">
                </div>
                <div class="form-group">
                    <input type="text" style="text-align:left" name="codigo_idea" class="form-control" id="codigo_idea" placeholder="Código de idea a la que desea donar*">
                </div>
                <input type="submit" value="Donar" class="btn btn-success" name="btndonar">
                <style>
                    .boton {
                        padding: 10px;
                        background-color: orange;
                        color: black;
                    }

                </style>
                <a href="search_idea.php" class="boton">Ir a menú</a>
            </form>
