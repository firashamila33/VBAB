//fonction de recuperation des messages
function recup_msg()
{

    var idmembre = $('.idmembre').val();
	$.post('recup_msg.php',{idmembre:idmembre},function(data){
    $('.messages').html(data);
	});
}
setInterval(recup_msg,2000);

//la fonction qui va inserer les donnees
function envoi_msg()
{
$('.entree').keyup(function(e){
	var messages = $('.entree').val();
	var idmembre = $('.idmembre').val();
	messages = $.trim(messages);
	idmembre = $.trim(idmembre);
	if(messages != "" && e.keyCode==13 && e.shiftKey==false)
	{
		$.post('envoi_msg.php',{idmembre:idmembre,messages:messages},function(){
			recup_msg();
			$('.entree').val('');
		});


	}
});
}
envoi_msg();