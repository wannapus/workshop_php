<?php

$mid = $_GET['m_id'];
//echo $mid;

include("connection/config.inc.php");
$sql = "SELECT * FROM tbl_member WHERE id=$mid"; //คำสั่งตึงข้อมูลจากฐานข้อมูล
$objQuery = mysqli_query($conn, $sql); //สั่งให้ $conn, $sql ทำงาน
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);


$id = $objResult['id'];
$fullname = $objResult['fullname'];
$username = $objResult['username'];
$password = $objResult['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page bg-black color-palette">
<div class="register-box">
  <div class="card card-outline card-primary bg-gray-dark color-palette">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>Edit Account</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ป้อนข้อมูลของท่านให้ครบท้วน</p>

      <form action="update.php" method="post">
        <div class="input-group mb-3">
          <input type="hidden" name="txt_id" class="form-control" placeholder="รหัสสมาชิก" value="<?php echo $id; ?>">
          <input type="text" name="txt_fullname" class="form-control" placeholder="ชื่อ-นามสกุล" value="<?php echo $fullname; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="txt_username" class="form-control" placeholder="ชื่อผู้ใช้" value="<?php echo $username; ?>"disabled>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txt_password" class="form-control" placeholder="รหัสผ่าน" value="<?php echo $password; ?>"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="txt_repassword" class="form-control" placeholder="ยืนยันรหัสผ่าน" value="<?php echo $password; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
          <!-- /.col -->
          <div class="col-6 btn btn-block btn-outline-secondary">
            <button type="submit" class="btn btn-primary btn-block bg-indigo color-palette">ปรับปรุงข้อมูล</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

     
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>