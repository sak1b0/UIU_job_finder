<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/cv_display_style.css";>
<body>
<div class="navbar">
            <img src="img/uiu-logo.png">
        <ul>

          <li><a href="index.php"><i class="material-icons"style="position:relative;top:5px;">home</i>Home</a></li>
          <li><a href="#news"><i class="material-icons"style="position:relative;top:5px;">description</i>News</a></li>
          <li><a href="#contact"><i class="material-icons"style="position:relative;top:5px;">account_box</i>Contact</a></li>
        <li><form class="" action="search_result.php" method="post">
             <input class="search-box"name="s" id="s" type="text" value="" placeholder="Search Jobs" autocomplete="off">
            <button type="submit"><i class="material-icons">search</i></button>
        </form></li>

        </ul>
    </div>
</body>

 

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
        <div class="rescard" align="left">
            <link rel="stylesheet" href="/css/cv_display_style.css">
            <div class="row">
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
        <div class="rescard" align="left">
            <link rel="stylesheet" href="css/cv_display_style.css">
            <div class="row" style="height:20px;">
               
             <h4><?php echo $result." results were found"; ?></h4>   

          
        </div>

        <div>

        </div>

    </div>

 <?php   
        
    }
   
    fclose($file); 
?>