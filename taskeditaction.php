<?php
require_once("../dboperation.php");
$obj=new dboperation();
$taskid=$_POST["taskid"];
$projectid=$_POST["projectid"];
$tasklistid=$_POST["tasklistid"];


$taskdescription=$_POST["taskdescription"];

echo $query="UPDATE tbl_task SET projectid='$projectid',tasklistid='$tasklistid',taskdescription='$taskdescription' WHERE taskid='$taskid'";
$result=$obj->query($query);

if($result==1)
{
  echo"<script>alert('SUCCESS');window.location='taskview.php'</script>";
}
else
{
     echo "<script>alert('FAILURE');window.location='taskview.php'</script>";
}
?>