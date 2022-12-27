<?php
   if (isset($_POST['enviar_formulario'])){
    if(!empty($_POST['introducir_nombre']) && !empty($_POST['introducir_email']) && !empty($_POST['introducir_telefono']) && !empty($_POST['introducir_asunto']) && !empty($_POST['introducir_mensaje']) ){
        
        $destiantario="cristian4567985@gmail.com";
        
        $nombre=$_POST['introducir_nombre'];
        $email=$_POST['introducir_email'];
        $telefono=$_POST['introducir_telefono'];
        $asunto=$_POST['introducir_asunto'];
        $mensaje=$_POST['introducir_mensaje'];

        $header="From: ".$email." "."\r\n";
        $header.= "Reply-To: ".$email.""."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();

        //$envioemail=mail($destiantario,$email,$nombre,$telefono,$asunto,$mensaje,$header);
        $envioemail=mail($destiantario,$asunto,$mensaje,$header);
        if($envioemail){
            echo "<script>alert('correo enviado con exito!!')</script>";
            echo "<script>setTimeout(\"location.href='./index.php'\",1000)</script>";
        }
        else{
            echo "<script>alert('correo Fallido!!')</script>";
            echo "<script>setTimeout(\"location.href='./index.php'\",1000)</script>";

        }



    }
   }
    
?>