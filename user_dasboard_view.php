<?php
    session_start();
    error_reporting(0);
    include('connection.php');
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
   
    <title>COURSE DISPLAY</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"  href="styleA.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
    <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">E D S</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="user_pannel.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">courses</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
   
  
    <div id="wrapper">
        
        <!-- start header -->
        <?php include('includes/index.html');?>
        <!-- end header -->
        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">course</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="aligncenter"><h2 class="aligncenter">Our Animals</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div> -->
                        <br/>
                    </div>
                </div>
        <div id="wrapper">            
            <section id="course-content">
                <div class="container">
                    <div class="row box-section">

                        <?php
                            include 'connection.php';
                            $course_data_res= mysqli_query($conn,"SELECT * from tbl_course");
                            if($course_data_res){
                                if(mysqli_num_rows($course_data_res) > 0){
                                    while($row= mysqli_fetch_array($course_data_res)){
                                        $c_id= $row['c_id'];
                                        $course_name= $row['course_name'];
                                        $course_type= $row['course_type'];
                                        $images= $row['images'];
                                        $description= $row['description'];
                                        $cstart= $row['cstart'];
                                        $fees= $row['fees'];
                    
                                        echo '
                                            <div class="animal-card" style="width: 18rem;">
                                                <img class="card-img-top" src="images/an_image/'.$image.'" alt="'.$course_name.'">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$course_name.'</h5>
                                                    <p class="card-text">'.$course_type.'</p>
                                                    <a href="#='.$c_id.'" class="btn btn-primary">View Details</a>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else{
                                    echo "No data !!";
                                }
                            }
                            else{
                                echo "Wrong query !!";
                            }
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>  
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/animate.js"></script>
        <!-- Vendor Scripts -->
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>