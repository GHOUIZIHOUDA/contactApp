<?php include 'config/config.php';
if(!isset($_SESSION['login'])){
  $_SESSION['login'] = false;
  header("location: index.php");
}

if (isset($_POST["submit"])) {
// echo 'yes';

//   echo '<pre>';
//   var_dump($_POST);
//   echo '</pre>';
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $adress=$_POST['adress'];
  $phone=$_POST['phone'];
  $groupe=$_POST['group'];
  $notes=$_POST['note'];
  $sql="INSERT INTO contacts (`first_name`,`last_name`,`email`,`phone`,`address1`,`group`,`notes`)
  VALUES ('$fname','$lname','$email','$phone','$adress','$groupe','$notes')";
  $result = mysqli_query($con, $sql);
  if ($result) {
   header("location:logout.php");
  }
  else {
    echo $sql ;
  }
}
$sql ="SELECT * FROM contacts";
$result =mysqli_query($con,$sql);
include 'components/pageLogout.php';




?>







<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="./assets/vendor/boostrap/bootstrap.min.js"></script>
<script src="./assets/js/script.js"></script>

</body>
</html>