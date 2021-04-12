<?php

if(isset($_POST['submit'])){

    //gets input from form using POST
   
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalwebprog";

    $userID = $_POST['id'];

    // Create connection
    $delete = mysqli_query("DELETE FROM payment WHERE Id='$userID'", $dbname);

   	//inserting the input from the user into the databse to its respective coloumns
	$sql = "DELETE FROM payment WHERE Id='" . $_GET["id"] . "'";
}
?>