<?php
include('includes/session.php');
include('scripts/connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $activity = $_POST['activity'];
  $activity_year = $_POST['activity_year'];
  $pages = $_POST['pages'];

  $query = "UPDATE  salient_activity SET 
        activity = '$activity',
        activity_year = '$activity_year',
        pages = '$pages'
        WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    $_SESSION['message'] = "Salient activity updated successfully !!";
    header('location:../../showextentionactivities.php?success=ok');
  } else {
    // echo mysqli_error($conn);
    $_SESSION['message'] = "Something went wrong !!";
    header('location:../../showextentionactivities.php?success=fail');
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
  <link rel="shortcut icon" type="image/png" href="../../assets/images/icon/favicon.ico" />
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/themify-icons.css" />
  <link rel="stylesheet" href="../../assets/css/metisMenu.css" />
  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="../../assets/css/slicknav.min.css" />
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="../../assets/css/typography.css" />
  <link rel="stylesheet" href="../../assets/css/default-css.css" />
  <link rel="stylesheet" href="../../assets/css/styles.css" />
  <link rel="stylesheet" href="../../assets/css/responsive.css" />
  <!-- modernizr css -->
  <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <?php include('../../includes/sidebar.php'); ?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
      <!-- header area start -->
      <?php include('../../includes/header.php'); ?>
      <!-- header area end -->
      <!-- page title area start -->
      <?php include('includes/title.php') ?>
      <!--page title area end -->
      <!-- starts form group -->
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Add salient activities</h4>
            <form class="needs-validation" method="POST">
              <?php
              $id = $_GET['id'];
              $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM salient_activity WHERE id = $id "));
              ?>
              <div class="form-row">
                <div class="col-md-8 mb-3">
                  <label for="validationCustom01">Activity</label>
                  <input type="text" class="form-control" id="validationCustom01" name="activity" value="<?php echo $row['activity'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Activity Year</label>
                  <input type="text" class="form-control" id="validationCustom03" name="activity_year" value="<?php echo $row['activity_year'] ?>" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Pages</label>
                  <input type="number" class="form-control" id="validationCustom02" name="pages" value="<?php echo $row['pages'] ?>" required />
                  <div class="valid-feedback">
                    Please provide a valid dob.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" name="update" type="submit">Submit</button>
            </form>
          </div>
          <!-- ends form group -->
        </div>
      </div>
    </div>
  </div>

  <!-- jquery latest version -->
  <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/owl.carousel.min.js"></script>
  <script src="../../assets/js/metisMenu.min.js"></script>
  <script src="../../assets/js/jquery.slimscroll.min.js"></script>
  <script src="../../assets/js/jquery.slicknav.min.js"></script>

  <!-- start chart js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <!-- start highcharts js -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <!-- start zingchart js -->
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <!-- all line chart activation -->
  <script src="../../assets/js/line-chart.js"></script>
  <!-- all pie chart -->
  <script src="../../assets/js/pie-chart.js"></script>
  <!-- others plugins -->
  <script src="../../assets/js/plugins.js"></script>
  <script src="../../assets/js/scripts.js"></script>
</body>

</html>