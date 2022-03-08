<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,600;0,900;1,300;1,400&display=swap" rel="stylesheet">

<?php
include("connection/config.inc.php");
$mid = $_GET['m_id'];

$sql = "DELETE FROM tbl_member WHERE id=$mid";
$objQuery = mysqli_query($conn, $sql); //สั่งให้ $conn, $sql ทำงาน
if($objQuery) {
    header('location:memberList.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
if(mysqli_query($conn,$sql)) {
    echo"
    <script>
            Swal.fire({
                icon: 'error',
                title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>
    ";
  }
   else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  };