<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require '../vendor/autoload.php';
// $mail = new PHPMailer(true);


// $mensagem .= "<div style='font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.5; background-color: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>";  // Definindo o fundo e bordas
// $mensagem .= "<h2 style='font-size: 24px; color: #008D9F; text-align: center;'>Reserva Ville</h2>"; 
// $mensagem .= "<p style='text-align: center; font-size: 18px; font-weight: bold;'>E-mail para cadastro</p>"; 

// $mensagem .= "<div style='background-color: #ffffff; padding: 15px; border-radius: 6px; margin-top: 20px; border: 1px solid #f0f0f0;'>";
// $mensagem .= "<p style='font-size: 16px;'><strong>Nome:</strong> " . htmlspecialchars($_POST['cont_nome']) . "</p>";  
// $mensagem .= "<p style='font-size: 16px;'><strong>E-mail:</strong> " . htmlspecialchars($_POST['cont_email']) . "</p>";
// $mensagem .= "<p style='font-size: 16px;'><strong>Telefone:</strong> " . htmlspecialchars($_POST['cont_telefone']) . "</p>";
// $mensagem .= "<p style='font-size: 16px;'><strong>Mensagem:</strong> " . htmlspecialchars($_POST['cont_mensagem']) . "</p>";
// $mensagem .= "</div>";


// $mensagem .= "</div>";

// $data = array( 
//     'nome' => $_POST['cont_nome'],
//     'email' => $_POST['cont_email'],
//     'telefone' => $_POST['cont_telefone'],
//     'mensagem' => $_POST['cont_mensagem'],
//     'site' => 'Vini Pegado',
//     'id_cliente_primario' => ,
//     'id_empreendimento' => 
// );
// $url = 'https://www.brokertecnologia.com.br/api/inserirEmail';
// $data_string = json_encode($data);
// $ch = curl_init($url);				
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);	
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		
// $result = curl_exec($ch);
// curl_close($ch);


try {
    // $mail = new PHPMailer;
    // $mail->IsSMTP();
    // $mail->SMTPDebug = true;
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = 'tls';  
    // $mail->Host = 'smtp.office365.com';  
    // $mail->Port = 587;
    // $mail->Username = 'contato01@blokocapital.com.br';
    // $mail->Password = 'T#241950749855at';
    // $mail->isHTML(true);

    // $mail->setFrom('contato01@blokocapital.com.br', 'Bloko Capital'); 
    // $mail->addReplyTo('contato01@blokocapital.com.br', 'Bloko Capital'); 

    // $mail->Subject = 'Novo Cadastro - Reserva Ville';

    // $mail->msgHTML($mensagem);

    // $recipientEmail = 'contato01@blokocapital.com.br';
    // $mail->addCC('equipe.marketing@agenciaaffinity.com.br', 'franciele.duarte@blokocapital.com.br');

    // $mail->addAddress($recipientEmail);

    // if ($mail->send()) {
    //     echo 'E-mail enviado com sucesso!';
    // } else {
    //     echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
    // }

} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}

