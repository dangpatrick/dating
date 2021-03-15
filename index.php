<?php
/*
 * Name Patrick Dang **
 * Date: 1/28/2021
 * Filename: index.php
 * Description: Controller page for dating project
 */

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


//Require the auto autoload file
require_once('vendor/autoload.php');
require $_SERVER['DOCUMENT_ROOT'].'/../config.php';
//require_once ('model/data-layer.php');
//require_once ("model/validate.php");
//require_once ("classes/Member.php");
//require_once ("classes/PremiumMember.php");

//start a session
session_start();

//Create an instance of the Base class
$f3 = Base::instance();
$dataLayer = new DataLayer($dbh);
$validator = new validate($dataLayer);
//$validator = new validate();
//$dataLayer = new datalayer();
$normalMember = new Member("","",0,'',"","","","","");
$premiumMember = new PremiumMember();
$controller = new Controller($f3);
//set a debug
$f3 -> set('DEBUG',3);

//Define a default route (home page)
$f3->route('GET /', function(){
    global $controller;
    $controller->home();
});

//personal Information route
$f3->route('GET|POST /personal', function()
{
    global $controller;
    $controller->personal();
});

//profile
$f3->route('GET|POST /profile', function()
{
    global $controller;
    $controller->profile();
});

//interests
$f3->route('GET|POST /interest', function()
{
    global $controller;
    $controller->interest();
});


//summary
$f3->route('GET /summary', function()
{
    global $controller;
    $controller->summary();
});


//define an member summary route
$f3->route('GET /member-summary', function (){
    global $controller;
    $controller->memberSummary();
});


//run f3
$f3->run();