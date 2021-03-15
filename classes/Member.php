<?php


class Member
{
    private  $_fname;
    private  $_lname;
    private  $_age;
    private  $_gender;
    private  $_phone;
    private  $_email;
    private  $_state;

    /**
     * @return
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * @param  $fname
     */
    public function setFname( $fname)
    {
        $this->_fname = $fname;
    }

    /**
     * @return
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * @param  $lname
     */
    public function setLname( $lname)
    {
        $this->_lname = $lname;
    }

    /**
     * @return
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param  $age
     */
    public function setAge( $age)
    {
        $this->_age = $age;
    }

    /**
     * @return
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param  $gender
     */
    public function setGender( $gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param  $phone
     */
    public function setPhone( $phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param  $email
     */
    public function setEmail( $email)
    {
        $this->_email = $email;
    }

    /**
     * @return
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param  $state
     */
    public function setState( $state)
    {
        $this->_state = $state;
    }

    /**
     * @return
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * @param  $seeking
     */
    public function setSeeking( $seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * @param  $bio
     */
    public function setBio( $bio)
    {
        $this->_bio = $bio;
    }
    private  $_seeking;
    private  $_bio;

    public function __construct ($fname, $lname, $age, $gender, $phone,$email,$state,$seeking,$bio)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;

    }




}