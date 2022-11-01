<?php
include('userpannel.php');
?>

<?php
    session_start();
    error_reporting(0);
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>zoo website - services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="http://webthemez.com" />

        

    </head>

    <body>
    <table class="center" style="width:75%"cellpadding="0" cellspacing="0" border="1" align="center">
              
              <tr>
                  <th>S1.NO</th>
                  <th>Course Name</th>
                  <th>Course type</th>
                  <th>images</th>
                  <th>description</th>
                  <th>cstart</th>
                  <th>Fees</th>
                  <th>Delete</th>
                  <th>Update</th>
              </tr>

                        <?php
                            include 'connection.php';
                            $animal_data_res= mysqli_query($conn,"SELECT * from tbl_course");
                            if($course_data_res){
                                if(mysqli_num_rows($course_data_res) > 0){
                                    while($row= mysqli_fetch_array($course_data_res)){
                                        
                                        $c_id=$_POST['c_id'];
                                        $course_name = $_POST['course_name'];
                                        $course_type = $_POST['course_type'];
                                        $images = $_POST['images'];
                                        $description = $_POST['description'];
                                        $cstart = $_POST['cstart'];	
                                        $fees = $_POST['fees']; 
    
                                        echo '
                                            <div class="animal-card" style="width: 18rem;">
                                                <img class="card-img-top" src="admin/an_image/'.$animal_image.'" alt="'.$animal_name.'">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$animal_name.'</h5>
                                                    <p class="card-text">'.$animal_breed.'</p>
                                                    <a href="animal_description.php?aid='.$animal_id.'" class="btn btn-primary">View Details</a>
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
                   
    
     
    </body>
</html>