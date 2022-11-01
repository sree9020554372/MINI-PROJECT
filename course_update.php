<?php
session_start();
include ('connection.php');

if(isset($_POST['submit']))
{
    $c_id=$_POST['c_id'];
    $course_name = $_POST['course_name'];
	  $course_type = $_POST['course_type'];
	  $images = $_POST['images'];
	  $description = $_POST['description'];
	  $cstart = $_POST['cstart'];	
	  $fees = $_POST['fees']; 
        
$query="UPDATE tbl_course SET course_name='$course',course_type='$course_type',images='$images',description='$description',cstart='$cstart',fees='$fees' where c_id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    $_SESSION['status'] = "Category updated successfully";
    header('location:viewcourse.php');
}
else
{
    echo "no";
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="addcourse.css"> 
    <style>
      
      </style>
  </head>
  <body>
    <form method="POST" action="#">
    <?php
     if(isset($_GET['c_id']))
     {
     $c_id=$_GET['c_id'];
     $query=mysqli_query($conn,"select * from tbl_course where c_id='$c_id'");
     while($row=mysqli_fetch_array($query))
     {
     ?>

<div class="wrapper">
    <div class="title">
      UPDATE COURSE
    </div>
   
    <div class="form">
    <input type="hidden"name="c_id"value="<?= $row['c_id'] ?>">
       <div class="inputfield">
          <label>Course Name</label>
          <input type="text" class="input" name="course_name" placeholder="course name" value="<?= $row['course_name'] ?>" required>
       </div>   
       <div class="inputfield">
        <label>course type</label>
        <input type="text" class="input" name="course_type" placeholder="course type" value="<?= $row['course_type'] ?>" required>
     </div> 
       <div class="inputfield">
          <label>images</label>
          <input type="file" class="input" name="images" placeholder="choose your file" value="<?= $row['images'] ?>" required>
       </div>  
      <div class="inputfield">
          <label>Description</label>
          <input type="text" class="input" name="description" placeholder="Description" value="<?= $row['description'] ?>" required>
          
       </div> 
      <div class="inputfield">
          <label>Fees</label>
          <input type="text" class="input" name="fees" placeholder="Fees" value="<?= $row['fees'] ?>" required>
       </div> 
       
      <div class="inputfield">
        <input type="submit" value="UPDATE" name="submit" class="btn">
      </div>
    </div>
    <?php }} ?> 
</div>
</form>
</body>
</html>


