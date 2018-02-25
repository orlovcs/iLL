<?php
session_start();
?>
<html>
    
    <link rel="stylesheet" href="styles/home_style.css" media="all" />
    
    <body>

        
        <!--container-->
<div class="container">
        
    <div id="head_wrap">
    <div id="header">
        <ul id="menu">
        
        <li> <a href="home.php"> home</a>    </li>
                <li> <a href="members.php">memebers</a>    </li>
            <Strong>Topics</Strong>
<?php
            $get_topics = "select * from topics";
            echo gg;
            
            ?>
        
        
        </ul>
            
            
        
        
        
    </div>
    
    
    
    
    </div>    
    
    
    <div id="sidebar"> 
email: <?php        echo $_SESSION['user_email']; ?>
  <p id="radiohead">

           anxiety is twice the suffering<br>
        </p>

    </div>
    
    
    <div id="maincontent">
        gg boys    
    <audio controls autoplay>
  <source src="http://www.stephaniequinn.com/Music/Commercial%20DEMO%20-%2006.mp3" type="audio/mpeg">
Your browser does not support the audio element.
      
</audio>
          gg
        gg
        gg
        g
        gg
        g
        g
        ggg
        ggg
        gg
        g
        gg
    </div>
    
    
    
        
        </div>
        <!--container-->
    
        
    
    </body>
    




</html>




<!--
   <h1>
        
        <div style="float:center">
        
        welcome 
       
              echo $_SESSION['user_name'];
            echo $_SESSION['user_email'];
            ?> <br>
        <img src="http://24.media.tumblr.com/tumblr_mc65brAmH41rexsomo1_400.gif" />
                    <img src=" https://media.giphy.com/media/TeBpzQZRaBIC4/giphy.gif" />

           
           
          
        
        </div>
        
        
        </h1>

!-->