<?php
$con = mysqli_connect("mariadb","Mantas","1234","MY_DATABASE");
if(!$con)
{
    die('Connection Failed' . mysqli_connect_error());
}