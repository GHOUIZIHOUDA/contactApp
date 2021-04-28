<?php include 'config/config.php';

if (isset($_POST['login'])) {

  $email=$_POST['email'];
  $pass=$_POST['pwd'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password ='$pass'";
  $result = mysqli_query($con, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    die("Your username or password is incorrect!");
  } else {

    $_SESSION['login'] = true;

    header("location:logout.php");
  }
}
include 'components/header.php'; 
include '../starter/components/login.php'?>




<script src="assets/js/script.js">
</script>
</body>
</html>