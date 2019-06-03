<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE Mydata (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
    firstname TEXT(30) NOT NULL,
    lastname TEXT(30) NOT NULL,
    password1 VARCHAR (30) NOT NULL,
    email VARCHAR(50),
    gender VARCHAR(10) NOT NULL
    
    )";


    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyData created successfully";
    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
