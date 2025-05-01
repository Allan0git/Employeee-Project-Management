<?php
include("../dboperation.php");
$obj=new dboperation();

     $clientid=$_GET["clientid"];
echo $sql="delete from tbl_client where clientid=$clientid";
 $res=$obj->query($sql);
 if($res)
  {
  echo"<script>alert('client record deleted successfully');</script>";
 echo"<script>window.location.href='clientview.php';</script>";
 }
 else
 {
 echo"<script>alert('Error deleting client record');</script>";
 echo"<script>window.location.href='clientview.php';</script>";
 }
?>