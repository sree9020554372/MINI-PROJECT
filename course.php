
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="styleA.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">Elegant</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="course.php">
            <i class='' ></i>
            <span class="links_name">Course</span>
          </a>
        </li>
        <li>
          <a href="viewcourse.php">
            <i class='' ></i>
            <span class="links_name">update course</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Add Event</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">update Event</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Master</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class=''></i>
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

   <div class="container">
        <div class="heading"><h2>Add Course<h2></div>
        <form action="course.php"method="post">
            <div class="card-details">
                 <div class="card-box">
                    <span class="details"><h3>course name</h3></span>
                    <input type="text" name="course_name" placeholder="enter course name">
                 </div>
                 <div class="card-box">
                    <span class="details"><h3>course type</h3></span>
                    <input type="text" name="course_type" placeholder="enter  course type">
                 </div>
                 <div class="card-box">
                    <span class="details"><h3>images</h3></span>
                    <input type="file" name="images" placeholder="">
                 </div>
                 <div class="card-box">
                    <span class="details"><h3>description</h3></span>
                    <textarea id="display" name="description" rows="4" cols="50"></textarea>
                  </div>
                 <div class="card-box">
                    <span class="details"><h3> cstart</h3></h3></span>
                    <input type="date" name="cstart" placeholder="">
                 </div>
                 <div class="card-box">
                    <span class="details"><h3>fees</h3></span>
                    <input type="text"name="fees" placeholder="amount">
                 </div>
                 
            </div>
            
            <div class="button">
                <input type="submit"name="submit" value="submit">
            </div>
        </form>
    </div>
                 
  
    
  
    
</body>
</html>
<?php

include('connection.php');
if(isset($_POST['submit']))
{

$course_name=$_POST['course_name'];
$course_type=$_POST['course_type'];
$images=$_POST['images'];
$description=$_POST['description'];
$cstart=$_POST['cstart'];
$fees=$_POST['fees'];




  $sql2 = "INSERT INTO tbl_course(`course_name`,`course_type`,`images`,`description`,`cstart`,`fees`)
   VALUES ('$course_name','$course_type','$images','$description','$cstart','$fees')";
  $result1 = mysqli_query($conn,$sql2); 
  if($result1){
   header("viewcourse.php");
  }else{
   die(mysqli_error($conn));
  }
  if($result1 == true) {
   echo '<script>alert("sucesfully created");</script>';
  }
}
?>


