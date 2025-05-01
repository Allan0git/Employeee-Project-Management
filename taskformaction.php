<?php require_once("../dboperation.php");
$obj=new dboperation();

$projectid=$_POST["projectid"];
$tasklistid=$_POST["tasklistid"];
$taskdescription=$_POST["taskdescription"];
 //$sql="select * from tbl_tasklist where taskid='$tasklistid'";
 //$sql="select * from tbl_project where empid='$projectid'";

/// $res=$obj->query($sql);
// $rows=mysqli_num_rows($res);



//if($rows>0) // changed condition from >1 to >0 since username should be unique
// {
//     echo"<script>alert('Project Already Exists');window.location='empassignform.php'</script>";
// }
 //else

 $sql = "INSERT INTO tbl_task(projectid,tasklistid,taskdescription) VALUES ('$projectid','$tasklistid','$taskdescription')";
 echo $sql;
$res=$obj->query($sql); 
if($res==1){
  echo"<script>alert('SUCCESS');window.location='taskview.php'</script>";;
}

else{
  // echo"<script>alert('FAILURE');window.location='taskformform.php'</script>";;
}

?>