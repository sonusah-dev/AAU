<?php
include('includes/session.php');
include('scripts/connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $applying_year = $_POST['applying_year'];
  $applied_for_degree = $_POST['applied_for_degree'];
  $examination_passed = $_POST['examination_passed'];
  $last_academic_percent = $_POST['last_academic_percent'];


  $query = "UPDATE  applicants SET 
        name = '$name',
        dob = '$dob',
        applying_year = '$applying_year',
        applied_for_degree = '$applied_for_degree',
        examinaton_passed = '$examination_passed',
        last_academic_percent = '$last_academic_percent'
        WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    header('location:showseekingapplicants.php?success=ok');
    $_SESSION['message'] = "Salient name updated successfully !!";
  } else {
    echo mysqli_error($conn);
    // header('location:showseekingapplicants.php?success=fail');
    // $_SESSION['message'] = "Something went wrong !!";
  }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo ($_SESSION['user_type'] == 0) ? "Admin" : (($_SESSION['user_type'] == 1) ? "Faculty" : "Student"); ?> | seeking applicants</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/metisMenu.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.min.css" />
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="assets/css/typography.css" />
  <link rel="stylesheet" href="assets/css/default-css.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!-- preloader area start -->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!-- preloader area end -->
  <!-- page container area start -->
  <div class="page-container">
    <!-- sidebar menu area start -->
    <?php include('includes/sidebar.php'); ?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
      <!-- header area start -->
      <?php include('includes/header.php'); ?>
      <!-- header area end -->
      <!-- page title area start -->
      <?php include('includes/title.php') ?>
      <!--page title area end -->
      <!-- form group starts -->
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Add seeking applicants</h4>
            <form class="needs-validation" method="POST">
              <div class="form-row">
                <?php
                $id = $_GET['id'];
                $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM applicants WHERE id = $id "));
                ?>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Name</label>
                  <input type="text" class="form-control" name="name" id="validationCustom01" value="<?php echo $row['name'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">D.O.B</label>
                  <input type="date" class="form-control" name="dob" id="validationCustom02" value="<?php echo $row['dob'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid info.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Application Year</label>
                  <input type="text" name="applying_year" class="form-control" id="validationCustom03" value="<?php echo $row['applying_year'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Application for Degree</label>
                  <input type="text" class="form-control" id="validationCustom03" name="applied_for_degree" value="<?php echo $row['applied_for_degree'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Examination Passed</label>
                  <input type="text" class="form-control" id="validationCustom03" name="examination_passed" value="<?php echo $row['examinaton_passed'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid info.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Final Percentage</label>
                  <input type="text" class="form-control" id="validationCustom04" name="last_academic_percent" value="<?php echo $row['last_academic_percent'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid percentage.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" name="update" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <!-- ends form group -->
    </div>
  </div>

  <!-- jquery latest version -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>