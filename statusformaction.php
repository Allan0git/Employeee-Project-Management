<?php require_once("../dboperation.php");
$obj=new dboperation();
$status=$_POST["status"];
$projectid=$_POST["projectid"];
echo $query="UPDATE tbl_ SET projectid='$projectid',tasklistid='$tasklistid',taskdescription='$taskdescription' WHERE taskid='$taskid'";
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