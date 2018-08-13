var card_count = 0;
var all_job_count = 0;

function add_card(p1) {
    var lat = p1;

    var par = document.getElementById('mid'); ///main parent div
    var chi = document.createElement('div'); ///child div for card
    chi.className = 'card';
    chi.id = 'card';


    var one = document.createElement('h5');
    one.id = p1.toString() + 'title';
    // var tit = document.createTextNode('title'); 
    // one.appendChild(tit);

    var two = document.createElement('h6');
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
    gap.id = 'gap';
    par.appendChild(gap);




    $.ajax({
        type: 'POST',
        url: 'all_info.php',
        data: {
            cmp: p1
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
    while (card_count > 0) {
        var par = document.getElementById('mid');
        var chi = document.getElementById('card');
        var g = document.getElementById('gap');
        chi.parentNode.removeChild(chi);
        g.parentNode.removeChild(g);
        card_count--;
    }

}

function load_shit() {

    $.ajax({
        type: 'POST',
        url: 'all_info.php',
        data: {
            count: 'count'
        },
        success: function (result4) {

            $('#count').html(result4); // created a dummy p to get job count properly

        },
        error: function () {
            alert('Some error found. Please try again!');
        }

    });

    for (var i = 0; i < 10; i++) {
        //console.log(typeof i);
        add_card(i);
        card_count++;
    }
}

function load_cards(s_ind, f_ind) {
    
    remove_card();
    
    all_job_count = document.getElementById('count').innerHTML;
    
    for (var i = s_ind; i < f_ind; i++) {

        if (i < all_job_count) {
            add_card(i);
            card_count++;
        }

    }
}

function get_index(item) {

    var ind = item.innerHTML.replace(/\s+/g, ''); //removing white spaces
    //console.log(ind);  //this this is the index from where cards should load
    //console.log(ind.length);
    var ff = (parseInt(ind) * 10).toString();
    var ee = ((parseInt(ind) * 10) + 10).toString();
    load_cards(ff, ee);

}

$(document).ready(function () {
    $('#pagination pagination-sm .page-link').click(function () {
        var id = this.id;
        alert(id);
    });
});


function page_cnt() {
    var all_job_count = '<?php echo $all_job_count; ?>';
    document.getElementById('page_cnt').innerHTML = '<?php echo $all_job_count; ?>';
    alert(all_job_count);

}
