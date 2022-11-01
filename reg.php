<?php 
include 'connection.php';
//initializing variables
$errors = array(); 
session_start();
  

// error_reporting(0);

if (isset($_POST['submit'])) {
   $full_name=$_POST['full_name'];
   $email=$_POST['email'];
   $phone_no=$_POST['phone_no'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $address=$_POST['address'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];
   
    
    
    
      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM tbl_login WHERE username='$username'";
      $checkqueryresult = mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($checkqueryresult);
      if ($user){ // if user exists
        if ($user['username'] == $username) {
            array($username, "username already exists");
            // echo"<script Type='text/javascript'>alert('username already exists')</script>";
        }
        
      }
    
      //Finally, register user if there are no errors in the form
     if (count($errors) == 0)
       {
        $log_query = "INSERT INTO tbl_login(username,password,role,status)VALUES('$username','$password','admin',1,)";
          $logqueryresult = mysqli_query($conn,$log_query);
        if($logqueryresult) {
          $idselectionquery = "SELECT login_id FROM tbl_login WHERE username='$username'";
          $idselectionqueryresult = mysqli_query($conn, $idselectionquery);
          $user = mysqli_fetch_assoc($idselectionqueryresult);
          $login_id = $user['login_id'];
          $reg_query ="INSERT INTO tbl_reg(login_id,full_name,email,phone_no,dob,gender,address,confirm_password,role,status) VALUES ('$login_id','$full_name','$email','$phone_no','$dob''$gender','$address','$cpassword','admin','1')";
          $reg_queryresult = mysqli_query($conn, $reg_query);
          if($reg_queryresult){
            $_SESSION['islogged']=true;
            $_SESSION['user_fullname']= $full_name." ".$email;
            echo"<script Type='text/javascript'>alert('Registration Success,Use your email id as Username when login')</script>";
            echo"<script>window.location.href='admin_pannel.html';</script>";
          }
          else {
            echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
          } 
        }
      }
    }
    
    ?>
    <?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>




 <!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">

      <form  id="form" name="form"  action="reg.php" method="post" autocomplete="off">
        
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="fname" onkeyup="fnameValidation(this)" name="full_name" placeholder="Enter your firstname" required >
            <span id="fame" class="new" style="color: red; font-size: small;"></span>
          </div>

          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" onkeyup="emailValidation(this)" name="email" placeholder="Enter your email"  required>
            <span id="mail" class="new" style="color: red; font-size: small;"></span>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="phone" id="phn_no" onkeyup="phn_noValidation(this)" maxlength="10" name="phone_no" placeholder="Enter your number" required >
            <span id="phn" class="new" class="new" style="color: red; font-size: small;"></span>
          </div>
          
            <div class="input-box">
             <span class="details"> Date of Birth</span>
             <input type="date" id="dob" name="dob" placeholder="Enter date" min="1900-01-01" max="2022-01-01" required  >
             <span id="dofb" class="new"class="new" style="color: red; font-size: small;"></span>
           </div>
        
         
        </div>
         
        
        
        <div class="gender-details">
          <input type="radio" name="gender" checked id="dot-1" required>
          <input type="radio" name="gender" id="dot-2" >
          <input type="radio" name="gender" id="dot-3" >
          <span class="gender-title" >Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" >Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>

<!--address-->
       <div class="user-details">
          <div class="input-box">
             <span class="details"><Address></Address></span>
             <input type="text" id="house_name" onkeyup="address_nameValidation(this)"  name="address" placeholder="Enter your housename" required >
             <span id="add" class="new"  class="new" style="color: red; font-size: small;"></span>
           </div>
          <div class="input-box">
            <span class="details">username</span>
            <input type="text" id="password" onkeyup="usernameValidation(this)" name="username" placeholder="Enter  your username" required>
            <span id="uname" class="new" class="new" style="color: red; font-size: small;"></span>
          
          </div>
        </div>   
      
        <div class="user-details">
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" onkeyup="passwordValidation(this)" name="password" placeholder="Enter  your password" required>
            <span id="pwd" class="new" class="new" style="color: red; font-size: small;"></span>
          
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="cpassword" onkeyup="cpasswordValidation(this)" name="cpassword" placeholder="Enter Confirm Password " required >
            <span id="pwd1" class="new" class="new" style="color: red; font-size: small;"></span>
          </div>
         </div>
      <div class="text-align">
        <div class="button">
           <input type="submit" name="register" value="Register" >
     </div>    
        </div>
      </form>
    </div>
  </div>
 
  <script>

    // First name //

    function fnameValidation(inputTxt){
     
     var regx = /^[a-zA-Z]+$/;
     var textField = document.getElementById("fame");
         
     if(inputTxt.value != '' ){
     
         if(inputTxt.value.length >= 2){
         
             if(inputTxt.value.match(regx)){
                 textField.textContent = '';
                 textField.style.color = "green";
                     
             }else{
                 textField.textContent = 'only characters are allowded to insert!';
                 textField.style.color = "red";
             }  
         }else{
             textField.textContent = 'your input must more than two chracters';
             textField.style.color = "red";
         }   
     }else{
         textField.textContent = 'your are not allowed  to leave a field  empty';
         textField.style.color = "red";
     }
    }



//email//

function emailValidation(inputTxt){
    // ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$
    var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var textField = document.getElementById("mail");
        
    if(inputTxt.value != '' ){
        if(inputTxt.value.match(regx)){
            textField.textContent = '';
            textField.style.color = "green";
        }else{
            textField.textContent = 'email id  is not valid!!! please insert a valid one';
            textField.style.color = "red";
        }  
    }else{
        textField.textContent = 'your are not allowed  to leave a field  empty';
        textField.style.color = "red";
    }
}

//pwd//

function passwordValidation(inputTxt){
    
    var regx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}/;
    var textField = document.getElementById("pwd");
        
    if(inputTxt.value != '' ){
            if(inputTxt.value.match(regx)){
                textField.textContent = '';
                textField.style.color = "green";
                    
            }else{
                textField.textContent = 'Must contain at least one number and one uppercase and lowercase letter and aleast 5 characters';
                textField.style.color = "red";
            }    
    }else{
        textField.textContent = 'your are not allowed  to leave a field  empty';
        textField.style.color = "red";
    }
}

//cpwd//

function cpasswordValidation(inputTxt){
    
    var regx =  document.getElementById("pwd").value;
    var regy =  document.getElementById("pwd1").value;
    var textField = document.getElementById("pwd1");
    var textField1 = document.getElementById("pwd");
        
    if(inputTxt.value != '' ){    
            if(regx == regy){
                textField.textContent = '';
                textField.style.color = "green";
                    
            }else{
                textField.textContent = 'Entered to passwords are not same!!';
                textField.style.color = "red";
            }  
        }else{
            textField.textContent = '';
            textField.style.color = "red";
        }  
}


//number //

function phn_noValidation(inputTxt){
   
   var regx = /^\d{10}$/;
   var textField = document.getElementById("phn");
       
   if(inputTxt.value != '' ){
       if(inputTxt.value.match(regx)){
           textField.textContent = '';
           textField.style.color = "green";
       }else{
           textField.textContent = 'Your Mobile Number Is Valid.';
           textField.style.color = "red";
       }  
   }else{
       textField.textContent = 'your are not allowed  to leave a field  empty';
       textField.style.color = "red";
   }
}


//address//

function address_nameValidation(inputTxt){
     
     var regx = /^[a-zA-Z]+$/;
     var textField = document.getElementById("hame");
         
     if(inputTxt.value != '' ){
     
         if(inputTxt.value.length >= 2){
         
             if(inputTxt.value.match(regx)){
                 textField.textContent = '';
                 textField.style.color = "green";
                     
             }else{
                 textField.textContent = 'only characters are allowded to insert!';
                 textField.style.color = "red";
             }  
         }else{
             textField.textContent = 'your input must more than two chracters';
             textField.style.color = "red";
         }   
     }else{
         textField.textContent = 'your are not allowed  to leave a field  empty';
         textField.style.color = "red";
     }
  }




</script>
</body>
</html>
