<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["btn"])){ 
    //Load Composer's autoloader
    require 'mailer/autoload.php';
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'eslamboy0@gmail.com';                     //SMTP username
        $mail->Password   = '01276448769';                               //SMTP password
        $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom("ea1206035@yahoo.com");
        $mail->addAddress('eslamboy0@gmail.com', 'Eslam');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST["name"];
        $mail->Body =  $_POST["email"]."<h3 class='btn btn-danger'>". $_POST["phone"]."</h3>". $_POST["area"];
        $mail->send();
        header("location: index.html", true);
       
};


require 'mailer/autoload.php';
use Dompdf\Dompdf;
 if(isset($_POST["cv"])){
    $dompdf = new Dompdf();

$html = "<a href ='Img/CV.pdf'><a/>";

    $dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream();
    

// reference the Dompdf namespace


// instantiate and use the dompdf class
 }

?>

