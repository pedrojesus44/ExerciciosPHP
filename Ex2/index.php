<?php

include ("./janela.php");

if($_POST) {
    $v1 = $_POST['txtv1'];
    $total = $v1 * 100; 

    echo $total;
}

?>