 
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
             <div class="card-title">Client Form</div>
             <hr>
                            
                            <form action="formclientaction.php" method="post">
                            <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> ClientName</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="clientname" class="form-control"  pattern="^[A-Za_z][A-Za-z -]+$" 
    title="Must start with capital letter followed by upper or lowercase letters"  
    required id="inputEmail3">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Contactno</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="contactnumber" class="form-control"  required pattern="[0-9]{10}" 
         required  title="Must contain 10 digits" id="inputPassword3">
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios1" value="male" required checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios2" value="female" required>
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Institution</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="institution" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div><br>
                                <div class="form-group">

                                    <label for="inputPassword3" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="email" class="form-control" id="inputPassword3"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
title="must enter a valid email address" required>
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