<html>
<head><title>
For Auto Otp
</title></head>
<body style="background-color:red;">
  <?php
 pre_r($_POST);
 pre_r($_GET);
 if(isset($_POST['submit'])){//The Post form has been submitted
 echo $_POST['fname'].'<br />';
 echo "Hello";
 }
  ?>
<form action="" method="POST">
  <p for="fname">First name:</p>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form>
<h1>
  This is local host for auto otp
  </h1>
</body>
</html>
<?php
function pre_r($array) {
  echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>