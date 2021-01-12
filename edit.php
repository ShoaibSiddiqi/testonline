<?php
// include header and connection files
include 'views/header.php';

include 'connection.php';

$id = $_REQUEST['page_id'];

$edit = "SELECT * FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $pagetitle = $_POST['pagetitle'];
    $pagecontent = $_POST['pagecontent'];

    $update = "UPDATE pages SET page_title='$pagetitle', page_conent='$pagecontent' WHERE page_id=$id";

    if(mysqli_query($connect, $update)){
        echo "Data Updated";
    } else {
        echo "error";
    }

}


?>

<form method="post" name="mydata">
    <div class="form-group">
        <label for="pagetitle">Page Title</label>
        <input type="text" class="form-control" name="pagetitle" id="pagetitle" value="<?php echo $row['page_title']; ?>">
    </div>
    <div class="form-group">
        <label for="pagecontent">Page Content</label>
        <textarea class="form-control" name="pagecontent"><?php echo $row['page_conent']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="update">updates</button>
</form>


<?php
include 'views/footer.php';
?>