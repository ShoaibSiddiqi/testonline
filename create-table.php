<?php

include 'connection.php';
//quey for create a table
$pages = "CREATE TABLE IF NOT EXISTS pages(
    page_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    page_title VARCHAR(35) NOT NULL,
    page_conent TEXT
)";

if(mysqli_query($connect, $pages)){
    echo "Database Table Created";
} else {
    echo "There is an error";
}

?>