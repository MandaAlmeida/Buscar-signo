<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seu Signo</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="body">
    <div class="container">
        <div class="text-index">
            <?php
            $data = $_POST['dataNasc'];
            $date = new DateTime($data);
            $dateSig = $date->format('m-d');

            $xml = simplexml_load_file('signos.xml');


            echo '<h2>' . $xml->titulo . '</h2>';

            echo '<h1>';
            foreach ($xml->signo as $registro) :
                if ($dateSig >= $registro->dataInicio and $dateSig <= $registro->dataFim) {
                    echo $registro->signoNome . '</h1>';
                    echo '<p>' . $registro->descricao . '<p>';
                }
            endforeach;
            ?>
        </div>
        <div>
            <div class="button">
                <a class="voltar" href="./index.php">Voltar</a>
            </div>
        </div>
    </div>
</body>

</html>