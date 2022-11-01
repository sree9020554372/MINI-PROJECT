<?php
session_start();
include('connection.php');
$id=$_REQUEST['id'];

$sql3="UPDATE tbl_course set status='1' where c_id='$id'";
if(mysqli_query($conn,$sql3))
{
    $_SESSION['msg'] = "Course deactivated successfully";
}
header("Location: viewcourse.php");
?>