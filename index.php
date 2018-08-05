<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar">
    
         <img src="CDIP-Logo.png">
  
   
    <div class="topnav-right">
     <!--   <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
        <a href="#"><i class="fa fa-fw fa-user"></i> Login<br></a> -->
        <a href="#about">Home</a>
        <a href="/python/cv_input.php">CV</a>
        <a href="#about">Login</a>
     
    </div>
</div>

<div class="main">
  <p> hello</p>
</div>
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
        ///this is where html begins
       ?>
        <div align="center">
            <div class="card" align="left">
              <link rel="stylesheet" href="style.css">
              <div class="container">
                  <h4><b><?php echo $line[0];?></b></h4> 
                   <p><?php echo $line[1];?></p> 
                    <a href="<?php echo $line[2];?>"> <button class="btn-link">Read more</button></a>

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