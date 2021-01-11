<?php 
include 'connection.php';

$id = $_REQUEST['page_id'];

$delete = "DELETE FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $delete);

header("location:allpages.php");

?>