<?php 

session_start();
//print_r($_SESSION);//
if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
      
       unset($_SESSION['senha']);


    // header('Location: login.php');//
}
$logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Acessou o sistema</h1>
    <?php 
    echo "<h1>PREZADO(A) <u>$logado</u></h1>";
    ?>

</body>
</html>