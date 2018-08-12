/* global document, window, alert, console, require, fucntion */
function doshit()
{   
    var c=document.getElementById("jinish").innerHTML;
    c++;
    document.getElementById("jinish").innerHTML=c;
    if(c>10)
        {
            document.getElementById("jinish").innerHTML=0;
        }
}

function hope()
{
    var res = '<?php p_function(); ?>';
    alert(res);
    document.getElementById("jinish").innerHTML=res;
}

