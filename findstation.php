<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 body{
  /* background-image:linear-gradient(to right,pink,skyblue); */
  background-color:rgb(202, 255, 202);
  /* background-repeat:no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    
      background-image:url('login.jpg'); */
 }
  
.findstation{
  display: fixed;
  box-shadow: 0 0 10px rgb(0, 0, 0);
 background-color:white; 
  width:90vw;
  left:5vw;
  height:1100px;
  position:absolute;
top:20vh;
}
.location{

  top:50px;
  position:absolute;
float:left;
left:150px;
}
select{
text-align:center;
color:green;
outline:2px solid green;
border-radius:10px;
width:200px;
height:40px;
font-size:20px;
}
#button1
{
  height:40px;
  position:absolute;
  text-align:center;
top:0px;
  left:210px;
  width:75px;
  background-color:green;
  color:white;
  font-size:20px;
  text-align:center;
  border-radius:10px;
}
#button2,#button3
{
  width:100px;
  background-color:green;
  color:white;
  font-size:20px;
  text-align:center;
  border-radius:10px;
}
#button4
{
  border-radius:10px;
  background:green;
  color:white;
  padding 15px 25px;
  text-align:center;
  display:inline-block;
  font-size:20px;
  margin:4px 2px;
  cursor:pointer;
}
.checkbox{
  color:green;
  font-size:25px;
accent-color:green;
}
.radio{
  color:green;
  font-size:20px;
accent-color:green;
}
h1
{
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  color:rgba(118, 1, 1, 0.98);
  font-family:italic;
  text-align:center;
  font-size:55px;
}
.find  img{
  
  position:absolute;
  top:0px;
  right:0px;
  padding:0px;
  margin:0px;
  width:50vw;
  height:1100px;
}
.main11 p 
      {
        display: inline;
    
        font-size: 20px;
        word-spacing: 50px;
        position: absolute;
        top: 40px;
        right: 40px;
      }
      .main11 a {
        color: blue;
        text-decoration: none;
      }
      a{
        text-decoration:none;
      }
  </style>
  
<body>
    <form method="post">
    <?php
   session_start();
   ?>
   <div class="main11">
    
                    <p><a href="index.html">Home</a>
          
          <a href="aboutus.html"> Aboutus</a>
          <a href="http://localhost/mini%20project/contactus.php">Contactus</a>
          
          </p></select></div>
  <h1>Find your station</h1></div> 
  
     
    <div class="findstation">
      <div class="find">
    <img src="map.jpg">
</div>
        <div class="location">
          <div class="dropdown">
         <select name="district" id="district" >
        <option >Select District</option>
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chengalpattu">Chengalpattu</option>
       <option value="Chennai">Chennai </option>
        <option value="Coimbatore">Coimbatore </option>
        <option value="Cuddalore">Cuddalore</option>
        <option value="Dharmapuri">Dharmapuri</option>
        <option value="Dindigul">Dindigul</option>
        <option value="Erode">Erode</option>
        <option value="Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram">Kanchipuram</option>
        <option value="Kaniyakumari">Kaniyakumari</option>
        <option value="Karur">Karur</option>
        <option value="Krishnagiri">Krishnagiri</option>
        <option value="Madurai">Madurai</option>
        <option value="Mayiladuthurai">Mayiladuthurai</option>
        <option value="Nagapattinam">Nagapattinam</option>
        <option value="Namakkal">Namakkal</option>
        <option value="Nilgiris">Nilgiris</option>
        <option value="Perambalur">Perambalur</option>
        <option value="Pudukottai">Pudukottai</option>
        <option value="Ramanathapuram">Ramanathapuram</option>
        <option value="Ranipet">Ranipet</option>
        <option value="Salem">Salem</option>
        <option value="Sivagangai">Sivagangai</option>
        <option value="Tenkasi">Tenkasi</option>
        <option value="Thanjavur">Thanjavur</option>
        <option value="Theni">Theni</option>
        <option value="Thoothukudi">Thoothukudi</option>
        <option value="Thiruchirappalli">Tiruchirappalli</option>
        <option value="Tirunelveli">Tirunelveli</option>
        <option value="Tirupathur">Tirupathur</option>
        <option value="Tiruppur">Tiruppur</option>
        <option value="Tiruvallur">Tiruvallur</option>
        <option value="Thiruvannamalai">Thiruvannamalai</option>
        <option value="Tiruvarur">Tiruvarur</option>  
        <option value="Vellore">Vellore</option>
        <option value="Villuppuram">Villuppuram</option>
        <option value="Virudhunagar">Virudhunagar</option>
      </select>
      <br /><br />

<input type="Submit" value="search" name="button1" id="button1">
   <?php
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    if(isset($_POST['district']))
    {
   $select_district=$_POST['district'];
   $sql="select Distinct taluk from station where district='$select_district' ";
$con=mysqli_connect('localhost','root','','evcharge');
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
  echo"<div class='checkbox'>";
 echo"<input type='checkbox' name='taluk[]' value=" .$row['taluk']. ">";
   echo $row['taluk'] ."<br><br>";

 }
echo"</div>";
echo "<button id='button2'>Submit</button>";
}
 }
if(isset($_POST['taluk']))
{
  if( count($_POST['taluk'])>1)
  {
    echo "Please select only one option";
  }
else
{
  $taluks=$_POST['taluk'];
foreach($taluks as $taluk)
{
 $taluk ."<br>";
   $_SESSION['taluk']=$taluk;
}
if(isset($_POST['taluk'])){
$sql="select Distinct station from station where taluk='$taluk' ";
$con=mysqli_connect('localhost','root','','evcharge');
$result=mysqli_query($con,$sql);
}
}
if(mysqli_num_rows($result)>0)
{
  echo" <form method='post'>";   
while($row=mysqli_fetch_assoc($result))
{ 
  echo"<div class='radio'>";
echo"<input type='radio' name='station' value=" .$row['station']. ">";
  echo $row['station']."<br><br>";  
}
echo"<div>";
echo"<button id='button3'>Search</button>";
echo"</form>";
}
}
if(isset($_POST['station']))
{
$selected_station=$_POST['station'];
 $selected_station ."<br>";
  $_SESSION['station']=$selected_station;
echo'<button id="button4" style="color:white"><a href="station.php">Go to map</a></button>';
}
   
mysqli_close($con);
   }
?>
</div>


</div>

  </body>
</html>