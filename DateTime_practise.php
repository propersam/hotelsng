<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo mktime(0,0,0,1,1,2000);
$newYear = mktime(0,0,0,1,1,2018);

echo "<br>".$newYear."<br>";

echo date("l F jS, Y - g:ia", time())."<br>";

//Checking Date validity using 'checkdate' function

$month = 12;
$day = 33;
$year = 2017;

if (checkdate($month,$day,$year)) 
{echo "Valid Date <br>";}
else { 
    echo "Invalid Date <br>";
}

//FILE HANDLING

if (file_exists("index.php"))
{
    echo "No way, file already exists <br>";
}
else 
{
    echo "You may proceed file doesn't exist <br>";
}

