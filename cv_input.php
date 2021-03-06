<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV information</title>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="vendor/bootstrap/css/mybootstrap.css">
    <link rel="stylesheet" href="css/style_cv.css">
    <link rel="stylesheet" href="css/skill.css">
    <link rel="stylesheet" href="css/cv_display_style.css" ;>
</head>
<div class="bottom">

    <body>


        <div class="container" style="color:#28a745;">
            <form action="#" method="post">
                <div class="row">
                    <h4 style="color:#28a745;">Information for CV</h4>
                    <div class="input-group input-group-icon">
                        <input name="name" type="text" placeholder="Full Name" />
                        <div class="input-icon"><i class="fa fa-user"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input name="id" type="text" placeholder="UIU ID" />
                        <div class="input-icon"><i class="fa fa-file"></i></div>
                    </div>

                    <div class="input-group input-group-icon">
                        <input name="email" type="email" placeholder="Email Address" />
                        <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input name="tel" type="tel" placeholder="Contact Number" />
                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                    </div>

                    <div class="input-group input-group-icon">
                        <input name="tel" type="text" placeholder="Current Address" />
                        <div class="input-icon"><i class="fa fa-home"></i></div>
                    </div>

                    <div class="input-group input-group-icon">
                        <input name="password" type="password" placeholder="Password" />
                        <div class="input-icon"><i class="fa fa-key"></i></div>
                    </div>




                </div>
                <div class="row">
                    <div class="col-half">
                        <h4 style="color:#28a745;">Date of Birth</h4>
                        <div class="input-group">
                            <div class="col-sixth">
                                <input name="date" type="date" placeholder="Date" />
                            </div>

                        </div>
                    </div>
                    <div class="col-half">
                        <h4 style="color:#28a745;">Gender</h4>
                        <div class="input-group">
                            <input name="gender" type="radio" value="male" id="gender-male" />
                            <label for="gender-male">Male</label>
                            <input name="gender" type="radio" value="female" id="gender-female" />
                            <label for="gender-female">Female</label>
                        </div>
                    </div>
                </div>




                <!--skill starts here -->
                <div class="row">
                    <h4 style="color:#28a745;">Please select your Skill Set</h4>
                </div>

                <div class="row">

                    <div class="col">
                        <div class="row">

                            <?php 
                include"all_info.php";   
                sort($arr);
                for($i=0;$i < count($arr); $i++)
                { ?>

                            <label class="containerr"><?php echo $arr[$i]; ?> 
                    &ensp;
                     <input type="checkbox" name="<?php echo $arr[$i]; ?>" value="<?php echo $arr[$i]; ?>" >
                    <span class="checkmark"></span>
                    </label>



                            <?php }  ?>


                        </div>
                        <div class="col-half">
                            <div class="row"></div>

                        </div>



                    </div>



                    <div class="row">



                    </div>

                </div>


                <!--skill ends here -->

                <div class="row">
                    <h4 style="color:#28a745;">Achievements/ECC</h4>
                    <div class="input-group input-group-icon">
                        <textarea placeholder="e.g. programming contests, hackathons etc..." rows="5" cols="60"></textarea>
                    </div>
                </div>

                <div class="row">
                    <h4 style="color:#28a745;">Terms and conditions</h4>
                    <div class="row">

                        <input class="col" type="checkbox" id="terms" required>
                        <label for="terms" style="float:left;color:#28a745;"><h7>I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</h7></label>
                    </div>
                </div>


                <div class="row">

                    <!--form action="#" method="post"-->
                    <a><button id="Submit" class="btn btn-success" type="submit" name="submit"  >Submit</button></a>
                    <!--/form-->
                    <script>
                        $(document).ready(function() {
                            $('#Submit').click(function() {
                                alert('Not available right now');
                            });
                        });

                    </script>
                </div>

            </form>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

            <script src="vendor/bootstrap/js/index.js"></script>


        </div>

    </body>
</div>

</html>
