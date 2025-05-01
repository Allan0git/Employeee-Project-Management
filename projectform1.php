
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
             <div class="card-title">Project Form</div>
             <hr>

<?php
include("../dboperation.php");
$obj=new dboperation();
// Fetch states from the database
$sql = "SELECT * FROM tbl_client";
$res = $obj->query($sql);
?>
 <form method="post" action="projectformaction.php">
 <label for="inputEmail3" name="client" required class="col-sm-2 col-form-label"> Choose the client:</label>
 <select name="client">
 <option selected disabled>--Select Client--</option>

<?php
// Loop through the state results and display each state as an option
while ($display = mysqli_fetch_array($res)) {
    ?>
<option value="<?php echo $display['clientid']?>"><?php echo $display['clientname']?></option>
<?php
}
?>
</select>
</td>
</tr>  <tr><br>

<div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">projecttile</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="projecttitle"  pattern="^[A-Za_z][A-Za-z -]+$" 
    title="Must start with capital letter followed by upper or lowercase letters"  
    required class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> projectdescription</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="projectdescription" required class="form-control" id="inputEmail3">
                                    </div>
                                </div><br>
                                <div class="form-group">

                                    <label for="inputPassword3" class="col-sm-2 col-form-label">projectcost</label>
                                    <div class="col-sm-10">
                                        <input type="text"name="projectcost" required class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                               




</tr> <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>

<?php
            include("footer.php");
            ?>