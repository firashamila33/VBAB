//fonction de recuperation des messages
function recup_msg()
{
	$.post('recup_msg.php',function(data){
    $('.messages').html(data);
	});
}
setInterval(recup_msg,2000);

//la fonction qui va inserer les donnees
function envoi_msg()
{
$('.entree').keyup(function(e){
	var messages = $('.entree').val();
	messages = $.trim(messages);
	if(messages != "" && e.keyCode==13 && e.shiftKey==false)
	{
		$.post('envoi_msg.php',{messages:messages},function(){
			recup_msg();
			$('.entree').val('');
		});
        
	}
});
}
envoi_msg();