<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/cv_display_style.css" ;>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<script src="scripts/main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" ;>

<body class="sign_in" style="overflow:hidden;">
    <?php //include"all_info.php"; ?>

    <head>


        <!-- needed for the BS4  start -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- needed for the BS4  end -->
        <!-- navbar navbar-light bg-light -->
        <div class="navbar navbar-expand-md bg-bright navbar-bright" style="position:fixed;">
            <a class="navbar-brand" href="index.php">UIU Job Finder</a>



        </div>

    </head>
    <div class="row" style="padding-bottom:50px;"></div>

    <!--script src="main.js"></script-->
    <div class="bottom">




        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div style="padding-top:150px;"></div>
                <div id="mid" align="center">
                    <div class="card" style="padding-top:15px; height:220px;">
                        <form class="form" method="post">
                            <div style="padding-top:10px;">
                                <input class="form-control mr-lg-6 " type="text" id="u_id" name="u_id" value="" placeholder="UIU ID" style="width:350px;"> &nbsp;
                                <input class="form-control mr-lg-6 " type="text" id="u_id" name="u_id" value="" placeholder="Password" style="width:350px;">
                            </div>



                        </form> &nbsp;
                        <script>
                            $(document).ready(function() {
                                $('#login_button').click(function() {
                                    alert('Not available right now');
                                });
                            });

                        </script>
                        <button class="btn btn-success" id="login_button" type="submit" style="width:70px; padding-bottom:30px;">Login</button>
                        <a href="#">Forgot password?</a>
                    </div>
                    <!-- i forgot what happens here :p -->


                </div>

            </div>

            <div class="col"></div>
        </div>





    </div>

</body>

</html>
