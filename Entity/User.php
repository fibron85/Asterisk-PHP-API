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

Namespace SIPCloud\AsteriskAPI\Entity;

class User {
    
    public $username;
    public $firstname;
    public $lastname;
    private $password;
    private $salt = null;
    
    const HASH_CRC32 = 'crc32';
    const HASH_SHA256 = 'sha256';
    
    public static $hash = null;
    
    /**
     * Combines both Firstname and Lastname to make a Fullname
     * @return string Fullname 
     */
    public function getFullname() {
        return $this->firstname.' '.$this->lastname;
    }
    
    /**
     * 
     * @param string $plaintextPassword 
     */
    public function setPassword ($plaintextPassword) {
        $this->initaliseSalt(true);
        $this->password = md5($plaintextPassword.$this->salt);
    } 
    
    /**
     * Validates the given plaintext password against 
     * the md5 hash and secure salt
     * @param string $plaintextPassword
     * @return boolean
     */
    public function validPassword ($plaintextPassword) {
        
        $this->initaliseSalt();
        
        if (md5($plaintextPassword.$this->salt)== $this->password) {
            return true;
        } 
        
        return false;
    }
    
    /**
     * Initalises the users salt key setting reset to true 
     * will regenerate the salt however this will invalid any 
     * current password stored for the particular user.
     * @param boolean $reset 
     */
    public function initaliseSalt ($reset=false) {
        if ($this->salt === null || $reset) {
           $this->initaliseHashArray();
           
           $hash = mt_rand(1,count(self::$hash));
           $this->salt = md5(hash(self::$hash[$hash],mt_rand().md5(time())));
        }
    }
    
    /**
     * Populates the self::hash with the avalable hash algorithmes 
     * @name initaiseHashArray
     */
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