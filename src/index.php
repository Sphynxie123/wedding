<?php
    session_start();
    require 'dbcon.php';
?>
<?php include('includes/header.php');?>
<section>
    <div class="container text-center p-5">    
        <img src="/images/W02.jpg" class="rounded" alt="Wedding" id="image">   
    </div>
</section>
<section>
    </div>
    <div class="container">
    <?php include('message.php')?>
        <div class="row">
            <div class="mb-3">
                <label>Trumpas aprašymas</label>                
                <?php
                    $query = "SELECT * FROM comment";
                    
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach ($query_run as $commnet)
                        {                            
                            ?>
                            <input type="text" name="name" value="<?= $commnet['comment'] ?>" class="form-control" disabled>
                            <?php
                        }
                    }
                    else
                    {
                        echo "<h5>Nėra komentaro</h5>";    
                    }
                ?>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <!-- <a href="createComments.php?id=<?=$commnet['id'];?>" class=" btn btn-secondary float-end">Sukurti komentarą</a> -->
                    <a href="editComments.php?id=<?=$commnet['id'];?>" class=" btn btn-secondary float-end">Koreguoti komentarą</a>
                </div>
            </div>
        </div>                 
    </div>
</section>
<?php include('includes/footer.php');?>

