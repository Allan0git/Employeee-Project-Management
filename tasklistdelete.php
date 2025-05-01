<?php
include("../dboperation.php");
$obj=new dboperation();

     $tasklistid=$_GET["tasklistid"];
echo $sql="delete from tbl_tasklist where tasklistid=$tasklistid";
 $res=$obj->query($sql);
 if($res)
  {
  echo"<script>alert('SUCCESS');</script>";
 echo"<script>window.location.href='tasklistview.php';</script>";
 }
 else
 {
 echo"<script>alert('FAILURE');</script>";
 echo"<script>window.location.href='tasklistview.php';</script>";
 }
?>