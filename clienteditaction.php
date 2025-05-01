<?php
require_once("../dboperation.php");
$obj=new dboperation();

$clientid=$_POST["h1"];
$clientname=$_POST["clientname"];
$contactnumber=$_POST["contactnumber"];
$gender=$_POST["gender"];
$institution=$_POST["institution"];
$email=$_POST["email"];
$registrationdate=$_POST["registrationdate"];

echo $query="UPDATE tbl_client SET clientname='$clientname',contactnumber='$contactnumber',gender='$gender',institution='$institution',email='$email',registrationdate='$registrationdate' where clientid=$clientid";
$result=$obj->query($query);

if($result==1)
{
    echo"<script>alert('SUCCESS');window.location='clientview.php'</script>";;
    
}
else
{
    // echo "<script>alert('FAILURE');window.location='clientview.php'</script>";;
}
?>