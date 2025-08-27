<?php

try {
    if (!empty($_POST['phone_2'])) {
        //BROKER
        $url = 'https://www.brokertecnologia.com.br/api/inserirEmail';

        // Verificação e preparação dos dados
        $data = array(
            'nome' => $_POST['name_2'],
            'email' => $_POST['email_2'],
            'telefone' => $_POST['phone_2'],
            'mensagem' => " Mensagem: " . $_POST['textarea_2'],
            'site' => 'Ag. Affinity Lançamento Imobiliário',
            'id_cliente_primario' => 1
        );

        $data_string = json_encode($data);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'Erro ao converter dados para JSON: ' . json_last_error_msg();
            exit;
        }

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        if ($result === false) {
            // Falha na solicitação cURL
            $error = curl_error($ch);
            echo 'Erro ao enviar o e-mail. Detalhes do erro: ' . $error;
            exit;
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode == 200) {
            // Solicitação cURL foi bem-sucedida
            echo 'Seu e-mail foi enviado com sucesso! Entraremos em contato em breve.';
        } else {
            // Falha na solicitação cURL
            echo 'Erro ao enviar o e-mail. Código HTTP: ' . $httpCode . ' Resposta do servidor: ' . $result;

            // Opcional: Registrar a resposta em um arquivo de log
            $logfile = 'curl_error_log.txt';
            $logdata = "Código HTTP: " . $httpCode . "\nResposta: " . $result . "\n";
            file_put_contents($logfile, $logdata, FILE_APPEND);
        }
    }
} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $e->getMessage();
}

?>
