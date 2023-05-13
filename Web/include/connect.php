<?php
$servername="localhost";
$username= "root";
$password = "";
$dbname = "eauto";

$connect = new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    echo('Nem sikerűlt a kapcsolódás az adatbázishoz!');
    die();
}