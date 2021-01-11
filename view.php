<?php
include 'views/header.php';

include 'connection.php';

$id = $_REQUEST['page_id'];

$edit = "SELECT * FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);
?>

<h1><?php echo $row['page_title'] ; ?></h1>
<p><?php echo $row['page_conent']; ?></p>

<?php
include 'footer.php';
?>