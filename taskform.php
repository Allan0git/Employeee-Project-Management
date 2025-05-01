<?php
include("header.php");
?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Task Form</div>
                        <hr>
                        <?php
                        include("../dboperation.php");
                        $obj = new dboperation();
                        // Fetch from the database
                        $sql = "SELECT * FROM tbl_project";
                        $res = $obj->query($sql);
                        ?>
                        <form method="post" action="taskformaction.php">
                            <label for="inputEmail3" name="projectid" required class="col-sm-2 col-form-label"> Choose the
                                project:</label>
                            <select name="projectid">
                                <option selected disabled>--Select project--</option>

                                <?php
                                // Loop through the state results and display each state as an option
                                while ($display = mysqli_fetch_array($res)) {
                                    ?>
                                    <option value="<?php echo $display['projectid'] ?>" style="background-color:white;color:black;" >
                                        <?php echo $display['projecttitle'] ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            </td>
                            </tr>
                            <tr><br>


                                <?php
                                $sql = "SELECT * FROM tbl_tasklist";
                                $res = $obj->query($sql);
                                ?>
                                <form method="post" action="taskformaction.php">
                                    <label for="inputEmail3" name="tasklistid" required class="col-sm-2 col-form-label"> Choose
                                        the task:</label>
                                    <select name="tasklistid">
                                        <option selected disabled>--Select task--</option>

                                        <?php
                                        // Loop through the state results and display each state as an option
                                        while ($display = mysqli_fetch_array($res)) {
                                            ?>
                                            <option value="<?php echo $display['tasklistid'] ?>" style="background-color:white;color:black;">
                                                <?php echo $display['tasklistname'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    </td>
                            </tr>
                            <tr><br>







                                <form action="taskformaction.php" method="post">


                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Taskdescription</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="taskdescription" required class="form-control"
                                                id="inputEmail3">
                                        </div>
                                    </div><br>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
            </div>




        </div>
    </div>
    <!-- Form End -->

    <?php
    include("footer.php");
    ?>