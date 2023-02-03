<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form  method="post" id="Formulario">
     <input type="text" name="username" id="username" class="modal__entrada" autocomplete="off" require><br/>
    <input type="password" name="password" id="password" class="modal__entrada" autocomplete="off" require><br/>
    <input type="text" name="nombre" id="nombre" class="modal__entrada" autocomplete="off" require><br/>
    <input type="text" name="apellido" id="apellido" class="modal__entrada" autocomplete="off" require><br/>
    <input type="date" name="fecha" id="fecha" placeholder="2001/10/12" class="modal__entrada" autocomplete="off" require><br/>
    <input type="email" name="correo" id="correo" class="modal__entrada" ><br/>

    <div class="group__form_item">
    <label><input type="radio" name="gender" value="M" id="gender_M" checked >Hombre</label>
    <label> <input type="radio" name="gender" value="F" id="gender_F" > Mujer</label>
    </div>
    <input type="submit" value="Enviar" id="enviar">
   </form>
   <div  style="margin-top: 15px;" id="Respuesta"> </div>
</body>
<script src="enviar_datos.js">

</script>
</html>