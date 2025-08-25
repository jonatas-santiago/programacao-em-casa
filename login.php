<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/Captura_de_tela_2024-08-21_165842-removebg-preview.png" type="image/x-icon">
    <title>programação em casa</title>
    <link rel="stylesheet" href="style.css">

  <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, yellow);
    }

   .tela-login {
    background-color: rgba(0, 0, 0, 0.9);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    border-radius: 15px;
    color: white;
   }

   input {
    padding: 15px;
    border: none;
    outline: none;
   }

    .enviar {
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
    }

    .enviar:hover {
        background-color: deepskyblue;
        cursor: pointer;
    }

  </style>

</head>
<body>
 

   <a href="tela-de-acesso.php">Voltar</a>
   <div class="tela-login">
    <h1>Logar-se</h1>
    <form action="testLogin.php" method="POST">
    <input type="text" placeholder="Nome" name="nome" id="nome" class="inputUser" required>
    <br><br>
    <input type="password" placeholder="Senha" name="senha" id="senha" class="inputUser" required>
    <br><br>
    <input type="submit" name="submit" id="submit" class="enviar">
</form>
   </div>

</body>
</html>