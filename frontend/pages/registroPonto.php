
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/telaRegistroPonto.css">
    <script src="../assets/js//script.js"></script>
    <title>Registrar Ponto</title>
</head>
<body class="tela-registroPonto">
    <header>
        <h1>Registrar Ponto</h1>
    </header>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="../pages/cadastro.php">Cadastro de Bolsistas</a></li>
            <li><a href="../pages/bolsistas.php">Bolsistas Cadastrados</a></li>
            <li><a href="../pages/alterarBolsista.php">Alterar Cadastro</a></li>
            <li><a href="../pages/excluirBolsista.php">Excluir Cadastro</a></li>
            <li><a href="../pages/progresso.php">Acompanhar Progresso</a></li>
        </ul>
    </nav>

    <section>
        <!-- Formulário de Registro de Ponto aqui -->
        <form class="form-registro" method="post">
            <label for="bolsista">Selecione o Bolsista:</label>
            <select id="bolsista" name="bolsista" required>
                <?php foreach ($bolsistas as $value) : ?>
                    <option value="<?php echo $value['id']; ?>" data-nome="<?php echo $value['nome']; ?>">
                        <?php echo $value['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="horario_entrada">Horário de Entrada:</label>
            <input type="time" id="horario_entrada" name="horario_entrada" required>

            <label for="horario_saida">Horário de Saída:</label>
            <input type="time" id="horario_saida" name="horario_saida" required>

            <!-- Adicione este campo hidden para enviar o nome do bolsista -->
            <input type="hidden" name="nome_bolsista" id="nome_bolsista">


            <button type="submit" name="bt-registrar">Registrar Ponto</button>
        </form>
        <?php
            if (isset($_POST['bt-registrar'])) {
                $bolsistaId = $_POST['bolsista'];
                $nomeBolsista = $_POST['nome_bolsista'];
                $horarioEntrada = $_POST['horario_entrada'];
                $horarioSaida = $_POST['horario_saida'];

                // Obtendo a data atual no formato 'Y-m-d'
                $dataAtual = date('Y-m-d');

                
            
               // $registroModel = new RegistroPontoModel();
                $registroModel->registrarPonto($bolsistaId, $nomeBolsista, $horarioEntrada, $horarioSaida);
            }
        ?>

        <script>
            document.getElementById('bolsista').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var nomeBolsista = selectedOption.getAttribute('data-nome');

            // Atualizando o campo oculto com o mesmo nome
            document.getElementById('nome_bolsista').value = nomeBolsista;
            });


            document.querySelector('.form-registro').addEventListener('submit', function (event) {
                var horarioEntrada = document.getElementById('horario_entrada').value;
                var horarioSaida = document.getElementById('horario_saida').value;

                // Convertendo os horários para objetos Date para comparação
                var entradaDate = new Date('2000-01-01 ' + horarioEntrada);
                var saidaDate = new Date('2000-01-01 ' + horarioSaida);

                // Verificando se o horário de saída é maior que o de entrada
                if (entradaDate >= saidaDate) {
                    alert('O horário de saída deve ser maior que o de entrada.');
                    event.preventDefault(); // Impede o envio do formulário se a validação falhar
                }
            });
        </script>

    </section>


    <footer>
        <p>&copy; 2024 Sistema de Ponto</p>
    </footer>
</body>
</html>