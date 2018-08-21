var card_count = 0;
var all_job_count = 0;


$(document).ready(function () {
    $('#sbutton').click(function (a) {
        a.preventDefault(); //stopping the reloading
        remove_card(); //clearing the card div
        let key_item = $('#s').val();
        key_item = key_item.toLowerCase();
        //alert(key_item);
        $.ajax({
            url: 'jobs.csv',
            type: "get",
            dataType: "text",
            success: function (data1) {
                let arr = data1.split(/\r?\n|\r/);
                let match = 0;
                for (let i = 1; i < arr.length - 1; i++) {
                    let line = arr[i].split(","); //all info title,company,link in one line

                    let title = line[0].toLowerCase();
                    let cmp = line[1].toLowerCase();

                    let link = line[2];

                    if (title.includes(key_item) || cmp.includes(key_item)) {
                        console.log(title);
                        // add_card(i-1);  //because add card is 0 based index

                        $("#mid").append('<div class="card"><h5>' + title + '</h5><h6>' + cmp + '</h6><a href="' + link + '">Read more</div>'); //jquery is <3 lol
                        $('#mid').append('<br>'); //for the gap
                        card_count++;
                        match++;

                    }

                }

                if (match == 0) {
                    alert("Sorry couldn't find anything :( ...");
                    load_init();
                } else {
                    $('#count').html('<h3>Results found on ' + key_item + ' : ' + match + '</h3>');
                    $('#mid').prepend($('#count'));
                    $('#pagenumber').hide();
                    $('#pagesection').hide();
                    $('#mid').prepend('<div class="row justify-content-center " ><button class="btn btn-success" type="button" onclick="load_init()">Go back <--</button></div>');
                    $('#mid').append('<div class="row justify-content-center" ><button class="btn btn-primary" type="button" onclick="load_init()">Go back <--</button></div>');
                
                }
            }
        });
    });
});

function search_item(e) {

    $.ajax({
        url: "jobs.csv",
        dataType: "text",
        success: function (data_rcv) {
            var aray = data_rcv.split(/\r?\n|\r/);
            console.log(aray.length);
        }
    });
}

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

function load_init() {
    $(document).ready(function () {
        $.ajax({
            type: 'POST',
            url: 'all_info.php',
            data: {
                count: 'count'
            },
            success: function (result4) {

                $('#count').text(result4); // created a dummy p to get job count properly

            },
            error: function () {
                alert('Some error found. Please try again!');
            }

        });

        $('#0').addClass("active"); //0 page activated

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

    item.class = "active";

    var ind = item.innerHTML.replace(/\s+/g, ''); //removing white spaces
    item.class = 'active';
    var sel = item.id;

    //j$("opt")
    //console.log(ind);  //this this is the index from where cards should load
    //console.log(ind.length);
    var ff = (parseInt(ind) * 10).toString();
    var ee = ((parseInt(ind) * 10) + 10).toString();
    load_cards(ff, ee);

    $('#' + sel.toString()).siblings().removeClass("active"); // clearing previous selections
    $('#' + sel.toString()).addClass("active");



}



function page_cnt() {
    var all_job_count = '<?php echo $all_job_count; ?>';
    document.getElementById('page_cnt').innerHTML = '<?php echo $all_job_count; ?>';
    alert(all_job_count);

}
