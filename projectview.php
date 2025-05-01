
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
             <div class="card-title">Project View</div>
             
<html>
    <body>
        <?php
 
        $query="select * from tbl_project p inner join tbl_client c on p.clientid = c.clientid ";
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
<th scope="col">projectid</th>
<th scope="col">client Name</th>
<th scope="col">project title</th>
<th scope="col">project description</th>
<th scope="col">projectregdate</th>
<th scope="col">projectcost</td>
<th scope="col">edit</th>
<th scope="col">Delete</th>
</tr>
<?php
while($display=mysqli_fetch_array($res))
{
   ?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["clientname"];?></td>
    <td><?php echo $display["projecttitle"];?></td>
    <td><?php echo $display["projectdescription"];?></td>
    <td><?php echo $display["projectregdate"];?></td>
    <td><?php echo $display["projectcost"];?></td>
    

<td><a href="projectedit.php?projectid=<?php echo $display["projectid"];?>">Edit</a></td>
<td><a href="projectdelete.php?projectid=<?php echo $display["projectid"];?>">Delete</a></td>
    
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
            