
 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php?page=home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=add_student">
              <i class="bi bi-circle"></i><span>Add Students</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=viewstudents">
              <i class="bi bi-circle"></i><span>view students</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Teacher</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=add_teacher">
              <i class="bi bi-circle"></i><span>Add Teacher</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=view_teacher">
              <i class="bi bi-circle"></i><span>view teacher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Result</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=add_result">
              <i class="bi bi-circle"></i><span>Add Result</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=view_result">
              <i class="bi bi-circle"></i><span>view reslut</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Account</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=charts-chartjs">
              <i class="bi bi-circle"></i><span>view data</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=charts-apexcharts">
              <i class="bi bi-circle"></i><span>add data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Subject</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=view_subject">
              <i class="bi bi-circle"></i><span>view data</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=add_subject">
              <i class="bi bi-circle"></i><span>add data</span>
            </a>
          </li>
  
        </ul>
      </li><!-- End Icons Nav -->


    </ul>

  </aside><!-- End Sidebar-->
