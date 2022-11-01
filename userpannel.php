
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>user Panel </title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Elegant</h1>
        </div>
        <ul>
            <li><h6>Dasboard</h6></li>
            <li><h6>My Profile</h6></li>
            <li><h6><a href="userview.php">New course</a></h6></li>
            <li><h6>Master</h6></li>
            <li><h6>student</h6></li>
            <li><h6>payment</h6></li>
        </ul>
    </div>
    
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search">
                    <button type="submit"> <img src="images/download.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="images/notification.png" alt="">
                    <div class="image-case">
                        <img src="images/img_551372.png" alt="">
                    </div>
                 </div>
            </div>
        </div>  
        <!--<div class="content">
            <div class="cards">
                <div class="card1">
                    <div class="box">
                        <h1>2193</h1>
                        <h3>student</h3>
                    </div>
                    <div class="icon-case">
                        <img src="" alt="">
                    </div>
                </div>
            </div>     
                <div class="cards">
                   <div class="card2">
                        <div class="box">
                           <h1>2193</h1>
                           <h3>student</h3>
                        </div>
                    <div class="icon-case">
                        <img src="" alt="">
                    </div>
                    </div>
                </div>    
                <div class="cards">
                    <div class="card3">
                        <div class="box">
                            <h1>2193</h1>
                            <h3>student</h3>
                        </div>
                        <div class="icon-case">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                 
                <div class="cards">
                    <div class="card4">
                        <div class="box">
                            <h1>2193</h1>
                            <h3>student</h3>
                        </div>
                        <div class="icon-case">
                            <img src="" alt="">
                        </div>
                    </div> 
                </div>     
             </div>
     </div>   -->         
</body>

</html>

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
            <input type="text" id="fname" onkeyup="fnameValidation(this)" name="first_name" placeholder="Enter your firstname" required>
            <span id="fame" class="new" style="color: red; font-size: small;"></span>
          </div>

          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" onkeyup="emailValidation(this)" name="email" placeholder="Enter your email"  required>
            <span id="mail" class="new" style="color: red; font-size: small;"></span>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" id="phone_no" onkeyup="phn_noValidation(this)" maxlength="10" name="phn_no" placeholder="Enter your number" required >
            <span id="phn" class="new" class="new" style="color: red; font-size: small;"></span>
          </div>
          
            <div class="input-box">
             <span class="details"> Date of Birth</span>
             <input type="date" id="dob" name="dob" placeholder="Enter date" min="1900-01-01" max="2022-01-01" required  >
             <span id="dofb" class="new"class="new" style="color: red; font-size: small;"></span>
         </div>
        
         <div class="gender-details">
           <input type="radio" name="gender" checked id="dot-1" >
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
                 <span class="details">House Name</span>
                 <input type="text" id="house_name" onkeyup="house_nameValidation(this)"  name="house_name" placeholder="Enter your housename" required >
                 <span id="hame" class="new"  class="new" style="color: red; font-size: small;"></span>

              </div>
              
              <div class="input-box">
                  <span class="details">Password</span>
                  <input type="password" id="password" onkeyup="passwordValidation(this)" name="password" placeholder="Enter  your password" required>
              
                  <span id="pwd" class="new" class="new" style="color: red; font-size: small;"></span>
              </div>
          </div>
          <div class="user-details">
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" id="cpassword" onkeyup="cpasswordValidation(this)" name="cpassword" placeholder="Enter Confirm Password " required >
              <span id="pwd1" class="new" class="new" style="color: red; font-size: small;"></span>
            </div>
          </div>
    
        <div class="button">
          <input type="submit" name="register" value="Register" >
          
        </div>
      </form>
    </div>
  </div>
  <!-- <script src="register.js"></script> -->
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


//house//

function house_nameValidation(inputTxt){
     
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


</script>
</body>
</html>
