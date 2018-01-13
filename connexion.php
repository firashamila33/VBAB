

<head>

<meta charset="utf8">

</head>

<body>

<?php
require_once("config.php");
require_once ("user.php");
$c=new configuration();
$conn=$c->getConnexion();

$logR=$_POST['login'];
$pwdR=$_POST['pwd'];

$req="SELECT * FROM `user` WHERE username='$logR'&& password='$pwdR'&& role='Client'";
$req2="SELECT * FROM `user` WHERE username='$logR'&& password='$pwdR' && role='Admin'";
$req3="SELECT * FROM `user`";
$rep=$conn->query($req);
$rep2=$conn->query($req2);
$rep3=$conn->query($req3);
$u=$rep->fetchAll();
$u2=$rep2->fetchAll();
$u3=$rep3->fetchAll();
$vide=false;

if(!empty ($_POST['login'])&& !empty($_POST['pwd'])) {

    foreach ($u as $t) {
        $vide = true;
        if ($t['username'] == $_POST['login'] && $t['password'] == $_POST['pwd'] && $t['role']=="Client") {
            if (empty($_SESSION)) { 
                session_start();
                $_SESSION['usersession']= $u;
                $_SESSION['id']=$t["id_user"];
                header("location:index.php");
                //break;
            }
            else{
                 header("location:login.php");

            }
           // echo"<script type='text/javascript'>document.location.replace('index.php')</script>";
        }
    }

    foreach ($u2 as $t) {
        $vide = true;
        if ($t['username'] == $_POST['login'] && $t['password'] == $_POST['pwd'] && $t['role']=="Admin") {
            session_start();
             $_SESSION['usersession']= $u2;
            $_SESSION['id']=$t["id_user"];
           //$_SESSION['l'] = $_POST['login'];
            //$_SESSION['p'] = $_POST['pwd'];
            //$_SESSION['r'] = $_POST['role'];

                header("location:admin/pages/index.php");
           // echo"<script type='text/javascript'>document.location.replace('index.php')</script>";
        }
    }
        if ($vide == false) {

            echo '<body onLoad="alert(\'Membre non reconnu....\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login.php">';
        }




else {

        echo "les variables du formulaire ne sont pas déclarées .<br> Vous devez remplir le formumaire";

        ?><a href="auth.html">retour au formulaire</a> <?php
    }

}

?>

</body>

</html>