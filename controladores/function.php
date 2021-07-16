<?php 
/*require_once './modelo/conexion.php';*/
require_once '../modelos/reglog.php';
function verificarC($t){
    $usetoken=new Reglog;
    $a=$usetoken->verificar($t,1);
    $n=mysqli_num_rows($a);

    if($n>0){
        $user=mysqli_fetch_assoc($a);
        $b=$usetoken->verificar($t,2);
        if($b){

            $_SESSION['cli_id']=$user['cli_id'];
            $_SESSION['cli_nombre']=$user['cli_nombre'];
            $_SESSION['cli_apellidos']=$user['cli_apellidos'];
            $_SESSION['cli_estado']=$user['cli_estado'];
            $_SESSION['cli_email']=$user['cli_email'];
            $_SESSION['verifiedcliente']=1;
            $_SESSION['message']="tu correo ya ha sido verificado";
            $_SESSION['alert-class']="alert-success";

            
            echo "<script>
                    window.location = '../vistas/bienvenida.php';
                </script>";
            exit();

        }else{
            echo 'usuario no encontrado';

        }
    }
}

/*
function refrescarC($token){
    $usetoken=new Reglog;
    $a=$usetoken->verificar($token,1);
    $n=$a->fetch(PDO::FETCH_ASSOC);
    $_SESSION['emailcliente']=$n['email'];
    header('location: recuperar1.php ');
    exit(0);
}
*/



?>