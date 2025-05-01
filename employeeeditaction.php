<?php
require_once("../dboperation.php");
$obj=new dboperation();

$empid=$_POST['h1'];
$empname=$_POST["empname"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$joiningdate=$_POST["joiningdate"];


$query="UPDATE tbl_employee SET empname='$empname',dob='$dob',email='$email',contactno=$phno,address='$address',gender='$gender',joiningdate='$joiningdate' where empid=$empid";
$result=$obj->query($query);

if($result==1)
{
   echo"<script>alert('SUCCESS');window.location='employeeview.php'</script>";;
    
}
else
{
    // echo "<script>alert('FAILURE');window.location='employeeview.php'</script>";;
}
?>