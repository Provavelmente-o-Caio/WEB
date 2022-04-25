<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <div class="container">
        <h1>Formulário de Cadastro</h1>
        <form action="recebe.php" method="get">
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome">
            </div>
            <input type="submit" value="vai">
        </form>
    </div>
</body>
</html>