<?php require_once("../dboperation.php");
$obj=new dboperation();

$assigndate=$_POST["assigndate"];
$duedate=$_POST["duedate"];
$status=$_POST["status"];
$taskid=$_POST["taskid"];
$empid=$_POST["empid"];

// $sql="select * from tbl_task where taskid='$taskid'";
// $sql="select * from tbl_employee where empid='$empid'";

// $res=$obj->query($sql);
// $rows=mysqli_num_rows($res);



// if($rows>0) // changed condition from >1 to >0 since username should be unique
// {
//     echo"<script>alert('Project Already Exists');window.location='empassignform.php'</script>";
// }
// else
// {
 $sql = "INSERT INTO tbl_empassign(assigndate,duedate,status,taskid,empid) VALUES ('$assigndate','$duedate','$status','$taskid','$empid')";
 echo $sql;
$res=$obj->query($sql); 
if($res==1){
   echo"<script>alert('SUCCESS');window.location='empassignform.php'</script>";
}
else{
    echo"<script>alert('FAILURE');window.location='empassignform.php'</script>";;
}
//}
?>