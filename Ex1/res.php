<?php
session_start();
if (!isset($_SESSION['numero']) == true) {
    header('location:index.php');
}

$logado = $_SESSION['numero'];
?>

<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <?php echo "Número informado: " . $logado; ?>
    <form action="deslogar.php" method="POST">
        <button type="submit" name="sair">Sair</button>
    </form>
</body>

</html>