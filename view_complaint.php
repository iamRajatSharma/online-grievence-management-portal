<?php
session_start();
include_once("include/database.php");

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d ');
$time = date('H:i:s');

$id = $_GET['id'];
$test = mysqli_query($conn, "select * from queries where id='$id'");
$res = mysqli_fetch_array($test);

if(isset($_POST['complaint'])){
    $action = mysqli_real_escape_string($conn, $_POST['action']);
    if($action == 3){
      $sql = mysqli_query($conn, "update queries set status='$action', update_date='$date' where id='$id' ");
    }
    else{
      $sql = mysqli_query($conn, "update queries set status='$action' where id='$id' ");
    }   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Validation - NiceAdmin Bootstrap Template</title>
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

    <?php include_once("include/header.php"); ?>
    <?php include_once("include/sidebar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Generate Complaint</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Generate Complaint</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?php if(isset($message)){ echo $message; } ?>
        </div>
        <div class="col-lg-3"></div>

        <div class="col-lg-1"></div>
        <div class="col-lg-10">

          <div class="card"><br>
            <div class="card-body">
            
              <form class="row g-3" action="" method="POST">
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Name</label>
                  <input type="name" class="form-control" id="inputPassword4" value="<?php echo ucwords($res['name']); ?>" disabled>
                </div>
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Email</label>
                  <input type="name" class="form-control" id="inputPassword4" value="<?php echo ucwords($res['email']); ?>" disabled>
                </div>
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Subject</label>
                  <input type="name" class="form-control" id="inputPassword4" value="<?php echo ucwords($res['subject']); ?>">
                </div>
                <div class="col-6">
                  <label for="inputPassword4" class="form-label">Apply Date</label>
                  <input type="name" class="form-control" id="inputPassword4" value="<?php echo ucwords($res['q_date']); ?>">
                </div>
                <div class="col-md-12">
                  <label for="validationDefault01" class="form-label">Message</label>
                  <textarea class="form-control" id="validationDefault01" rows="6" required placeholder="Enter Your Message" name="message"><?php echo ucwords($res['message']); ?></textarea>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">Select Subject</label>
                    <select class="form-select" id="validationDefault04" required="" name="action">
                        <option selected="" disabled="" value="">Select Subject</option>
                        <option value="1">Received</option>
                        <option value="2">Pending (Not Resolved)</option>
                        <option value="3">Resolve</option>
                    </select>
                </div>
                <div class="col-md-4"></div>
                <div class="col-12 text-center">
                  <button class="btn btn-primary" type="submit" name="complaint">Submit form</button>
                </div>
              </form>
              
            </div>
          </div>
          <div class="col-lg-1"></div>
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

</body>

</html>