<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <?php
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<p class='mensagem'>" . $_SESSION['mensagem'] . "</p>";
            unset($_SESSION['mensagem']);
        }
        ?>
        <form action="cadastrar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>