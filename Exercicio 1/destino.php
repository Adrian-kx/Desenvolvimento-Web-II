<?php
// Para capturar os dados submetidos tanto por POST como por GET, podemos usar $_REQUEST.
// (Ele consolida $_GET e $_POST, dando prioridade a POST se houver chaves em comum.)

// Para saber qual método foi utilizado, podemos olhar $_SERVER['REQUEST_METHOD'].
$metodo = $_SERVER['REQUEST_METHOD'];

// Capturando dados enviados pelo form ou pela URL:
$nome     = isset($_REQUEST['nome'])     ? $_REQUEST['nome']     : '';
$telefone = isset($_REQUEST['telefone']) ? $_REQUEST['telefone'] : '';
$email    = isset($_REQUEST['email'])    ? $_REQUEST['email']    : '';
$mensagem = isset($_REQUEST['mensagem']) ? $_REQUEST['mensagem'] : '';

// Capturando cabeçalhos HTTP. A função apache_request_headers() normalmente funciona no Apache.
// Em outros servidores, talvez seja preciso testar soluções diferentes.
$cabecalhos = apache_request_headers();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #CCC;
        }
        .section h2 {
            margin-top: 0;
        }
        pre {
            background: #F8F8F8;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Dados Recebidos em <code>destino.php</code></h1>

    <div class="section">
        <h2>Método de Envio</h2>
        <p><?php echo $metodo; ?></p>
    </div>

    <div class="section">
        <h2>Dados Submetidos</h2>
        <p><strong>Nome:</strong> <?php echo htmlentities($nome); ?></p>
        <p><strong>Telefone:</strong> <?php echo htmlentities($telefone); ?></p>
        <p><strong>E-mail:</strong> <?php echo htmlentities($email); ?></p>
        <p><strong>Mensagem:</strong> <?php echo nl2br(htmlentities($mensagem)); ?></p>
    </div>

    <div class="section">
        <h2>Headers HTTP Recebidos</h2>
        <pre><?php
            // Exibe todos os cabeçalhos (array) de forma organizada
            print_r($cabecalhos);
        ?></pre>
    </div>
</body>
</html>
