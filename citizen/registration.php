 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Wampeewo - Parish Development Model Information System </title>
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
           <h1 class="welcome-text">Wampeewo <span class="text-black fw-bold">PDMIS</span></h1>
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
                 <p class="preview-subject ellipsis font-weight-medium text-dark">Wampeewo Parish </p>
                 <p class="fw-light small-text mb-0"> Implementing PDM (Wampeewo) </p>
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
             <span class="menu-title">Wampeewo Parish</span>
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

       <?php
        // Include connection
        require_once "./config.php";

        ini_set('display_errors', 1);
        error_reporting(E_ALL);


        if (isset($_POST['register'])) {
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $age = $_POST['age'];
          $gender = $_POST['gender'];
          $occupation = $_POST['occupation'];
          $income = $_POST['income'];
          $education = $_POST['education'];
          $village = $_POST['village'];


          // Validate and sanitize user input (you can add more validation as needed)
          $name = mysqli_real_escape_string($conn, $name);


          // Perform the actual registration process and insert data into the database
          $sql = "INSERT INTO Wampeewo_citizens (Name, phone, email, age, gender, occupation, income, education, village) VALUES ('$name', '$phone', '$email', '$age', '$gender', '$occupation', '$income', '$education', '$village')";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            // Registration successful, redirect to the profile page
            echo "<script>" . "window.location.href='./';" . "</script>";
            exit();
          } else {
            // Registration failed
            echo '<div class="alert alert-danger h-25" role="alert">Registration failed. Please try again.</div>';
          }
        }

        ?>



       <main>
         <div class="container mt-4">
           <!-- Registration form -->
           <h4 class="text-center">Register as a Citizen</h4>
           <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <div class="form-group">
               <label for="name">Name (Amanya gwo)</label>
               <input type="text" class="form-control" id="name" name="name" required>
             </div>
             <div class="form-group">
               <label for="phone">Phone (enamba yesimu)</label>
               <input type="text" class="form-control" id="phone" name="phone" required>
             </div>
             <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control" id="email" name="email" required>
             </div>
             <div class="form-group">
               <label for="age">Age (emyaka)</label>
               <input type="number" class="form-control" id="age" name="age" required>
             </div>
             <div class="form-group">
               <label for="gender">Gender (M or F)</label>
               <input type="text" class="form-control" id="gender" name="gender" required>
             </div>
             <div class="form-group">
               <label for="occupation">Occupation (okola mulimu ki)</label>
               <input type="text" class="form-control" id="occupation" name="occupation" required>
             </div>
             <div class="form-group">
               <label for="income">Income (ugx)-(Omusala)</label>
               <input type="number" class="form-control" id="income" name="income" required>
             </div>
             <div class="form-group">
               <label for="education">Education (ebyenjigiriza)</label>
               <input type="text" class="form-control" id="education" name="education" required>
             </div>
             <div class="form-group">
               <div class="form-group">
                 <label for="village">Village (Ekyalo)</label>
                <select class="form-control" id="village" name="village" required>
    <option value="">Other</option>
    <option value="Buyinja A">Buyinja A</option>
    <option value="Buyinja B">Buyinja B</option>
    <option value="Kito - Magere">Kito - Magere</option>
    <option value="Kiwaliimu">Kiwaliimu</option>
    <option value="Kazinga">Kazinga</option>
    <option value="Luteete">Luteete</option>
    <option value="Luteete B">Luteete B</option>
    <option value="Magere">Magere</option>
    <option value="Wampeewo">Wampeewo</option>
    <!-- Add more options as needed -->
</select>

               </div>

             </div>

             <!-- Add other fields if needed -->
             <button type="submit" class="btn btn-primary mb-2" name="register">Register</button>
           </form>
         </div>
       </main>










       <!-- content-wrapper ends -->
       <!-- partial:partials/_footer.html -->
       <footer class="footer">
         <div class="d-sm-flex justify-content-center justify-content-sm-between">
           <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Government of <a href="" target="_blank">Uganda</a> (Wampeewo Parish)</span>

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