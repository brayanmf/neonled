<?php
require_once "../modelos/reglog.php";
$reglog = new Reglog();

function EnviarC($c,$t){
require '../public/mailer/PHPMailerAutoload.php';
require '../public/mailer/class.phpmailer.php';
require '../public/mailer/class.smtp.php';

$mail = new PHPMailer();
$mail->addReplyTo("brayan.mflores321@gmail.com","Neon Led Store");
$mail->setFrom("brayan.mflores321@gmail.com","Neon Led Store");
$mail->addAddress($c); //correo a la que le llegaran los correos 


// Aqu¨ª van los datos que apareceran en el correo que reciba  
$mail->WordWrap = 50; 
$mail->IsHTML(true);      
$mail->Subject='Enviado por  Neon Led Store';
$mail->Body=' <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica tu  email</title>
    <style>
    body{width=1200px;}
    .wrapper{margin:auto; width:100% }
    </style>
</head>
<body>
    <div class="wrapper">
        <p>gracias por registrarse en nuestro sitio web, haga clic en la línea siguiente para verificar su correo electrónico </p>
        <a href="http://localhost/neon/neonled/vistas/Bienvenida.php?token='.$t.'">Verifica tu correo</a>

    </div>
    
</body>
</html>';
   
// Datos del servidor SMTP
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
//$mail->Host = "box5759.bluehost.com"; //servidor smtp, esto lo puedes dejar igual
$mail->Host="smtp.gmail.com";
$mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
//$mail->Username = 'tami@ghx.umd.mybluehost.me';  // en local, tu correo gmail // en servidor, nombre usuario
//$mail->Password = '%)Yj[w_z?dx$'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
$mail->Username = 'brayan.mflores321@gmail.com';  // en local, tu correo gmail // en servidor, nombre usuario

$mail->Password = '123456789brans'; // en local, tu contrasena gmail //en servidor, contraseña de usuario


  
$mail->Send();
}
function EnviarRC($c,$t){
    require '../public/mailer/PHPMailerAutoload.php';
    require '../public/mailer/class.phpmailer.php';
    require '../public/mailer/class.smtp.php';
    
    $mail = new PHPMailer();
    $mail->addReplyTo("brayan.mflores321@gmail.com","Neon Led Store");
    $mail->setFrom("brayan.mflores321@gmail.com","Neon Led Store");
    $mail->addAddress($c); //correo a la que le llegaran los correos 
    
    
    // Aqu¨ª van los datos que apareceran en el correo que reciba  
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);      
    $mail->Subject='Enviado por  Neon Led Store';
    $mail->Body=' <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verifica tu  email</title>
        <style>
        body{width=1200px;}
        .wrapper{margin:auto; width:500px }
        </style>
    </head>
    <body>
        <div class="wrapper" >
            <p>porfavor has click en el siguente enlace para poder reiniciar su contraseña </p>
            <a href="http://localhost/neon/neonled/vistas/recuperar2.php?token='.$t.'">Reinicia su Contraseña</a>
    
        </div>
        
    </body>
    </html>';
       
    // Datos del servidor SMTP
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    //$mail->Host = "box5759.bluehost.com"; //servidor smtp, esto lo puedes dejar igual
    $mail->Host="smtp.gmail.com";
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    //$mail->Username = 'tami@ghx.umd.mybluehost.me';  // en local, tu correo gmail // en servidor, nombre usuario
    //$mail->Password = '%)Yj[w_z?dx$'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
    $mail->Username = 'brayan.mflores321@gmail.com';  // en local, tu correo gmail // en servidor, nombre usuario
    
    $mail->Password = '123456789brans'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
    
    
      
    $mail->Send();
    }
    





if (isset($_POST["registrar"])) {
    $nombre   = $_POST['name'];
    $apellidos= $_POST['surname'];
    $email    = $_POST['email'];
    $clave    = $_POST['password'];



    if ($nombre == "" || !ctype_alpha($nombre) ||  $apellidos == "" || $email == "" || $clave == "") {
        echo "<script>
                alert('Datos vacíos.');
                window.location = '../vistas/registrate.php';
            </script>";
    } else {

        $clavehash = password_hash($clave, PASSWORD_DEFAULT);
        $token=bin2hex(random_bytes(15));
        $respuesta = $reglog->Registrar($nombre, $apellidos, $email, $clavehash,$token);
   
        if ($respuesta) {
            $log = $reglog->get_cli();
            $array[]=$log;
            foreach ($array as $fila) {
                echo $fila;
                $nombre    = $fila[1];
                $estado    = $fila[6];
                $id        = $fila[0];
                $apellidos = $fila[2];
                $correo    = $fila[3];
                $token     =$fila[5];
            }


           session_start();
            $_SESSION["cli_nombre"] = $nombre;
            $_SESSION["cli_estado"] = $estado;
           $_SESSION["cli_id"]     = $id;
            $_SESSION["cli_apellidos"]= $apellidos;
            $_SESSION["cli_email"]    = $correo;
            EnviarC($correo,$token);
            

            echo "<script>
                    window.location = '../vistas/bienvenida.php';
                </script>";

        } else {
            echo "<script>
                    alert('Datos erróneos.');
                    window.location = '../vistas/registrate.php';
                </script>";
        }
    }
}

if (isset($_POST["login"])) {
    
    $email = $_POST['email'];
    $clave = $_POST['pass'];

    if ($email == "" || $clave == "") {
        echo "<script>
                alert('Datos vacíos.');
                window.location = '../vistas/registrate.php';
            </script>";
    } else {
        $respuesta = $reglog->Login($email, $clave);
        if ($respuesta) {
            foreach ($respuesta as $fila) {
                $nombre    = $fila[1];
                $estado    = $fila[5];
                $id        = $fila[0];
                $apellidos = $fila[2];
                $correo    = $fila[3];
            }
            
            session_start();
            $_SESSION["cli_nombre"]   = $nombre;
            $_SESSION["cli_estado"]   = $estado;
            $_SESSION["cli_id"]       = $id;
            $_SESSION["cli_apellidos"]= $apellidos;
            $_SESSION["cli_email"]    = $correo;
            
            echo "<script>
                    window.location = '../vistas/bienvenida.php';
                </script>";
        } else {
            echo "<script>
                    alert('Datos erróneos.');
                    window.location = '../vistas/registrate.php';
                </script>";
        }
    }
}

if (isset($_POST["actualizar"])) {
    $email = $_POST['email'];
    $val=$reglog->valueE($email,1);


if($email == ""){
        echo "<script>
        alert('Datos vacíos');
        window.location = '../vistas/registrate.php';
    </script>";
    }
    elseif ($val->num_rows==0) {
        echo "<script>
                alert('Correo no registrado');
                window.location = '../vistas/registrate.php';
            </script>";
    } else {
            $clas=$reglog->valueE($email,2);
        

        EnviarRC($email,$clas[0]);
        echo  "<script>
    
        window.location = '../vistas/mensaje.php';
    </script>";
            

    }
}
if (isset($_POST["cambiar"])) {


    $p=$_POST['password'];
    $p2=$_POST['password2'];
    $token=$_POST['token'];

    if ($p == "" || $p2 == "" ) {
        echo "<script>
                alert('datos vacios o erroneos');
                window.location = '../vistas/tienda.php';
            </script>";
    }elseif($p!=$p2)
    {  echo "<script>
        alert('La contraseña es incorrecta');
        window.location =  '../vistas/recuperar2.php?token=$token';
    </script>";

}else{
    $password = password_hash($p2, PASSWORD_DEFAULT);
        $a=$reglog->actualizar($password,$token);
        if($a){

            echo  "<script>
    
            window.location = '../vistas/registrate.php';
        </script>";
        }

    }
}


?>