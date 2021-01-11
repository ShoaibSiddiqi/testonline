<?php
include 'views/header.php';

include 'connection.php';

$allpages = "SELECT * FROM pages";

$result = mysqli_query($connect, $allpages);
?>

<h1>All Pages <a href="create_page.php" class="btn btn-primary float-right">Add New</a></h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <td>Page ID</td>
            <td>Page Title</td>
            <td>Page Content</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

    <?php
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
        
    ?>
        <tr>
            <td><?php echo $row["page_id"] ; ?></td>
            <td><?php echo $row["page_title"] ; ?></td>
            <td><?php echo $row["page_conent"] ; ?></td>
            <td>
                <a href="edit.php?page_id=<?php echo $row["page_id"] ; ?>" class="btn btn-primary">Edit</a>
                <a href="delete.php?page_id=<?php echo $row["page_id"] ; ?>" class="btn btn-danger">Delete</a>
                <a href="view.php?page_id=<?php echo $row["page_id"] ; ?>" class="btn btn-secondary">View</a>
            </td> 
        </tr>
    <?php 
            }
    } else {
        echo "error";
    } ?>
    </tbody>
</table>

<?php
include 'views/footer.php';
?>