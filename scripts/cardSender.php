<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pages/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../pages/style.css">
    <title>Carta Enviada!</title>
</head>
<body>

    <?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    ini_set('display_errors', 0); ini_set('display_startup_errors', 0); error_reporting(-1);

    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        #$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'humanity.cardsender@gmail.com';                     //SMTP username
        $mail->Password   = 'puoodhpniycbhdbx';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('humanity.cardsender@gmail.com', 'O Locutor');
        $mail->addAddress('humanity.openletters@gmail.com', 'Humanidade');     //Add a recipient; Name is optional

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Carta Aberta a Humanidade';
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();

        echo "<div class='container'>";
        echo "  <h1 style='font-size: clamp(1px, 7vw, 2.8em);' id='titulo'>Sua carta foi enviada!</h1>";
        echo "  <h3 style='font-size: 2em; margin-bottom: 4vh; text-align: center' id='subtitulo'>Obrigado pelo seu tempo.</h3>";
        echo "  <h3 style='padding-bottom: 1vh;' id='aviso'>Suas palavras. Suas ideias, seus sentimentos.</h3>";
        echo "  <h3 style='padding-bottom: 1vh;' id='aviso'>Talvez algumas pessoas estejam ansiosas para saber o que você tem a dizer para elas.</h3>";
        echo "  <h3 style='padding-bottom: 1vh;' id='aviso'>Ou talvez, elas nem te conheçam. Mas suas palavras agora a alcançam.</h3>";
        echo "</div>";

    } catch (Exception $e) {
        #echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    ?>

</body>
</html>