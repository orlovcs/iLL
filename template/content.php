  
<div id="text" style="color:red">
    "There's Malice To Spread"

</div>


        
    <div class="content" style="color:white;">
        
        <div id="massiveattack">
   <!-- <img src="images/Image03.jpg" height="500" width="500"> -->

        
        </div>
        
        <div id="registry">
     <form action="" method="post" id="registryform">
                  ---------  registry ---------

         <table>
            
 <tr>
<td align="right">Name</td>
<td> <input type="text" name="new_name" placeholder="John" required="required"> </td>
 </tr>
                 <tr>
<td align="right">Password</td>
<td> <input type="password" name="new_password" placeholder="John" required="fill me"> </td>
 </tr>
                 <tr>
<td align="right">Email</td>
<td> <input type="text" name="new_email" placeholder="& Johnson" required="fill me"> </td>
 </tr>
                 <tr>
<td align="right">Country</td>
<td> <select name="new_country"  required="fill me">
    <option>Mordor</option>
     <option>Westeros</option>
    </select> </td>
 </tr>
                                 <tr>
<td align="right">Sex</td>
<td> <select name="new_sex"  required="fill me">
    <option>Good</option>

      <option>danger.noddle</option>
    </select> </td>
 </tr>
                <td align="right">Age</td>
<td> <select name="new_age"  required="fill me">
    <option>dogger</option>
      <option>pupper</option>
    </select> </td>
 </tr>
                 <tr>
<td align="right">Name Day</td>
<td> <input type="date" name="new_birthday" placeholder="mm/dd/yy"  required="fill me"> </td>
 </tr>
    <tr>             
<td> <button name="submit_register">login</button>   </td>
         
         </tr>
            
            </table>
            </form>
        <?php
        
   include("user_insert.php");
        
        ?>
        
        
        </div>
         </div>
        
        