<?php include"all_info.php"; ?>
<html>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/cv_display_style.css" ;>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<script src="main.js"></script>

<!--div class="navbar">

    <img src="img/uiu-logo.png">
    
    
    <div class="topnav-right">
    
        <form class="colform" action="search_result.php" method="post">
             <input class="search-box"name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">    
        </form>

        <form class="colform" action="#" method="post">
            <button class="nav-btn" ><i class="material-icons">home</i> Home </button>
        </form>

        <form class="colform" action="cv_input.php" method="post">
        <button type="submit" action="cv_input.php" class="nav-btn"><i class="material-icons">description</i>  CV </button>
        </form>

        <form class="colform" action="#" method="post">
            <button  class="nav-btn"><i class="material-icons">account_box</i> Login </button>
        </form>

   
    </div>
</div-->

<head>

    <div class="navbar">
        <img src="img/uiu-logo.png">
        <ul>

            <li><a href="index.php"><i class="material-icons"style="position:relative;top:5px;">home</i>Home</a></li>
            <li><a href="cv_input.php"><i class="material-icons"style="position:relative;top:5px;">description</i>CV</a></li>
            <li><a href="#contact"><i class="material-icons"style="position:relative;top:5px;">account_box</i>Contact</a></li>
            <li>
                <form class="" action="search_result.php" method="post">
                    <input class="search-box" name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
            </li>
            <!--button onclick="doshit()">click me!</button-->

        </ul>
    </div>
</head>
<div style="padding-top:50px;"></div>
<div class="bottom" style="font-family:roboto;">
    <div style="padding-top:100px;"></div>

    <?php
//running demo scrapper to csv file
   // shell_exec("python C:/XAMPP/htdocs/python/final_python.py 2>&1");
    
    $file=fopen("jobs.csv","r");
    
    $skip=0;
    while(true)
      {
        $line=fgetcsv($file);
        if($line==null) break;
        
        if($skip==0) 
        {
            $skip++;
            continue;
        }
        
       // array_push($all_jobs,$line);
        ///this is where html begins
       ?>
        <div align="center">
            <div class="card" align="center">
                <link rel="stylesheet" href="css/cv_display_style.css">
                <div class="container">

                    <h4><b><?php echo $line[0];?></b></h4>
                    <p>
                        <?php echo $line[1];?>
                    </p>
                    <hr>
                    <a href="<?php echo $line[2];?>" style="text-decoration:none;color:orange;"><b>Read more</b></a>


                </div>
            </div>

            <div style="padding-top:10px;"></div>

        </div>

        <?php
        ///html ends here
      } 
   
    fclose($file);
    
 ?>

</div>

</html>
