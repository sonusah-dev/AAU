<?php
include('includes/session.php');
include('scripts/connection.php');
$results = mysqli_query($conn, "SELECT * FROM publication");
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
  <!-- amcharts css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- Start datatable css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css" />
  <!-- style css -->
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
      <div class="main-content-inner">
        <div class="row">
          <!-- data table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Publication Details</h4>
                <div class="data-tables">
                  <table id="dataTable" class="text-center ">
                    <thead class="bg-secondary text-white text-capitalize">
                      <tr>
                        <th>Id</th>
                        <th>No</th>
                        <th>Authors</th>
                        <th>Year</th>
                        <th>Title</th>
                        <th>Journal Name</th>
                        <th>Journal Volume</th>
                        <th>Journal Pages</th>
                        <th>DUI no</th>
                        <th>NAAC Score</th>
                        <th>Impact factor</th>
                        <th>Department</th>
                        <th>KVK</th>
                        <th>Research Station</th>
                        <th>ISBN</th>
                        <th>Editors</th>
                        <th>Published Type</th>
                        <th>Publisher Name</th>
                        <th>Publication Type</th>
                        <?php if ($_SESSION['user_type'] == 0) : ?>
                          <th>action</th>
                        <?php endif ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                      while ($row = mysqli_fetch_array($results)) : ?>
                        <tr>
                          <td><?php echo $count ?></td>
                          <td><?php echo $row['publication_number']; ?></td>
                          <td><?php echo $row['author']; ?></td>
                          <td><?php echo $row['publication_year']; ?></td>
                          <td><?php echo $row['title']; ?></td>
                          <td><?php echo $row['journal_name']; ?></td>
                          <td><?php echo $row['journal_volume']; ?></td>
                          <td><?php echo $row['journal_pages']; ?></td>
                          <td><?php echo $row['doi_number']; ?></td>
                          <td><?php echo $row['naac_score']; ?></td>
                          <td><?php echo $row['impact_factor']; ?></td>
                          <td><?php echo $row['department']; ?></td>
                          <td><?php echo $row['kvk']; ?></td>
                          <td><?php echo $row['research_station']; ?></td>
                          <td><?php echo $row['isbn']; ?></td>
                          <td><?php echo $row['editors']; ?></td>
                          <td><?php echo $row['published_type']; ?></td>
                          <td><?php echo $row['publisher_name']; ?></td>
                          <td><?php echo $row['publication_type']; ?></td>
                          <?php if ($_SESSION['user_type'] == 0) : ?>
                            <td>
                              <ul class="d-flex justify-content-center">
                                <li class="mr-3">
                                  <a href="update_publication.php?id=<?php echo $row['id']; ?>" class="text-primary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li>
                                  <a href="scripts/delete/delete_publication.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="ti-trash"></i></a>
                                </li>
                              </ul>
                            </td>
                          <?php endif ?>
                        </tr>
                      <?php $count++;
                      endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- data table end -->
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

  <!-- Start datatable js -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>