 
<?php
            include("header.php");
            ?>
 <div class="clearfix"></div>
	
    <div class="content-wrapper">
      <div class="container-fluid">
  
      <div class="row mt-3">
        <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
             <div class="card-title">Tasklist Form</div>
             <hr>
                            
                            <form action="tasklistformaction.php" method="post">
                            <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> TaskName</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tasklistname" required class="form-control" id="inputEmail3">
                                    </div>
                                </div><br>
                                
</div>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                        </div>
                    </div>
                    
                  
                   
                  
                </div>
            </div>
            <!-- Form End -->

            <?php
            include("footer.php");
            ?>