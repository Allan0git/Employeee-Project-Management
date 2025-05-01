



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
    <?php
    session_start();
    $loginid=$_SESSION['loginid'];
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

<body>
<br><br><br><br><br><br>
    <h1>Task Information</h1>

    <table id="customers">
        <tr>
        <th scope="col">SIno</th>
            <th scope="col">Project Title</th>
            <th scope="col">Task Name</th>
            <th scope="col">Status</th>
            <th scope="col">Assigned Date</th>
            <th scope="col">Due Date</th>
            <!-- <th scope="col">Remarks</th> -->
        </tr>
        <tr>
        <?php
// select * from tbl_login tl inner join tbl_employee te on tl.loginid=te.loginid inner join tbl_empassign tem on te.empid=tem.empid inner join tbl_tasklist tli on tli.tasklistid=tem.taskid  where tl.loginid='24' inner join tbl_empprojectstatus pst on p.projectid=pst.projectid 
             $query="select * from tbl_empassign emp inner join tbl_employee empl on emp.empid=empl.empid inner join tbl_task t on emp.taskid=t.taskid inner join tbl_tasklist ta on t.tasklistid=ta.tasklistid inner join tbl_project p on t.projectid=p.projectid inner join tbl_login l on empl.loginid=l.loginid  where l.loginid='$loginid'";
        $res=$obj->query($query);
        $s=1;
        

while($display=mysqli_fetch_array($res))
{
   ?>
<tr>
    <td><?php echo $s++;?></td> 
    <td><?php echo $display["projecttitle"];?></td>
    <td><?php echo $display["tasklistname"];?></td>
    <td><?php echo $display["status"];?></td>
    <td><?php echo $display["assigndate"];?></td>
    <td><?php echo $display["duedate"];?></td>
    <!-- <td><?php echo $display["remarks"];?></td> -->

    <!-- <input type="hidden" name="tasklistid" value="<?php echo $display["tasklistid"];?>"> -->
    <td><a href="empstatusupdateform.php?projectid=<?php echo $display["projectid"];?>">Update</a></td>

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
include("footeremp.php");

?>
            