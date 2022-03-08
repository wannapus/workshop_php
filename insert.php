<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include("connection/config.inc.php");

$fullname = $_POST['txt_fullname'];
$username = $_POST['txt_username'];
$password = $_POST['txt_password'];
$repassword = $_POST['txt_repassword'];

/*echo $fullname."<br>";
echo $username."<br>";
echo $password."<br>";
echo $repassword."<br>";*/

$sql = "INSERT INTO tbl_member (id, fullname, username, password, level) VALUES ('', '$fullname', '$username', '$password', 'member')";

if (mysqli_query($conn, $sql)) {
  echo"
  <script>
  Swal.fire({
    icon: 'success',
    title: '',
    showConfirmButton: false,
    title: 'ยินดีต้อนรับสมาชิกใหม่',
    text: '',
    imageUrl: 'https://c.tenor.com/itozhnlvF3IAAAAd/demon-slayer-demon-slayer-rengoku.gif',
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'giphy',
    timer: 5000
  }).then(function() {
    window.location = 'login.php';
});
  </script>";
} else "
<script>
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: '!!!!!!!!!!!!!!!!,
  showConfirmButton: false,
  timer: 2000,
})
</script>";
//https://cdn.fbsbx.com/v/t59.2708-21/274039028_1119993792168670_179156222758444623_n.gif?_nc_cat=108&ccb=1-5&_nc_sid=041f46&_nc_eui2=AeHh9fnRhNmsNibGV4659SXE6ICgA0QmPs7ogKADRCY-zmZ1xuTHlCsKIFJrfkYZD1aw1UD_IECDYWVLvdOxBmFo&_nc_ohc=2ipJs0JFL9wAX8RnnDL&_nc_ht=cdn.fbsbx.com&oh=03_AVJ9y1Iv6tA2zFtj9WWG5AsW4m6bLq5n9tzzsmPF4EgRIw&oe=620D16D3
$conn -> close(); //close mysql

?>