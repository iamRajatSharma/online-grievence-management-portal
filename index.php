<?php
session_start();
include_once('include/database.php');

if(!isset($_SESSION['name']) or !isset($_SESSION['email'])){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/sidebar.php'); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">

                    <div class="card">

                        <div class="card-body pb-0">
                            <!-- <h5 class="card-title">Website Traffic <span>| Today</span></h5> -->

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                            <?php
                            // status = 1 your application is received
                            // status = 2 your application is pending
                            // status = 3 your application is resolved
                            if($data['flag']==1){ 
                                $query0 = mysqli_query($conn, "select count(id) as total0 from queries where t_email='".$_SESSION['email']."' and status='0' ");
                                $data0 = mysqli_fetch_array($query0);
                                
                                $query1 = mysqli_query($conn, "select count(id) as total1 from queries where t_email='".$_SESSION['email']."' and status='1' ");
                                $data1 = mysqli_fetch_array($query1);

                                $query2 = mysqli_query($conn, "select count(id) as total2 from queries where t_email='".$_SESSION['email']."' and status='2' ");
                                $data2 = mysqli_fetch_array($query2);

                                $query3 = mysqli_query($conn, "select count(id) as total3 from queries where t_email='".$_SESSION['email']."' and status='3' ");
                                $data3 = mysqli_fetch_array($query3);
                            }
                            else{
                                $query0 = mysqli_query($conn, "select count(id) as total0 from queries where email='".$_SESSION['email']."' and status='0' ");
                                $data0 = mysqli_fetch_array($query0);
                                
                                $query1 = mysqli_query($conn, "select count(id) as total1 from queries where email='".$_SESSION['email']."' and status='1' ");
                                $data1 = mysqli_fetch_array($query1);

                                $query2 = mysqli_query($conn, "select count(id) as total2 from queries where email='".$_SESSION['email']."' and status='2' ");
                                $data2 = mysqli_fetch_array($query2);

                                $query3 = mysqli_query($conn, "select count(id) as total3 from queries where email='".$_SESSION['email']."' and status='3' ");
                                $data3 = mysqli_fetch_array($query3);
                            }
                            ?>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: <?php echo $data0['total0']; ?>,
                                                    name: 'Not Accepted'
                                                },
                                                {
                                                    value: <?php echo $data1['total1']; ?>,
                                                    name: 'Received '
                                                },
                                                {
                                                    value: <?php echo $data2['total2']; ?>,
                                                    name: 'Pending'
                                                },
                                                {
                                                    value: <?php echo $data3['total3']; ?>,
                                                    name: 'Resolved'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </section>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>