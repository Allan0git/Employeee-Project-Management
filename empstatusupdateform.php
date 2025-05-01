<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div>
    <?php
    
    
    include("headeremp.php");
    include_once("../dboperation.php");
    $obj=new dboperation();
    ?>

</div><br><br><br>


<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>


<?php
if (isset($_GET["projectid"])) 
    $projectid = $_GET["projectid"];
 
    // Correct variable name
     $sql = "select * from tbl_task p 
     inner join tbl_project c  on p.projectid = c.projectid 
     inner join tbl_tasklist l on p.tasklistid = l.tasklistid where c.projectid='$projectid'"; 
    $res = $obj->query($sql);

    $display = (mysqli_fetch_array($res))
        ?>

<body>
<br><br><br><br><br><br>
    <h1>Status Updation</h1>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Employee Status Form</div>
                        <hr>
                        <form action="newstatusformaction.php" method="post">
                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="remarks" required
                                        pattern="^[A-Z][a-zA-Z]*$"
                                        title="Must start with capital letter followed by upper or lowercase letters">
                                </div>
                           <br>
                           <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                           <select type="text" class="form-control" name="status">
                            <option value="Confirmed">Confirmed</option>
                            <option value="Pending">Pending</option>
   
                        </select>         
                           
                           <input type="hidden" name="projectid" value="<?php echo $display["projectid"];?>"><br>
                           <input type="hidden" name="tasklistid" value="<?php echo $display["tasklistid"];?>"><br>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>




            </div>
        </div>
        <!-- Form End -->

        <?php
        include("footeremp.php");
        ?>