<?php

require("config.php");

function random_strings($length_of_string)

{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result),
        0, $length_of_string);
}

$database = mysqli_select_db($connection, 'ecommerce');
try {
    $userID = random_strings(15);

    if (!empty($_POST['registerFname']) && !empty($_POST['registerLname']) && $_POST['registerGender'] && $_POST['registerEmail'] && $_POST['registerPass'] && $_POST['registerConfirmPass']) {

        $sql = "INSERT INTO `user` (userID, `fname`, `lname`, `gender`, `email`, `pass`) VALUES ('$userID', '$_POST[registerFname]', '$_POST[registerLname]', '$_POST[registerGender]', '$_POST[registerEmail]', '$_POST[registerPass]');";
        $rs = mysqli_query($connection, $sql);
        if ($rs) {
            // echo "Records Inserted";
            header("Location: login.html");
        }
        else {
            echo "\nError Inserting Records: " . $connection->error . "\n";
        }
    }
    else {
        echo "Make Sure no field is empty";
    }

    mysqli_close($connection);
}
catch (Exception $e) {
    echo 'Result Set Error Message: ' . $e->getMessage();
}

// echo 'user is: ' . $userID;
// print_r($_POST['registerFname']);
// print_r($_POST['registerLname']);
// print_r($_POST['registerGender']);
// print_r($_POST['registerEmail']);
// print_r($_POST['registerPass']);
// print_r($_POST['registerConfirmPass']);
?>