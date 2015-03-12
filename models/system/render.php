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
class render {
    
    static function unction($obj) {
        extract($obj);
        
        ob_start();
        include PRJ_PATH . "/views/" .$obj->template;
        $renderedView = ob_get_clean();

        return $renderedView;
    }
    
}
