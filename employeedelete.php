<?php
include("../dboperation.php");
$obj=new dboperation();

     $empid=$_GET["empid"];
echo $sql="delete from tbl_employee where empid=$empid";
 $res=$obj->query($sql);
 if($res)
  {
  echo"<script>alert('Employee record deleted successfully');</script>";
 echo"<script>window.location.href='employeeview.php';</script>";
 }
 else
 {
 echo"<script>alert('Error deleting employee record');</script>";
 echo"<script>window.location.href='employeeview.php';</script>";
 }
?>