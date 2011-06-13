<?php
class index extends siteman 
{

	function __construct ()
	{

	parent::__construct(array(
	"titulo"=>" la pagina",
	"skel"=>"header_footer",
	"description"=>"i need a miracle"
	));

    //echo "o loko";

		
	}
	
	function __destruct()
	{
		parent::__destruct();
		//include ()		
	}

}
