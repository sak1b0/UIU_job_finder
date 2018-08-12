<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/cv_display_style.css";>
<body>
    <?php 
    include"all_info.php"; 
       
    
    ?>
  <head>
    <script
  src="https://code.jquery.com/jquery-1.12.0.min.js"
  integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8="
  crossorigin="anonymous"></script>
    </head>  
    <script>
        
 
        function add_card(p1)
        {   var lat=p1;
           $.ajax({
            type: 'POST',
            url: 'all_info.php',
            data:  { huda:p1},
             success: function(result) {
                 console.log(result);
                $('#jinish').html(result);
            },
            error: function() {
                alert('Some error found. Please try again!');
            }
                });
            var par= document.getElementById('mid');
            var chi= document.createElement('div');
            chi.className='card';
            
            var one=document.createTextNode('title'); //here
            one.id='abc';
            var two=document.createElement('p');
            var cmp=document.createTextNode('Company'); //here
            two.appendChild(cmp);
            var three=document.createElement('a');
            var txt=document.createTextNode('Read more');
            var line=document.createElement('br');
            three.appendChild(txt);
            three.href='http://www.google.com'; //here the changes will be made
            
         
            
            
            chi.appendChild(one);
            chi.appendChild(document.createElement('br'));
            chi.appendChild(two);
            chi.appendChild(document.createElement('br'));
            chi.appendChild(three);
            chi.appendChild(document.createElement('br'));
            
            par.appendChild(chi);
         
         
            
        }
        
        function load_shit()
        {
            for(var i=0;i<3;i++)
                {
                    add_card(i);
                }
        }
        
        function page_cnt()
        {   
            var all_job_count= '<?php echo $all_job_count; ?>';
            document.getElementById('page_cnt').innerHTML='<?php echo $all_job_count; ?>';
            alert(all_job_count);
           
        }
        
    </script>
    
    <!--script src="main.js"></script-->
<div id="demo" align="center">
  <h2 id="jinish" style="font-size: 30px;">Click me!</h2>
  <button type="button" onclick="load_shit()">next</button>
    <h2 id="page_cnt" style="font-size: 30px;">Page count!</h2>
  <button type="button" onclick="page_cnt()">next</button>
    
</div>
    
     <div id="mid" align="center">
         <?php 
           // for($i=1;$i<=3;$i++)
            {
                
            
         ?>
        <!--div id="cardd" class="card" align="center">
            <link rel="stylesheet" href="css/cv_display_style.css">
            <div  class="container">
                
                <p id="title<?php //echo $i; ?>">hello</p>
                
            </div>
        </div-->
         <br>
        <?php } ?>
        
        <div style="padding-top:10px;"></div>

    </div>

</body>
</html>