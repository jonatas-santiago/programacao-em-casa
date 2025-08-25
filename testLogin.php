<?php 
session_start();
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
    include_once('config.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Exibe dados para depuração (NÃO FAÇA EM PRODUÇÃO)
    echo 'Nome: ' . htmlspecialchars($nome) . '<br>';
    echo 'Senha: ' . htmlspecialchars($senha) . '<br>';

    // Consulta SQL
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // Login bem-sucedido
          $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: sucesso.php');
        exit;
    } else {
        // Falha no login
      unset($_SESSION['nome']);
       unset($_SESSION['senha']);
        header('Location: login.php');
        exit;
    }
} else {
   
    // Campos obrigatórios não preenchidos
    header('Location: login.php');
    exit;
}
?>
-
