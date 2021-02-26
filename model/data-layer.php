<?php
function getIndoor()
{
    $indoor = array("tv", "movies", "cooking", "board games",
        "puzzles", "reading", "playing cards", "video games");
    return $indoor;
}

function getOutdoor()
{
    $outdoor = array("hiking", "biking", "swimming", "collecting",
        "walking", "climbing");
    return $outdoor;
}

function getStates()
{
    $states = array("--","AL", "AK", "AZ", "AR",
        "CA", "CO"
    , "CT", "DE", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT",
        "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT"
    , "VA", "WA", "WV", "WI", "WY");
    return $states;
}