  <?php

if($_SERVER['REQUEST_METHOD'] !=="POST")
{
    die('Please submit the form first..');
}

//array for typing errors
$errors = [];

//these validate username
$user_name = $_POST['username'];
if(!preg_match("/[a-zA-Z0-9]./",$_POST["username"]))
$errors[] = " Username not correct!  <br>";


//these validate firstname
$firstname = $_POST['firstname'];
if(preg_match("/[^a-zA-Z]./",$_POST["firstname"]))
$errors[] = "Firstname must not contain numbers and symbols<br>";


//these validate lastname
$lastname = $_POST['lastname'];
if(preg_match("/[^a-zA-Z]./",$_POST["lastname"]))
$errors[] = "Lastname must not contain numbers and symbols<br>";


//password validation
$password1 =  $_POST['password1'];
$confirmpassword = $_POST['confirmpassword'];
if(strlen($password1)<6){
    $errors[] = "Password must be six characters and above<br>";
}           

    //confirmpassword validation
    if($password1 !== $confirmpassword){
        $errors[] = "Password is not match";
}       


//email validation
$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[] = "Invalid email format";
}

//this counter counts the error catch on the form filtering
if(count($errors)>0){
    foreach($errors as $errors){
        echo "$errors<br>";
    }
    
}

$gender = $_POST['gender'];

//inserting data to my database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1PDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "SELECT * FROM Mydata WHERE email = $email";
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Mydata (username, firstname, lastname, password1, email, gender)
    VALUES ('$user_name', '$firstname', '$lastname', '$password1', '$email', '$gender')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;



// deleting data from the database

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB1pdo";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // sql to delete a record
//     $sql = "DELETE FROM Mydata WHERE username = $user_name firstname = $firstname password1 = $password1 email = $email gender = $gender ";

//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Record deleted successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>