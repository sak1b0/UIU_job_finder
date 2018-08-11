<?php
    
   include"all_info.php";
    $cnt=0;
    if(isset($_POST['submit']))
    {   
        foreach($arr as $item)
        {
            if(isset($_POST[$item]))
            {
               // echo $item."\n";
                $cnt++;
            }
        }
       // echo $cnt;
    }
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/cv_display_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<head>

</head>
<body>
    
    <div class="navbar">
            <img src="img/uiu-logo.png">
        <ul>

          <li><a href="index.php">Home</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
        <li><form class="" action="search_result.php" method="post">
             <input class="search-box"name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">    
        </form></li>

        </ul>
    </div>
    
   
    <div class="row">
        <div align="center">
    <div class="card">
 
        <div class="row">
    
    <div class="column">
        
        <h1><b>Ridwan Kawser Robin</b></h1> 
    </div>
    
      
     <!--div class="column">
        <div class="line-in-middle"></div>
    </div-->
      
      <div class="column">
          <div class="row">
    <i class="material-icons" style="position:relative;top:5px;">call</i>
              +88 01712 345678  
          </div>
          <div class="row">
    <i class="material-icons" style="position:relative;top:5px;">email</i>
              elon@musk.com
          </div>
          <div class="row">
    <i class="material-icons" style="position:relative;top:5px;">room</i>
          aaaaaaaaaaaaaa pashei baridhara,dhaka
          </div>
        
        
    </div>
        </div>
        
</div>
    </div>
    </div>



</body>
</html>