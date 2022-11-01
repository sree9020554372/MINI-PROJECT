
<?php
session_start();    

    if(isset($_SESSION['islogged'])){
        if($_SESSION['islogged']==true){
            header('location: index.html');
        }
    }

    include 'connection.php';
    //connecting html form and php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        $role= $_POST['role'];
        //fetching data from database
        $query = "SELECT * from tbl_login where username = '$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        //fetching username and password from query as object
        if($result && mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            // $login_id= $row['login_id'];

            $DBrole= $row['Role'];
            if($DBrole==1)
                header( "Location: admin_pannel.html" );
            else if($DBrole==2)
                header( "Location: user_pannel.html" );
            
            else
                echo "<script type='text/javascript'>alert('wrong user selection plz select the correct one');</script>";                    


             $user_details_res= mysqli_query($conn,"SELECT * from tbl_registration WHERE login_Id=$login_id");
             if($user_details_res){
                                     $user_details_row= mysqli_fetch_array($user_details_res);
                    $_SESSION['islogged']=true;
                    $_SESSION['user_fullname']= $user_details_row['Full_Name']." ".$user_details_row['email'];
             }
            
             $_SESSION['username']="Admin";
             $_SESSION['id']=$row['login_Id'];
              $_SESSION['password']=$row['password'];
            

            $role = $_COOKIE['login_role'];
             if($role=" user")
            echo"<script Type='text/javascript'>alert('Login Success')</script>";

             echo"<script>window.location.href='admin_pannel.html'</script>";
        }
        else{
            echo"<script Type='text/javascript'>alert('Oops!...Login Failed')</script>";
            echo"<script>window.location.href='admin_pannel.html'</script>";
            echo "<script>alert($DBrole);</script>";
        }
    }
?>



<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="login_css.css">

</head>
<a href="index.html"></a>
<body>
<form action="login1.php" method="POST">
<div class="loginbox">
<div class="createAccount"> 
    <a href="reg.php"><h4>New User Sign up Here?</h4></a>
</div>    
<h2>LOGIN</h2>
<p>USERNAME<p>
<input type="text" name="username" id="t1" placeholder="Enter Username" required>
<p>PASSWORD</p>
<input type="password" name="password" id="t2" placeholder="Enter Password" required>
<input type="submit"  value="LOGIN" name="submit"/>
<a href="admin1.php"></a>
<a href="#"><h4>FORGET PASSWORD?</h4></a> 
</div>
</form>
</body>
</html>