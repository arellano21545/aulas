<?php 
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];
  //comprueba que haya una sesion iniciada
  if ($varsesion == null || $varsesion ==  '') 
  {
    echo "<script>
        alert('USTED NO TIENE AUTORIZACIÓN');
        window.location= '../index.html'
        </script>";
    die();
  }

  $opcion = $_POST['opcion'];
  
  if ($opcion == 'ver') 
  {
    header('location: calendario/op_calendario.php');
  }
  if($opcion == 'reservar')
  {
    header('location: reservaciones/reservar.php');
  } 
  if($opcion == 'eliminar_rese')
  {
    header('location: reservaciones/eliminar.php');
  }
  if($opcion == 'ver_rese')
  {
    header('location: reservaciones/ver_evento.php');
  }
  if($opcion == 'add_user')
  {
    header('location: usuarios/op_agregar.php');
  }
  if($opcion == 'del_user')
  {
    header('location: usuarios/op_eliminar.php');
  }
  if($opcion == 'lista_users')
  {
    header('location: usuarios/lista_usuarios.php');
  }
?>