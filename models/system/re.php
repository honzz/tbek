<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of render
 *
 * @author Administrator
 */
class re {
    
    static function render($data) {
        
        $result = "";
        

        if(is_array($data)){

            foreach ($data as $obj){
                
                if (is_object($obj)){
                    $result .= re::renderObj($obj);
                }       
            }    
        }elseif (is_object($data)) {
            $result .= re::renderObj($data);
        
        }

        return $result;
    }
    
    
    static Function renderObj($obj){
                
        ob_start();
        include PRJ_PATH . "/views/" .$obj->template;
        $renderedView = ob_get_clean();

        return $renderedView; 
        
    }
   
}
