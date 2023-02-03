<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="style.css">

</head>
<body>
     <h2 class="modal__title">Iniciar Sesion</h2>
        <form method="post" class="modal__login"  id="Login"  autocomplete="off">
            <label for="fusername" class="modal__title__input"><i class="fa fa-user-circle" aria-hidden="true">
                </i> Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="modal__entrada">
            <br>
<br>
            <label for="fpsw" class="modal__title__input"><i class="fa fa-key" aria-hidden="true"></i>
                Contraseña:</label>
            <input type="password" name="contrasenia" id="contrasenia" class="modal__entrada">
<br>
            <a href="#" class="modal__close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </a>
    <br>
            <div class="modal__contenedor__botones">
               <button   class="modal__btn__registro">crear cuenta</button>
               <input type="submit" class="modal__btn" value="iniciar sesion" >
              <!-- <button type="submit"  name="Ingresar" class="modal__btn">iniciar sesion</button> -->
            </div>
        </form>
           <div  style="margin-top: 15px;" id="Respuesta_Login"> </div>

    <script src="./logiando.js"></script>
</body>
</html>