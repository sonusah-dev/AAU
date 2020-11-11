<div class="sidebar-menu">
  <div class="sidebar-header">
    <div class="logo">
      <h4 class="text-white">A.A.U <?php echo ($_SESSION['user_type'] == 0) ? "Admin" : (($_SESSION['user_type'] == 1) ? "Faculty" : "Student"); ?> Portal</h4>
    </div>
  </div>
  <div class="main-menu">
    <div class="menu-inner">
      <nav>
        <ul class="metismenu" id="menu">
          <li>
            <a href="dashboard.php"><i class="text-white fa fa-university"></i><span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-user-plus"></i><span>Seeking Applicants</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addapplicants.php">Add Applicants</a></li>
                <li><a href="showseekingapplicants.php">View Applicants</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showseekingapplicants.php">View Applicants</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white  fa fa-user-md"></i><span>Dignitaries</span></a>
              <ul class="collapse">
                <li><a href="adddignitaries.php">Add Dignitaries</a></li>
                <li><a href="showdignitaries.php">View Dignitaries</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white  fa fa-calendar"></i><span>Events</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addevents.php">Add Events</a></li>
                <li><a href="showevents.php">View Events</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showevents.php">View Events</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="text-white  fa fa-graduation-cap"></i> <span>Faculty</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addfaculty.php">Add Faculty</a></li>
                <li><a href="showfaculty.php">View Faculty</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showfaculty.php">View Faculty</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white  fa fa-group"></i><span>Internships</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addintern.php">Add Internship</a></li>
                <li><a href="showfellowshipdetails.php">View Internship</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showfaculty.php">View Faculty</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-trophy"></i><span>Award Honours</span></a>
              <ul class="collapse">
                <li><a href="addawardstohonours.php">Add Awards To Honours</a></li>
                <li><a href="showawardstohonours.php">View Students Award</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-trophy"></i><span>Award faculty</span></a>
              <ul class="collapse">
                <li><a href="addawardstofaculty.php">Add Awards To Faculty</a></li>
                <li><a href="showawardstofaculty.php">View Faculty Award</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-building"></i><span>Infra Development</span></a>
              <ul class="collapse">
                <li><a href="addinfrastructuredetails.php">Add Infrastructures</a></li>
                <li><a href="showinfrastructuredetails.php">View Infrastructures</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-book"></i><span>Books</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addbooks.php">Add Books</a></li>
                <li><a href="showbooksdetails.php">View Books</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showbooksdetails.php">View Books</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-industry"></i><span>Placements</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addplacementdetails.php">Add Placements Details</a></li>
                <li><a href="showplacementdetails.php">View Placements</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showplacementdetails.php">View Placements</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-star"></i><span>Popular Publication</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addpopularsinsession.php">Add Popular publication</a></li>
                <li><a href="showpopularsessions.php">View Popular Publication</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showpopularsessions.php">View Popular Publication</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-file-word-o"></i><span>Publications</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addpublication.php">Add Publications</a></li>
                <li><a href="showpublicationdetails.php">View Publications</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showpublicationdetails.php">View Publications</a></li>
              <?php endif ?>
            </ul>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-search"></i><span>Research Project</span></a>
              <ul class="collapse">
                <li><a href="addresearch.php">Add Research Projects</a></li>
                <li><a href="showresearchprojectdetails.php">View Research Projects</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-line-chart"></i><span>Salient Extension Activity</span></a>
              <ul class="collapse">
                <li><a href="addsalientactivities.php">Add Activities</a></li>
                <li><a href="showextentionactivities.php">View Activities</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-search"></i><span>Salient Research Finding</span></a>
              <ul class="collapse">
                <li><a href="addsalientfinding.php">Add Research Finding</a></li>
                <li><a href="showresearchfindingdetails.php">View Research Finding</a></li>
              </ul>
            <?php endif ?>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-user"></i><span>Students</span></a>
            <ul class="collapse">
              <?php if ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1) : ?>
                <li><a href="addstudents.php">Add Students</a></li>
                <li><a href="showstudents.php">View Students</a></li>
              <?php endif;
              if ($_SESSION['user_type'] == 2) : ?>
                <li><a href="showstudents.php">View Students</a></li>
              <?php endif ?>
            </ul>
          </li>

          <li>
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-user"></i><span>Users</span></a>
              <ul class="collapse">
                <li><a href="addusers.php">Add Users</a></li>
                <li><a href="showuserdetails.php">View Users</a></li>
              </ul>
            <?php endif ?>
          </li>

          <li class="mb-3">
            <?php if ($_SESSION['user_type'] == 0) : ?>
              <a href="javascript:void(0)" aria-expanded="true"><i class="text-white fa fa-line-chart"></i><span>Welfare Activities</span></a>
              <ul class="collapse">
                <li><a href="addwelfareactivities.php">Add Welfare Activities</a></li>
                <li><a href="showwelfareactivitiesdetails.php">View Welfare Activities</a></li>
              </ul>
            <?php endif ?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>