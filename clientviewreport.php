<?php
include("header.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Client List</title>
</head>

<body>
<form action="Excel/excel_client.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:150%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:11px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">CLIENT LIST</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 4px 11px #777777; margin-bottom:10%">

  <tr>
  <th>
                            SI.NO
                          </th>
                          <th>
                            NAME
                          </th>
                          <th>
                            NUMBER
                          </th>
                          <th>
                            GENDER
                          </th>
                          <th>
                            INSTITUTION
                          </th>
                          <th>
                            EMAIL
                          </th>
                          <th>
                            REG DATE
                          </th>
                         
    <?php
include("../dboperation.php");
$obj=new dboperation();
$sql="select * from tbl_client";
$result=$obj->query($sql);
   while($display=mysqli_fetch_array($result))
   {
    ?>
	<tr>
                         <!-- // <td class="py-1"><?php echo $s++;?></td> -->
                          <td><?php echo $display["clientid"] ; ?></td>
                          <td><?php echo $display["clientname"] ; ?></td>
                                        
                                        <td><?php echo $display["contactnumber"] ; ?></td>
                                        <td><?php echo $display["gender"] ; ?></td>
                                        <td><?php echo $display["institution"] ; ?></td>
                                        <td><?php echo $display["email"] ; ?></td>
                                        
                                        <td><?php echo $display["registrationdate"] ; ?></td>
                                        
                          
                          
                      </tr>
                      <?php  
	
  }
  ?>
</table>

</div>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>