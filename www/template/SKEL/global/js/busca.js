 function converterBusca()
{
	this.instanciar = function()
	{
		this.busca = $('#busca').val();
	}
	this.replaceAll = function(str, a, b)
	{
		while (str.indexOf(a) != -1) {
			str = str.replace(a, b);
		}
		return str;
	}
	this.removerEspacos = function(str)
	{
		str = this.replaceAll(str, ' ', '+');
		return str;
	}
	this.gerarUrl = function(str)
	{
		s = '/';
		start = '../produtos';
		template = start + s + this.busca;
		template = this.removerEspacos(template);
		return template;
	}
}

function goBusca()
{
	a = new converterBusca();
	a.instanciar();
	window.location = a.gerarUrl();
	return false;	
}

