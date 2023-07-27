<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wampewo - Parish Development Model Information System </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <style type="text/css">
    body {
      margin-top: 20px;
      background: #eee;
    }

    .white-bg {
      background-color: #ffffff;
    }

    .page-heading {
      border-top: 0;
      padding: 0 10px 20px 10px;
    }

    .forum-post-container .media {
      margin: 10px 10px 10px 10px;
      padding: 20px 10px 20px 10px;
      border-bottom: 1px solid #f1f1f1;
    }

    .forum-avatar {
      float: left;
      margin-right: 20px;
      text-align: center;
      width: 110px;
    }

    .forum-avatar .img-circle {
      height: 48px;
      width: 48px;
    }

    .author-info {
      color: #676a6c;
      font-size: 11px;
      margin-top: 5px;
      text-align: center;
    }

    .forum-post-info {
      padding: 9px 12px 6px 12px;
      background: #f9f9f9;
      border: 1px solid #f1f1f1;
    }

    .media-body>.media {
      background: #f9f9f9;
      border-radius: 3px;
      border: 1px solid #f1f1f1;
    }

    .forum-post-container .media-body .photos {
      margin: 10px 0;
    }

    .forum-photo {
      max-width: 140px;
      border-radius: 3px;
    }

    .media-body>.media .forum-avatar {
      width: 70px;
      margin-right: 10px;
    }

    .media-body>.media .forum-avatar .img-circle {
      height: 38px;
      width: 38px;
    }

    .mid-icon {
      font-size: 66px;
    }

    .forum-item {
      margin: 10px 0;
      padding: 10px 0 20px;
      border-bottom: 1px solid #f1f1f1;
    }

    .views-number {
      font-size: 24px;
      line-height: 18px;
      font-weight: 400;
    }

    .forum-container,
    .forum-post-container {
      padding: 30px !important;
    }

    .forum-item small {
      color: #999;
    }

    .forum-item .forum-sub-title {
      color: #999;
      margin-left: 50px;
    }

    .forum-title {
      margin: 15px 0 15px 0;
    }

    .forum-info {
      text-align: center;
    }

    .forum-desc {
      color: #999;
    }

    .forum-icon {
      float: left;
      width: 30px;
      margin-right: 20px;
      text-align: center;
    }

    a.forum-item-title {
      color: inherit;
      display: block;
      font-size: 18px;
      font-weight: 600;
    }

    a.forum-item-title:hover {
      color: inherit;
    }

    .forum-icon .fa {
      font-size: 30px;
      margin-top: 8px;
      color: #9b9b9b;
    }

    .forum-item.active .fa {
      color: #1ab394;
    }

    .forum-item.active a.forum-item-title {
      color: #1ab394;
    }

    @media (max-width: 992px) {
      .forum-info {
        margin: 15px 0 10px 0;
        /* Comment this is you want to show forum info in small devices */
        display: none;
      }

      .forum-desc {
        float: none !important;
      }
    }





    .ibox {
      clear: both;
      margin-bottom: 25px;
      margin-top: 0;
      padding: 0;
    }

    .ibox.collapsed .ibox-content {
      display: none;
    }

    .ibox.collapsed .fa.fa-chevron-up:before {
      content: "\f078";
    }

    .ibox.collapsed .fa.fa-chevron-down:before {
      content: "\f077";
    }

    .ibox:after,
    .ibox:before {
      display: table;
    }

    .ibox-title {
      -moz-border-bottom-colors: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      background-color: #ffffff;
      border-color: #e7eaec;
      border-image: none;
      border-style: solid solid none;
      border-width: 3px 0 0;
      color: inherit;
      margin-bottom: 0;
      padding: 14px 15px 7px;
      min-height: 48px;
    }

    .ibox-content {
      background-color: #ffffff;
      color: inherit;
      padding: 15px 20px 20px 20px;
      border-color: #e7eaec;
      border-image: none;
      border-style: solid solid none;
      border-width: 1px 0;
    }

    .ibox-footer {
      color: inherit;
      border-top: 1px solid #e7eaec;
      font-size: 90%;
      background: #ffffff;
      padding: 10px 15px;
    }

    .message-input {
      height: 90px !important;
    }

    .form-control,
    .single-line {
      background-color: #FFFFFF;
      background-image: none;
      border: 1px solid #e5e6e7;
      border-radius: 1px;
      color: inherit;
      display: block;
      padding: 6px 12px;
      transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
      width: 100%;
      font-size: 14px;
    }

    .text-navy {
      color: #1ab394;
    }

    .mid-icon {
      font-size: 66px !important;
    }

    .m-b-sm {
      margin-bottom: 10px;
    }
  </style>

</head>

<body>
  <div class="container-scroller">
  </div>
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a class="navbar-brand brand-logo" href="../index.html">
          <img src="../images/logo1.jpeg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../index.html">
          <img src="../images/logo1.jpeg" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text">Wampewo <span class="text-black fw-bold">PDMIS</span></h1>
          <h3 class="welcome-sub-text">National Summary </h3>
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
        <li class="nav-item">
          <form class="search-form" action="#">
            <i class="icon-search"></i>
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="icon-bell"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 2 unread mails </p>
              <span class="badge badge-pill badge-primary float-right">View</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="../images/logo1.jpeg" alt="image" class="img-sm profile-pic">
              </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Government of Uganda </p>
                <p class="fw-light small-text mb-0"> Launched PDM </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="../images/logo1.jpeg" alt="image" class="img-sm profile-pic">
              </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Wampewo Parish </p>
                <p class="fw-light small-text mb-0"> Implementing PDM (Wampewo) </p>
              </div>
            </a>
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
          <a class="nav-link" href="../index.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Wampewo Parish</span>
          </a>
        </li>
        <li class="nav-item nav-category">Pages</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#home" aria-expanded="false" aria-controls="form-elements">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Home</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="home">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="./index.php">Trending Now</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#forums" aria-expanded="false" aria-controls="form-elements">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Forums</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="forums">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="./forums.php">Discuss</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="charts">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Message</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="contact">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./messages.php">Contact</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#feed" aria-expanded="false" aria-controls="charts">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Feedback</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="feed">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./feedback-and-suggestions.php">Contact</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="menu-icon mdi mdi-table"></i>
            <span class="menu-title">Registration</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./registration.php">Citizen registration</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">

      <main>
        <div class="container">
          <div class="ibox-content m-b-sm border-bottom">
            <div class="p-xs">
              <div class="pull-left m-r-md">
                <i class="fa fa-globe text-navy mid-icon"></i>
              </div>
              <h2>Welcome to our forum</h2>

            </div>
          </div>


          <?php
          # Include connection
          require_once "./config.php";

          // Function to fetch and display forum posts from the database
          function displayForumPosts($conn)
          {
            // Query to fetch forum posts from the database
            $sql = "SELECT * FROM forum_posts";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              echo '<div class="forum-title">';
              echo '<div class="pull-right forum-desc">';
              echo '<small>Total posts: ' . mysqli_num_rows($result) . '</small>';
              echo '</div>';

              echo '</div>';
              echo '<div class="table-responsive">';
              echo '<table class="table">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>Topic</th>';
              echo '<th>Subject</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td><a href="/">' . $row['Topic_Title'] . '</a></td>';
                echo '<td>' . $row['Subject'] . '</td>';
                echo '</tr>';
              }

              echo '</tbody>';
              echo '</table>';
              echo '</div>';
            } else {
              echo '<p>No forum posts found.</p>';
            }
          }

          // Display forum posts in the table
          displayForumPosts($conn);

          // Check if the form was submitted
          if (isset($_POST['submit'])) {
            // Get form data
            $topicTitle = $_POST['topic_title'];
            $subject = $_POST['topic_subject'];

            // Insert the new forum post into the database
            $sql = "INSERT INTO forum_posts (Topic_Title, Subject) VALUES ('$topicTitle', '$subject')";
            if (mysqli_query($conn, $sql)) {
              echo '<div class="alert alert-success" role="alert">New post added successfully!</div>';
            } else {
              echo '<div class="alert alert-danger" role="alert">Failed to add new post. Please try again.</div>';
            }
          }

          // Close the database connection
          mysqli_close($conn);
          ?>

          <div class="row">
            <div class="col-lg-12">
              <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content forum-container">
                  <!-- Form to allow users to start new discussions -->
                  <h2>Start a New Discussion</h2>
                  <form action="" method="POST">
                    <div class="form-group">
                      <label for="topic_title">Topic Title:</label>
                      <input type="text" name="topic_title" id="topic_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="topic_subject">Subject:</label>
                      <textarea name="topic_subject" id="topic_subject" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!-- End of input group -->
                </div>

              </div>
            </div>
          </div>
        </div>
      </main>










      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Government of <a href="" target="_blank">Uganda</a> (Wampewo Parish)</span>
          <img class="m-auto" width="90px" height="50px" src="../images/logo2.png" alt="image">
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