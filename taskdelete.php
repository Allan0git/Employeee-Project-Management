<?php
include("../dboperation.php");
$obj=new dboperation();

     $taskid=$_GET["taskid"];
echo $sql="delete from tbl_task where taskid=$taskid";
 $res=$obj->query($sql);
 if($res)
  {
  echo"<script>alert('project record deleted successfully');</script>";
 echo"<script>window.location.href='taskview.php';</script>";
 }
 else
 {
 echo"<script>alert('Error deleting project record');</script>";
 echo"<script>window.location.href='taskview.php';</script>";
 }
?>