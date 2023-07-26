<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Expense Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
<!------bootstrap3:--->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- endinject -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
        <!---Pagination-->
<?php date_default_timezone_set('Asia/Manila'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

//Toast

<link rel="stylesheet" href="<?php echo base_url() ?>toast/dist/css/iziToast.css">
<script src="<?php echo base_url() ?>toast/dist/js/iziToast.min.js" type="text/javascript"></script>

</head>
<body>
    

    
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar bg-gray-dark col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center bg-gray-dark">
          <a class="navbar-brand brand-logo text-white font-bold" href="<?php echo base_url() ?>"><b>CI</b>-EMS</a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
<!--        <button type="button" onclick="toast()">Click</button>-->
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
          
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo base_url() ?>assets/images/faces/male_avatar.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
             <?php  $data = array();
                if ($this->session->userdata('isUserLoggedIn')) {
                    $data['user'] = $this->user->getRows(array('id' => $this->session->userdata('userId')));
                $user=$data['user'];}
            ?>
                <p class="mb-1 text-white"><?php echo $user['name']; ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
<!--
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" onclick="return logout()">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
              
        
        
        <!-------------------------------------Area for Modals------------------------------------>
        <div class="w3-container">
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container position-relative"> 
   <a href="javascript:void(0)"onclick="document.getElementById('id01').style.display='none'" 
   class="text-muted close btn-close position-absolute top-2" style="right:.5em; top:.5em">&times;</a>
   <h2></h2>
  </header>


<!--
  <div id="Tokyo" class="w3-container city">
   <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Tickets</h4>
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                        <tr>
                          <th>
                            Assignee
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Last Update
                          </th>
                          <th>
                            Tracking ID
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="images/faces/male_avatar.png" class="mr-2" alt="image">
                            David Grey
                          </td>
                          <td>
                            Fund is not recieved
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">DONE</label>
                          </td>
                          <td>
                            Dec 5, 2017
                          </td>
                          <td>
                            WD-12345
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face2.jpg" class="mr-2" alt="image">
                            Stella Johnson
                          </td>
                          <td>
                            High loading time
                          </td>
                          <td>
                            <label class="badge badge-gradient-warning">PROGRESS</label>
                          </td>
                          <td>
                            Dec 12, 2017
                          </td>
                          <td>
                            WD-12346
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face3.jpg" class="mr-2" alt="image">
                            Marina Michel
                          </td>
                          <td>
                            Website down for one week
                          </td>
                          <td>
                            <label class="badge badge-gradient-info">ON HOLD</label>
                          </td>
                          <td>
                            Dec 16, 2017
                          </td>
                          <td>
                            WD-12347
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="images/faces/face4.jpg" class="mr-2" alt="image">
                            John Doe
                          </td>
                          <td>
                            Loosing control on server
                          </td>
                          <td>
                            <label class="badge badge-gradient-danger">REJECTED</label>
                          </td>
                          <td>
                            Dec 3, 2017
                          </td>
                          <td>
                            WD-12348
                          </td>
                        </tr>
                      </tbody>
                    </table>
                      
<script>
		$(function() {
			$("#example").simplePagination({
				previousButtonClass: "btn btn-gradient-primary btn-sm",
				nextButtonClass: "btn btn-gradient-primary btn-sm"
			});


		});
	</script>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
-->

  
 </div>
</div>

</div>
        <!-------------------------------Modal Closing-----------------Navidgation Closing--------------------------------------->
        
    </nav>
       <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas bg-gray-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url() ?>assets/images/faces/male_avatar.png" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $user['name']; ?></span>
                <span class="text-secondary text-small"><?php echo $user['account_status']; ?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Home">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-view-dashboard menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Recipient</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-view-grid menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/add_client">Add Recipient</a></li>
                       <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/view_clients">Recipient Management</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/today_report">Reports</a></li>

             
              </ul>
            </div>

          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Expense/Amount</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-view-grid menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/manage_expense">Manage Expense</a></li>
                       <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/receive_amount">Receive Amount</a></li>
                   
                    
             
              </ul>
            </div>
             
          </li>
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-cat" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-view-grid menu-icon"></i>
            </a>
            <div class="collapse" id="ui-cat">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/add_category">Add Category</a></li>
                       <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>Home/manage_category">Manage Category</a></li>
                   
                    
             
              </ul>
            </div>
             
          </li>
        </ul>
      </nav>
      <script>
          var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
document.getElementById('theDate2').value = today;
          </script>
          
          
     
 
