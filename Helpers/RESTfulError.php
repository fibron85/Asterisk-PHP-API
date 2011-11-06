<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RESTfulError
 *
 * @author thomasbibb
 */


namespace SIPCloud\AsteriskAPI\Helpers;

class RESTfulError extends RESTfulResponse{  
       
    public function __construct(array $error, $headers=array(), $status=500, $mimeType=null) {
        $error = array('error'=>$error);
        parent::__construct($error, $headers, $status, $mimeType);
    }    
    
}

?>
