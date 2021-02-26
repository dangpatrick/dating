<?php

function validFirstN($fname)
{
    $fname = str_replace(' ', '', $fname);
    return !empty($fname)  && ctype_alpha($fname);
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
    return $state != "--" ;
}

function validOutdoor($outdoor)
{
    $outDoorOptions  = getOutdoor();
    return in_array($outdoor, $outDoorOptions);
}

function validIndoor($indoor)
{
    $indoorOptions  = getOutdoor();
    return in_array($indoor, $indoorOptions);
}