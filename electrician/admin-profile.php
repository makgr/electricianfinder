<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        $adminid = $_SESSION['odmsaid'];
        $AName = $_POST['name'];
        $mobno = $_POST['phone'];
        $email = $_POST['email'];
        $thana = $_POST['thana'];
        $address = $_POST['address'];
        $specialization_area = $_POST['specialization_area'];

        $sql = "update tblelectrician set name=:adminname,email=:email, phone=:mobilenumber,thana=:thana, address=:address,specialization_area=:specialization_area where id=:aid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':adminname', $AName, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':mobilenumber', $mobno, PDO::PARAM_STR);
        $query->bindParam(':thana', $thana, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':specialization_area', $specialization_area, PDO::PARAM_STR);
        $query->bindParam(':aid', $adminid, PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Profile has been updated")</script>';
    }
?>
    <!doctype html>
    <html lang="en" class="no-focus">
    <!--<![endif]-->

    <head>
        <title>Electrician Finder web application - Electrician Profile</title>
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    </head>

    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">


            <?php include_once('includes/sidebar.php'); ?>

            <?php include_once('includes/header.php'); ?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Register Forms -->
                    <h2 class="content-heading">Electrician Profile</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Electrician Profile</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <?php
                                    $ID = $_SESSION['odmsaid'];
                                    $sql = "SELECT * from  tblelectrician WHERE id=:ID";
                                    $query = $dbh->prepare($sql);
                                    $query->bindParam(':ID', $ID, PDO::PARAM_STR);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt = 1;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $row) {               ?>
                                            <form method="post">
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-username">Name:</label>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" required='true'>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-password">Email:</label>
                                                    <div class="col-12">
                                                        <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" required='true'>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-password">Contact Number:</label>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" name="phone" value="<?php echo $row->phone; ?>" required='true' maxlength='11'>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-password">Location</label>
                                                    <div class="col-12">
                                                        <select class="form-control" name="thana">
                                                            <option value="">Select Location</option>
                                                            <option value="1">Dhaka</option>
                                                            <option value="2">Savar</option>
                                                            <option value="3">Gazipur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-password">Specialization Area:</label>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" name="specialization_area" value="<?php echo $row->specialization_area; ?>" required='true'>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12" for="register1-password">Address:</label>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>" required='true'>
                                                    </div>
                                                </div>
                                        <?php $cnt = $cnt + 1;
                                        }
                                    } ?>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name="submit">
                                                    <i class="fa fa-plus mr-5"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                            </form>

                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>

                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <?php include_once('includes/footer.php'); ?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>

    </html>
<?php }  ?>