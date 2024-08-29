<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanskriti Srijan Academy | Gallery</title>
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        /*
        .modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}
        
*/
        .head_gal {
            text-align: center;
            padding: 30px 0 5px 0;
        }

        .border {
            background: #fc0018;
            height: 3px;
            width: 15%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        .align {
            display: flex;
            margin: 0 auto;
            padding-bottom: 10px;
        }
    </style>


</head>

<body>

    <!--gt Wrapper Start-->
    <div class="gt_wrapper">

        <!--Header Wrap Start-->
        <?php include 'header.php'; ?>
        <!--Header Wrap End-->

        <!--Sub Banner Wrap Start -->
        <div class="gt_sub_banner_bg default_width">
            <div class="container">
                <div class="gt_sub_banner_hdg  default_width">
                    <?php $id = $_GET['id']; ?>
                    <h3><?php echo $id ?></h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a><?php echo $id ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Sub Banner Wrap End -->

        <!--Main Content Wrap Start-->
        <!--Main Content Wrap Start-->
        <div class="gt_main_content_wrap">
            <section>
                <div class="container">
                <div class="row">
                    <?php
                    include('srjbeckend/config.php');
                    $sql = "SELECT * FROM gallery WHERE title='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <!-- <div class="row">
                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="srjbeckend/images/<?php echo $row['name']; ?>"></a></div>
        
                            </div> -->

                            
                                <div class="col-lg-3 col-sm-4 col-xs-6">
                                    <a title="Sanskriti Srijan Academy Gallery" href="#">
                                        <img class="thumbnail img-responsive" src="srjbeckend/images/<?php echo $row['name']; ?>">
                                    </a></div>


                                
                            
                    <?php

                        }
                    }
                    ?>
</div>
                    <?php
                    if ($_REQUEST['id'] == 'Annual Function') {

                    ?>


                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Annual Function (2018-19)</h3>
                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>
                        <!--    <span style="text-align:center"><img src="images/hdg-01.png" alt=""></span>-->
                        <div class="row">
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/1.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/2.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/3.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/4.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/5.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/6.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/7.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/8.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/9.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/10.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2018-19/11.png"></a></div>


                            <hr>
                        </div>

                    <?php
                    } elseif ($_REQUEST['id'] == 'Annual Function (2019-20)') {

                    ?>

                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Annual Function (2019-20)</h3>

                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                        <div class="row">

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/1.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/2.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/3.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/4.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/5.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/6.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/7.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/8.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/9.png"></a></div>


                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/10.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/11.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/12.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/13.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/14.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/15.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/16.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/annual-function-2019-20/17.png"></a></div>

                        </div>


                    <?php
                    } elseif ($_REQUEST['id'] == 'Play on Election') {

                    ?>

                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Play on Election</h3>

                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                        <div class="row">

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/1.png"></a></div>
                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/2.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/3.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/4.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/5.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/6.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/7.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/8.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/9.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/10.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/11.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/12.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/13.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/14.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/15.png"></a></div>



                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/16.png"></a></div>

                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/play-on-election/17.png"></a></div>


                        <?php
                    } elseif ($_REQUEST['id'] == 'Lion Club') {

                        ?>

                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Lion's Club</h3>

                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                            <div class="row">

                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/lions-club/1.png"></a></div>
                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/lions-club/2.png"></a></div>


                            <?php
                        } elseif ($_REQUEST['id'] == 'Ambedkar Jayanti') {

                            ?>

                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Ambedkar Jayanti (14-04-2019)</h3>

                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                <div class="row">

                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/ambedkar-jayanti-14-04-2019/1.png"></a></div>
                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/ambedkar-jayanti-14-04-2019/2.png"></a></div>

                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/ambedkar-jayanti-14-04-2019/3.png"></a></div>

                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/ambedkar-jayanti-14-04-2019/4.png"></a></div>



                                <?php
                            } elseif ($_REQUEST['id'] == 'Spell Bee Competition') {

                                ?>

                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Spell Bee Competition</h3>

                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                    <div class="row">

                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/spell-bee-competition/1.png"></a></div>
                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/spell-bee-competition/2.png"></a></div>



                                    <?php
                                } elseif ($_REQUEST['id'] == 'International Labour Day') {

                                    ?>

                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">International Labour Day (01-05-2019)</h3>

                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                        <div class="row">

                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/international-labour-day-01-05-2019/1.png"></a></div>
                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/international-labour-day-01-05-2019/2.png"></a></div>

                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/international-labour-day-01-05-2019/3.png"></a></div>

                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/international-labour-day-01-05-2019/4.png"></a></div>

                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/international-labour-day-01-05-2019/5.png"></a></div>




                                        <?php
                                    } elseif ($_REQUEST['id'] == 'Environment Day') {

                                        ?>

                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Environment Day</h3>

                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                            <div class="row">

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/1.png"></a></div>
                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/2.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/3.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/4.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/5.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/6.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/7.png"></a></div>

                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/environment-day/8.png"></a></div>


                                            <?php
                                        } elseif ($_REQUEST['id'] == 'Summer Camp') {

                                            ?>

                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Summer Camp (2019)</h3>

                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                <div class="row">

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/1.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/2.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/3.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/4.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/5.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/6.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/7.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/8.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/9.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/10.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/11.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/12.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/13.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/14.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/15.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/16.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/17.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/18.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/19.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/20.png"></a></div>

                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/21.png"></a></div>
                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/summer-camp-2019/22.png"></a></div>



                                                <?php
                                            } elseif ($_REQUEST['id'] == 'Independence Day And Raksha Bandhan') {

                                                ?>

                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Independence Day And Raksha Bandhan</h3>

                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                    <div class="row">

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/1.png"></a></div>
                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/2.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/3.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/4.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/5.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/6.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/7.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/8.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/9.png"></a></div>

                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/10.png"></a></div>
                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/11.png"></a></div>
                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/12.png"></a></div>
                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/independence-day-raksha-bandhan-15-08-2019/13.png"></a></div>


                                                    <?php
                                                } elseif ($_REQUEST['id'] == 'Janmastmi Celebrations') {

                                                    ?>

                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Janmastmi Celebrations (22.08.2019)</h3>

                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                        <div class="row">

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/1.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/2.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/3.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/4.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/5.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/6.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/7.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/8.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/9.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/10.png"></a></div>

                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/11.png"></a></div>
                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/12.png"></a></div>
                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/janmastmi-celebrations-22-08-2019/13.png"></a></div>




                                                        <?php
                                                    } elseif ($_REQUEST['id'] == 'Teachers Day') {

                                                        ?>

                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Teachers Day (05.09.2019)</h3>

                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                            <div class="row">

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/1.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/2.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/3.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/4.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/5.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/6.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/7.png"></a></div>

                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-day-05-09-2019/8.png"></a></div>

                                                            <?php
                                                        } elseif ($_REQUEST['id'] == 'Hindi Diwas') {

                                                            ?>

                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Hindi Diwas (14.09.2019)</h3>

                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                <div class="row">

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/1.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/2.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/3.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/4.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/5.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/6.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/7.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/8.png"></a></div>

                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/9.png"></a></div>
                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/hindi-diwas-14-09-2019/10.png"></a></div>


                                                                <?php
                                                            } elseif ($_REQUEST['id'] == 'Gandhi Jayanti') {

                                                                ?>

                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Gandhi Jayanti (02.10.2019)</h3>

                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                    <div class="row">

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/1.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/2.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/3.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/4.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/5.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/6.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/7.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/8.png"></a></div>

                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/9.png"></a></div>
                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gandhi-jayanti-02-10-2019/10.png"></a></div>



                                                                    <?php
                                                                } elseif ($_REQUEST['id'] == 'Dusshera Celebrations') {

                                                                    ?>

                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Dusshera Celebrations (05.10.2019)</h3>

                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                        <div class="row">

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/1.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/2.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/3.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/4.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/5.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/6.png"></a></div>

                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/dusshera-celebrations-05-10-2019/7.png"></a></div>


                                                                        <?php
                                                                    } elseif ($_REQUEST['id'] == 'Diya Decoration And Rangoli Competition') {

                                                                        ?>

                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Diya Decoration & Rangoli Competition (25-10-2019)</h3>

                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                            <div class="row">

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/1.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/2.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/3.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/4.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/5.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/6.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/7.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/8.png"></a></div>

                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/diya-decoration-rangoli-competition-25-10-2019/9.png"></a></div>


                                                                            <?php
                                                                        } elseif ($_REQUEST['id'] == 'English Fest') {

                                                                            ?>

                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">English Fest (04.10.2019)</h3>

                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                <div class="row">

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/1.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/2.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/3.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/4.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/5.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/6.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/7.png"></a></div>

                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/english-fest-04-10-2019/8.png"></a></div>




                                                                                <?php
                                                                            } elseif ($_REQUEST['id'] == "Childern's Day") {

                                                                                ?>

                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Childern's Day (14-11-2019)</h3>

                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                    <div class="row">

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/1.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/2.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/3.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/4.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/5.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/6.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/7.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/8.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/9.png"></a></div>

                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/childerns-day-14-11-2019/10.png"></a></div>





                                                                                    <?php
                                                                                } elseif ($_REQUEST['id'] == "Save Water") {

                                                                                    ?>

                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Save Water</h3>

                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                        <div class="row">

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/1.png"></a></div>

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/2.png"></a></div>

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/3.png"></a></div>

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/4.png"></a></div>

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/5.png"></a></div>

                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/save-water/6.png"></a></div>



                                                                                        <?php
                                                                                    } elseif ($_REQUEST['id'] == "GK Quiz And Art And Craft Exhibition") {

                                                                                        ?>

                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">GK Quiz & Art & Craft Exhibition</h3>

                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                            <div class="row">

                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gk-quiz-art-craft-exhibition/1.png"></a></div>

                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gk-quiz-art-craft-exhibition/2.png"></a></div>

                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gk-quiz-art-craft-exhibition/3.png"></a></div>

                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/gk-quiz-art-craft-exhibition/4.png"></a></div>




                                                                                            <?php
                                                                                        } elseif ($_REQUEST['id'] == "Motivational Session'19") {

                                                                                            ?>

                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;"> Motivational Session'19</h3>

                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                <div class="row">

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/1.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/2.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/3.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/4.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/5.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/6.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/7.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/8.png"></a></div>
                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/9.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/10.png"></a></div>
                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/11.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/12.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/13.png"></a></div>

                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/motivational-session-19/14.png"></a></div>


                                                                                                <?php
                                                                                            } elseif ($_REQUEST['id'] == "Republic Day") {

                                                                                                ?>

                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;"> Republic Day</h3>

                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                    <div class="row">

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/1.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/2.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/3.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/4.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/5.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/6.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="imgrepublic-day-26-01-2020/7.png"></a></div>

                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/republic-day-26-01-2020/8.png"></a></div>


                                                                                                    <?php
                                                                                                } elseif ($_REQUEST['id'] == "Inter-School Science Competition") {

                                                                                                    ?>

                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;"> Inter-School Science Competition</h3>

                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                        <div class="row">

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/1.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/2.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/3.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/4.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/5.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/6.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/7.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/8.png"></a></div>

                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-competition-13-02-2020/9.png"></a></div>


                                                                                                        <?php
                                                                                                    } elseif ($_REQUEST['id'] == "Inter-School Science Quiz Competition") {

                                                                                                        ?>

                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;"> Inter-School Science Quiz Competition</h3>

                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                            <div class="row">

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/1.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/2.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/3.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/4.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/5.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/6.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/7.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/8.png"></a></div>

                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/inter-school-science-quiz-competition/9.png"></a></div>



                                                                                                            <?php
                                                                                                        } elseif ($_REQUEST['id'] == "Teachers' Tour to Mangarh") {

                                                                                                            ?>

                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;"> Teachers' Tour to Mangarh</h3>

                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                <div class="row">

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/1.png"></a></div>

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/2.png"></a></div>

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/3.png"></a></div>

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/4.png"></a></div>

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/5.png"></a></div>

                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-tour-to-mangarh/6.png"></a></div>


                                                                                                                <?php
                                                                                                            } elseif ($_REQUEST['id'] == "Indian Oil Art Competition") {

                                                                                                                ?>

                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;"> Indian Oil Art Competition</h3>

                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                    <div class="row">

                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/indian-oil-art-competition/1.png"></a></div>

                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/indian-oil-art-competition/2.png"></a></div>

                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/indian-oil-art-competition/3.png"></a></div>

                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/indian-oil-art-competition/4.png"></a></div>

                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/indian-oil-art-competition/5.png"></a></div>

                                                                                                                        <!--New Gallery-->

                                                                                                                    <?php
                                                                                                                } elseif ($_REQUEST['id'] == '15th Aug Prabhat Feri') {

                                                                                                                    ?>

                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">15th Aug Prabhat Feri</h3>

                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                        <div class="row">

                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                        class="thumbnail img-responsive" src="img/15th-aug-prabhat-feri/1.png"></a></div>
                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                        class="thumbnail img-responsive" src="img/15th-aug-prabhat-feri/2.png"></a></div>
                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                        class="thumbnail img-responsive" src="img/15th-aug-prabhat-feri/3.png"></a></div>
                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                        class="thumbnail img-responsive" src="img/15th-aug-prabhat-feri/4.png"></a></div>

                                                                                                                        <?php
                                                                                                                    } elseif ($_REQUEST['id'] == 'Drawing and Poster Making Competition') {

                                                                                                                        ?>

                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Drawing and Poster Making Competition</h3>

                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                            <div class="row">

                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                            class="thumbnail img-responsive" src="img/drawing-and-poster-making-competition/1.png"></a></div>
                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                            class="thumbnail img-responsive" src="img/drawing-and-poster-making-competition/2.png"></a></div>
                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                            class="thumbnail img-responsive" src="img/drawing-and-poster-making-competition/3.png"></a></div>
                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                            class="thumbnail img-responsive" src="img/drawing-and-poster-making-competition/4.png"></a></div>

                                                                                                                            <?php
                                                                                                                        } elseif ($_REQUEST['id'] == 'dusshera') {

                                                                                                                            ?>

                                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Dusshera</h3>

                                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                <div class="row">

                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                class="thumbnail img-responsive" src="img/dusshera/1.png"></a></div>
                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                class="thumbnail img-responsive" src="img/dusshera/2.png"></a></div>
                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                class="thumbnail img-responsive" src="img/dusshera/3.png"></a></div>

                                                                                                                                <?php
                                                                                                                            } elseif ($_REQUEST['id'] == 'farewell 10th') {

                                                                                                                                ?>

                                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Farewell 10th</h3>

                                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                    <div class="row">

                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                    class="thumbnail img-responsive" src="img/farewell-10th/1.png"></a></div>
                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                    class="thumbnail img-responsive" src="img/farewell-10th/2.png"></a></div>

                                                                                                                                    <?php
                                                                                                                                } elseif ($_REQUEST['id'] == 'games') {

                                                                                                                                    ?>

                                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Games</h3>

                                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                        <div class="row">

                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                        class="thumbnail img-responsive" src="img/games/1.png"></a></div>
                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                        class="thumbnail img-responsive" src="img/games/2.png"></a></div>
                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                        class="thumbnail img-responsive" src="img/games/3.png"></a></div>


                                                                                                                                        <?php
                                                                                                                                    } elseif ($_REQUEST['id'] == 'gandhi jayanti') {

                                                                                                                                        ?>

                                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Gandhi Jayanti</h3>

                                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                            <div class="row">

                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                            class="thumbnail img-responsive" src="newimg/gandhi-jayanti/1.jpg"></a></div>
                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                            class="thumbnail img-responsive" src="newimg/gandhi-jayanti/2.jpg"></a></div>
                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                            class="thumbnail img-responsive" src="newimg/gandhi-jayanti/3.jpg"></a></div>

                                                                                                                                            <?php
                                                                                                                                        } elseif ($_REQUEST['id'] == 'guru purnima') {

                                                                                                                                            ?>

                                                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Guru Purnima</h3>

                                                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                <div class="row">

                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                class="thumbnail img-responsive" src="newimg/guru-purnima/1.jpg"></a></div>
                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                class="thumbnail img-responsive" src="newimg/guru-purnima/2.jpg"></a></div>

                                                                                                                                                <?php
                                                                                                                                            } elseif ($_REQUEST['id'] == 'hindi divas') {

                                                                                                                                                ?>

                                                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Hindi Divas</h3>

                                                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                    <div class="row">

                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/hindi-divas/1.jpg"></a></div>
                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/hindi-divas/2.jpg"></a></div>
                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/hindi-divas/3.jpg"></a></div>

                                                                                                                                                    <?php
                                                                                                                                                } elseif ($_REQUEST['id'] == 'independence day') {

                                                                                                                                                    ?>

                                                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Independence Day</h3>

                                                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                        <div class="row">

                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/independence-day/1.jpg"></a></div>
                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/independence-day/2.jpg"></a></div>
                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/independence-day/3.jpg"></a></div>

                                                                                                                                                        <?php
                                                                                                                                                    } elseif ($_REQUEST['id'] == 'investiture ceremonmy') {

                                                                                                                                                        ?>

                                                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Investiture Ceremonmy</h3>

                                                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                            <div class="row">

                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/investiture-ceremonmy/1.jpg"></a></div>
                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/investiture-ceremonmy/2.jpg"></a></div>
                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/investiture-ceremonmy/3.jpg"></a></div>
                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/investiture-ceremonmy/4.jpg"></a></div>

                                                                                                                                                            <?php
                                                                                                                                                        } elseif ($_REQUEST['id'] == 'janmashtmi') {

                                                                                                                                                            ?>

                                                                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Janmashtmi</h3>

                                                                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                <div class="row">

                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/janmashtmi/1.jpg"></a></div>
                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/janmashtmi/2.jpg"></a></div>
                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/janmashtmi/3.jpg"></a></div>

                                                                                                                                                                <?php
                                                                                                                                                            } elseif ($_REQUEST['id'] == 'mothers day') {

                                                                                                                                                                ?>

                                                                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Mothers Day</h3>

                                                                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                    <div class="row">

                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/1.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/2.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/3.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/4.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/5.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/6.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/7.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/8.jpg"></a></div>
                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/mothers-day/9.jpg"></a></div>

                                                                                                                                                                    <?php
                                                                                                                                                                } elseif ($_REQUEST['id'] == 'National Sports day') {

                                                                                                                                                                    ?>

                                                                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">National Sports Day</h3>

                                                                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                        <div class="row">

                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/national-sports-day/1.jpg"></a></div>
                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/national-sports-day/2.jpg"></a></div>

                                                                                                                                                                        <?php
                                                                                                                                                                    } elseif ($_REQUEST['id'] == 'outdoor activity') {

                                                                                                                                                                        ?>

                                                                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Outdoor Activity</h3>

                                                                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                            <div class="row">

                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/outdoor-activity/1.jpg"></a></div>
                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/outdoor-activity/2.jpg"></a></div>
                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/outdoor-activity/3.jpg"></a></div>

                                                                                                                                                                            <?php
                                                                                                                                                                        } elseif ($_REQUEST['id'] == 'rakhi competition') {

                                                                                                                                                                            ?>

                                                                                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Rakhi Competition</h3>

                                                                                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                <div class="row">

                                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/rakhi-competition/1.jpg"></a></div>
                                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/rakhi-competition/2.jpg"></a></div>
                                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/rakhi-competition/3.jpg"></a></div>

                                                                                                                                                                                <?php
                                                                                                                                                                            } elseif ($_REQUEST['id'] == 'rangoli making compettion') {

                                                                                                                                                                                ?>

                                                                                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Rangoli Making Compettion</h3>

                                                                                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                    <div class="row">

                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/rangoli-making-compettion/1.jpg"></a></div>

                                                                                                                                                                                    <?php
                                                                                                                                                                                } elseif ($_REQUEST['id'] == 'story telling activity') {

                                                                                                                                                                                    ?>

                                                                                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Story Telling Activity</h3>

                                                                                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                        <div class="row">

                                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/story-telling-activity/1.jpg"></a></div>
                                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/story-telling-activity/2.jpg"></a></div>
                                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/story-telling-activity/3.jpg"></a></div>

                                                                                                                                                                                        <?php
                                                                                                                                                                                    } elseif ($_REQUEST['id'] == 'summer camp') {

                                                                                                                                                                                        ?>

                                                                                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;">Summer Camp</h3>

                                                                                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                            <div class="row">

                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/summer-camp/1.jpg"></a></div>
                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/summer-camp/2.jpg"></a></div>
                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/summer-camp/3.jpg"></a></div>
                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                            class="thumbnail img-responsive" src="newimg/summer-camp/4.jpg"></a></div>

                                                                                                                                                                                            <?php
                                                                                                                                                                                        } elseif ($_REQUEST['id'] == 'teachers day') {

                                                                                                                                                                                            ?>

                                                                                                                                                                                                <h3 class="title" style="text-align:center; padding-bottom:15px;">Teachers Day</h3>

                                                                                                                                                                                                <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                                <div class="row">

                                                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/teachers-day/1.jpg"></a></div>
                                                                                                                                                                                                    <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                class="thumbnail img-responsive" src="newimg/teachers-day/2.jpg"></a></div>

                                                                                                                                                                                                <?php
                                                                                                                                                                                            } elseif ($_REQUEST['id'] == 'van mahotsav') {

                                                                                                                                                                                                ?>

                                                                                                                                                                                                    <h3 class="title" style="text-align:center; padding-bottom:15px;">Van Mahotsav</h3>

                                                                                                                                                                                                    <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                                    <div class="row">

                                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/van-mahotsav/1.jpg"></a></div>
                                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/van-mahotsav/2.jpg"></a></div>
                                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/van-mahotsav/3.jpg"></a></div>
                                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/van-mahotsav/4.jpg"></a></div>
                                                                                                                                                                                                        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                    class="thumbnail img-responsive" src="newimg/van-mahotsav/5.jpg"></a></div>

                                                                                                                                                                                                    <?php
                                                                                                                                                                                                } elseif ($_REQUEST['id'] == 'science exhibition') {

                                                                                                                                                                                                    ?>

                                                                                                                                                                                                        <h3 class="title" style="text-align:center; padding-bottom:15px;">Science Exhibition</h3>

                                                                                                                                                                                                        <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                                        <div class="row">

                                                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/science-exhibition/1.jpg"></a></div>
                                                                                                                                                                                                            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img
                                                                                                                                                                                                                        class="thumbnail img-responsive" src="newimg/science-exhibition/2.jpg"></a></div>

                                                                                                                                                                                                            <!--New Gallery-->




                                                                                                                                                                                                        <?php
                                                                                                                                                                                                    } elseif ($_REQUEST['id'] == "Teachers Orientation Program") {

                                                                                                                                                                                                        ?>

                                                                                                                                                                                                            <h3 class="title" style="text-align:center; padding-bottom:15px;"> Teacher's Orientation Program</h3>

                                                                                                                                                                                                            <span class="text-center"><img src="images/hdg-01.png" alt="" class="mb-10 align"></span>

                                                                                                                                                                                                            <div class="row">

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/1.png"></a></div>

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/2.png"></a></div>

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/3.jpg"></a></div>

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/4.jpg"></a></div>

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/5.jpg"></a></div>

                                                                                                                                                                                                                <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sanskriti Srijan Academy Gallery" href="#"><img class="thumbnail img-responsive" src="img/teachers-orientation-program/6.jpg"></a></div>


                                                                                                                                                                                                            <?php

                                                                                                                                                                                                        }

                                                                                                                                                                                                            ?>


                                                                                                                                                                                                            </div>
            </section>
            <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                            <h3 class="modal-title">Heading</h3>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--Main Content Wrap End-->
        <!--Main Content Wrap End-->

        <!--Footer Wrap Start-->
        <?php include 'footer.php'; ?>
        <!--Footer Wrap End-->

        <!--Back to Top Wrap Start-->
        <div class="back-to-top">
            <a href="#home"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--Back to Top Wrap Start-->

    </div>
    <!--gt Wrapper End-->
    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
    <script src="js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="js/wow.min.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('.thumbnail').click(function() {
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({
                    show: true
                });
            });
        });
    </script>
</body>

</html>