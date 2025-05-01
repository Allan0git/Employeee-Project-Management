
<?php
            include("header.php");
            include_once("../dboperation.php");
            $obj=new dboperation();
            ?>
            <div class="clearfix"></div>
	
    <div class="content-wrapper">
      <div class="container-fluid">
  
      <div class="row mt-3">
        <div class="col-lg-12">
           <div class="card">
             <div class="card-body">
             <div class="card-title">Taskview</div>
             
<html>
    <body>
        <?php
 
            $query="select * from tbl_task p 
            inner join tbl_project c  on p.projectid = c.projectid 
            inner join tbl_tasklist l on p.tasklistid = l.tasklistid"; 
        $res=$obj->query($query);
        $s=1;
        
?>
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Details</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>           
<tr>
<th scope="col">SIno</th>
<th scope="col">tasklistname</th>
<th scope="col">projecttile</th>
<th scope="col">task description</th>
<th scope="col">edit</th>
<th scope="col">delete</th>
</tr>
<?php
while($display=mysqli_fetch_array($res))
{
   ?>
<tr>
    <td><?php echo $s++;?></td> 
    <td><?php echo $display["tasklistname"];?></td>
    <td><?php echo $display["projecttitle"];?></td>
    <td><?php echo $display["taskdescription"];?></td>

    

<td><a href="taskedit1.php?taskid=<?php echo $display["taskid"];?>">Edit</a></td>
<td><a href="taskdelete.php?taskid=<?php echo $display["taskid"];?>">Delete</a></td>
    
    <td></td>
</tr>

<?php
}
?>
 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
    </html>


    <?php
            include("footer.php");
            ?>
            