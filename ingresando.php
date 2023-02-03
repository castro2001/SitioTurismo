<?php
$usuario = $_POST['usuario'];
$clave = $_POST['contrasenia'];

 echo json_encode($_POST);

if ($usuario ==='' || $clave === ''  ){
     echo json_encode('error');
}else{
     echo json_encode ('datos enviado Correctamente ');

     echo json_encode('usuario:'.$usuario.'<br>Contraseña:'.$clave);
      echo json_encode('Usuario Correcto en 1 min ingresando');

 $servername = "localhost";
     $username = "root";
     $password = "2001";
      $dbname ='santaelena';
    //    set the PDO error mode to exception
      $conexion= mysqli_connect($servername,$username,$password,$dbname);

      $sql = "SELECT COUNT(*) as contar FROM Usuarios WHERE username = '$usuario' and clave = '$clave'";
      $consulta = mysqli_query($conexion,$sql);
      $array = mysqli_fetch_array($consulta);

      if($array['contar'] >0){
          $_SESSION['usuario']= $usuario;
       include_once './paginaPrincipal.php';
          header('Location:./inicio.php');
      }else{
           echo "datos incorrectos";
          $errorLogin= 'datos incorrectos';
          include './in.php ';

      }
    //   inserto la informacion del usuarios username, clave, nombre, apellido, correo,sexo
  }

?>

