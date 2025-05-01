
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
if(isset($_GET["tasklistid"]))
{
 $tasklistid=$_GET["tasklistid"];
$sql="select* from tbl_tasklist where tasklistid='$tasklistid'";
$res=$obj->query($sql);
$display=mysqli_fetch_array($res);
}

?>
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">TaskList edit</h4>
<form class="forms-sample"action="tasklisteditaction.php"method="POST">

<div class="form-group">
<label for="exampleInputName1">Tasklist Name</label>
<input type="text"class="form-control"id="tasklistname" name="tasklistname"placeholder="Name"value="<?php echo $display["tasklistname"];?>">
</div>


<input type="hidden" name="tasklistid" value="<?php echo $display["tasklistid"];?>"><br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="cancel" class="btn btn-primary">Cancel</button>
</form></div></div></div></div></div></html>

<?php
include("footer.php");
?>

