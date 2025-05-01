
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
if(isset($_GET["empid"]))
{
 $empid=$_GET["empid"];
$sql="select* from tbl_employee where empid='$empid'";
$res=$obj->query($sql);
$display=mysqli_fetch_array($res);
}

?>
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Employee Registration</h4>
<form class="forms-sample"action="employeeeditaction.php"method="POST">
<div class="form-group">
<label for="exampleInputName1">Employee Name</label>
<input type="text"class="form-control"id="empname" name="empname"placeholder="Employee Name"value="<?php echo $display["empname"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee DOB</label>
<input type="text"class="form-control"id="dob" name="dob"placeholder="Employee dob" value="<?php echo $display["dob"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee email</label>
<input type="text"class="form-control"id="email" name="email"placeholder="Employee email"value="<?php echo $display["email"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee phoneno</label>
<input type="number"class="form-control"id="phno" name="phno"placeholder="Employee phno"value="<?php echo $display["contactno"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee Address</label>
<input type="text"class="form-control"id="address"  name="address"placeholder="Employee address"value="<?php echo $display["address"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee Gender</label>
<input type="text"class="form-control"id="gender"name="gender"placeholder="Employee gender"value="<?php echo $display["gender"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">Employee joiningdate</label>
<input type="text"class="form-control"id="joiningdate"name="joiningdate"placeholder="Employee joiningdate"value="<?php echo $display["joiningdate"];?>">
</div>


<input type="hidden" name="h1" value="<?php echo $display["empid"];?>"><br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="" class="btn btn-primary">Cancel</button>
</form></div></div></div></div></div></html>

<?php
include("footer.php");
?>

