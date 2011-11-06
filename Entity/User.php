<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author thomasbibb
 */
class User {
    
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $salt = null;
    
    const HASH_CRC32 = 'crc32';
    const HASH_SHA256 = 'sha256';
    
    public static $hash = null;
    
    public function getFullname() {
        return $this->firstname.' '.$this->lastname;
    }
    
    public function validPassword ($plaintextPassword) {
        
        $this->initaliseSalt();
        
        if (md5(ltrim(7,$this->salt).$plaintextPassword.rtrim(5,$this->salt)) == $this->password) {
            return true;
        } 
        
        return false;
    }
    
    public function initaliseSalt () {
        
        $this->initaliseHashArray();
        
        $hash = mt_rand(1,count(self::$hash));
        
        if ($this->salt === null) {
           $this->salt = md5(hash(self::$hash[$hash],mt_rand().md5(time())));
        }
        return $this->salt;
    }
    
    public function initaliseHashArray() {
        if (self::$hash === null) {
            self::$hash = array(
                self::HASH_CRC32,
                self::HASH_SHA256
            );
        }       
    }
    
}

?>
