<?php
$url="sql209.epizy.com";
$user="epiz_21841517";
$pass="jbbov123456";
$dbname="epiz_21841517_specialusers";
try {
    $conn = new PDO("mysql:host=$url;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>