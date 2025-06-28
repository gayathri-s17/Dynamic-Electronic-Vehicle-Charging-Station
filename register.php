<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .register-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
      }
      .register-container h2 {
        margin-bottom: 20px;
        color: #333;
      }
      .form-group {
        margin-bottom: 15px;
      }
      .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
      }
      .form-group input {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .form-group input:focus {
        border-color: #007bff;
        outline: none;
      }
      .register-btn {
        width: 100%;
        padding: 10px;
        background-color: #0b906c;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
      }
      .register-btn:hover {
        background-color: #0056b3;
      }
    </style>
    <?php 
    session_start();
    ?>
  </head>
  <body>
    <div class="register-container">
      <h2>Register</h2>
      <form method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="username" id="username" name="username"   required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password"  required />
        </div>
        <button type="submit" class="register-btn">Register</button>
      </form>
    </div>
  <?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','evcharge');
 
  $query="Select * from reg where username='$username'";
  $check_name=mysqli_query($con,$query);
   $sqlquery="Select * from reg where email='$email'";
  $check_email=mysqli_query($con,$sqlquery);
  if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
  {
if($check_name && mysqli_num_rows($check_name)>0)
{
    echo '<script language="javascript">
alert("This name is already registered");
window.location.href="http://localhost/mini%20project/login1.php";
</script>';
}
  elseif($check_email && mysqli_num_rows($check_email)>0){
    echo '<script language="javascript">
alert("This email is already registered");
window.location.href="http://localhost/mini%20project/login1.php";
</script>';
  }
  else{
     $sql="insert into reg(username,email,password) values ('$username','$email','$password')";
    $d=mysqli_query($con,$sql);
    echo '<script language="javascript">
alert("You have successfully Registered");
window.location.href="http://localhost/mini%20project/findstation.php";
</script>';
  }
  
  }
  
  mysqli_close($con);
   } 
   ?>
   </body>
</html>
