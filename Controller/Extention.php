<?php

namespace SIPCloud\AsteriskAPI\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SIPCloud\AsteriskAPI\Helpers\JSON;

class Extention extends Controller
{
    
     /**
     * @Route("/", name="_extention")
     * @Method({"GET"})
     */
    public function indexAction () {
        return JSON::error(array('500'=>'Method not implemented')); 
    }
    
    /**
     * @Route("/", name="_extention_create")
     * @Method({"POST"})
     */
    public function create() {
        
        return JSON::encodeData(array('shite'));        
    }
    
    /**
     * @Route("/{id}", name="_extention_fetch")
     * @Method({"GET"})
     */
    public function fetch ($id) {
         return JSON::encodeData(array('action'=> 'fetch','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_extention_delete")
     * @Method({"DELETE"})
     */
    public function delete ($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_extention_update")
     * @Method({"POST"})
     */
    public function update ($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));   
    }
    


}
