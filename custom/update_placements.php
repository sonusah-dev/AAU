<?php
include('includes/session.php');
include('scripts/connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $name = $_POST['name'];
  $placement_year = $_POST['placement_year'];
  $package = $_POST['package'];
  $company = $_POST['company'];
  $type = $_POST['type'];
  $period = $_POST['period'];


  $query = "UPDATE placement SET 
        student_name = '$name',
        placement_year = '$placement_year',
        package = '$package',
        company = '$company',
        industry_type = '$type',
        time_period = '$period'
        WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    header('location:showplacementdetails.php?success=ok');
    $_SESSION['message'] = "Salient name updated successfully !!";
  } else {
    echo mysqli_error($conn);
    // header('location:showplacementdetails.php?success=fail');
    $_SESSION['message'] = "Something went wrong !!";
  }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo ($_SESSION['user_type'] == 0) ? "Admin" : (($_SESSION['user_type'] == 1) ? "Faculty" : "Student"); ?> | Dashboard</title>
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
      <!-- starts form group -->
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Add placements details</h4>
            <form class="needs-validation" method="POST">
              <?php
              $id = $_GET['id'];
              $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM placement WHERE id = $id "));
              ?>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Student Name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo $row['student_name'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Placement Year</label>
                  <input type="text" class="form-control" id="validationCustom02" name="placement_year" value="<?php echo $row['placement_year'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Amount Sactioned</label>
                  <input type="text" class="form-control" id="validationCustom03" name="package" value="<?php echo $row['package'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid amount.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Placement Through</label>
                  <input type="text" class="form-control" id="validationCustom03" name="company" value="<?php echo $row['company'] ?>" required= />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">industry Type</label>
                  <input type="text" class="form-control" id="validationCustom03" name="type" value="<?php echo $row['industry_type'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Project Period</label>
                  <input type="text" class="form-control" id="validationCustom03" name="period" value="<?php echo $row['time_period'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" name="update" type="submit">Submit</button>
            </form>
          </div>
          <!-- ends form group -->
        </div>
      </div>
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