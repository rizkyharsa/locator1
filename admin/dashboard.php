<?php
session_start();
error_reporting(0);
include('dbconnect.php');

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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="hiddenMap">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel panel-info">
                    <div class="row">
                        <div class="col-md-8">
                            <section class="panel primary">
                                <div class="panel-body">
                                    <div style="width:90%; float:left; border-style: ridge;">
                                        <div style="width:100%; height: 450px;" id="map"></div>
                                        <div id="table">

                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="panel" id='boxlegenda'>
                                <div class="panel-body">
                                    <a class="btn btn-info btn-lg btn-block" href="lecturehall.php">All lecture hall</a>
                                    <a class="btn btn-info btn-lg btn-block" href="examhall.php">All exam hall</a>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    </div><!-- /#right-panel -->



    <!-- Right Panel -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiwHcy_kV1-LFQc9DkxxQ2rwjXpQWqtL0&callback=initMap" async defer></script>
    
    <script type="text/javascript">
        
    </script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <!-- <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script> -->
    <!-- <script src="assets/js/dashboard.js"></script> -->
    <!-- <script src="assets/js/widgets.js"></script> -->
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        /* (function($) {
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
        })(jQuery); */
    </script>
    <script src="script.js" type="text/javascript"></script>
    <!-- <script src="assets/js/init-scripts/chart-js/chartjs-init.js"></script> -->
</body>

</html>