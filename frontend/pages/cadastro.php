
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/telaCadastro.css">

    <title>Cadastro de Bolsistas</title>
</head>
<body class="tela-cadastro">
    <header>
        <h1>Cadastro de Bolsistas</h1>
    </header>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="../pages/alterarBolsista.php">Alterar Cadastro</a></li>
            <li><a href="../pages/excluirBolsista.php">Excluir Cadastrado</a></li>
            <li><a href="../pages/registroPonto.php">Registrar Ponto</a></li>
            <li><a href="../pages/progresso.php">Acompanhar Progresso</a></li>
        </ul>
    </nav>

    <section>
        <!-- Conteúdo do Formulário de Cadastro de Bolsistas aqui -->
        <form class="form-cadastro" method="post">

            <div class="div-label-imput">

                <div class="label-input">
                    <label for="nome"><strong class="label-strong">*Nome:</strong></label>
                    <input class="campo" type="text" id="nome" name="nome" placeholder="João Mateus" required>
                </div>

                <div class="label-input">
                    <label for="telefone"><strong class="label-strong">*Telefone para Contato:</strong></label>
                    <input class="campo" type="text" id="telefone" name="telefone" placeholder="92 99999999" required>
                </div>

                <div class="label-input">
                    <label for="turno"><strong class="label-strong">*Turno:</strong></label>
                    <select class="campo" id="turno" name="turno" required>
                        <option value="Manha">Manhã</option>
                        <option value="Tarde">Tarde</option>
                    </select>
                </div>

            </div>
            
            <div class="div-submit-reset">
                <div class="submit-reset">
                    <input class="bt-submit" type="submit" name="bt_enviar" value="Cadastrar">
                </div>
                <div class="submit-reset">
                    <input class="bt-reset" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Sistema de Ponto</p>
    </footer>
</body>
</html>
