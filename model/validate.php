<?php

class validate
{
    private $_dataLayer;
    function __construct($dataLayer)
    {
       // $this->_datalayer = new datalayer();
        $this->_dataLayer = $dataLayer;
    }
    function validName($name)
    {
        return !empty($name) && ctype_alpha($name);
    }
    function validFirstN($fname)
    {
        $fname = str_replace(' ', '', $fname);
        return !empty($fname) && ctype_alpha($fname);
    }

    function validLastN($lname)
    {
        $lname = str_replace(' ', '', $lname);
        return !empty($lname) && ctype_alpha($lname);
    }

    function validAge($age)
    {
        $age = str_replace(' ', '', $age);
        return !empty($age) && ctype_digit($age) && $age <= 118 && $age >= 18;
    }

    function validGenders($gender)
    {
        $validGenders = $this->_dataLayer->getGenders();
        return in_array($gender, $validGenders);


    }

    function validPhone($phone)
    {
        $phone = str_replace(' ', '', $phone);
        return !empty($phone) && ctype_digit($phone) && strlen($phone) === 10;
    }

    function validEmail($email)
    {
        $email = str_replace(' ', '', $email);
        return !empty($email) &&
            filter_var($email, FILTER_VALIDATE_EMAIL) != false;
    }

    function validState($state)
    {
        $state = str_replace(' ', '', $state);
        return $state != "--";
    }


    function validIndoor($selectedIndoors)
    {
        $validIndoors = $this->_dataLayer->getIndoorInterest();
        foreach ($selectedIndoors as $selected) {
            if (!in_array($selected, $validIndoors)) {
                return false;
            }
        }
        return true;
    }

    function validOutDoor($selectedOutdoors)
    {
        $validOutdoors = $this->_dataLayer->getOutdoorInterest();
        foreach ($selectedOutdoors as $selected) {
            if (!in_array($selected, $validOutdoors)) {
                return false;
            }
        }
        return true;
    }
}