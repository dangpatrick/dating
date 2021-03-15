<?php
/**
 * @author Patrick Dang
 * @version 1.0
 * Class DataLayer
 */

class DataLayer
{
    private $_dbh;
    function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }
    function getMembers()
    {
        //Define the query
        $sql = "SELECT * FROM dating";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Bind the parameters

        //Execute
        $statement->execute();

        //Get the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
        return $result;
    }

    function insertMember($member)
    {
        var_dump($member);
        //Define the query
        $sql = "INSERT INTO dating(fname, lname, age, gender, phone, email, state, seeking, bio)
	            VALUES (:fname, :lname, :age, :gender, :phone, :email, :state , :seeking, :bio)";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Bind the parameters
        $statement->bindParam(':fname', $member->getFname(), PDO::PARAM_STR);
        $statement->bindParam(':lname', $member->getLname(), PDO::PARAM_STR);
        $statement->bindParam(':age', $member->getAge(), PDO::PARAM_INT);
        $statement->bindParam(':gender', $member->getGender(), PDO::PARAM_STR);
        $statement->bindParam(':phone', $member->getPhone(), PDO::PARAM_INT);
        $statement->bindParam(':email', $member->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':state', $member->getState(), PDO::PARAM_STR);
        $statement->bindParam(':seeking', $member->getSeeking(), PDO::PARAM_STR);
        $statement->bindParam(':bio', $member->getBio(), PDO::PARAM_STR);
        //$statement->bindParam(':premium', $member->getFood(), PDO::PARAM_BOOL);
        //$statement->bindParam(':interest', $member->getIndoorInterest(), PDO::PARAM_STR);
        //$statement->bindParam(':image', $member->getCondiments(), PDO::PARAM_STR);

        //Execute
        $statement->execute();
        //$id = $this->_dbh->lastInsertId();
    }


    function getInterest()
    {
        //Define the query
        $sql = "SELECT * FROM dating";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Bind the parameters

        //Execute
        $statement->execute();

        //Get the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
        return $result;
    }

    function getGenders()
    {
        return array('Male', 'Female', "Other");
    }

//array list of states
    function getState()
    {
        return array("--","AL", "AK", "AZ", "AR",
            "CA", "CO"
        , "CT", "DE", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT",
            "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT"
        , "VA", "WA", "WV", "WI", "WY");
    }

//array list function of indoor interest
    function getIndoorInterest()
    {
        return array("games", "movies", "comedy", "sci-fi", "streaming", "mma", "xbox", "playstation");
    }

//array list function of indoor outdoor
    function getOutdoorInterest()
    {
        return array("basketball", "soccer", "football", "hiking", "boat");
    }
}