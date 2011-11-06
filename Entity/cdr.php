<?php

/**
 * @Entity
 * @desc Database Entity for CDR (Call Details Record)
 * @tutorial Object is READ ONLY
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo 
 */

Namespace AsteriskAPI\Model;

class cdr {
    /** @Column(type="string", nullable=false) */
    private $clid;
    /** @Column(type="Timestamp", nullable=false) */
    private $calldate;
    /** @Column(type="string", nullable=false) */
    private $src;
    /** @Column(type="string", nullable=false) */
    private $dst;
    /** @Column(type="string", nullable=false) */
    private $dcontext;
    /** @Column(type="string", nullable=false) */
    private $channel;
    /** @Column(type="string", nullable=false) */
    private $lastapp;
    /** @Column(type="string", nullable=false) */
    private $lastdata;
    /** @Column(type="integer", nullable=false) */
    private $duration;
    /** @Column(type="integer", nullable=false) */
    private $billsec;
    /** @Column(type="string", nullable=false) */
    private $disposition;
    /** @Column(type="integer", nullable=false) */
    private $amaflags;
    /** @Column(type="string", nullable=false) */
    private $accountcode;
    /** @Column(type="string", nullable=false) */
    private $userfield;
    /** @Column(type="string", nullable=false) */
    private $uniqueid;


    /**
     * @desc Gets the CallerID
     * @return <String>
     */
    public function getCallerID () { return (string) $this->clid; }

    /**
     * @desc Gets the Date/Time of the Call
     * @return <Timestamp>
     */
    public function getCallDate () { return new DateTime($this->calldate); }

    /**
     * @desc Gets where the Call Originated
     * @return <String>
     */
    public function getSource () { return $this->src; }

    /**
     * @desc Gets where the Call was destine for
     * @return <String>
     */
    public function getDestintation () { return $this->dst; }

    /**
     * @desc Gets the destination Context
     * @return <String>
     */
    public function getDContext () { return $this->dcontext; }

    /**
     * @desc gets the Channel used
     * @return <String>
     */
    public function getChannel () { return $this->channel; }

    /**
     * @desc Gets the last Application Used i.e. Dial
     * @return <String>
     */
    public function getLastApplication () { return $this->lastapp; }

    /**
     * @Desc Gets the last Data
     * @return <String>
     */
    public function getLastData () { return $this->lastdata; }

    /**
     * @desc Gets the actual duration of the call including Ringing
     * @return <Integer>
     */
    public function getCallDuration () { return $this->duration; }
        

    /**
     * @desc gets the actutal Billing Duration on Seconds (Without Ringing)
     * @return <Interger>
     */
    public function getBillingDuration () { return $this->billsec; }

    /**
     * @desc Gets the Disposition
     * @return <String>
     */
    public function getDisposition () { return $this->disposition; }

    /**
     * @desc Gets the AMAFlags
     * @return <String>
     */
    public function getAMAFlags () { return $this->amaflags; }

    /**
     * @desc Gets the Account Code for the Call
     * @return <String>
     */
    public function getAccountCode () { return $this->accountcode; }


    /**
     * @desc Gets the User Field
     * @return <type>
     */
    public function getUserField () { return $this->userfield; }

    /**
     * @desc Gets the Unique ID for the call
     * @return <type>
     */
    public function getUniqueID () { return $this->uniqueid; }

}
?>
