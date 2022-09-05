<?php
session_start();

$_SESSION['numero'] = $_POST['numero'];

header('location:res.php');

?>