<?php include"all_info.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="navbar">

    <img src="img/uiu-logo.png">
    
    
    <div class="topnav-right">
    
        <form class="colform" action="search_result.php" method="post">
             <input class="search-box"name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">    
        </form>

        <form class="colform" action="#" method="post">
            <button class="nav-btn" ><i class="material-icons">home</i> Home </button>
        </form>

        <form class="colform" action="cv_input.php" method="post">
        <button type="submit" action="cv_input.php" class="nav-btn"><i class="material-icons">description</i> CV </button>
        </form>

        <form class="colform" action="#" method="post">
            <button  class="nav-btn"><i class="material-icons">account_box</i> Login </button>
        </form>

   
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
//running demo scrapper to csv file
   // shell_exec("python C:/XAMPP/htdocs/python/job_scraper.py 2>&1");
    
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
        <div class="card" align="left">
            <link rel="stylesheet" href="style.css">
            <div class="container">
                <h4><b><?php echo $line[0];?></b></h4>
                <p>
                    <?php echo $line[1];?>
                </p>
                <a href="<?php echo $line[2];?>"> <button class="btn-link"><i class="material-icons">link</i>Read more</button></a>

            </div>
        </div>

        <div>

        </div>

    </div>

    <?php
        ///html ends here
      } 
   
    fclose($file);
    
 ?>