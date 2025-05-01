
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
if(isset($_GET["taskid"]))
{
    
 $project=$_GET["taskid"];
 $sql="SELECT p.*, c.tasklistname FROM tbl_task p JOIN tbl_tasklist c ON p.tasklistid = c.tasklistid WHERE p.taskid='$project'";
//$sql="select * from tbl_task p 
//inner join tbl_project c  on p.projectid = c.projectid 
//inner join tbl_tasklist l on p.tasklistid = l.tasklistid"; 
$res=$obj->query($sql);

$display=mysqli_fetch_array($res);

$sql3="SELECT * FROM tbl_tasklist";
    $res3=$obj->query($sql3);
$sql2="SELECT * FROM tbl_project";
$res2=$obj->query($sql2);

}

?>


   
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Task Assigning</h4>
<form class="forms-sample"action="taskeditaction.php"method="POST">
<div class="form-group" >
 <label  class="col-sm-2 col-form-label"> Choose the Task Name:</label>

<select name="tasklistid" id="tasklistname">
                         <?php
                       while ($row = mysqli_fetch_array($res3)) {
                        $selected = ($row["tasklistname"] == $display["tasklistname"]) ? "selected='selected'" : "";
                        echo "<option value='" . $row["tasklistid"] . "' " . $selected . ">" . $row["tasklistname"] . "</option>";
                    }
                        ?> 
                    </select>
                </div>
                <?php



?>
 <label for="inputEmail3" name="projectid" class="col-sm-2 col-form-label"> Choose the project Title:</label>

<select name="projectid" id="projecttitle">
    
                         <?php
                       while ($row = mysqli_fetch_array($res2)) {
                        $selected = ($row["projecttitle"] == $display["projecttitle"]) ? "selected='selected'" : "";
                        echo "<option value='" . $row["projectid"] . "' " . $selected . ">" . $row["projecttitle"] . "</option>";
                    }
                        ?> 
                    </select>
</div>






<div class="form-group">
<label for="exampleInputName1">task description</label>
<input type="text"class="form-control"id="taskdescription" name="taskdescription"placeholder="describe"value="<?php echo $display["taskdescription"];?>">
</div>


<input type="hidden" name="taskid" value="<?php echo $display["taskid"];?>"><br>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="cancel" class="btn btn-primary">Cancel</button>
</form></div></div></div></div></div></html>

<?php
include("footer.php");
?>

