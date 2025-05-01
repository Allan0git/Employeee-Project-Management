<?php
require_once("../dboperation.php");
$obj=new dboperation();

$projectid=$_POST['projectid'];
$projecttitle=$_POST["projecttitle"];
$projectdescription=$_POST["projectdescription"];

$projectcost=$_POST["projectcost"];

$query="UPDATE tbl_project SET projecttitle='$projecttitle',projectdescription='$projectdescription',projectcost='$projectcost' WHERE projectid='$projectid'";
$result=$obj->query($query);

if($result==1)
{
    echo"<script>alert('SUCCESS');window.location='projectview.php'</script>";
}
else
{
     echo "<script>alert('FAILURE');window.location='projectview.php'</script>";
}
?>