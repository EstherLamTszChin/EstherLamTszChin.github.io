<?php

/*function connectDB(){
    //localhost means the database serve is running on the same achine as the web server
    //database user name
    //password
    mysql_connet("localhost","a0084_esther","alohaEsther");
    //name of database
    mysql_select_db("a0084_blog");
}
*/

//require_once('func.php');

function printHeader($title) {?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php print $title ?> | Portfolio Page </title>
        <link rel="stylesheet" href="portfolio.css">
        <meta charset="utf-8">
        
    </head>


    <body>
        <header>
            <h1>Esther Lam</h1>
        </header>
        <nav id="border">
            <a href="home.php">Home</a> <a href="project.php">Projects</a> 
            <a href="members.php">Academic</a> <a href="final.php">Work Experience </a> <a href="final.php"> Contract Me </a>
        </nav>
        
    <?php
    }
?>