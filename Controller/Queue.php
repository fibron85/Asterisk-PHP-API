<?php

namespace SIPCloud\AsteriskAPI\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class Queue extends Controller
{
    
     /**
     * @Route("/", name="_sip")
     * @Method({"GET"})
     */
    public function indexAction () {
        return JSON::error(array('500'=>'Method not implemented')); 
    }
    
    /**
     * @Route("/", name="_sip_create")
     * @Method({"POST"})
     */
    public function create() {
        
        return JSON::encodeData(array('shite'));        
    }
    
    /**
     * @Route("/{id}", name="_sip_fetch")
     * @Method({"GET"})
     */
    public function fetch ($id) {
         return JSON::encodeData(array('action'=> 'fetch','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_sip_delete")
     * @Method({"DELETE"})
     */
    public function delete ($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_sip_update")
     * @Method({"POST"})
     */
    public function update ($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));   
    }
    


}
