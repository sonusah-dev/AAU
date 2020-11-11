<?php
include('includes/session.php');
include('scripts/connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $title = $_POST['title'];
  $organized_by = $_POST['organized_by'];
  $starting_date = $_POST['starting_date'];
  $ending_date = $_POST['ending_date'];
  $sponsored_by = $_POST['sponsored_by'];
  $venue = $_POST['venue'];
  $level = $_POST['level'];
  $event_type = $_POST['event_type'];
  $event_year = $_POST['event_year'];

  $query = "UPDATE events SET 
        title = '$title',
        organized_by = '$organized_by',
        starting_date = '$starting_date',
        ending_date = '$ending_date',
        sponsored_by = '$sponsored_by',
        venue = '$venue',
        level = '$level',
        event_type = '$event_type',
        event_year = '$event_year'
        WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    header('location:showevents.php?success=ok');
    $_SESSION['message'] = "Salient title updated successfully !!";
  } else {
    echo mysqli_error($conn);
    // header('location:showevents.php?fail=ok');
    // $_SESSION['message'] = "Something went wrong !!";
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
            <h4 class="header-title">Add events</h4>
            <form class="needs-validation" method="POST">
              <?php
              $id = $_GET['id'];
              $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM events WHERE id = $id "));
              ?>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Title</label>
                  <input type="text" name="title" class="form-control" id="validationCustom01" value="<?php echo $row['title'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid title.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Organized By</label>
                  <input type="text" name="organized_by" class="form-control" id="validationCustom02" value="<?php echo $row['organized_by'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid info.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Starting Date</label>
                  <input type="date" name="starting_date" class="form-control" id="validationCustom03" value="<?php echo $row['starting_date'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Ending Date</label>
                  <input type="date" name="ending_date" class="form-control" id="validationCustom03" value="<?php echo $row['ending_date'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Sponsored By</label>
                  <input type="text" name="sponsored_by" class="form-control" id="validationCustom03" value="<?php echo $row['sponsored_by'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid info.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Venue</label>
                  <input type="text" name="venue" class="form-control" id="validationCustom04" value="<?php echo $row['venue'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid address.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Level</label>
                  <input type="text" name="level" class="form-control" id="validationCustom03" value="<?php echo $row['level'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Event Type</label>
                  <input type="text" name="event_type" class="form-control" id="validationCustom03" value="<?php echo $row['event_type'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Event Year</label>
                  <input type="text" name="event_year" class="form-control" id="validationCustom04" value="<?php echo $row['event_year'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
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