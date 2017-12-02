<?php
$servername = "localhost";
$username = "root";
$password = "7639312163Rr";                                                     
$dbname = "supervisor";
//print_r($_POST);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO supervisor.service ( serviceid, servicename,password, phno,email,type,gender,salary)
        VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["password"]."','".$_POST["phno"]."','".$_POST["email"]."','".$_POST["Type"]."','".$_POST["gender"]."','".$_POST["salary"]."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location: index.html#form-layouts.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>