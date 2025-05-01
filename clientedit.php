
<?php
include("header.php");
?>

<html>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<?php
include("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["clientid"]))
{
 $clientid=$_GET["clientid"];
$sql="select* from tbl_client where clientid='$clientid'";
$res=$obj->query($sql);
$display=mysqli_fetch_array($res);
}

?>
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Client Registration</h4>
<form class="forms-sample"action="clienteditaction.php"method="POST">
<div class="form-group">
<label for="exampleInputName1">Client Name</label>
<input type="text"class="form-control"id="clientname" name="clientname"placeholder="Name"value="<?php echo $display["clientname"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Contactnumber</label>
<input type="text"class="form-control"id="contactnumber" name="contactnumber"placeholder="contact" value="<?php echo $display["contactnumber"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Gender</label>
<input type="text"class="form-control"id="gender" name="gender"placeholder="gender"value="<?php echo $display["gender"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">institution</label>
<input type="text"class="form-control"id="institution" name="institution"placeholder="institution"value="<?php echo $display["institution"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Email</label>
<input type="text"class="form-control"id="email"  name="email"placeholder="Email"value="<?php echo $display["email"];?>">
</div>



<input type="hidden" name="h1" value="<?php echo $display["clientid"];?>"><br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="cancel" class="btn btn-primary">Cancel</button>
</form></div></div></div></div></div></html>

<?php
include("footer.php");
?>

