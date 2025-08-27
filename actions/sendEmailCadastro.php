<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
// require '../vendor/autoload.php';
// $mail = new PHPMailer(true);


// $mensagem .= "<div style='font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.5; background-color: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>";  // Definindo o fundo e bordas
// $mensagem .= "<h2 style='font-size: 24px; color: #008D9F; text-align: center;'>Reserva Ville</h2>"; 
// $mensagem .= "<p style='text-align: center; font-size: 18px; font-weight: bold;'>E-mail para cadastro</p>"; 

// $mensagem .= "<div style='background-color: #ffffff; padding: 15px; border-radius: 6px; margin-top: 20px; border: 1px solid #f0f0f0;'>";
// $mensagem .= "<p style='font-size: 16px;'><strong>Nome:</strong> " . htmlspecialchars($_POST['cad_nome']) . "</p>";  
// $mensagem .= "<p style='font-size: 16px;'><strong>E-mail:</strong> " . htmlspecialchars($_POST['cad_email']) . "</p>";
// $mensagem .= "<p style='font-size: 16px;'><strong>Telefone:</strong> " . htmlspecialchars($_POST['cad_telefone']) . "</p>";
// $mensagem .= "</div>";


// $mensagem .= "</div>";

// $data = array(
//     'nome' => $_POST['cad_nome'],
//     'email' => $_POST['cad_email'],
//     'telefone' => $_POST['cad_telefone'],
//     'mensagem' => 'Mensagem do site Vini Pegado',
//     'site' => 'Vini Pegado',
//     'id_cliente_primario' => 107,
//     'id_empreendimento' => 3653
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

// // Verifica se ocorreu erro
// if (curl_errno($ch)) {
//     echo 'Erro cURL: ' . curl_error($ch);
// } else {
//     echo 'Resposta da API: ' . $result;
// }

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

    // // Personalizando o remetente (aparece como o nome da empresa ou quem está enviando o e-mail)
    // $mail->setFrom('contato01@blokocapital.com.br', 'Bloko Capital'); // Definir o remetente e o nome exibido
    // $mail->addReplyTo('contato01@blokocapital.com.br', 'Bloko Capital'); // Definir o e-mail para respostas

    // // Definindo o assunto
    // $mail->Subject = 'Novo Cadastro - Reserva Ville';

    // // Definindo o corpo da mensagem
    // $mail->msgHTML($mensagem);

    // // Adicionando os destinatários
    // $recipientEmail = 'contato01@blokocapital.com.br';
    // $mail->addCC('equipe.marketing@agenciaaffinity.com.br', 'franciele.duarte@blokocapital.com.br');

    // $mail->addAddress($recipientEmail);

    // // Enviar o e-mail
    // if ($mail->send()) {
    //     echo 'E-mail enviado com sucesso!';
    // } else {
    //     echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
    // }

} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
