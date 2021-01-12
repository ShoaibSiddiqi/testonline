<?php

include 'views/header.php';

include 'connection.php';

$pagetitle = $_POST['pagetitle'];
$pagecontent = $_POST['pagecontent'];
//insert data in pages
$insert = "INSERT INTO pages(
    page_title, page_conent)
    VALUES('$pagetitle', '$pagecontent')";

if(mysqli_query($connect, $insert)){
    echo "Page Created";
} else {
    echo "There is an error";
}

?>
        
        <h1>Welcome back to create new page</h1>

        <form method="post">
            <div class="form-group">
                <label for="pagetitle">Page Titles</label>
                <input type="text" class="form-control" name="pagetitle" id="pagetitle">
            </div>
            <div class="form-group">
                <label for="pagecontent">Page Content</label>
                <textarea class="form-control" name="pagecontent"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>

<?php
include 'views/footer.php';
?>