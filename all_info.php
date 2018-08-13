<?php 
    $arr=array();
    $job_arr=array();
    $arr=array("asp,net","c++","c","java","c#","go","kotlin","ruby","r","swift","php","python","javascript","laravel","angularjs","nodeJS","spring","android","ios","web_development");
    sort($arr);
    $dum="robin";
?>

<?php
//running demo scrapper to csv file
   // shell_exec("python C:/XAMPP/htdocs/python/final_python.py 2>&1");
    
    class MyClass{
        public $title="def";
        public $company="def";
        public $lnk="def";
        
        public function __construct($a,$b,$c)
        {
            $this->title=$a;
            $this->company=$b;
            $this->lnk=$c;
        }
        
    }
    
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
        
        $obj= new MyClass($line[0],$line[1],$line[2]); //new jobs object create 
        array_push($job_arr,$obj);
       
      } 
   
    fclose($file);
    
    $all_job_count=sizeof($job_arr);
    
    if(isset($_POST['tit']))
    {   
        $ind1=$_POST['tit'];
       
        echo $job_arr[$ind1]->title;
         
        //echo json_encode(array("a" => 'momina', "b" => "muhtehsan", "c" => 'sakib')); 
       
    }
   
    if(isset($_POST['cmp']))
    {   
        $ind2=$_POST['cmp'];
        echo $job_arr[$ind2]->company;
        
    }

    if(isset($_POST['lnk']))
    {   
        $ind2=$_POST['lnk'];
        echo $job_arr[$ind2]->lnk;
    }

    if(isset($_POST['count']))
    {
        echo $all_job_count;
    }
    
    /*for($i=0;$i<sizeof($job_arr);$i++)
    {
        echo "hello";
        echo $job_arr[$i]->title;
    } */
    
 ?>
