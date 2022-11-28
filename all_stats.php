<?php
session_start();
include_once("include/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>
  <?php include_once("include/header.php"); ?>
  <?php include_once("include/sidebar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Total Complaints</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Total Complaints</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body"><br>
              <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            $data1 = mysqli_query($conn, "select * from queries where t_email='".$_SESSION['email']."' ");
            if(mysqli_num_rows($data1) > 0){
            while($row = mysqli_fetch_array($data1)){
            ?>
            <tr>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo ucwords($row['name']); ?></td>
                <td><?php echo ucwords($row['email']); ?></td>
                <td><?php echo ucwords($row['subject']); ?></td>
                <td><?php echo ucwords($row['q_date']); ?></td>
                <td>
                    <?php if($row['status']==0){ ?>
                        <h5><span class="badge bg-info">Not Accepted</span></h5>
                    <?php } if($row['status']==1){ ?>
                        <h5><span class="badge bg-primary">Received</span></h5>
                    <?php } else if($row['status']==2){ ?>
                        <h5><span class="badge bg-warning">Pending</span></h5>
                    <?php } else if($row['status']==3){ ?>
                        <h5><span class="badge bg-success">Resolved</span></h5>
                    <?php } ?>
                </td>
            </tr>
            <?php $i++; } } ?>
        </tbody>

        </table>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

</body>

</html>