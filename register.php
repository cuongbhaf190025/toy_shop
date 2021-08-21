<?php
  include('admin/include/conn.php');
  if (isset($_POST['register'])) { 
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $sql="insert into users values ('$user_id','$username','$password','$fullname')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
     echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>

</div>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="register.css"/>
</head>
<body>

<div class="register_box">
  <form method = "post" enctype="multipart/form-data">
    <table align="left" width="70%">
      <tr align="left">
        <td colspan="4"><h2>Register.</h2>
          <br />
          <span> Already have account? <a href="login.php">Login Now.</a><br />
            <br />
          </span></td>
        </tr>   
        <tr>
          <td width="15%"><b>UserName:</b></td>
          <td colspan="3"><input type="text" name="username" placeholder="username" /></td>
        </tr>
        <tr>
          <td width="15%"><b>Password:</b></td>
          <td colspan="3"><input type="password" name="password" placeholder="password" /></td>
        </tr>  
        <tr>
          <td width="15%"><b>Fullname:</b></td>
          <td colspan="3"><input type="fullname" name="fullname" placeholder="fullname" /></td>
        </tr>                 
        <tr align="left">
          <td></td>
          <td colspan="4"><input type="submit" name="register" value="Register" /></td>
        </tr>
      </table>
    </form>
  </div>

</body>
</html>