
<?php require_once("../dboperation.php");
$obj=new dboperation();
$status=$_POST["status"];
$remarks=$_POST["remarks"];
$change_date=date("Y-m-d");
$projectid=$_POST["projectid"];
$tasklistid=$_POST["tasklistid"];
$status="employeeupdated";

echo $sql = "INSERT INTO `tbl_empprojectstatus`(`projectid`, `tasklistid`, `status`, `change_date`, `remarks`) VALUES('$projectid','$tasklistid','$status','$change_date','$remarks')";
$res=$obj->query($sql);  
if($res=1){
    echo"<script>alert('SUCCESS');window.location='empassignviewsample.php'</script>";
}
else{
   // echo"<script>alert('FAILURE');window.location='empstatusupdateform.php'</script>";;
}

?>