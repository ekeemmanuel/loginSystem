<?php
include ("connectionScript.php");

if (empty ($_POST["username"]) || empty ($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    //$sql="SELECT uid FROM users WHERE 'username'='$username' and 'password'='$password'";
    //$sql="SELECT uid FROM users WHERE username='{$username}' and password='{$password}'";
    $sql_query = "SELECT uid FROM users WHERE username='$username' and password='$password' ; ";
    //$result=mysqli_query($link,$sql);
    $result = mysqli_query($link, $sql_query);

if (mysqli_num_rows($result) ==1)
{
    header("location: home.php");
}else{
    echo "Incorrect username or password.";
}
}
?>