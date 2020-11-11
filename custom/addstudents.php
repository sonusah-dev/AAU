<?php include('includes/session.php'); ?>
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
            <h4 class="header-title">Add Student</h4>
            <form class="needs-validation" action="scripts/create/create_student.php" method="POST" novalidate>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Full Name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="name" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">D.O.B</label>
                  <input type="date" class="form-control" id="validationCustom02" name="dob" required />
                  <div class="valid-feedback">
                    Please provide a valid dob.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustomUsername">Gender</label>
                  <div class="input-group">
                    <select name="gender" id="validationCustom04" class="form-control" required>
                      <option>SELECT</option>
                      <option value="0">MALE</option>
                      <option value="1">FEMALE</option>
                      <option value="2">OTHERS</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid info.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Category</label>
                  <select name="category" id="validationCustom04" class="form-control" required>
                    <option selected>SELECT</option>
                    <option value="GENERAL">GENERAL</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="STP">STP</option>
                    <option value="STH">STH</option>
                    <option value="TGL">TGL</option>
                    <option value="PH">PH</option>
                    <option value="GAMES AND SPORTS">GAMES&SPORTS</option>
                    <option value="FREEDOM FIGHTER">FREEDOM FIGHTER</option>
                    <option value="AAU EMPLOYEE">AAU EMPLOYEE</option>
                    <option value="DEFENCE PERSONNEL">DEFENCE PERSONNEL</option>
                    <option value="MARTYRS OF ASSAM AGITATION">MARTYRS OF ASSAM AGITATION</option>
                    <option value="VLEW">VLEW</option>
                    <option value="NEC">NEC</option>
                    <option value="THT">THT</option>
                    <option value="HFC">HFC</option>
                    <option value="NRI">NRI</option>
                    <option value="ICAR/VCI">ICAR/VCI</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid cetegory.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Department</label>
                  <div class="input-group">
                    <select name="department" id="validationCustom04" class="form-control" required>
                      <option>SELECT</option>
                      <option value="M.SC-AGRI">M.SC-AGRI</option>
                      <option value="M.VSc">M.V Sc</option>
                      <option value="M.SC-FISHERY SCIENCE">M.SC-FISHERY SCIENCE</option>
                      <option value="M.SC-HOME SCIENCE">M.SC-HOME SCIENCE</option>
                      <option value="PHD">PHD</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid info.
                    </div>
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Address</label>
                  <input type="text" class="form-control" id="validationCustom06" name="address" required />
                  <div class="invalid-feedback">
                    Please provide a valid address.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="validationCustom03">Registration No</label>
                  <input type="number" class="form-control" id="validationCustom04" name="registration" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationCustom03">Year Of Addmission</label>
                  <input type="text" class="form-control" id="validationCustom03" name="addmission_year" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="validationCustom04">Degree Programme</label>
                  <input type="text" class="form-control" id="validationCustom06" name="degree" required />
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="validationCustom04">CURRENT YEAR</label>
                  <select name="event_type" id="validationCustom04" class="form-control" required>
                    <option>SELECT</option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                    <option value="5">Fifth Year</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid year.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" name="submit" type="submit">Submit</button>
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