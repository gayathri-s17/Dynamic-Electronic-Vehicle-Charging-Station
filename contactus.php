<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Document</title>
    <style>
      .main {
        position: relative;
      }
      .main11 p 
      {
        display: inline;
        color: white;
        font-size: 20px;
        word-spacing: 50px;
        position: absolute;
        top: 10px;
        left: 150px;
      }
      .main11 a {
        color: white;
        text-decoration: none;
      }
      .main1 img {
        position: absolute;
        width: 100vw;
        height: 45vh;
        left: -8px;
        top: -20px;
      }
      .main21 {
        position: absolute;
        top: 340px;
        left: 760px;
      }
      .main11 button {
        position: absolute;
        top: 30px;
        right: 250px;
        width: 120px;
        height: 30px;
        border-radius: 20px;
        background-color: green;
        outline: 1px double;
        color: white;
        font-size: 15px;
      }
      .main22 {
        background-color: white;
        box-shadow: 3px 3px 7px 7px rgb(189, 188, 188);
        width: 300px;
        height: 300px;
        border-radius: 5px;
        position: absolute;
        top: 290px;
        left: 200px;
      }
      .main22 button {
        width: 120px;
        height: 30px;
        border-radius: 20px;
        background-color: rgb(59, 1, 1);
        color: white;
      }
      .main21 #ph {
        position: absolute;
        top: 100px;
        left: 20px;
      }
      .main21 #email {
        position: absolute;
        top: 153px;
        left: 20px;
      }



.main1 button {
  position: absolute;
  top:40px;
  right:40px;
  background-color: #13aa52;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.main1 button:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .main1 button {
    padding: 10px 30px;
  }
}
a{
  text-decoration:none;
  
}
    </style>
  </head>
  <body>
    <div class="main">
      <div class="main1">
        <img src="contactus.jpg" />
        <button><a href="http://localhost/mini%20project/login1.php">login</a></button>
        <div class="main11">
                    <p><a href="index.html">Home</a>
          <a href="http://localhost/mini%20project/login1.php">Location</a>
          <a href="aboutus.html"> Aboutus</a>
          <a href="http://localhost/mini%20project/contactus.php">Contactus</a>
          
          </p>
        </div>
        </div>
      </div>
      <div class="main2">
        <div class="main21">
          <h1>Get in Touch</h1>
          <h6>Want to get in touch? we'd love to hear from you</h6>
          <i class="fa fa-phone" aria-hidden="true"></i>
          <h3 id="ph">7845984318</h3>
          <br />
          <br /><br />
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <h4 id="email">evcharge91@gmail.com</h4>
        </div>
        <div class="main22">
          <form  method="post">
            <center>
              <br />
              Name<br /><input type="text" name="name"  required />
              <br />
              <br />
              <br />
              Email<br /><input
                type="email"
                name="email"
               
                required
              /><br />
              <br />
              <br />
              Message<br /><textarea name="message" ></textarea>
              <br />
              <br />
              <button onclick="send()">Send message</button>
            </center>
          </form>
          <?php
          if($_SERVER['REQUEST_METHOD']=="POST")
          {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $message=$_POST['message'];
          $conn=mysqli_connect('localhost','root','','evcharge');
          $sql="insert into contact(Name,Email,Message)values('$name','$email','$message')";
          $db=mysqli_query($conn,$sql);
          }
          ?>
        </div>
      </div>
    </div>
    <script>
      function send()
      {
        alert("Feedback send successfully!");
      }
      </script>
  </body>
</html>
