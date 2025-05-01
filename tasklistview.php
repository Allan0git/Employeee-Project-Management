
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
             <div class="card-title">Tasklist view</div>
             
<html>
    <body>
        <?php
 
        $query="select * from tbl_tasklist";
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
<th scope="col">clientid</th>
<th scope="col">TasklistName</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>

</tr>
<?php
while($display=mysqli_fetch_array($res))
{
   ?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["tasklistname"];?></td>
    
    

<td><a href="tasklistedit.php?tasklistid=<?php echo $display["tasklistid"];?>">Edit</a></td>
<td><a href="tasklistdelete.php?tasklistid=<?php echo $display["tasklistid"];?>">Delete</a></td>
    
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
            