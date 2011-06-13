$.fn.extend({
    slider:function()
    {
    	//Conta a quantidade de banners inseridos
    	avaria = {};
    	avaria.totalBanners = 0;
    	//hor,soul, vit
    	avaria.banners = ['apple.swf','canon.swf','maxicom.swf'];
        $(this).find('.banner').each(function(){
        	avaria.totalBanners++;
        });
        //Cria lista com numeracao

        $('<ul id="numeracao"></ul>').appendTo(this);

        	for(i=0;i<avaria.banners.length;i++)
        	{
        		c = i+1;
        		li = '<li>';
        		li += '<a href="#" onclick="irPara(' + i + '); return false;">' + c + '</a>';
        		li += '</li>'
        		$(li).appendTo('#numeracao');
        	}
        	
        //Esconde todos os banners além do primeiro
        $(this).find('.banner').each(function(i){
        	if(i >= 1)
        	$(this).hide();
        });
        
        
        //$(this).find('.banner:visible').temporizador();
        //Temporizador, desligado se não for imagem
        
    }
});


function irPara(n)
{
	a = {};
	avaria.banners = ['apple.swf','canon.swf','maxicom.swf'];

				
    embed = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="822" height="283" id="movie" align=""> <param name="wmode" value="transparent"> <param name="movie" value="index/images/' + avaria.banners[n] +'"> <embed src="index/images/' + avaria.banners[n]+'" quality="high" width="822" wmode="transparent" height="283" name="movie" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </object>';
    //alert(embed);
/*
				$('.banner').empty();

$('.banner').flash( 
     { 
         src: 'index/images/'+ avaria.banners[n], 
         width: 822, 
         menu:true, 
         height: 283, 
         background: '#ffffff', 
         id: 'mymovie', 
         wmode: 'transparent', 
         flashvars: { folder: 'nightmare_ice' } 
      }, 
      { 
          expressInstall: true, 
          version: '8' 
      }  );  */ 

				
				$('.banner object').remove();
				$('.banner').empty();
				$(embed).appendTo('.banner');
}

function proximoframe()
{
	avaria = {};
    	avaria.totalBanners = 0;
    	avaria.banners = ['apple.swf','canon.swf','maxicom.swf'];
	for(i=0;i<avaria.banners.length;i++)
	{
		if($('.banner embed').attr('src') == 'index/images/' + avaria.banners[i])
		{
			if(i == avaria.banners.length-1)
			{
				i=0;
    embed = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="822" height="283" id="movie" align=""> <param name="wmode" value="transparent"> <param name="movie" value="index/images/' + avaria.banners[i] +'"> <embed src="index/images/' + avaria.banners[i]+'" quality="high" width="822" wmode="transparent" height="283" name="movie" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </object>';

/*
				$('.banner').empty();

$('.banner').flash( 
     { 
         src: 'index/images/'+ avaria.banners[i], 
         width: 822, 
         menu:true, 
         height: 283, 
         background: '#ffffff', 
         id: 'mymovie', 
         wmode: 'transparent', 
         flashvars: { folder: 'nightmare_ice' } 
      }, 
      { 
          expressInstall: true, 
          version: '8' 
      }     );
*/      
    
    //alert(embed);
				$('.banner object').remove();
				$('.banner').empty();
				$(embed).appendTo('.banner');
//				$('.banner').html(embed);
			}
			else
			{
    embed = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="822" height="283" id="movie" align=""> <param name="wmode" value="transparent"> <param name="movie" value="index/images/' + avaria.banners[i+1] +'"> <embed src="index/images/' + avaria.banners[i+1]+'" quality="high" width="822" wmode="transparent" height="283" name="movie" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </object>';
    //alert(embed);

				$('.banner object').remove();
				$('.banner').empty();
				$(embed).appendTo('.banner');
//				$('.banner').html(embed);
/*
				$('.banner').empty();

$('.banner').flash( 
     { 
         src: 'index/images/'+ avaria.banners[i+1], 
         width: 822, 
         menu:true, 
         height: 283, 
         background: '#ffffff', 
         id: 'mymovie', 
         wmode: 'transparent', 
         flashvars: { folder: 'nightmare_ice' } 
      }, 
      { 
          expressInstall: true, 
          version: '8' 
      }     );
*/
			}
			break;
		}
	}
}



$(document).ready(function()
{
	$('#slider').slider();
});
