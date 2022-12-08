<?php
    include 'insert.php';
?>
<?php include('includes/header.php');?>
<section>
    <div class="container mt-3">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="PhotoTitle" placeholder="Photo Title">
            <br><br>
            <input type="text" name="PhotoAuthor" placeholder="Photo Author">
            <br><br>
            <input type="text" name="Photo" placeholder="Photo">
            <br><br>
            <input type="file" name="PhotoTitle" placeholder="Photo Title">
            <br><br>
            <input type="submit" name="insert_btn" value="Insert">
        </form>
    </div>
</section>
<?php include('includes/footer.php');?>