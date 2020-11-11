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
            <h4 class="header-title">Add Publications</h4>
            <form class="needs-validation" action="scripts/create/create_publication.php" method="POST" novalidate>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Publication No</label>
                  <input type="number" class="form-control" id="validationCustom01" name="publication_number" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Authors</label>
                  <input type="text" class="form-control" id="validationCustom02" name="author" required />
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Year Of Publication</label>
                  <input type="date" class="form-control" id="validationCustom03" name="publication_year" required />
                  <div class="invalid-feedback">
                    Please provide a valid info.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Title</label>
                  <input type="text" class="form-control" id="validationCustom03" name="title" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Jouranal Name</label>
                  <input type="text" class="form-control" id="validationCustom03" name="journal_name" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Journal Volume</label>
                  <input type="text" class="form-control" id="validationCustom06" name="journal_volume" required />
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Journal Pages</label>
                  <input type="number" class="form-control" id="validationCustom03" name="journal_pages" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">DOI No</label>
                  <input type="number" class="form-control" id="validationCustom03" name="doi_number" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">NAAC score</label>
                  <input type="number" class="form-control" id="validationCustom06" name="naac_score" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Impact Factor</label>
                  <input type="text" class="form-control" id="validationCustom03" name="impact_factor" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Department</label>
                  <input type="text" class="form-control" id="validationCustom03" name="department" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">KVK</label>
                  <input type="text" class="form-control" id="validationCustom06" name="kvk" required="" />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Research Station</label>
                  <input type="text" class="form-control" id="validationCustom04" name="research_station" required />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">ISBN</label>
                  <input type="number" class="form-control" id="validationCustom03" name="isbn" required />
                  <div class="invalid-feedback">
                    Please provide a valid number.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Editors</label>
                  <input type="text" class="form-control" id="validationCustom06" name="editors" required="" />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Published Type</label>
                  <input type="text" class="form-control" id="validationCustom04" name="published_type" required="" />
                  <div class="invalid-feedback">
                    Please provide a valid type.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Publisher Name</label>
                  <input type="text" class="form-control" id="validationCustom03" name="publisher_name" required="" />
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">Publication Type</label>
                  <input type="text" class="form-control" id="validationCustom06" name="publication_type" required="" />
                  <div class="invalid-feedback">
                    Please provide a valid type.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" type="submit">Submit</button>
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