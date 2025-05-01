<?php require_once("../dboperation.php");
$obj=new dboperation();

$remarks=$_POST["remarks"];
$status=$_POST["status"];
$projectid=$_POST["projectid"];
$tasklistid=$_POST["tasklistid"];
$change_date=date('Y-m-d');
echo $query="INSERT INTO `tbl_empprojectstatus`( `projectid`, `tasklistid`, `status`, `change_date`, `remarks`) VALUES ('$projectid','$tasklistid','$status','$change_date','$remarks')";
//echo $query="UPDATE tbl_empprojectstatus SET status='$status',remarks='$remarks' WHERE projectid='$projectid'";
$result=$obj->query($query);

if($result==1)
{
  echo"<script>alert('SUCCESS');window.location='empassignviewsample.php'</script>";
}
else
{
    echo "<script>alert('FAILURE');window.location='empassignviewsample.php'</script>";
}
?>