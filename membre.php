<?php
/**
 * Created by PhpStorm.
 * User: chayma
 * Date: 02/12/2017
 * Time: 18:31
 */
session_start();
if(isset($_SESSION['l'])&&isset($_SESSION['p'])) {
    echo 'Votre login est <b>' . $_SESSION['l'];
    '</b> <br> et votre mot de passe est <b>' . $_SESSION['p'] .
    '</b><br> votre role est :' . $_SESSION['r'] .
    '<br/>Identifiant de la session est:' . session_id() . '</br>';
    echo '<a href="./logout.php">Cliquer pour se déconnecter </a>';
}
else{

    echo'Veuillez vous connectez</br>';
    echo '<a href="./auth.html">Cliquer pour se connecter</a>';
}
?>