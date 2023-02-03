<?php 

// echo json_encode($_POST);
 $usuario = $_POST['username'];
$clave = $_POST['password'];
$nombre =  $_POST['nombre'];
$apellido =  $_POST['apellido'];
$correo = $_POST['correo'];
$fecha =  $_POST['fecha'];
$sexo = $_POST['gender'];

if ($usuario ==='' || $clave === '' || $nombre ==='' ||$apellido ==='' || $correo === '' || $fecha ==='' ){
    echo json_encode('error');
}else{
    echo json_encode('Datos enviado Correctamente');

    $servername = "localhost";
    $username = "root";
    $password = "2001";
    $dbname ='santaelena';
    // set the PDO error mode to exception
    $conexion= mysqli_connect($servername,$username,$password,$dbname);

    // inserto la informacion del usuarios username, clave, nombre, apellido, correo,sexo
    $sql = "INSERT INTO Usuarios (username, clave, nombre, apellido,correo,fecha_nacimiento,sexo) 
            VALUE('$usuario', '$clave','$nombre','$apellido','$correo', '$fecha' ,'$sexo' )";
    $resultadosql=$conexion ->query($sql);
    // if($resultadosql > 0){
    //         echo "<script>
    //                     alert('registro Existoso');
    //                     window.location = 'header.php;
    //                 </script>";
    // }else {
    //         echo "<script>
    //                 alert('error a registarse');
    //                 window.location = 'header.php';
    //             </script>";
    //     } 

        
    
}


?>