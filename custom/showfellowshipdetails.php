<?php
include('includes/session.php');
include('scripts/connection.php');
$results = mysqli_query($conn, "SELECT * FROM internship");
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
      <div class="main-content-inner">
        <div class="row">
          <!-- Progress Table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Internships Details</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-hover progress-table table-secondary text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">student</th>
                          <th scope="col">fellowship type</th>
                          <th scope="col">duration</th>
                          <th scope="col">remark</th>
                          <?php if ($_SESSION['user_type'] == 0) : ?>
                            <th scope="col">action</th>
                          <?php endif ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $count = 1;
                        while ($row = mysqli_fetch_array($results)) : ?>
                          <tr>
                            <th><?php echo $count ?></th>
                            <td><?php echo $row['intern_name']; ?></td>
                            <td><?php echo $row['intern_type']; ?></td>
                            <td><?php echo $row['duration']; ?></td>
                            <td><?php echo $row['remark']; ?></td>
                            <?php if ($_SESSION['user_type'] == 0) : ?>
                              <td>
                                <ul class="d-flex justify-content-center">
                                  <li class="mr-3">
                                    <a href="update_intern.php?id=<?php echo $row['id']; ?>" class="text-primary"><i class="fa fa-edit"></i></a>
                                  </li>
                                  <li>
                                    <a href="scripts/delete/delete_intern.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="ti-trash"></i></a>
                                  </li>
                                </ul>
                              </td>
                            <?php endif ?>
                          </tr>
                        <?php $count++;
                        endwhile ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Progress Table end -->
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