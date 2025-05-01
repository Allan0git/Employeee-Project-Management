
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
if(isset($_GET["projectid"]))
{
    
 $project=$_GET["projectid"];
 
$sql="SELECT p.*, c.clientname FROM tbl_project p JOIN tbl_client c ON p.clientid = c.clientid WHERE p.projectid='$project'";

$res=$obj->query($sql);

$display=mysqli_fetch_array($res);

$sql2="SELECT * FROM tbl_client";
    $res2=$obj->query($sql2);
 

}

?>
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Project registration</h4>
<form class="forms-sample"action="projecteditaction.php"method="POST">
<div class="form-group">
<select name="client" id="client">
                         <?php
                       while ($row = mysqli_fetch_array($res2)) {
                        $selected = ($row["clientname"] == $display["clientname"]) ? "selected='selected'" : "";
                        echo "<option value='" . $row["clientid"] . "' " . $selected . ">" . $row["clientname"] . "</option>";
                    }
                        ?> 
                    </select>
</div>
<div class="form-group">
<label for="exampleInputName1">project title</label>
<input type="text"class="form-control"id="projecttitle" name="projecttitle"placeholder="projecttitle" value="<?php echo $display["projecttitle"];?>">
</div>
<div class="form-group">
<label for="exampleInputName1">project description</label>
<input type="text"class="form-control"id="projectdescription" name="projectdescription"placeholder="gender"value="<?php echo $display["projectdescription"];?>">
</div>

<div class="form-group">
<label for="exampleInputName1">project cost</label>
<input type="text"class="form-control"id="projectcost"  name="projectcost"placeholder="Email"value="<?php echo $display["projectcost"];?>">
</div>


<input type="hidden" name="projectid" value="<?php echo $display["projectid"];?>"><br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="cancel" class="btn btn-primary">Cancel</button>
</form></div></div></div></div></div></html>

<?php
include("footer.php");
?>

