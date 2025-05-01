
<?php require_once("../dboperation.php");
$obj=new dboperation();
$tasklistname=$_POST["tasklistname"];

$sql="select * from tbl_tasklist where tasklistname='$tasklistname'";

$res=$obj->query($sql);

$rows=mysqli_num_rows($res);

if($rows>0) // changed condition from >1 to >0 since username should be unique
{
    echo"<script>alert('Project Already Exists');window.location='tasklistform.php'</script>";
}
else
{
  
echo $sql = "INSERT INTO tbl_tasklist(tasklistname) VALUES ('$tasklistname')";
$res=$obj->query($sql); 
if($res==1){
    echo"<script>alert('SUCCESS');window.location='tasklistform.php'</script>";
}
else{
    echo"<script>alert('FAILURE');window.location='tasklistform.php'</script>";;
}
}
?>