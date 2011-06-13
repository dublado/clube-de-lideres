<?php
#doc
#    classname:    ClassName
#    scope:        PUBLIC
#
#/doc

class empresa extends siteman
{
    #    internal variables
    
    #    Constructor
    function __construct ()
    {

		parent::__construct(
		array(
		"titulo"=>"Empresa",
		"skel"=>"global",
		"description"=>"Empresa",
		));
        
    }
    ###    

}
###
