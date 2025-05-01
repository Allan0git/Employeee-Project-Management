<?php
require_once("../dboperation.php");
$obj=new dboperation();

$tasklistid=$_POST["tasklistid"];
$tasklistname=$_POST["tasklistname"];

echo $query="UPDATE tbl_tasklist SET tasklistname='$tasklistname' where tasklistid=$tasklistid";
$result=$obj->query($query);

if($result==1)
{
    echo"<script>alert('SUCCESS');window.location='tasklistview.php'</script>";;
    
}
else
{
    // echo "<script>alert('FAILURE');window.location='tasklistview.php'</script>";;
}
?>