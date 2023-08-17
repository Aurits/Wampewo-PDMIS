<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Parish Cheif</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script> 
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="../images/logo1.jpeg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="../images/logo1.jpeg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Wampewo <span class="text-black fw-bold">PDMIS</span></h1>
            <h3 class="welcome-sub-text">Admin</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> The 7 Pillars </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">The 7 Pillars</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Production, Storage, Processing and Marketing </p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Infrastracture and Economic Services</p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Financial Inclusion</p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Social Services</p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Mindset change</p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Parish Based Management...</p>

                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Governance and Administration</p>

                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">you have 2 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/logo2.png" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Government of Uganda </p>
                  <p class="fw-light small-text mb-0"> Parish Development Model </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/logo1.jpeg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Wampewo Parish</p>
                  <p class="fw-light small-text mb-0"> Parish Development Model </p>
                </div>
              </a>

            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../images/user.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../images/user.png" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Wampewo Parish</p>
                <p class="fw-light text-muted mb-0">wampewo@parish.gov</p>
              </div>

              <a class="dropdown-item" href="communication.php"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item" href="./logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#groups" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Groups</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="groups">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="./manage_citizen_groups.php">Manage Groups</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Posts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="posts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="./manage_posts.php">Manage Posts</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reports">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./reports.php">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#citizens" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Citizens</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="citizens">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./citizens.php">Citizens</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#messages" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Messages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="messages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./communication.php">Inbox</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="logout.php"> Logout </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>

                  </ul>

                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">

                          <?php
                          # Include connection
                          require_once "./config.php";
                          error_reporting(E_ALL);
                          ini_set('display_errors', 1);

                          // Function to get statistics from the database
                          function getStatistics($conn)
                          {
                            // Query to get the count of registered citizens
                            $sqlCitizens = "SELECT COUNT(*) AS total_citizens FROM wampewo_citizens";
                            $resultCitizens = mysqli_query($conn, $sqlCitizens);
                            $rowCitizens = mysqli_fetch_assoc($resultCitizens);
                            $totalCitizens = $rowCitizens['total_citizens'];

                            // Query to get the count of registered groups
                            $sqlGroups = "SELECT COUNT(*) AS total_groups FROM citizen_groups";
                            $resultGroups = mysqli_query($conn, $sqlGroups);
                            $rowGroups = mysqli_fetch_assoc($resultGroups);
                            $totalGroups = $rowGroups['total_groups'];

                            // Query to get the count of posts
                            $sqlPosts = "SELECT COUNT(*) AS total_posts FROM services";
                            $resultPosts = mysqli_query($conn, $sqlPosts);
                            $rowPosts = mysqli_fetch_assoc($resultPosts);
                            $totalPosts = $rowPosts['total_posts'];

                            // Query to get the count of messages
                            $sqlMessages = "SELECT COUNT(*) AS total_messages FROM messages"; // Replace 'messages' with the actual table name
                            $resultMessages = mysqli_query($conn, $sqlMessages);
                            $rowMessages = mysqli_fetch_assoc($resultMessages);
                            $totalMessages = $rowMessages['total_messages'];

                            return [
                              'total_citizens' => $totalCitizens,
                              'total_groups' => $totalGroups,
                              'total_posts' => $totalPosts,
                              'total_messages' => $totalMessages,
                            ];
                          }

                          // Get statistics from the database
                          $statistics = getStatistics($conn);

                          // Close the database connection

                          ?>




                          <div>
                            <p class="statistics-title">Registered citizens</p>
                            <h3 class="rate-percentage"><?php echo $statistics['total_citizens']; ?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Registered groups</p>
                            <h3 class="rate-percentage"><?php echo $statistics['total_groups']; ?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Posts</p>
                            <h3 class="rate-percentage"><?php echo $statistics['total_posts']; ?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Messages</p>
                            <h3 class="rate-percentage"><?php echo $statistics['total_messages']; ?></h3>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
      <?php
      // Include connection
                    require_once "./config.php";

                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);

      // Query to get citizen group distribution by village
      $query = "SELECT village, COUNT(*) as count FROM citizen_groups GROUP BY village";
      $result = mysqli_query($conn, $query);
      $villages = array();
      $counts = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $villages[] = $row['village'];
        $counts[] = $row['count'];
      }

      // Similarly, fetch data for other charts here

      ?>

    <?php
    // Include connection
    require_once "./config.php";

    // Query to get the count of citizen groups by village
    $query = "SELECT village, COUNT(*) as count FROM citizen_groups GROUP BY village";
    $result = mysqli_query($conn, $query);
    $villages = array();
    $counts = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $villages[] = $row['village'];
      $counts[] = $row['count'];
    }

    ?>
    <?php
    // Include connection
                    require_once "./config.php";

                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
    // Query to get funding amount by month for the current year
    $query = "SELECT MONTH(FROM_UNIXTIME(timestamp)) as month, SUM(Amount_for_Funding) as total_amount FROM citizen_groups WHERE YEAR(FROM_UNIXTIME(timestamp)) = YEAR(NOW()) GROUP BY month";
    $result = mysqli_query($conn, $query);
    $months = array();
    $amounts = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $months[] = date("F", mktime(0, 0, 0, $row['month'], 1));
      $amounts[] = $row['total_amount'];
    }

    ?>






 <div class="row">
                    <div style="height: 20vh" class=" d-flex flex-column h-25">
                     
                        <!-- Chart 1: Citizen Group Distribution by Village (Pie Chart) -->
                        <canvas id="chart1"></canvas>
                      
                      <!-- Other charts go here -->
                    </div>
                  </div>
                  
                  <!-- More Charts Section -->
                  <div class="row">
                    <div class="col-md-4 col-4">
                      <!-- Chart 2: Funding Amount by Month (Bar Chart) -->
                      <canvas id="chart2"></canvas>
                    </div>
                    <div class="col-md-4 col-4">
                      <!-- Chart 3: Another Chart Here -->
                      <canvas id="chart3"></canvas>
                    </div>
                    <!-- Add more columns or charts as needed -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Government of <a href="" target="_blank">Uganda</a> (Wampewo Parish)</span>

      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
    </div>
  </footer>
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>




<!-- Include your CSS links here -->
<!-- Include your JavaScript links here -->

<script>
  // Chart 1: Citizen Group Distribution by Village (Pie Chart)
  var ctx1 = document.getElementById('chart1').getContext('2d');
  var chart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: <?php echo json_encode($villages); ?>,
      datasets: [{
        data: <?php echo json_encode($counts); ?>,
        backgroundColor: [
          'red',
          'blue',
          'green',
          // ... add more colors if needed
        ]
      }]
    }
  });

  // Chart 2: Funding Amount by Month (Bar Chart)
  var ctx2 = document.getElementById('chart2').getContext('2d');
  var chart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($months); ?>,
      datasets: [{
        label: 'Funding Amount',
        data: <?php echo json_encode($amounts); ?>,
        backgroundColor: 'blue'
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // Chart 3: Another Chart (e.g., Pie Chart)
  var ctx3 = document.getElementById('chart3').getContext('2d');
  var chart3 = new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: ['Label 1', 'Label 2', 'Label 3'],
      datasets: [{
        data: [10, 20, 30],
        backgroundColor: ['orange', 'purple', 'green']
      }]
    }
  });

  // Include other chart scripts here if needed
</script>





<script>
  // Chart 1: Citizen Group Distribution by Village (Pie Chart)
  var ctx1 = document.getElementById('chart1').getContext('2d');
  var chart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ["Village 1", "Village 2", "Village 3"], // Replace with your actual village labels
      datasets: [{
        data: [30, 25, 45], // Replace with your actual village counts
        backgroundColor: [
          'red',
          'blue',
          'green'
        ] // Use appropriate colors for each segment
      }]
    }
  });
</script>

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


