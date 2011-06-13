<?php

    #doc
    #    classname:    ClassName
    #    scope:        PUBLIC
    #
    #/doc
    
    class Utils
    {
        #    internal variables
        
        #    Constructor
        function __construct ()
        {
        }
        ###    


        function string_limit_words($string, $word_limit)
        {
          $words = explode(' ', $string, ($word_limit + 1));
          if(count($words) > $word_limit)
          array_pop($words);
          return implode(' ', $words);
        }


        function encodeUrlParam ( $string )
        {

          $string = trim($string);

            $table = array(
                'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
                'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
                'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
                'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
                'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
                'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
                'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
            );
            
            $string = strtr(mb_convert_encoding($string,"UTF-8","auto"), $table);
            
          if ( ctype_digit($string) )
          {
            return $string;
          }
          else 
          {      

            $replace = array('([\40])','([^a-zA-Z0-9-])','(-{2,})');
            $with = array('-','','-');
            $string = preg_replace($replace,$with,$string); 

          } 

          return strtolower($string);
        }


    
    }
    ###

?>
