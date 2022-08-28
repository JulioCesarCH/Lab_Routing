<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Esto es un tipo de request GET</h1>

        <form method="post" action="/Metodo">
            @csrf
            Ingrese Nombre: <input type="text" name="nombre" placeholder="Ingrese Nombre"><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>