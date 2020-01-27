<?php
/**
 * Alex Grigorenko
 * 1/16/20
 * /328/dating/index.php
 */

//Start a session
session_start();

// Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);


//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::Instance();

//Define a default route
$f3->route("GET /", function () {
    //$view = new Template();
    //echo $view->render("views/home.html");
    echo "<h1>Welcome!</h1>";
});

//Run f3
$f3->run();