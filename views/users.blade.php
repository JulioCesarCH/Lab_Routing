<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
            
    </head>
    <body>
    <h1>Registre Usuario</h1>
        <div class="container"> 
            <form method="post" action="{{Route('loginDatos')}}">
                @csrf
                Nombre Usuario: <br>
                <input type="text" name="id_user" placeholder="Usuario"><br>
                Contraseña: <br>
                <input type="password" name="pasw1" placeholder="Password"><br>
                Repetir Contraseña: <br>
                <input type="password" name="pasw2" placeholder="Password"><br>
                <button type="submit">Enviar</button>
            </form>
        </div>  
    </body>
</html>