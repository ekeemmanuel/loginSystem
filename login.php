<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connectionScript.php");

if (empty ($_POST["username"]) || empty ($_POST["password"])) {
    echo "Both fields are required.";
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Error check to see that username and password are being passed through.
    //echo "<p>Username is {$username} and password is {$password}</p>";

    $sql = "SELECT * FROM users WHERE username='".$username."' and password='".$password."'";

    if ($result = mysqli_query($link, $sql)) {

        $rowcount = mysqli_num_rows($result);
        //Error check to see that the number of rows is being counted.
        //echo "Result set has {$rowcount} rows";
    }

    if ($rowcount == 1) {
        header("location: home.php");
    } else {
        echo "Incorrect username or password.";
    }
}
?>