<?php
if (isset($_POST["personaliza"])) {
    $desea      = $_POST['desea'];
    $medida     = $_POST['medida'];
    $mensaje    = $_POST['mensaje'];
    $nombre     = $_POST['nombre'];
    $apellidos  = $_POST['apellidos'];
    $email      = $_POST['email'];

    if ($desea=='' || $medida=='' || $mensaje=='' || $nombre=='' || $apellidos=='' || $email==''){ 
        echo "<script>
                alert('Todos los campos no han sido rellenados o datos erroneos.');location.href='javascript:history.back()';
            </script>";
    }else{
        require '../public/mailer/PHPMailerAutoload.php';
        require '../public/mailer/class.phpmailer.php';
        require '../public/mailer/class.smtp.php';
        
        $mail = new PHPMailer();
        $mail->setFrom($email,$nombre);
        $mail->addAddress('info.neonledstore@gmail.com'); //correo a la que le llegaran los correos 
        $mail->addReplyTo($email,$nombre);
    
        // Aqu¨ª van los datos que apareceran en el correo que reciba  
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);      
        $mail->Subject='Enviado por '.$nombre;
        $mail->Body="Nombre: ". $nombre . ".<br>
                    Apellidos: ". $apellidos . ".<br>
                    Solicitud: ". $desea . ".<br>
                    Medidas: ". $medida . ".<br>
                    Descripción: ". $mensaje . ".<br>
                    <strong>Mensaje del Desarrollador</strong>: Click al boton ''Responder'' para escribir un mensaje a ". $email.".";

        // Datos del servidor SMTP
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "box5759.bluehost.com"; //servidor smtp, esto lo puedes dejar igual
        $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
        $mail->Username = 'tami@ghx.umd.mybluehost.me';  // en local, tu correo gmail // en servidor, nombre usuario
        $mail->Password = '%)Yj[w_z?dx$'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
        
        if ($mail->Send())
        echo "<script>
                alert('Formulario enviado exitosamente, le responderemos lo mas pronto posible.');window.location.href='../index.php';
            </script>";
        else
        echo "<script>
            alert('Error al enviar el formulario');location.href ='javascript:history.back()';
        </script>";

    }
}
