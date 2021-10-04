<?php

require("config.php");

$database = mysqli_select_db($connection, 'ecommerce');

$sql = "SELECT * FROM `user` WHERE `email` = '$_POST[loginEmail]' AND `pass` = '$_POST[loginPass]';";

$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    while ($row = $result->fetch_assoc()) {

        $_SESSION["username"] = "{$row['fname']} {$row['lname']}";
    }
    header("Location: index.php");

}
else {
    echo "\nUser Does Not Exist/Wrong Password. Create Account " . $connection->error . "\n";
// header("Location: register.html");
}

mysqli_close($connection);

?>