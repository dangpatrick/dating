<?php
/*
 * Name Patrick Dang
 * Date: 1/28/2021
 * Filename: index.php
 * Description: Controller page for dating project
 */

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start a session
session_start();


//Require the auto autoload file
require_once('vendor/autoload.php');
require_once ('model/data-layer.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

//Define a default route (home page)
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/home.html');
});

//personal Information route
$f3->route('GET|POST /personal', function($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //store the data in the session array
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['age'] = $_POST['age'];

        var_dump($_SESSION);

        $f3->reroute('profile');
        session_destroy();
    }

    $view = new Template();
    echo $view->render('views/personalInfo.html');
});

//profile
$f3->route('GET|POST /profile', function($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //store the data in the session array
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['bio'] = $_POST['bio'];

        $f3->reroute('interest');
        session_destroy();
    }

    $view = new Template();
    echo $view->render('views/profile.html');
});

//interests
$f3->route('GET|POST /interest', function($f3)
{
    $indoor = getIndoor();
    $outdoor = getOutdoor();


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //store the data in the session array
        $_SESSION['indoor'] = $_POST['indoor'];
        $_SESSION['outdoor'] = $_POST['outdoor'];


        $f3->reroute('summary');
        session_destroy();
    }
    $f3->set('interests', $indoor);
    $f3->set('interests2', $outdoor);

    $view = new Template();
    echo $view->render('views/interest.html');
});


//summary
$f3->route('GET|POST /summary', function()
{
    if(isset($_POST['indoor'])){
        $_SESSION['indoor'] = implode(",", $_POST['indoor']);
    }

    if(isset($_POST['outdoor'])){
        $_SESSION['outdoor'] = implode(",", $_POST['outdoor']);
    }

    $view = new Template();
    echo $view->render('views/summary.html');
});


//run f3
$f3->run();