<?php
try {
    $connect=new PDO('mysql:host=localhost;dbname=bab','root','');
}

catch (Exception $e) {
    die('Impossible de se connecter'.$e->getMessage());
}
?>