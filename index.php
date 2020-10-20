<?php 
include "../connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<div class="container">
  <div class="header">
    <h2>ADMIN LOGIN</h2>
  </div>
  <form action="" class="form" name="form1" method="post" id="form">
    
    <div class="form-control">
      <label>UserName</label>
      <input type="text" name="username" id="username" placeholder="Enter UserName" autocomplete="off" required>
  
    </div>
    <div class="form-control">
      <label>Password</label>
      <input type="password" name="password" id="password" placeholder="**********" required>
    
   
    </div>

    <input type="submit" value="SIGN IN" class="btn" name="submit1" >
    <div class="alert alert-danger" id="errormsg" style="margin-top: 10px; display: none;">
  <strong>Invalid!</strong> UserName Or Password
</div>
  </form>
</div>
</body>
</html>
<?php 
if(isset($_POST["submit1"]))
{
  $count=0;
  $username = mysqli_real_escape_string($link,$_POST['username']);
  $password = mysqli_real_escape_string($link,$_POST['password']);
  $res = mysqli_query($link,"select * from admin_login where username='$username' && password='$password'");
  $count=mysqli_num_rows($res);

  if($count == 0)
  {
      ?>
        <script type="text/javascript">
          document.getElementById('errormsg').style.display="block";
        </script>
      <?php
  }
  else{
      ?>
        <script type="text/javascript">
          window.location="demo.php";
        </script>
      <?php
  }
}

?>
