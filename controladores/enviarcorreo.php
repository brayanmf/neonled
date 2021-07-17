<?php
if (isset($_POST["enviar"])) {
    $Nombre  = $_POST['nombre'];
    $Email   = $_POST['email'];
    $Telefono= $_POST['telefono'];
    $Mensaje = $_POST['mensaje'];

    if ($Nombre=='' || $Email=='' || $Telefono=='' || !is_numeric($Telefono) || strlen($Telefono)<=8 || strlen($Telefono)>=10 || $Mensaje==''){ 
        echo "<script>
            alert('Todos los campos no han sido rellenados o datos erroneos.');location.href ='javascript:history.back()';</script>";

    }else{
        require '../public/mailer/PHPMailerAutoload.php';
        require '../public/mailer/class.phpmailer.php';
        require '../public/mailer/class.smtp.php';
        
        $mail = new PHPMailer();
        $mail->setFrom($Email,$Nombre);
        $mail->addAddress('info.neonledstore@gmail.com'); //correo a la que le llegaran los correos 
        $mail->addReplyTo($Email,$Nombre);
    
        // Aqu¨ª van los datos que apareceran en el correo que reciba  
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);      
        $mail->Subject='Enviado por '.$Nombre;
        $mail->Body="Nombre: ". $Nombre . ".<br>
                    Telefono: ". $Telefono . ".<br>
                    Correo: ". $Email .".<br>
                    Mensaje: ". $Mensaje."<br><br>
                    <strong>Mensaje del Desarrollador</strong>: Click al boton ''Responder'' para escribir un mensaje a ". $Email.".";

        // Datos del servidor SMTP
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "mail.neonled-store.com"; //servidor smtp, esto lo puedes dejar igual
        $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
        $mail->Username = 'ventas@neonled-store.com';  // en local, tu correo gmail // en servidor, nombre usuario
        $mail->Password = 'zf7,?KZz0@pf'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
        
        if ($mail->Send())
        echo "<script>alert('Formulario enviado exitosamente, le responderemos lo mas pronto posible.');window.location.href='../index.php';</script>";
        else
        echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

    }
}

