<?php
session_start();
?>
<?php include('includes/header.php');?>
<section>
    <div class="container mt-5">
    <?php include('message.php')?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Komentaro kūrimas
                            <a href="index.php" class="btn btn-secondary float-end">Atgal</a>                        
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Komentaras</label>
                                <input type="text" name="comment" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="saveComments" class="btn btn-secondary">Išsaugoti komentarą</button>
                            </div>                           
                        </form>   
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
</section>
<?php include('includes/footer.php');?>

