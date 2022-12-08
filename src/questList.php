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
    <div class="container mt-5">
        <? include('message.php')?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Svečių sąrašas
                            <a href="questCreate.php" class="btn btn-primary float-end">Sukūrti svečią</a>
                        </h4>    
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vardas</th>
                                    <th>Pavardė</th>   
                                    <th>Miestas</th>
                                    <th>Veiksmai</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM  quest";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $quest)
                                        {
                                            
                                            ?>
                                                <tr>
                                                    <td><?=$quest['id'];?></td>
                                                    <td><?=$quest['name'];?></td>
                                                    <td><?=$quest['surname'];?></td>
                                                    <td><?=$quest['city'];?></td>
                                                    <td>
                                                        <a href="questView.php?id=<?= $quest['id'];?>" class="btn btn-success btn-sm">Peržiūrėti</a>
                                                        <a href="questEdit.php?id=<?= $quest['id'];?>" class="btn btn-success btn-sm">Koreguoti</a>
                                                        <form action="code.php" method="post" class="d-inline">
                                                            <button type="submit" name="questDelete" value="<?= $quest['id']; ?>"class="btn btn-danger btn-sm">Trinti</button>                                                            
                                                        </form>    
                                                        </td>                                                    
                                                </tr> 
                                            <?php
                                        }    
                                    }
                                    else
                                    {
                                        echo "<h5>Nerasta duomenų</h5>";
                                    }
                                ?>   
                            </tbody>
                        </table>
                    </div>   
                </div>    
            </div>
        </div>
        
    </div>
</section>
<?php include('includes/footer.php');?>