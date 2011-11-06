<?php

/**
 *
 * @Entity
 * @desc Database Entity for Conferences (MeetMe)
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo Exceptions
 */


Namespace AsteriskAPI\Model;

class meetme {
    /** @Column(type="string", nullable=false) */
    private $confno;
    /** @Column(type="timestamp", nullable=false) */
    private $starttime;
    /** @Column(type="timestamp", nullable=false) */
    private $endtime;
    /** @Column(type="string", lenght="20") */
    private $pin;
    /** @Column(type="string", lenght="100") */
    private $opts;
    /** @Column(type="string", lenght="20") */
    private $adminpin;
    /** @Column(type="string", lenght="100") */
    private $adminopts;
    /** @Column(type="integer", lenght="11", nullable=false) */
    private $members;
    /** @Column(type="integer", lenght="11", nullable=false) */
    private $maxusers;

    /**
     *
     * @param <Timestamp> $startTime
     * @param <Timestamp> $endTime
     * @param <String> $pin
     * @param <String> $opts
     * @param <String> $adminPin
     * @param <String> $adminOpts
     * @param <Integer> $maxUsers
     * @param <Integer> $members
     */
    public function __construct($startTime, $endTime, $pin=null, $opts=null, $adminPin=null, $adminOpts=null, $maxUsers=0, $members=0) {
        $this->starttime = $startTime;
        $this->endtime = $endTime;
        $this->pin = $pin;
        $this->opts = $opts;
        $this->adminPin = $adminPin;
        $this->adminopts = $adminOpts;
        $this->maxusers = $maxUsers;
        $this->members = $members;
    }

    /**
     * @desc Gets the uniquie conference idenitifer
     * @return <type>
     */
    public function getConfNo() {
        return $this->confno;
    }

    /**
     * @desc Get the conference start time
     * @return <type>
     */
    public function getStartTime() {
        return $this->starttime;
    }

    /**
     * @desc Sets the Start time of the conference
     * @param <type> $startTime
     */
    public function setStartTime($startTime) {
        $this->starttime = $startTime;
    }

    /**
     * @desc Gets the end time for the Conference
     * @return <Timestamp>
     */
    public function getEndTime() {
        return $this->endtime;
    }

    /**
     * @desc Sets the end time for the Conference
     * @param <Timestamp> $endTime
     */
    public function setEndTime ($endTime) {
        $this->endtime = $endTime;

    }

    /**
     * @desc Gets the pin for the Conference
     * @return <String>
     */
    public function getPin() {
        return $this->pin;
    }

    /**
     * @desc Sets the pin for the Conference
     * @param <type> $pin
     */
    public function setPin($pin) {
        $this->pin = $pin;
    }

    /**
     * @desc Gets the Opts for the Conference
     * @return <String>
     */
    public function getOpts() {
        return $this->opts;
    }

    /**
     * @desc Sets the Opts for the Conference
     * @param <String> $opts
     */
    public function setOpts ($opts) {
        $this->opts = $opts;
    }

    /**
     * @desc Gets the Admin pin for the Conference
     * @return <String>
     */
    public function getAdminPin() {
        return $this->adminpin;
    }

    /**
     * @desc Sets the Admin pin for the Conference
     * @param <String> $adminPin
     */
    public function setAdminPin($adminPin) {
        $this->adminpin = $adminPin;
    }

    /**

     * @desc Gets the Admin Opts for the Conference
     * @return <String>
     */
    public function getAdminOpts () {
        return $this->adminopts;
    }

    /**
     * @param <String> $adminOpts
     * @desc Enable the setting of Admin Opts
     */
    public function setAdminOpts ($adminOpts) {
        $this->adminopts = $adminOpts;
    }

    /**
     * @desc Gets members of the Conference
     * @return <String>
     */
    public function getMembers () {
        return $this->members;
    }

    /**
     * @desc Gets the Maxium users for the Conference
     * @return <Integer>
     */
    public function getMaxUsers () {
        return $this->maxusers;
    }

    /**
     * @desc Set the maxium users for the Conference
     * @param <Integer> $maxUsers
     */
    public function setMaxUsers ($maxUsers) {
        $this->maxusers = $maxUsers;
    }
}
?>
