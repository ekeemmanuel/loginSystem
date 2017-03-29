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

    echo "<p>Username is {$username} and password is {$password}";

    $sql = "SELECT * FROM users WHERE username='".$username."' and password='".$password."'";


    if ($result = mysqli_query($link, $sql)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
        echo "Result set has {$rowcount} rows";
    }

    /*if (mysqli_num_rows($result) == 1) {
        header("location: home.php");
    } else {
        echo "Incorrect username or password.";
    }*/
}
?>