<?php
  include 'includes/adminHeader.php';

?>

<!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
    <?php include  'includes/sideBar.php'; ?>
    <!-- End of Sidebar -->

    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content" >
          <!-- Topbar -->
            <?php include 'includes/TopNavBar.php'; ?>            
          <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid" style="background-color:white;">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
            <?php
                if (isset($_GET['source'])) {
                  $title = $_GET['source'];
                }else{
                   $title = "" ;
                }
                switch ($title) {
                  case 'currentReservation':
                    echo "Current Reservation";
                    break;

                  default:
                    echo "Rooms";
                    break;
                }
              
              ?>                
            
          </h1>
          </div>
            <hr>


          <!-- Content Row -->
          <div class="row">

            <!-- Content Column col-lg-6 mb-4-->
            <div class="col-lg">    
              <?php

              if (isset($_GET['source'])) {
                $source = $_GET['source'];
              }else{
                $source = "";
              }

              switch ($source) {
                case 'currentReservation':
                  include 'includes/currentReservations.php';
                  break;
                
                default:
                  include 'includes/allReservations.php';
                  break;
              }



                

                    
              ?>
              
            </div>

          
          </div>
          <!-- End of Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include 'includes/adminFooter.php'; ?>