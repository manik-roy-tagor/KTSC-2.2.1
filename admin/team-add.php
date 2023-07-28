<?php 
error_reporting(0);
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Team.php';
$team = new Team();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){   
    $teamInsert   = $team->teamInsert($_POST, $_FILES);
}
?>
<?php include("inc/header.php"); ?>
<?php include("inc/menubar.php"); ?>
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <?php include("inc/theme_setting.php"); ?>
    <?php include("inc/right_sidebar.php"); ?>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <?php include("inc/left_sidebar.php"); ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Team</h4>
                        <p class="card-description">
                            Employee Register Here....
                        </p>
                        <?php if(isset($teamInsert)){
                            echo $teamInsert;
                        }?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="emp_type">Employee Type</label>
                                <select  id="emp_type" class="form-control" name="emp_type">
                                    <option value="Director General">Director General</option>
                                    <option value="Principal">Principal</option>
                                    <option value="Academic Incharge">Academic Incharge</option>
                                    <option value="Chief Instructor">Chief Instructor</option>
                                    <option value="Instructor">Instructor</option>
                                    <option value="Junior Instructor">Junior Instructor</option>
                                    <option value="Guest Speaker">Guest Speaker</option>
                                    <option value="Office Staff">Office Staff</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="name">Employee Name</label>
                                <input type="text" id="name" class="form-control" name="emp_name" placeholder="Enter Name" required>
                            </div>
                           
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="mother">Employee Designation</label>
                                <input type="text" id="mother" class="form-control" name="emp_designation"  placeholder="Your Designation">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="Tra_de">Trade</label>
                                <select  id="Tra_de" class="form-control" name="emp_for_trade">
                                    <option value="IT Support & IOT Basics">IT Support & IOT Basics</option>
                                    <option value="General Electronics">General Electronics</option>
                                    <option value="Automobile">Automobile</option>
                                    <option value="Firm Machinary">Firm Machinary</option>
                                    <option value="Office">Office</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" class="form-control" name="dob" placeholder="Type Here ...." required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="phn">Phone No</label>
                                <input type="text" id="phn" class="form-control" name="phn" placeholder="Type Here ...." required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="emailId">Email ID</label>
                                <input type="email" id="emailId" class="form-control" name="email_Id" placeholder="Type Here ...." required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="tel">Telephone</label>
                                <input type="text" id="tel" class="form-control" name="tel"  placeholder="Type Here ....">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="fbId">Facebook</label>
                                <input type="text" id="fbId" class="form-control" name="fbId" placeholder="Type Here ....">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                            <label for="photo">Photo</label>
                                <input type="file" class="form-control" name="file_name" id="photo" placeholder="" required>
                            </div>
                            
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light" name="cancel">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <?php include("inc/footer.php"); ?>


        <style>
            input{
                border: 1px solid #000;
            }
        </style>