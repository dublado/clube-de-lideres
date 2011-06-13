function cadastrarNewsletter()
{
		$.post('../ajax/index/inscreverNewsletter',
		{
			email:$('#emailNews').val()
		},
		function(data)
		{
			$('#newsletter form').text(data)
		});
	return false;
}

$(document).ready(function(){
	$("#newsletter form").validate({
	  rules:
	  {
		email:
		{
		  required: true,
		  email: true
		}
	  }
	});
});

