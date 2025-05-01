 
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
             <div class="card-title">EmpassignForm</div>
             <hr>
             <?php
             include("../dboperation.php");
             $obj=new dboperation();
$sql = "SELECT * FROM tbl_employee";
$res = $obj->query($sql);

?> 
                            
                <form action="empassignformaction.php" method="post">
                
<label for="inputEmail3" name="empid" required class="col-sm-2 col-form-label"> Choose the Employee:</label>
 <select name="empid">
 <option selected disabled>--Select Employee Name--</option>

<?php
// Loop through the state results and display each state as an option
while ($display = mysqli_fetch_array($res)) {
    ?>
<option value="<?php echo $display['empid']?>"><?php echo $display['empname']?></option>
<?php
}
?>
</select>
<br>

<!-- <?php
           
$sql = "SELECT * FROM tbl_tasklist";
$res = $obj->query($sql);

?> 
                            
        
                
<label for="inputEmail3" name="tasklistid" class="col-sm-2 col-form-label"> Choose the task:</label>
 <select name="tasklistid">
 <option selected disabled>--Select Task Name--</option>

<?php

while ($display = mysqli_fetch_array($res)) {
    ?>
<option value="<?php echo $display['tasklistid']?>"><?php echo $display['tasklistname']?></option>
<?php
}
?>
</select> -->
<br>
<?php
           
$sql = "SELECT * FROM tbl_task";
$res = $obj->query($sql);

?> 
                            
        
                
<label for="inputEmail3" name="taskid" required class="col-sm-2 col-form-label"> Choose the task:</label>
 <select name="taskid">
 <option selected disabled>--Select TaskList Name--</option>

<?php
// Loop through the state results and display each state as an option
while ($display = mysqli_fetch_array($res)) {
    ?>
<option value="<?php echo $display['taskid']?>"><?php echo $display['taskdescription']?></option>
<?php
}
?>
</select>



                            <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Assigndate</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="assigndate" required class="form-control" id="inputEmail3">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Duedate</label>
                                    <div class="col-sm-10">
                                        <input type="date"name="duedate" required class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                               
                                <div class="form-group">

                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="status" required class="form-control" id="inputPassword3">
                                    </div>
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