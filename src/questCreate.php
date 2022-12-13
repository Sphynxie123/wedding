<?php
session_start();
?>
<?php include('includes/header.php');?>
<section>
    <div class="container text-center p-5">    
        <img src="/images/W02.jpg" class="rounded" alt="Wedding" id="image">   
    </div>
</section>
<section>
    <div class="container mt-5">
    <?php include('message.php')?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Svečių sukūrimas
                            <a href="questList.php" class="btn btn-secondary float-end">Atgal</a>                        
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control" required>
                            </div> 
                            <div class="mb-3">
                                <label>Miestas</label>
                                <input type="text" name="city" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="saveQuest" class="btn btn-secondary">Išsaugoti svečius</button>
                            </div>                           
                        </form>   
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
</section>    
                
<?php include('includes/footer.php');?>