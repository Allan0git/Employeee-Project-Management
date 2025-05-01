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
                        <div class="card-title">Employee Form</div>
                        <hr>
                        <form action="employeeregaction.php" method="post">
                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="empname" required
                                        pattern="^[A-Z][a-zA-Z]*$"
                                        title="Must start with capital letter followed by upper or lowercase letters">
                                </div>
                            </div><br>
                            <div class="form-group"> <label for="inputPassword3"
                                    class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" Name="dob" class="form-control" id="inputPassword3" name="dob"
                                        required>
                                </div>
                            </div>
                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="inputEmail3"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        title="must enter a valid email address" required>
                                </div>
                            </div><br>
                            <div class="form-group"> <label for="inputEmail3" class="col-sm-2 col-form-label">Phone
                                    Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phno" class="form-control" id="inputEmail3" required
                                        pattern="[0-9]{10}" required title="Must contain 10 digits">
                                </div>
                            </div><br>
                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" id="inputEmail3" required>
                                </div>
                            </div><br>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" required
                                            id="gridRadios1" value="Male" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" required
                                            id="gridRadios2" value="Female">
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group"> <label for="inputPassword3" class="col-sm-2 col-form-label">Joining
                                    date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="joiningdate" class="form-control" id="inputPassword3">
                                </div>
                            </div>

                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control" id="inputEmail3"
                                         required
                                        title="Must contain minimum 5 and maximum 15 characters">
                                </div>
                            </div><br>
                            <div class="form-group"> <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="password" class="form-control" id="inputEmail3"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        required>
                                </div>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>




            </div>
        </div>
        <!-- Form End -->

        <?php
        include("footer.php");
        ?>