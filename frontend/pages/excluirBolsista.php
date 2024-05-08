

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $excluirModel->excluirBolsista($_POST['bolsista']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/telaExcluir.css">

    <title>Excluir Cadastro</title>
</head>
<body class="tela-excluir">
    <header>
        <h1>Excluir Cadastro</h1>
    </header>
    <section>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="../pages/cadastro.php">Cadastro de Bolsistas</a></li>
            <li><a href="../pages/bolsistas.php">Bolsistas Cadastrados</a></li>
            <li><a href="../pages/alterarBolsista.php">Alterar Cadastro</a></li>
            <li><a href="../pages/registroPonto.php">Registrar Ponto</a></li>
            <li><a href="../pages/progresso.php">Acompanhar Progresso</a></li>
        </ul>
    </nav>

    
        <!-- Conteúdo da Formulário de Exclusão de Cadastro aqui -->
        <form class="form-excluir" method="post">
            <label for="bolsista">Selecione o Bolsista:</label>
            <select id="bolsista" name="bolsista" required>
                <!-- bolsistas cadastrados no sistema -->
                <?php foreach ($bolsistas as $value) : ?>
                    <option value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" name="bt-excluir">Excluir Cadastro</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Sistema de Ponto</p>
    </footer>
</body>
</html>


