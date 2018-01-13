<?php
session_start();
require('../../connect.php');
//$messages = trim(htmlentities(mysql_real_escape_string($_POST['messages'])));
//$idmembre = trim(htmlentities(mysql_real_escape_string($_POST['idmembre'])));

//var_dump($messages);

$query = $connect->query("INSERT INTO messages (id_membre,message_membre,id_dest) VALUES ('{$_SESSION['id']}','{$_POST['messages']}','{$_POST['idmembre']}')");
//var_dump($query);
?>