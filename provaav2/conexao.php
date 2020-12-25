<?php
    
	$server = 'localhost';
    $user = 'fillipe';
    $password = '';
    $dbname = "av2fillipe";
    $conn = new mysqli($server,$user,$password,$dbname);
    if($conn->connect_error){
        die("Erro de conexão.<br>".$conn->connect_error);
    }
?>
