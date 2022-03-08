<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

<style>
body, h3, h4 {
 font-family: 'Prompt', sans-serif;
}
</style>

<?php
include("connection/config.inc.php");

$txt_id = $_POST['txt_id'];
$txt_fullname = $_POST['txt_fullname'];
//$txt_username = $_POST['txt_username'];
$txt_password = $_POST['txt_password'];
$txt_repassword = $_POST['txt_repassword'];

 echo "<br>";


$sql = "UPDATE tbl_member SET fullname='$txt_fullname', password='$txt_password' WHERE id='$txt_id'";
$objQuery = mysqli_query($conn, $sql);
if($objQuery) {
    echo"
    <script>
            Swal.fire({
                icon: 'success',
                title: '<h3>ระบบทำการปรับปรุงข้อมูลสำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>
    ";
}else{
    echo"
    <script>
            Swal.fire({
                icon: 'error',
                title: '<h3>เกิดข้อผิดพลาด!</h3>',
                type: 'error',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>
    ";
}

?>