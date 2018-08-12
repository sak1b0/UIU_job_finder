 var card_count = 0;

 function add_card(p1) {
     var lat = p1;

     var par = document.getElementById('mid'); ///main parent div
     var chi = document.createElement('div'); ///child div for card
     chi.className = 'card';
     chi.id = 'card';


     var one = document.createElement('h4');
     one.id = p1.toString() + 'title';
     // var tit = document.createTextNode('title'); 
     // one.appendChild(tit);

     var two = document.createElement('h5');
     two.id = p1.toString() + 'company'; //parameter value +company
     // var cmp = document.createTextNode('Company'); //here
     //  two.appendChild(cmp);

     var three = document.createElement('a');
     three.id = p1.toString() + 'lnk';
     var txt = document.createTextNode('Read more');

     three.appendChild(txt);
     // three.href = 'http://www.google.com'; //here the changes will be made




     chi.appendChild(one);
     // chi.appendChild(document.createElement('br'));
     chi.appendChild(two);
     //chi.appendChild(document.createElement('br'));
     chi.appendChild(three);
     // chi.appendChild(document.createElement('br'));

     par.appendChild(chi); //the card gets added to the div

     var gap = document.createElement('br');
     par.appendChild(gap);




     $.ajax({
         type: 'POST',
         url: 'all_info.php',
         data: {
             huda: p1
         },
         success: function (result1) {
             //console.log(result1);
             $('#' + p1.toString() + 'company').html(result1);
         },
         error: function () {
             alert('Some error found. Please try again!');
         }
     });

     $.ajax({
         type: 'POST',
         url: 'all_info.php',
         data: {
             tit: p1
         },
         success: function (result2) {

             //console.log(result2.c);
             $('#' + p1.toString() + 'title').html(result2);
         },
         error: function () {
             alert('Some error found. Please try again!');
         }
     });

     $.ajax({
         type: 'POST',
         url: 'all_info.php',
         data: {
             lnk: p1
         },
         success: function (result3) {

             //console.log(result3);
             $('#' + p1.toString() + 'lnk').attr("href", result3);
         },
         error: function () {
             alert('Some error found. Please try again!');
         }
     });




 }

 function remove_card() {
     if (card_count > 0) {
         var par = document.getElementById('mid');
         var chi = document.getElementById('card');
         chi.parentNode.removeChild(chi);
         card_count--;
     }

 }

 function load_shit() {
     for (var i = 0; i < 5; i++) {
         add_card(i);
         card_count++;
     }
 }

 function page_cnt() {
     var all_job_count = '<?php echo $all_job_count; ?>';
     document.getElementById('page_cnt').innerHTML = '<?php echo $all_job_count; ?>';
     alert(all_job_count);

 }
