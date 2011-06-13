function busca_por_fabricante(vthis){

window.location.href='../produtos/marca/'+($(vthis).attr('value'));

}

		$(document).ready(function() {

$('#the_fabricante').bind('change', function(){
busca_por_fabricante($('#the_fabricante'));
});
		
		});		

