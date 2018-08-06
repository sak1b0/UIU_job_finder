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
        echo $cnt;
    }
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/cv_display_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<head>

</head>
<body>
    <div>
    
    </div>
<img src="img/uiu-logo.png">
<ul>
    
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  
</ul>
    <div align="center">
    <div class="card">
 
  <div class="row">
    
    <div class="column">
        <p>Left</p> 
        <h4><b>Robin Doe</b></h4> 
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
        
        
    </div>
  </div>
        
</div>
    </div>

</body>
</html>