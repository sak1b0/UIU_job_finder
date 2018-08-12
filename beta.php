<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/cv_display_style.css" ;>

<body>
    <?php include"all_info.php"; ?>

    <head>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8=" crossorigin="anonymous"></script>

        <script src="scripts/main.js"></script>
        
        <!-- needed for the BS4  start -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- needed for the BS4  end -->


    </head>


    <!--script src="main.js"></script-->
    <div id="demo" align="center">
        <h2 id="jinish" style="font-size: 30px;">Click me!</h2>
        <button type="button" class="btn btn-primary" onclick="load_shit()">add card</button>
        <h2 id="page_cnt" style="font-size: 30px;">Page count!</h2>
        <button type="button" onclick="remove_card()">remove card</button>

    </div>

    <div id="mid" align="center">


        <div style="padding-top:10px;"></div>

    </div>

</body>

</html>
