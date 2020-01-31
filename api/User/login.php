<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
//redirect to dashboard.
           header("location:dashboard.html"); 
 //or error message.
         Echo "You have logged in successfully";    
        }
        else
        {
            echo "username or password incorrect";
        }
?>