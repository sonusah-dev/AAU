<?php

include('includes/session.php');
include('scripts/connection.php');

$GEN = 0;
$OBC = 0;
$SC = 0;
$STP = 0;
$STH = 0;
$TGL = 0;
$PH = 0;
$GAMESSPORTS = 0;
$FREEDOMFIGHTER = 0;
$AAUEMP = 0;
$DEFENCEPERSONNEL = 0;
$MARTYRSOFASSAM = 0;
$VLEW = 0;
$NEC = 0;
$THT = 0;
$HFC = 0;
$NRI = 0;
$ICAR = 0;

$GEN2 = 0;
$OBC2 = 0;
$SC2 = 0;
$STP2 = 0;
$STH2 = 0;
$TGL2 = 0;
$PH2 = 0;
$GAMESSPORTS2 = 0;
$FREEDOMFIGHTER2 = 0;
$AAUEMP2 = 0;
$DEFENCEPERSONNEL2 = 0;
$MARTYRSOFASSAM2 = 0;
$VLEW2 = 0;
$NEC2 = 0;
$THT2 = 0;
$HFC2 = 0;
$NRI2 = 0;
$ICAR2 = 0;

$GEN3 = 0;
$OBC3 = 0;
$SC3 = 0;
$STP3 = 0;
$STH3 = 0;
$TGL3 = 0;
$PH3 = 0;
$GAMESSPORTS3 = 0;
$FREEDOMFIGHTER3 = 0;
$AAUEMP3 = 0;
$DEFENCEPERSONNEL3 = 0;
$MARTYRSOFASSAM3 = 0;
$VLEW3 = 0;
$NEC3 = 0;
$THT3 = 0;
$HFC3 = 0;
$NRI3 = 0;
$ICAR3 = 0;

$GEN4 = 0;
$OBC4 = 0;
$SC4 = 0;
$STP4 = 0;
$STH4 = 0;
$TGL4 = 0;
$PH4 = 0;
$GAMESSPORTS4 = 0;
$FREEDOMFIGHTER4 = 0;
$AAUEMP4 = 0;
$DEFENCEPERSONNEL4 = 0;
$MARTYRSOFASSAM4 = 0;
$VLEW4 = 0;
$NEC4 = 0;
$THT4 = 0;
$HFC4 = 0;
$NRI4 = 0;
$ICAR4 = 0;

$GEN5 = 0;
$OBC5 = 0;
$SC5 = 0;
$STP5 = 0;
$STH5 = 0;
$TGL5 = 0;
$PH5 = 0;
$GAMESSPORTS5 = 0;
$FREEDOMFIGHTER5 = 0;
$AAUEMP5 = 0;
$DEFENCEPERSONNEL5 = 0;
$MARTYRSOFASSAM5 = 0;
$VLEW5 = 0;
$NEC5 = 0;
$THT5 = 0;
$HFC5 = 0;
$NRI5 = 0;
$ICAR5 = 0;

// Annexure 2 Variables
$MSCAGRI1 = 0;
$MSCAGRI2 = 0;
$MVSc1 = 0;
$MVSc2 = 0;
$MSCFISHERYSCIENCE1 = 0;
$MSCFISHERYSCIENCE2 = 0;
$MSCHOMESCIENCE1 = 0;
$MSCHOMESCIENCE2 = 0;
$PHD1 = 0;
$PHD2 = 0;
$PHD3 = 0;




$annexuresql = "SELECT * FROM students";
$annexurers = mysqli_query($conn, $annexuresql);

$annesure3asql = "SELECT * FROM publication";
$annesure3ars = mysqli_query($conn, $annesure3asql);

$annesure4sql = "SELECT * FROM events WHERE event_type='organised'";
$annesure4rs = mysqli_query($conn, $annesure4sql);

$annesure5sql = "SELECT * FROM events WHERE event_type='attended'";
$annesure5rs = mysqli_query($conn, $annesure5sql);

$annesure6sql = "SELECT * FROM research";
$annesure6rs = mysqli_query($conn, $annesure6sql);

$annesure7sql = "SELECT * FROM popular_publication";
$annesure7rs = mysqli_query($conn, $annesure7sql);


while ($row = mysqli_fetch_array($annexurers)) {
  if ($row['category'] == 'GENERAL' && $row['current_year'] == 1) {
    $GEN++;
  } elseif ($row['category'] == 'OBC' && $row['current_year'] == 1) {
    $OBC++;
  } elseif ($row['category'] == 'SC' && $row['current_year'] == 1) {
    $SC++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 1) {
    $STP++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 1) {
    $STH++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 1) {
    $STP++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 1) {
    $STH++;
  } elseif ($row['category'] == 'TGL' && $row['current_year'] == 1) {
    $TGL++;
  } elseif ($row['category'] == 'PH' && $row['current_year'] == 1) {
    $PH++;
  } elseif ($row['category'] == 'GAMES AND SPORTS' && $row['current_year'] == 1) {
    $GAMESSPORTS++;
  } elseif ($row['category'] == 'FREEDOM FIGHTER' && $row['current_year'] == 1) {
    $FREEDOMFIGHTER++;
  } elseif ($row['category'] == 'AAU EMPLOYEE' && $row['current_year'] == 1) {
    $AAUEMP++;
  } elseif ($row['category'] == 'DEFENCE PERSONNEL' && $row['current_year'] == 1) {
    $DEFENCEPERSONNEL++;
  } elseif ($row['category'] == 'MARTYRS OF ASSAM AGITATION' && $row['current_year'] == 1) {
    $MARTYRSOFASSAM++;
  } elseif ($row['category'] == 'VLEW' && $row['current_year'] == 1) {
    $VLEW++;
  } elseif ($row['category'] == 'NEC' && $row['current_year'] == 1) {
    $NEC++;
  } elseif ($row['category'] == 'THT' && $row['current_year'] == 1) {
    $THT++;
  } elseif ($row['category'] == 'HFC' && $row['current_year'] == 1) {
    $HFC++;
  } elseif ($row['category'] == 'NRI' && $row['current_year'] == 1) {
    $NRI++;
  } elseif ($row['category'] == 'ICAR/VCI' && $row['current_year'] == 1) {
    $ICAR++;
  } elseif ($row['category'] == 'GENERAL' && $row['current_year'] == 2) {
    $GEN2++;
  } elseif ($row['category'] == 'OBC' && $row['current_year'] == 2) {
    $OBC2++;
  } elseif ($row['category'] == 'SC' && $row['current_year'] == 2) {
    $SC2++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 2) {
    $STP2++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 2) {
    $STH2++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 2) {
    $STP2++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 2) {
    $STH2++;
  } elseif ($row['category'] == 'TGL' && $row['current_year'] == 2) {
    $TGL2++;
  } elseif ($row['category'] == 'PH' && $row['current_year'] == 2) {
    $PH2++;
  } elseif ($row['category'] == 'GAMES AND SPORTS' && $row['current_year'] == 2) {
    $GAMESSPORTS2++;
  } elseif ($row['category'] == 'FREEDOM FIGHTER' && $row['current_year'] == 2) {
    $FREEDOMFIGHTER2++;
  } elseif ($row['category'] == 'AAU EMPLOYEE' && $row['current_year'] == 2) {
    $AAUEMP2++;
  } elseif ($row['category'] == 'DEFENCE PERSONNEL' && $row['current_year'] == 2) {
    $DEFENCEPERSONNEL2++;
  } elseif ($row['category'] == 'MARTYRS OF ASSAM AGITATION' && $row['current_year'] == 2) {
    $MARTYRSOFASSAM2++;
  } elseif ($row['category'] == 'VLEW' && $row['current_year'] == 2) {
    $VLEW2++;
  } elseif ($row['category'] == 'NEC' && $row['current_year'] == 2) {
    $NEC2++;
  } elseif ($row['category'] == 'THT' && $row['current_year'] == 2) {
    $THT2++;
  } elseif ($row['category'] == 'HFC' && $row['current_year'] == 2) {
    $HFC2++;
  } elseif ($row['category'] == 'NRI' && $row['current_year'] == 2) {
    $NRI2++;
  } elseif ($row['category'] == 'ICAR/VCI' && $row['current_year'] == 2) {
    $ICAR2++;
  } elseif ($row['category'] == 'GENERAL' && $row['current_year'] == 3) {
    $GEN3++;
  } elseif ($row['category'] == 'OBC' && $row['current_year'] == 3) {
    $OBC3++;
  } elseif ($row['category'] == 'SC' && $row['current_year'] == 3) {
    $SC3++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 3) {
    $STP3++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 3) {
    $STH3++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 3) {
    $STP3++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 3) {
    $STH3++;
  } elseif ($row['category'] == 'TGL' && $row['current_year'] == 3) {
    $TGL3++;
  } elseif ($row['category'] == 'PH' && $row['current_year'] == 3) {
    $PH3++;
  } elseif ($row['category'] == 'GAMES AND SPORTS' && $row['current_year'] == 3) {
    $GAMESSPORTS3++;
  } elseif ($row['category'] == 'FREEDOM FIGHTER' && $row['current_year'] == 3) {
    $FREEDOMFIGHTER3++;
  } elseif ($row['category'] == 'AAU EMPLOYEE' && $row['current_year'] == 3) {
    $AAUEMP3++;
  } elseif ($row['category'] == 'DEFENCE PERSONNEL' && $row['current_year'] == 3) {
    $DEFENCEPERSONNEL3++;
  } elseif ($row['category'] == 'MARTYRS OF ASSAM AGITATION' && $row['current_year'] == 3) {
    $MARTYRSOFASSAM3++;
  } elseif ($row['category'] == 'VLEW' && $row['current_year'] == 3) {
    $VLEW3++;
  } elseif ($row['category'] == 'NEC' && $row['current_year'] == 3) {
    $NEC3++;
  } elseif ($row['category'] == 'THT' && $row['current_year'] == 3) {
    $THT3++;
  } elseif ($row['category'] == 'HFC' && $row['current_year'] == 3) {
    $HFC3++;
  } elseif ($row['category'] == 'NRI' && $row['current_year'] == 3) {
    $NRI3++;
  } elseif ($row['category'] == 'ICAR/VCI' && $row['current_year'] == 3) {
    $ICAR3++;
  } elseif ($row['category'] == 'GENERAL' && $row['current_year'] == 4) {
    $GEN4++;
  } elseif ($row['category'] == 'OBC' && $row['current_year'] == 4) {
    $OBC4++;
  } elseif ($row['category'] == 'SC' && $row['current_year'] == 4) {
    $SC4++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 4) {
    $STP4++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 4) {
    $STH4++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 4) {
    $STP4++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 4) {
    $STH4++;
  } elseif ($row['category'] == 'TGL' && $row['current_year'] == 4) {
    $TGL4++;
  } elseif ($row['category'] == 'PH' && $row['current_year'] == 4) {
    $PH4++;
  } elseif ($row['category'] == 'GAMES AND SPORTS' && $row['current_year'] == 4) {
    $GAMESSPORTS4++;
  } elseif ($row['category'] == 'FREEDOM FIGHTER' && $row['current_year'] == 4) {
    $FREEDOMFIGHTER4++;
  } elseif ($row['category'] == 'AAU EMPLOYEE' && $row['current_year'] == 4) {
    $AAUEMP4++;
  } elseif ($row['category'] == 'DEFENCE PERSONNEL' && $row['current_year'] == 4) {
    $DEFENCEPERSONNEL4++;
  } elseif ($row['category'] == 'MARTYRS OF ASSAM AGITATION' && $row['current_year'] == 4) {
    $MARTYRSOFASSAM4++;
  } elseif ($row['category'] == 'VLEW' && $row['current_year'] == 4) {
    $VLEW4++;
  } elseif ($row['category'] == 'NEC' && $row['current_year'] == 4) {
    $NEC4++;
  } elseif ($row['category'] == 'THT' && $row['current_year'] == 4) {
    $THT4++;
  } elseif ($row['category'] == 'HFC' && $row['current_year'] == 4) {
    $HFC4++;
  } elseif ($row['category'] == 'NRI' && $row['current_year'] == 4) {
    $NRI4++;
  } elseif ($row['category'] == 'ICAR/VCI' && $row['current_year'] == 4) {
    $ICAR4++;
  } elseif ($row['category'] == 'GENERAL' && $row['current_year'] == 5) {
    $GEN5++;
  } elseif ($row['category'] == 'OBC' && $row['current_year'] == 5) {
    $OBC5++;
  } elseif ($row['category'] == 'SC' && $row['current_year'] == 5) {
    $SC5++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 5) {
    $STP5++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 5) {
    $STH5++;
  } elseif ($row['category'] == 'STP' && $row['current_year'] == 5) {
    $STP5++;
  } elseif ($row['category'] == 'STH' && $row['current_year'] == 5) {
    $STH5++;
  } elseif ($row['category'] == 'TGL' && $row['current_year'] == 5) {
    $TGL5++;
  } elseif ($row['category'] == 'PH' && $row['current_year'] == 5) {
    $PH5++;
  } elseif ($row['category'] == 'GAMES AND SPORTS' && $row['current_year'] == 5) {
    $GAMESSPORTS5++;
  } elseif ($row['category'] == 'FREEDOM FIGHTER' && $row['current_year'] == 5) {
    $FREEDOMFIGHTER5++;
  } elseif ($row['category'] == 'AAU EMPLOYEE' && $row['current_year'] == 5) {
    $AAUEMP5++;
  } elseif ($row['category'] == 'DEFENCE PERSONNEL' && $row['current_year'] == 5) {
    $DEFENCEPERSONNEL5++;
  } elseif ($row['category'] == 'MARTYRS OF ASSAM AGITATION' && $row['current_year'] == 5) {
    $MARTYRSOFASSAM5++;
  } elseif ($row['category'] == 'VLEW' && $row['current_year'] == 5) {
    $VLEW5++;
  } elseif ($row['category'] == 'NEC' && $row['current_year'] == 5) {
    $NEC5++;
  } elseif ($row['category'] == 'THT' && $row['current_year'] == 5) {
    $THT5++;
  } elseif ($row['category'] == 'HFC' && $row['current_year'] == 5) {
    $HFC5++;
  } elseif ($row['category'] == 'NRI' && $row['current_year'] == 5) {
    $NRI5++;
  } elseif ($row['category'] == 'ICAR/VCI' && $row['current_year'] == 5) {
    $ICAR5++;
  }



  if ($row['department'] == 'M.SC-AGRI' && $row['current_year'] == 1) {
    $MSCAGRI1++;
  } elseif ($row['department'] == 'M.VSc' && $row['current_year'] == 1) {
    $MVSc1++;
  } elseif ($row['department'] == 'M.SC-FISHERY SCIENCE' && $row['current_year'] == 1) {
    $MSCFISHERYSCIENCE1++;
  } elseif ($row['department'] == 'M.SC-HOME SCIENCE' && $row['current_year'] == 1) {
    $MSCHOMESCIENCE1++;
  } elseif ($row['department'] == 'PHD' && $row['current_year'] == 1) {
    $PHD1++;
  } elseif ($row['department'] == 'M.SC-AGRI' && $row['current_year'] == 2) {
    $MSCAGRI2++;
  } elseif ($row['department'] == 'M.VSc' && $row['current_year'] == 2) {
    $MVSc2++;
  } elseif ($row['department'] == 'M.SC-FISHERY SCIENCE' && $row['current_year'] == 2) {
    $MSCFISHERYSCIENCE2++;
  } elseif ($row['department'] == 'M.SC-HOME SCIENCE' && $row['current_year'] == 2) {
    $MSCHOMESCIENCE2++;
  } elseif ($row['department'] == 'PHD' && $row['current_year'] == 2) {
    $PHD2++;
  } elseif ($row['department'] == 'PHD' && $row['current_year'] == 3) {
    $PHD3++;
  }
}

$GENTOTAL = $GEN + $GEN2 + $GEN3 + $GEN4 + $GEN5;
$OBCTOTAL = $OBC + $OBC2 + $OBC3 + $OBC4 + $OBC5;
$SCTOTAL = $SC + $SC2 + $SC3 + $SC4 + $SC5;
$STPTOTAL = $STP + $STP2 + $STP3 + $STP4 + $STP5;
$STHTOTAL = $STH + $STH2 + $STH3 + $STH4 + $STH5;
$TGLTOTAL = $TGL + $TGL2 + $TGL3 + $TGL4 + $TGL5;
$PHTOTAL = $PH + $PH2 + $PH3 + $PH4 + $PH5;
$GAMESSPORTSTOTAL = $GAMESSPORTS + $GAMESSPORTS2 + $GAMESSPORTS3 + $GAMESSPORTS4 + $GAMESSPORTS5;
$FREEDOMFIGHTERTOTAL = $FREEDOMFIGHTER + $FREEDOMFIGHTER2 + $FREEDOMFIGHTER3 + $FREEDOMFIGHTER4 + $FREEDOMFIGHTER5;
$AAUEMPTOTAL = $AAUEMP + $AAUEMP2 + $AAUEMP3 + $AAUEMP4 + $AAUEMP5;
$DEFENCEPERSONNELTOTAL = $DEFENCEPERSONNEL + $DEFENCEPERSONNEL2 + $DEFENCEPERSONNEL3 + $DEFENCEPERSONNEL4 + $DEFENCEPERSONNEL5;
$MARTYRSOFASSAMTOTAL = $MARTYRSOFASSAM + $MARTYRSOFASSAM2 + $MARTYRSOFASSAM3 + $MARTYRSOFASSAM4 + $MARTYRSOFASSAM5;
$VLEWTOTAL = $VLEW + $VLEW2 + $VLEW3 + $VLEW4 + $VLEW5;
$NECTOTAL = $NEC + $NEC2 + $NEC3 + $NEC4 + $NEC5;
$THTTOTAL = $THT + $THT2 + $THT3 + $THT4 + $THT5;
$HFCTOTAL = $HFC + $HFC2 + $HFC3 + $HFC4 + $HFC5;
$NRITOTAL = $NRI + $NRI2 + $NRI3 + $NRI4 + $NRI5;
$ICARTOTAL = $ICAR + $ICAR2 + $ICAR3 + $ICAR4 + $ICAR5;


?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>
    <?php echo ($_SESSION['user_type'] == 0) ? "Admin" : (($_SESSION['user_type'] == 1) ?
      "Faculty" : "Student"); ?> | Dashboard
  </title>
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
  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
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
      <?php include('includes/header.php') ?>
      <!-- header area end -->
      <!-- page title area start -->
      <?php include('includes/title.php') ?>
      <!-- page title area end -->
      <div class="main-content-inner">
        <div class="row">
          <!-- table primary start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 1</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-primary">
                        <tr class="text-white">
                          <th scope="col">Year</th>
                          <th scope="col">GEN</th>
                          <th scope="col">OBC</th>
                          <th scope="col">SC</th>
                          <th scope="col">STP</th>
                          <th scope="col">STH</th>
                          <th scope="col">TGL</th>
                          <th scope="col">PH</th>
                          <th scope="col">GAMES & SPORTS</th>
                          <th scope="col">FREEDOM FIGHTER</th>
                          <th scope="col">AAU EMPLOYEE</th>
                          <th scope="col">DEFENCE PERSONNEL</th>
                          <th scope="col">MARTYRS OF ASSAM AGITATION</th>
                          <th scope="col">VLEW</th>
                          <th scope="col">NEH</th>
                          <th scope="col">THT</th>
                          <th scope="col">HFC</th>
                          <th scope="col">NRI</th>
                          <th scope="col">ICAR/VCI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1st</th>
                          <td><?php echo $GEN; ?></td>
                          <td><?php echo $OBC; ?></td>
                          <td><?php echo $SC; ?></td>
                          <td><?php echo $STP; ?></td>
                          <td><?php echo $STH; ?></td>
                          <td><?php echo $TGL; ?></td>
                          <td><?php echo $PH; ?></td>
                          <td><?php echo $GAMESSPORTS; ?></td>
                          <td><?php echo $FREEDOMFIGHTER; ?></td>
                          <td><?php echo $AAUEMP; ?></td>
                          <td><?php echo $DEFENCEPERSONNEL; ?></td>
                          <td><?php echo $MARTYRSOFASSAM; ?></td>
                          <td><?php echo $VLEW; ?></td>
                          <td><?php echo $NEC; ?></td>
                          <td><?php echo $THT; ?></td>
                          <td><?php echo $HFC; ?></td>
                          <td><?php echo $NRI; ?></td>
                          <td><?php echo $ICAR; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">2nd</th>
                          <td><?php echo $GEN2; ?></td>
                          <td><?php echo $OBC2; ?></td>
                          <td><?php echo $SC2; ?></td>
                          <td><?php echo $STP2; ?></td>
                          <td><?php echo $STH2; ?></td>
                          <td><?php echo $TGL2; ?></td>
                          <td><?php echo $PH2; ?></td>
                          <td><?php echo $GAMESSPORTS2; ?></td>
                          <td><?php echo $FREEDOMFIGHTER2; ?></td>
                          <td><?php echo $AAUEMP2; ?></td>
                          <td><?php echo $DEFENCEPERSONNEL2; ?></td>
                          <td><?php echo $MARTYRSOFASSAM2; ?></td>
                          <td><?php echo $VLEW2; ?></td>
                          <td><?php echo $NEC2; ?></td>
                          <td><?php echo $THT2; ?></td>
                          <td><?php echo $HFC2; ?></td>
                          <td><?php echo $NRI2; ?></td>
                          <td><?php echo $ICAR2; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">3rd</th>
                          <td><?php echo $GEN3; ?></td>
                          <td><?php echo $OBC3; ?></td>
                          <td><?php echo $SC3; ?></td>
                          <td><?php echo $STP3; ?></td>
                          <td><?php echo $STH3; ?></td>
                          <td><?php echo $TGL3; ?></td>
                          <td><?php echo $PH3; ?></td>
                          <td><?php echo $GAMESSPORTS3; ?></td>
                          <td><?php echo $FREEDOMFIGHTER3; ?></td>
                          <td><?php echo $AAUEMP3; ?></td>
                          <td><?php echo $DEFENCEPERSONNEL3; ?></td>
                          <td><?php echo $MARTYRSOFASSAM3; ?></td>
                          <td><?php echo $VLEW3; ?></td>
                          <td><?php echo $NEC3; ?></td>
                          <td><?php echo $THT3; ?></td>
                          <td><?php echo $HFC3; ?></td>
                          <td><?php echo $NRI3; ?></td>
                          <td><?php echo $ICAR3; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">4th</th>
                          <td><?php echo $GEN4; ?></td>
                          <td><?php echo $OBC4; ?></td>
                          <td><?php echo $SC4; ?></td>
                          <td><?php echo $STP4; ?></td>
                          <td><?php echo $STH4; ?></td>
                          <td><?php echo $TGL4; ?></td>
                          <td><?php echo $PH4; ?></td>
                          <td><?php echo $GAMESSPORTS4; ?></td>
                          <td><?php echo $FREEDOMFIGHTER4; ?></td>
                          <td><?php echo $AAUEMP4; ?></td>
                          <td><?php echo $DEFENCEPERSONNEL4; ?></td>
                          <td><?php echo $MARTYRSOFASSAM4; ?></td>
                          <td><?php echo $VLEW4; ?></td>
                          <td><?php echo $NEC4; ?></td>
                          <td><?php echo $THT4; ?></td>
                          <td><?php echo $HFC4; ?></td>
                          <td><?php echo $NRI4; ?></td>
                          <td><?php echo $ICAR4; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">5th</th>
                          <td><?php echo $GEN5; ?></td>
                          <td><?php echo $OBC5; ?></td>
                          <td><?php echo $SC5; ?></td>
                          <td><?php echo $STP5; ?></td>
                          <td><?php echo $STH5; ?></td>
                          <td><?php echo $TGL5; ?></td>
                          <td><?php echo $PH5; ?></td>
                          <td><?php echo $GAMESSPORTS5; ?></td>
                          <td><?php echo $FREEDOMFIGHTER5; ?></td>
                          <td><?php echo $AAUEMP5; ?></td>
                          <td><?php echo $DEFENCEPERSONNEL5; ?></td>
                          <td><?php echo $MARTYRSOFASSAM5; ?></td>
                          <td><?php echo $VLEW5; ?></td>
                          <td><?php echo $NEC5; ?></td>
                          <td><?php echo $THT5; ?></td>
                          <td><?php echo $HFC5; ?></td>
                          <td><?php echo $NRI5; ?></td>
                          <td><?php echo $ICAR5; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Total</th>
                          <td><?php echo $GENTOTAL; ?></td>
                          <td><?php echo $OBCTOTAL; ?></td>
                          <td><?php echo $SCTOTAL; ?></td>
                          <td><?php echo $STPTOTAL; ?></td>
                          <td><?php echo $STHTOTAL; ?></td>
                          <td><?php echo $TGLTOTAL; ?></td>
                          <td><?php echo $PHTOTAL; ?></td>
                          <td><?php echo $GAMESSPORTSTOTAL; ?></td>
                          <td><?php echo $FREEDOMFIGHTERTOTAL; ?></td>
                          <td><?php echo $AAUEMPTOTAL; ?></td>
                          <td><?php echo $DEFENCEPERSONNELTOTAL; ?></td>
                          <td><?php echo $MARTYRSOFASSAMTOTAL; ?></td>
                          <td><?php echo $VLEWTOTAL; ?></td>
                          <td><?php echo $NECTOTAL; ?></td>
                          <td><?php echo $THTTOTAL; ?></td>
                          <td><?php echo $HFCTOTAL; ?></td>
                          <td><?php echo $NRITOTAL; ?></td>
                          <td><?php echo $ICARTOTAL; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table primary end -->
          <!-- table success start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 2</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-success">
                        <tr class="text-white">
                          <th scope="col">SLNO.</th>
                          <th scope="col">NAME OF DEPARTMENT</th>
                          <th scope="col">MSC(AGRI) 1st</th>
                          <th scope="col">MSC(AGRI) 2nd</th>
                          <th scope="col">MSC(AGRI) TOTAL</th>
                          <th scope="col">Phd 1st</th>
                          <th scope="col">Phd 2nd</th>
                          <th scope="col">Phd 3rd</th>
                          <th scope="col">Phd Total</th>
                          <th scope="col">Grand Total</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td scope="row">1</td>
                          <td><?php echo 'M.SC-AGRI'; ?></td>
                          <td><?php echo $MSCAGRI1; ?></td>
                          <td><?php echo $MSCAGRI2; ?></td>
                          <td><?php echo $MSCAGRI1 + $MSCAGRI2; ?></td>
                          <td><?php echo $PHD1; ?></td>
                          <td><?php echo $PHD2; ?></td>
                          <td><?php echo $PHD3; ?></td>
                          <td><?php echo $PHD1 + $PHD2 + $PHD3; ?></td>
                          <td><?php echo $MSCAGRI1 + $MSCAGRI2 + $PHD1 + $PHD2 + $PHD3; ?></td>
                        </tr>
                        <tr>
                          <td scope="row">2</td>
                          <td><?php echo 'M.VSc'; ?></td>
                          <td><?php echo $MVSc1; ?></td>
                          <td><?php echo $MVSc2; ?></td>
                          <td><?php echo $MVSc1 + $MVSc2; ?></td>
                          <td><?php echo $PHD1; ?></td>
                          <td><?php echo $PHD2; ?></td>
                          <td><?php echo $PHD3; ?></td>
                          <td><?php echo $PHD1 + $PHD2 + $PHD3; ?></td>
                          <td><?php echo $MVSc1 + $MVSc2 + $PHD1 + $PHD2 + $PHD3; ?></td>
                        </tr>
                        <tr>
                          <td scope="row">3</td>
                          <td><?php echo 'M.SC-FISHERY SCIENCE'; ?></td>
                          <td><?php echo $MSCFISHERYSCIENCE1; ?></td>
                          <td><?php echo $MSCFISHERYSCIENCE2; ?></td>
                          <td><?php echo $MSCFISHERYSCIENCE1 + $MSCFISHERYSCIENCE2; ?></td>
                          <td><?php echo $PHD1; ?></td>
                          <td><?php echo $PHD2; ?></td>
                          <td><?php echo $PHD3; ?></td>
                          <td><?php echo $PHD1 + $PHD2 + $PHD3; ?></td>
                          <td>
                            <?php echo $MSCFISHERYSCIENCE1 + $MSCFISHERYSCIENCE2 + $PHD1 + $PHD2 + $PHD3; ?>
                          </td>
                        </tr>
                        <tr>
                          <td scope="row">4</td>
                          <td><?php echo 'M.SC-HOME SCIENCE'; ?></td>
                          <td><?php echo $MSCHOMESCIENCE1; ?></td>
                          <td><?php echo $MSCHOMESCIENCE2; ?></td>
                          <td><?php echo $MSCHOMESCIENCE1 + $MSCHOMESCIENCE2; ?></td>
                          <td><?php echo $PHD1; ?></td>
                          <td><?php echo $PHD2; ?></td>
                          <td><?php echo $PHD3; ?></td>
                          <td><?php echo $PHD1 + $PHD2 + $PHD3; ?></td>
                          <td>
                            <?php echo $MSCHOMESCIENCE1 + $MSCHOMESCIENCE2 + $PHD1 + $PHD2 + $PHD3; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table success end -->
          <!-- table info start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 3(A)</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-info">
                        <tr class="text-white">
                          <th scope="col">SLNO.</th>
                          <th scope="col">Author(s)</th>
                          <th scope="col">YOP</th>
                          <th scope="col">Title</th>
                          <th scope="col">Journal Name</th>
                          <th scope="col">Volume</th>
                          <th scope="col">Page No.</th>
                          <th scope="col">DOI If any</th>
                          <th scope="col">Naas Score</th>
                          <th scope="col">Impact Factor</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php while ($annesure3arow = mysqli_fetch_array($annesure3ars)) : ?>
                          <?php if ($annesure3arow['publication_type'] == 'journal') : ?>
                            <tr>
                              <th scope="row"><?php echo $annesure3arow['id']; ?></th>
                              <td><?php echo $annesure3arow['author']; ?></td>
                              <td><?php echo $annesure3arow['publication_year']; ?></td>
                              <td><?php echo $annesure3arow['title']; ?></td>
                              <td><?php echo $annesure3arow['journal_name']; ?></td>
                              <td><?php echo $annesure3arow['journal_volume']; ?></td>
                              <td><?php echo $annesure3arow['journal_pages']; ?></td>
                              <td><?php echo $annesure3arow['doi_number']; ?></td>
                              <td><?php echo $annesure3arow['naac_score']; ?></td>
                              <td><?php echo $annesure3arow['impact_factor']; ?></td>
                            </tr>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table info end -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 3(B)</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-secondary">
                        <tr class="text-white">
                          <th scope="col">SLNO.</th>
                          <th scope="col">Author(s)</th>
                          <th scope="col">Publication Date,Year</th>
                          <th scope="col">Title</th>
                          <th scope="col">Name of conference</th>
                          <th scope="col">Page No.</th>
                          <th scope="col">ISBN If any</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php while ($annesure3brow = mysqli_fetch_array($annesure3ars)) : ?>
                          <?php if ($annesure3brow['published_type'] == 'conference' || $annesure3brow['published_type'] == 'symposia') : ?>
                            <tr>
                              <th scope="row"><?php echo $annesure3brow['id']; ?></th>
                              <td><?php echo $annesure3brow['author']; ?></td>
                              <td><?php echo $annesure3brow['publication_year']; ?></td>
                              <td><?php echo $annesure3brow['title']; ?></td>
                              <td><?php echo $annesure3brow['journal_name']; ?></td>
                              <td><?php echo $annesure3brow['journal_pages']; ?></td>
                              <td><?php echo $annesure3brow['isbn']; ?></td>
                            </tr>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table warning start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 3(C)</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-primary">
                        <tr class="text-white">
                          <th scope="col">SLNO.</th>
                          <th scope="col">Author(s)</th>
                          <th scope="col">YOP</th>
                          <th scope="col">Title</th>
                          <th scope="col">Editors</th>
                          <th scope="col">Book Name</th>
                          <th scope="col">Page No</th>
                          <th scope="col">Publisher Name</th>
                          <th scope="col">DOI/ISBN</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php while ($annesure3crow = mysqli_fetch_array($annesure3ars)) : ?>
                          <?php if ($annesure3crow['publication_type'] == 'book') : ?>
                            <tr>
                              <th scope="row"><?php echo $annesure3crow['id']; ?></th>
                              <td><?php echo $annesure3crow['author']; ?></td>
                              <td><?php echo $annesure3crow['publication_year']; ?></td>
                              <td><?php echo $annesure3crow['title']; ?></td>
                              <td><?php echo $annesure3crow['editors']; ?></td>
                              <td><?php echo $annesure3crow['journal_name']; ?></td>
                              <td><?php echo $annesure3crow['journal_pages']; ?></td>
                              <td><?php echo $annesure3crow['publisher_name']; ?></td>
                              <td><?php echo $annesure3crow['isbn'] . $annesure3crow['isbn']; ?></td>
                            </tr>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 4</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-warning">
                        <tr class="text-white">
                          <th scope="col">ID</th>
                          <th scope="col">Title of events organised</th>
                          <th scope="col">Organised By</th>
                          <th scope="col">Period</th>
                          <th scope="col">Sponsored By</th>
                          <th scope="col">Venue</th>
                          <th scope="col">Level</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($annesure4row = mysqli_fetch_array($annesure4rs)) : ?>
                          <tr>
                            <th scope="row"><?php echo $annesure4row['id']; ?></th>
                            <td><?php echo $annesure4row['title']; ?></td>
                            <td><?php echo $annesure4row['organized_by']; ?></td>
                            <td>
                              <?php echo $annesure4row['starting_date'] . '-' . $annesure4row['ending_date']; ?>
                            </td>
                            <td><?php echo $annesure4row['sponsored_by']; ?></td>
                            <td><?php echo $annesure4row['venu']; ?></td>
                            <td><?php echo $annesure4row['level']; ?></td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table warning end -->
          <!-- table danger start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 5</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-danger">
                        <tr class="text-white">
                          <th scope="col">ID</th>
                          <th scope="col">Title of events organised</th>
                          <th scope="col">Organised By</th>
                          <th scope="col">Period</th>
                          <th scope="col">Sponsored By</th>
                          <th scope="col">Venue</th>
                          <th scope="col">Level</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($annesure5row = mysqli_fetch_array($annesure5rs)) : ?>
                          <tr>
                            <th scope="row"><?php echo $annesure5row['id']; ?></th>
                            <td><?php echo $annesure5row['title']; ?></td>
                            <td><?php echo $annesure5row['organized_by']; ?></td>
                            <td>
                              <?php echo $annesure5row['starting_date'] . '-' . $annesure5row['ending_date']; ?>
                            </td>
                            <td><?php echo $annesure5row['sponsored_by']; ?></td>
                            <td><?php echo $annesure5row['venu']; ?></td>
                            <td><?php echo $annesure5row['level']; ?></td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table danger end -->
          <!-- table dark start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 6</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase bg-secondary">
                        <tr class="text-white">
                          <th scope="col">ID</th>
                          <th scope="col">Project Title</th>
                          <th scope="col">Objectives</th>
                          <th scope="col">PI(Name & Designation/Establishment)</th>
                          <th scope="col">CO-PI(Name & Designation/Establishment)</th>
                          <th scope="col">Project Details</th>
                          <th scope="col">Funding Agency</th>
                          <th scope="col">Amount Sanctioned</th>
                          <th scope="col">Period of Project</th>
                          <th scope="col">Starting Year</th>
                          <th scope="col">Likely Date of completion</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($annesure6row = mysqli_fetch_array($annesure6rs)) : ?>
                          <tr>
                            <th scope="row"><?php echo $annesure6row['id']; ?></th>
                            <td><?php echo $annesure6row['title']; ?></td>
                            <td><?php echo $annesure6row['objective']; ?></td>
                            <td><?php echo $annesure6row['pi']; ?></td>
                            <td><?php echo $annesure6row['co_pi']; ?></td>
                            <td><?php echo $annesure6row['project_detail']; ?></td>
                            <td><?php echo $annesure6row['funding_agency']; ?></td>
                            <td><?php echo $annesure6row['project_amount']; ?></td>
                            <td><?php echo $annesure6row['project_period']; ?></td>
                            <td><?php echo $annesure6row['starting_year']; ?></td>
                            <td><?php echo $annesure6row['ending_year']; ?></td>
                            <td><?php echo $annesure6row['status']; ?></td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table dark end -->
          <!-- table light start -->
          <div class="col-lg-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Annexure 7</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead class="text-uppercase text-white bg-success">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Authors</th>
                          <th scope="col">Publication Year</th>
                          <th scope="col">Title</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($annesure7row = mysqli_fetch_array($annesure7rs)) : ?>
                          <tr>
                            <th scope="row"><?php echo $annesure7row['id']; ?></th>
                            <td><?php echo $annesure7row['author']; ?></td>
                            <td><?php echo $annesure7row['publication_year']; ?></td>
                            <td><?php echo $annesure7row['title']; ?></td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table light end -->
        </div>
      </div>
    </div>
    <!-- main content area end -->
  </div>
  <!-- page container area end -->

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