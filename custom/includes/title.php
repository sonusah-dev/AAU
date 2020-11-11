<div class="page-title-area">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left"><?php echo ($_SESSION['user_type'] == 0) ? "Admin" : (($_SESSION['user_type'] == 1) ? "Faculty" : "Student"); ?> | Portal</h4>
      </div>
    </div>
    <div class="col-sm-6 clearfix">
      <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar" />
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] ?>
          <i class="fa fa-angle-down"></i>
        </h4>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="includes/logout.php">Log Out</a>
        </div>
      </div>
    </div>
  </div>
</div>