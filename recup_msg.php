<?php
session_start();
require_once('config.php');
$c=new configuration();
$conn=$c->getConnexion();
$query=$conn->query(" SELECT messages.id_membre AS m1 , messages.message_membre AS m2 , user.id_user AS m3 , user.nom AS m4 FROM messages INNER JOIN user
  ON messages.id_membre = user.id_user  WHERE ((messages.id_membre=".$_SESSION['id']." AND messages.id_dest ='4') OR (messages.id_dest=".$_SESSION['id']." AND messages.id_membre='4'))ORDER BY temps DESC ");
//var_dump($query);
$messages=array();
while ($rows = $query->fetch()) {
	$messages[]=$rows;
}
foreach ($messages as $message ) {
	?>
<a href="#"><?php echo $message['m4']; ?></a>
<p><?php echo nl2br($message['m2'] ); ?></p>
	<?php
}
?>