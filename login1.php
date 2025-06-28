<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EV Charge Station Login</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
    background-repeat:no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
      background-image:url('login.jpg');
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
     backdrop-filter: blur(20px);
     background-color:rgba(255,255,255,0.7);
     border-radius:2px solid white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color:black;
    }

    .input-group {
      margin-bottom: 15px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color:black;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      font-size: 20px;
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <body>
     
    <div class="login-container">
      <h2>Login to EV Charge Station</h2>
      <form  method="post">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit">Login</button>
      </form>
    
    </div>
  <?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
$user=$_POST['username'];
$mail=$_POST['email'];
$passwrd=$_POST['password'];

$con=mysqli_connect('localhost','root','','evcharge');

  $query="Select username,email,password from reg";
  $result=mysqli_query($con,$query);
 
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{ 
  
  
  if( $row['username']==$user )
  {
  if( $row['email']==$mail)
  { 
    if( $row['password']==$passwrd )
  {
  $sql="insert into login(username,email,password)values('$user','$mail','$passwrd')";
  $d=mysqli_query($con,$sql);
    echo '<script language="javascript">
alert("You have successfully login");
window.location.href="http://localhost/mini%20project/findstation.php";
</script>';
  
  } 
  else{
    echo '<script language="javascript">
alert("Incorrect username or Password!");

</script>';
  } 
}
  }

else{
    echo '<script language="javascript">
alert("This name is not registered!");
window.location.href="http://localhost/mini%20project/register.php";
</script>';
  } 
}
}


mysqli_close($con);
}
?>
</body>

  </body>
</html>
