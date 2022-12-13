<?php
session_start();
require 'dbcon.php';
?>
<?php include('includes/header.php');?>
<section>
    <div class="container mt-5">
    <?php include('message.php')?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Komentaro koregavimas
                            <a href="index.php" class="btn btn-secondary float-end">Atgal</a>                        
                        </h4>
                    </div>
                    <div class="card-body">
                        
                            <?php
                                if(isset($_GET['id']))
                                {                                    
                                    $id = mysqli_real_escape_string($con, $_GET['id']);
                                    $query = "SELECT * FROM comment WHERE id='$id' "; 

                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        $comment = mysqli_fetch_array($query_run);
                                        ?>
                                        <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?= $comment['id']; ?>">                                
                                            <div class="mb-3">
                                                <label>Komentaras</label>
                                                <input type="text" name="comment" value="<?=$comment['comment'];?>" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" name="updateComments" class="btn btn-secondary">Koreguoti komentarą</button>
                                            </div>                           
                                        </form>
                                        <?php
                                    }
                                    else
                                    {
                                        echo "<h4>Nerasta id</h4>";
                                    }
                                }
                            ?>   
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
</section>
<?php include('includes/footer.php');?>

