<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include("partes/css.php"); ?>

    <style>
        body {
            background-color: #eec3e7;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .card-body {
            padding: 2rem;
        }

        h1 {
            color: #000000;
        }
    </style>

</head>


<body>
        <!--  Titulo grande / Inicio  -->
            <div class="hero-grande">
                <nav class="navbar navbar-expand">
                </nav>
                <div class="container hero-texto">
                    <h1>GRUPO #3</h1>
                    <h2>Jimena Mendoza, Dilanha Sotelo, Ruth Hernandez, Alison Cabrera, Alberto Mora</h2>
                </div>
            </div>

    <!-- FORMULARIO -->

    <form action="subir.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="formFile" class="form-label">Seleccione el archivo</label>
            <input class="form-control" type="file" id="formFile" name="archivo">
        </div>
        <button type="submit" class="btn btn-primary">Subir archivo</button>
    </form>

</body>

</html>
