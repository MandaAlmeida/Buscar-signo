<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <title>Seu Signo</title>
</head>

<body class="body">
    <div class="container">
        <div class="text-index">
            <h1>Signos</h1>
            <strong>Descubra qual o seu signo</strong>
            <form action="signos.php" method="post">
                <div class="data">
                    <label for="floatingInput">Informe sua data de Nascimento</label>
                    <input type="date" class="form-control" id="floatingInput" name="dataNasc" placeholder="Sua data" required>

                </div>
                <div>
                    <button class="" type="submit">Ver Signo</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>