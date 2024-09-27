<?php
require_once 'Vinho_branco.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #eef2f3;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    h1 {
        font-size: 2em;
        color: #007bff;
        margin-bottom: 20px;
    }

    p {
        line-height: 1.6;
        margin: 10px 0;
        font-size: 1.1em;
    }

    .destaque {
        font-weight: bold;
        color: #d9534f;
        font-size: 1.3em;
        padding: 10px;
        border: 2px solid #d9534f;
        border-radius: 5px;
        background-color: rgba(217, 83, 79, 0.1);
        margin-top: 20px;
    }

    .info {
        background-color: #f0f8ff;
        padding: 15px;
        border-radius: 5px;
        border-left: 5px solid #007bff;
        margin: 10px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
<div class="container">
<h1>Vinhos</h1>
<p><?= $detalheVinho ?></p>
<p class="destaque"><?= $ofertaVinho ?></p>
</div>
</body>
</html>