<?php
$servername = "localhost";
$username = "root";
$password = "7639312163Rr";                                                     
$dbname = "supervisor";
print_r($_POST);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO supervisor.water ( month,water)
        VALUES ('".$_POST["month"]."','".$_POST["water"]."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location: index.html#waterchart.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>