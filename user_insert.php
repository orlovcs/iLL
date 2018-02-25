  

<?php
   // <!-- // function InsertUser (){
          //
                      //  global $con; 
        
        include("includes/connection.php");

          if(isset($_POST['submit_register'])){
    
              
              $name = mysqli_real_escape_string($con,$_POST['new_name']);
                 $password = mysqli_real_escape_string($con,$_POST['new_password']);
               $email = mysqli_real_escape_string($con,$_POST['new_email']);
                   $country = mysqli_real_escape_string($con,$_POST['new_country']);
                    $sex = mysqli_real_escape_string($con,$_POST['new_sex']);
                    $age = mysqli_real_escape_string($con,$_POST['new_age']);
                    $birthday = mysqli_real_escape_string($con,$_POST['new_birthday']);
                    $date = date("m-d-Y");
              $status = "unverifidd";
              $posts = "none";
              
              
              
              $get_email = "select * from users where user_email = '$email' ";
              $run_email = mysqli_query($con,$get_email);
              $check = mysqli_num_rows($run_email);
              
              
              if($check==1){
                  
                  echo "<h2> already registered </h2> ";
                  exit();
              }
              
              if(strlen($password)<8){
                  echo "<h2> password too short </h2> ";
                  exit();  
                  
              }
            else{
                
                
                $insert = "insert into users 
                (user_name,
                user_pass, 
                user_email, 
                user_country, 
                user_sex, 
                user_b_day,
                user_image,
                register_date, 
                last_login, 
                status, 
                posts) values 
                ('$name',
                '$password',
                '$email',
                '$country',
                '$sex',
                '$birthday',
                'logo.jpg',
                NOW(),
                NOW(),
                '$status',
                '$posts'          
                
                
                )";
                
                $run_insert = mysqli_query($con,$insert);
                
                if($run_insert){
                    $_SESSION['user_email']=$email;
                     $_SESSION['user_name']=$name;

                    echo "<h2> registered </h2> ";
                    echo "<script>window.open('home.php','_self')</script>>";
                   
                    
                    
                }
                
            }
              
                  
}
          
          
//      }

?>
