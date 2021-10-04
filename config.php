<?php

$connection = mysqli_connect('localhost', 'root_sample', 'root_sample1234');
if (!$connection) {
    die('Not connected : Ah sh*t ');
}
else {
    echo "Successful Connection";

}
?>