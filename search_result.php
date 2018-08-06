<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="navbar">

    <img src="img/uiu-logo.png">
    
    
    <div class="topnav-right">
    
        <form class="colform" action="search_result.php" method="post">
             <input class="search-box"name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">    
        </form>

        <form class="colform" action="index.php" method="post">
            <button class="nav-btn" ><i class="material-icons">home</i> Home </button>
        </form>

        <!--form class="colform" action="cv_input.php" method="post">
        <button type="submit" action="cv_input.php" class="nav-btn"><i class="material-icons">description</i> CV </button>
        </form-->

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
<div></div>
<?php 
   
  //  echo $_POST["s"];
    $file=fopen("jobs.csv","r");
    
    $skip=0;
    $result=0;
    while(true)
      {
        $line=fgetcsv($file);
        if($line==null) break;
        
        if($skip==0) 
        {
            $skip++;
            continue;
        }
        if(strpos(strtoupper($line[0]),strtoupper($_POST["s"]))==false)  ///string , key
            continue; ///no match so continue
        $result++; //result counter increase
        
        //array_push($all_jobs,$line);
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
                <a href="<?php echo $line[2];?>"> <button class="btn-link">Read more</button></a>

            </div>
        </div>

        <div>

        </div>

    </div>

    <?php
        ///html ends here
      } 
    if($result==0)
    {
        echo "<footer><h4>Sorry no results found</h4></footer>";
    }
    else 
    {   ?>
         <div align="center">
        <div class="card" align="left">
            <link rel="stylesheet" href="style.css">
            <div class="container" style="height:20px;">
               
             <h4><?php echo $result." results were found"; ?></h4>   

          
        </div>

        <div>

        </div>

    </div>

 <?php   
        
    }
   
    fclose($file); 
?>