<?php
include('includes/session.php');
include('scripts/connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $title = $_POST['title'];
  $objective = $_POST['objective'];
  $pi = $_POST['pi'];
  $co_pi = $_POST['co_pi'];
  $project_detail = $_POST['project_detail'];
  $funding_agency = $_POST['funding_agency'];
  $project_amount = $_POST['project_amount'];
  $project_period = $_POST['project_period'];
  $starting_date = $_POST['start_date'];
  $ending_date = $_POST['end_date'];
  $status = $_POST['status'];


  $query = "UPDATE  research SET 
        title = '$title',
        objective = '$objective',
        pi = '$pi',
        co_pi = '$co_pi',
        project_detail = '$project_detail',
        funding_agency = '$funding_agency',
        project_amount = '$project_amount',
        project_period = '$project_period',
        starting_year = '$starting_date',
        ending_date = '$ending_date',
        status = '$status'
        WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    $_SESSION['message'] = "Salient title updated successfully !!";
    header('location:showresearchprojectdetails.php?success=ok');
  } else {
    // echo mysqli_error($conn);
    $_SESSION['message'] = "Something went wrong !!";
    header('location:showresearchprojectdetails.php?fail=ok');
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
            <h4 class="header-title">Add research</h4>
            <form class="needs-validation" method="POST">
              <?php
              $id = $_GET['id'];
              $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM research"))
              ?>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Project Title</label>
                  <input type="text" class="form-control" id="validationCustom01" name="title" value="<?php echo $row['title'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Objective</label>
                  <input type="text" class="form-control" id="validationCustom02" name="objective" value="<?php echo $row['objective'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">PI</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom03" name="pi" value="<?php echo $row['pi'] ?>" required />
                    <div class="invalid-feedback">
                      Please provide a valid info.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">CO PI</label>
                  <input type="text" class="form-control" id="validationCustom03" name="co_pi" value="<?php echo $row['co_pi'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Project Details</label>
                  <input type="text" class="form-control" id="validationCustom03" name="project_detail" value="<?php echo $row['project_detail'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Funding Agency</label>
                  <input type="text" class="form-control" id="validationCustom06" name="funding_agency" value="<?php echo $row['funding_agency'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Project Amount</label>
                  <input type="number" class="form-control" id="validationCustom03" name="project_amount" value="<?php echo $row['project_amount'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Project Period</label>
                  <input type="text" class="form-control" id="validationCustom03" name="project_period" value="<?php echo $row['project_period'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Starting date</label>
                  <input type="date" class="form-control" id="validationCustom06" name="start_date" value="<?php echo $row['starting_year'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom03">Ending date</label>
                  <input type="date" class="form-control" id="validationCustom03" name="end_date" value="<?php echo $row['ending_date'] ?>" />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom04">Status</label>
                  <input type="text" class="form-control" id="validationCustom06" name="status" value="<?php echo $row['status'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
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