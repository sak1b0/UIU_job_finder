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
        
        $obj= new MyClass($line[0],$line[1],$line[2]);
        array_push($job_arr,$obj);
       
      } 
   
    fclose($file);
    
    $all_job_count=sizeof($job_arr);
    
    $res_tit='default tai ase';
    if(isset($_POST['huda']))
    {   
        $ind=$_POST['huda'];
       
        echo $job_arr[$ind]->title;
    }
    
    
       // $res_tit = $_POST['huda'];
    
    /*for($i=0;$i<sizeof($job_arr);$i++)
    {
        echo "hello";
        echo $job_arr[$i]->title;
    } */
    
 ?>