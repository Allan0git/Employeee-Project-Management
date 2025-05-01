<?php
include("../dboperation.php");
$obj=new dboperation();

     $projectid=$_GET["projectid"];
echo $sql="delete from tbl_project where projectid=$projectid";
 $res=$obj->query($sql);
 if($res)
  {
  echo"<script>alert('project record deleted successfully');</script>";
 echo"<script>window.location.href='projectview.php';</script>";
 }
 else
 {
 echo"<script>alert('Error deleting project record');</script>";
 echo"<script>window.location.href='projectview.php';</script>";
 }
?>