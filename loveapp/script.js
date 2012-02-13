$(document).ready(function(){
	$('#contact-form').jqTransform();

	$("button").click(function(){

		$(".formError").hide();

	});

	var use_ajax=true;
	$.validationEngine.settings={};

	$("#contact-form").validationEngine({
		inlineValidation: false,
		promptPosition: "centerRight",
		success :  function(){use_ajax=true},
		failure : function(){use_ajax=false;}
	 })

	$("#contact-form").submit(function(e){
			if(use_ajax)
			{
				$('#loading').css('visibility','visible');
				$.post('submit.php',$(this).serialize()+'&ajax=1',
				
					function(data){
						if(parseInt(data)==-1)
							$.validationEngine.buildPrompt("#captcha","* Wrong verification number!","error");
							
						else
						{
							$("#contact-form").hide('slow').after('<h1>Thank you!</h1><br/>Send this link to your loved one :<br/><a href="loveapp.php?name='+document.forms["contact-form"]["name1"].value+'&&yourname='+document.forms["contact-form"]["name"].value+'">http://pclub.in/loveapp/loveapp.php?name='+document.forms["contact-form"]["name1"].value+'&&yourname='+document.forms["contact-form"]["name"].value+'</a>');
						}
						
						$('#loading').css('visibility','hidden');
					}
				
				);
			}
			e.preventDefault();
	})

});