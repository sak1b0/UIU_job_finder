<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/cv_display_style.css" ;>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<script src="scripts/main.js"></script>
<link rel="stylesheet" href="/css/animate.css" ;>

<body onload="load_init()">
    <?php include"all_info.php"; ?>

    <head>




        <!-- needed for the BS4  start -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- needed for the BS4  end -->
        <div class="navbar navbar-light bg-light" style="position:fixed;">
            <div class="col"></div>
            <div class="row">
                <div class="col">
                    <form class="form-inline" method="post">
                        <input class="form-control mr-lg-4" type="text" id="s" name="s" value="" placeholder="Search Jobs">
                        <button class="btn btn-success" id="sbutton" type="submit">Search</button>

                    </form>



                </div>
            </div>


            <div class="col"></div>

        </div>

    </head>
    <div class="row" style="padding-bottom:50px;"></div>

    <!--script src="main.js"></script-->
    <div class="bottom">

        <!--div class="row">
        <div class="col"></div>
        <div class="col">
            <div id="demo" align="center">
                <h2 id="jinish" style="font-size: 30px;">Click me!</h2>
                <button type="button" class="btn btn-primary" onclick="load_shit()">add card</button>
                <h2 id="page_cnt" style="font-size: 30px;">Page count!</h2>
                <button type="button" onclick="remove_card()">remove card</button>

            </div>
        </div>
        <div class="col"></div>

    </div-->


        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div id="mid" align="center">

                    <!-- i forgot what happens here :p -->
                    <div style="padding-top:10px;"></div>

                </div>

            </div>

            <div class="col"></div>
        </div>

        <div class="row" align="center">
            <!-- main things happens here -->
            <div class="col"></div>
            <div class="col" id="pagesection">
                <ul class="pagination justify-content-center sm" style="margin:20px 0">
                    <?php 
                        for($i=0;$i<$all_job_count/10;$i++)
                        { ?>

                    <li class="page-item" id="<?php echo $i; ?>">
                        <a class="page-link" onclick="get_index(this)" id="<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>


                    <?php   } ?>

                </ul>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col" align="center" id="pagenumber">
                <h4 class="animated shake">Available jobs right now : <span id="count" class="badge badge-primary">New</span></h4>
            </div>
            <div class="col"></div>

        </div>

    </div>

</body>

</html>
