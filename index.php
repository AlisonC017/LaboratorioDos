<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <h1>Grupo 3</h1>
    <p>Integrantes: Alberto Mora Umaña, Alison S, Ruth Sarai, Jimena Mendoza, Dilanha Sotelo</p>

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