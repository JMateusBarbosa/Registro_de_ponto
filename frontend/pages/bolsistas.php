
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/telaBolsistas.css">
    

    <title>Bolsistas Cadastrados</title>
</head>
<body class="tela-bolsista">
    <header>
        <h1>Bolsistas Cadastrados</h1>
    </header>
    <section>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="../pages/cadastro.php">Cadastro de Bolsistas</a></li>
            <li><a href="../pages/alterarBolsista.php">Alterar Cadastro</a></li>
            <li><a href="../pages/excluirBolsista.php">Excluir Cadastrado</a></li>
            <li><a href="../pages/registroPonto.php">Registrar Ponto</a></li>
            <li><a href="../pages/progresso.php">Acompanhar Progresso</a></li>
        </ul>
    </nav>

    <table id="customers">
        <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Turno</th>
                <th>Data em que foi cadastrado</th>
        </tr>
    
        <?php 
             //$bolsistas = \Models\BolsistasModel::listarBolsistas();
             if (!empty($bolsistas)) {
                foreach ($bolsistas as $value) {
            ?>
                <tr>
                    <td><?php echo $value['id']?></td>
                    <td><?php echo $value['nome']?></td>
                    <td><?php echo $value['telefone']?></td>
                    <td><?php echo $value['turno']?></td>
                    <td><?php echo $value['data_cadastro']?></td>
                </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum bolsista cadastrado.</td></tr>";
            }
            ?>
    </table>


    </section>
        <footer>
        <p>&copy; 2024 Sistema de Ponto</p>
    </footer>
</body>
</html>
