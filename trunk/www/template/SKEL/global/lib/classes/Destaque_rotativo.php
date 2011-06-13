<?php
class Destaque_Rotativo 
{

    function __construct ()
    {
        switch(parametros(0))
        {
            case "index":
                ?><div id="destaque">
                <div id="slider">
		        <div class="banner" id="bannner">

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="822" height="283" id="movie" align="">
<param name="wmode" value="transparent">
<param name="movie" value="index/images/apple.swf">
<embed src="index/images/apple.swf" quality="high" width="822" wmode="transparent" height="283" name="movie" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> 
</object>		        
		        <!--<param name="wmode" value="transparent">
				<embed width="822" height="283" type="application/x-shockwave-flash" src="index
				/images/apple.swf" pluginspage="http://www.adobe.com/go/getflashplayer" wmode="transparent" flashvars="">-->
			</div>				
                </div>
            </div><?php
            break;
        }
        
        
    }
    
    function tragedy()
    {
    
                   return "voce me chamou?";

    
    }
 
}
