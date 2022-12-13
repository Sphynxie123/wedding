<?php
require 'dbcon.php';
?>
<?php include('includes/header.php');?>
<section>
    <div class="container mt-5">    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Svečių sąrašo peržiūrėjimas
                            <a href="questList.php" class="btn btn-secondary float-end">Atgal</a>                        
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $id= mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM quest WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)                            
                            {
                                $quest = mysqli_fetch_array($query_run);
                                ?>                                   
                                    <div class="mb-3">
                                        <label>Vardas</label>                                        
                                        <p class="form-control">
                                            <?= $quest['name']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pavardė</label>
                                        <p class="form-control">
                                            <?= $quest['surname']; ?>
                                        </p>                                    
                                    </div> 
                                    <div class="mb-3">
                                        <label>Miestas</label>
                                        <p class="form-control">
                                            <?= $quest['city']; ?>
                                        </p>
                                    </div>                               
                                <?php
                            }
                            else
                            {
                                echo "<h4> nerasta id</h4>";
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