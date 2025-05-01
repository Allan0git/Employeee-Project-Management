
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
             <div class="card-title">Employee view</div>
             
<html>
    <body>
        <?php
 
        $query="select * from tbl_employee";
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
<th scope="col">empid</th>
<th scope="col">empName</th>
<th scope="col">dob</th>
<th scope="col">Email</th>
<th scope="col">Phoneno</td>
<th scope="col">address</th>
<th scope="col">gender</th>
<th scope="col">joiningdate</th>
<th scope="col">registrationdate</th>
<th scope="col">edit</th>
<th scope="col">Delete</th>
</tr>
<?php
while($display=mysqli_fetch_array($res))
{
   ?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["empname"];?></td>
    <td><?php echo $display["dob"];?></td>
    <td><?php echo $display["email"];?></td>
    <td><?php echo $display["contactno"];?></td>
    <td><?php echo $display["address"];?></td>
    <td><?php echo $display["gender"];?></td>
    <td><?php echo $display["joiningdate"];?></td>
    <td><?php echo $display["registrationdate"];?></td>
    

<td><a href="employeeedit.php?empid=<?php echo $display["empid"];?>">Edit</a></td>
<td><a href="employeedelete.php?empid=<?php echo $display["empid"];?>">Delete</a></td>
    
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
            