<?php require_once("../dboperation.php");
$obj=new dboperation();

$empname=$_POST["empname"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$joiningdate=$_POST["joiningdate"];
$registrationdate=date("Y-m-d");
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM tbl_login WHERE username='$username'";

$res=$obj->query($sql);

$rows=mysqli_num_rows($res);

if($rows>0) // changed condition from >1 to >0 since username should be unique
{
    echo"<script>alert(Username Already Exists);window.location='employeeview.php'</script>";;
}
else
{
    $sql="INSERT INTO tbl_login (username,password,role,status) VALUES ('$username', '$password', 'Employee', 'Confirmed')";

$res=$obj->query($sql);

$loginid=mysqli_insert_id($obj->con);

$sql = "INSERT INTO tbl_employee(empname,dob, email,contactno,address, gender,joiningdate,registrationdate,loginid) VALUES ('$empname','$dob','$email','$phno','$address', '$gender', '$joiningdate', '$registrationdate','$loginid')";
$res=$obj->query($sql); 

if($res==1){
$bodyContent="Dear $empname, Your are now registered as a Employee Use this Credentials To login <br>username:$username<br>Password:$password ";
$mailtoaddress=$email;
echo $mailtoaddress;
require('phpmailer.php');
    echo"<script>alert('SUCCESS');window.location='employeeview.php'</script>";;
}
else{
    echo"<script>alert('FAILURE');window.location='employeereg.php'</script>";;
}
}
?>