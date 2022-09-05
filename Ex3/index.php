<?php

include ("./janela.php");

if($_POST) {
    $v1 = $_POST['txtv1'];
    $v2 = $_POST['txtv2'];  

    echo "Resultado padrão:"; 
    $total = $v1 * $v2;
    echo $total; 
 
    echo "<br>Dobro: ";
    $total = $total * 2;
    
    echo $total;
}

?>