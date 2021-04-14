<?php
session_start();
error_reporting(0);
include_once('dbconnect.php');

if (isset($_POST['submit'])) {
    $lecthallname = $_POST['lecthallname'];
    $lecthalldesc = $_POST['lecthalldesc'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $lecthallpic = $_FILES["lecthallpic"]["name"];
    $extension = substr($lecthallpic, strlen($lecthallpic) - 4, strlen($lecthallpic));
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {

        $lecthallpic = md5($lecthallpic) . time() . $extension;
        move_uploaded_file($_FILES["lecthallpic"]["tmp_name"], "images/" . $lecthallpic);
        $sqlinsert = "INSERT INTO lecturehall(LechallName,LechallPic,LechallDesc,Latitude,Longitude)values('$lecthallname','$lecthallpic','$lecthalldesc','$latitude','$longitude')";
        echo '<script>alert("Lecture hall has been added.")</script>';
        echo "<script>window.location.href ='addLectureHall.php'</script>";
        header("Location: addLectureHall.php");
        $LastInsertId = $dbh->lastInsertId();
        if ($LastInsertId > 0) {
        } else {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>

    <title>UUM Locator</title>


    <link rel="apple-touch-icon" href="apple-icon.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <?php include_once('includes/sidebar.php'); ?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php'); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add lecture hall</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <form name="" method="post" action="" enctype="multipart/form-data">

                                <div class="card-body card-block">
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Lecture hall name</label><input type="text" name="lecthallname" value="" class="form-control" id="lecthallname" required="true"></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Lecture hall pic</label><input type="file" name="lecthallpic" value="" class="form-control" id="lecthallpic" required="true"></div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <div class="form-group"><label for="city" class=" form-control-label">Lecture hall description</label><input type="text" name="lecthalldesc" id="lecthalldesc" value="" class="form-control" required="true"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <div class="form-group"><label for="city" class=" form-control-label">Latitude</label><input type="text" name="latitude" id="latitude" value="" class="form-control" required="true"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <div class="form-group"><label for="city" class=" form-control-label">Longitude</label><input type="text" name="longitude" id="longitude" value="" class="form-control" required="true"></div>
                                        </div>
                                    </div>

                                    <p style="text-align: left;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                            <i class="fa fa-dot-circle-o"></i> Add
                                        </button></p>

                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div>
    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiwHcy_kV1-LFQc9DkxxQ2rwjXpQWqtL0&libraries=drawing&callback=initMap" async defer>
        < script src = "vendors/jquery/dist/jquery.min.js"></ script>
    </script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <!-- <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script> -->
    <script src="mapunit.js" type="text/javascript"></script>

</body>

</html>