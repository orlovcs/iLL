<?php
session_start();
include("includes/connection.php");
 if(isset($_POST['submit'])){
    

              $email = mysqli_real_escape_string($con,$_POST['email']);
                 $password = mysqli_real_escape_string($con,$_POST['password']);

     
          
              $get_user = "select * from users where user_email = '$email' AND user_pass='$password' ";
              $run_user = mysqli_query($con,$get_user);
              $check = mysqli_num_rows($run_user);
              
 if($check==1){
     
     $_SESSION['user_email']=$email;
   
     echo "<script>window.open('home.php','_self')</script>";  
 }
     else{
         
           echo "<h2> naw fam not tonight </h2> ";
         
     }
     
     
     
 
 
 
 
 
 
 }

?>