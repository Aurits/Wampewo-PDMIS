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
         <a class="navbar-brand brand-logo" href="index.html">
           <img src="../images/logo1.jpeg" alt="logo" />
         </a>
         <a class="navbar-brand brand-logo-mini" href="index.html">
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
           <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
           <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
             <a class="dropdown-item py-3">
               <p class="mb-0 font-weight-medium float-left">Select category</p>
             </a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item preview-item">
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                 <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
               </div>
             </a>
             <a class="dropdown-item preview-item">
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                 <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
               </div>
             </a>
             <a class="dropdown-item preview-item">
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                 <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
               </div>
             </a>
             <a class="dropdown-item preview-item">
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                 <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
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
               <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
               <span class="badge badge-pill badge-primary float-right">View all</span>
             </a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
               </div>
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                 <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
               </div>
             </a>
             <a class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
               </div>
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                 <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
               </div>
             </a>
             <a class="dropdown-item preview-item">
               <div class="preview-thumbnail">
                 <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
               </div>
               <div class="preview-item-content flex-grow py-2">
                 <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                 <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
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
           <a class="nav-link" data-bs-toggle="collapse" href="#info" aria-expanded="false" aria-controls="form-elements">
             <i class="menu-icon mdi mdi-card-text-outline"></i>
             <span class="menu-title">Demographics</span>
             <i class="menu-arrow"></i>
           </a>
           <div class="collapse" id="info">
             <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" href="./information.php">Information</a></li>
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



       <?php

        require_once "./config.php";
        ?>

       <div class="content-wrapper">
         <!-- Add featured services, success stories, and upcoming events here -->
         <h2>Latest News and Updates</h2>

         <?php
          // Function to fetch and display latest news and updates from the database
          function getLatestNews($conn)
          {
            $sql = "SELECT * FROM users LIMIT 5";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<h4>' . $row['email'] . '</h4>';
                echo '<p>' . $row['username'] . '</p>';
                echo '<hr>';
              }
            } else {
              echo '<p>No news and updates available.</p>';
            }
          }

          // Display latest news and updates
          getLatestNews($conn);
          ?>

       </div>

       <?php
        // Close the database connection
        mysqli_close($conn);
        ?>



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