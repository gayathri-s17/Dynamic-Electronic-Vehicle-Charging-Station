<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    body{
        position:relative;
    }
    h1
    {
        
        text-align:center;
        color:blue;
        font-size:40px;
    }
    button {
  position:absolute;
  top:0px;
  right:50px;
  text-decoration:none;
       background-color:skyblue;
      font-size: x-large;
      color: white;
      width: 100px;
      height: 35px;
      border-radius: 50px;
    
    }
   /* .button button {
     color: white; 
  text-decoration: none;
  font-size: 20px;
  border-radius: 10px;
  padding: 10px;
  border: none;
  cursor: pointer;
  background-color: blue;
  text-align: center;
  padding: 10px 15px;

    } */
     
button {
  background-image: linear-gradient(#0dccea, #0d70ea);
  border: 0;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .3) 0 5px 15px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: Montserrat,sans-serif;
  font-size: .9em;
  margin: 5px;
  padding: 10px 15px;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.header{
    position:absolute;
padding:0px;
    /* background-color:pink; */
    width:100vw;
    height:5vw;
}
    iframe{
position:absolute;
top:5vw;
left:-7px;
right:0px;
background-attachment: fixed;
  width:100vw;
  height: 800px;
padding-left:0px;
    }
    a
    {
        text-decoration:none;
    }
  </style>
 <body>
  <form method="post">
   
<?php
session_start();
?>
    <div class="header">
        
    <div class="button">

    <button class="button" style="color: white;"><a href="findstation.php">Back</a></button></div>
  
   
<?php
    if(isset($_SESSION['taluk']) && isset($_SESSION['station'])) 
    {
    echo "<h1>".$_SESSION['taluk'] ." to ".$_SESSION['station']." Station</h1></div>";
    }
    //Ariyalur district ev station
    //532M+28 Ariyalur
    if($_SESSION['taluk'] =='Andimadam' && $_SESSION['station']=='532M+28')
    {
    echo "
   <iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d394481.3394349595!2d78.77238511726327!3d11.153548570675797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54cd554616356d%3A0xe6449434c1fd5ae3!2sAndimadam%2C%20Tamil%20Nadu%20621801!3m2!1d11.329791!2d79.3532489!4m5!1s0x3baadf64aacdec61%3A0x5e78a5240979ce1!2s532M%2B28%2C%20Ariyalur%2C%20Tamil%20Nadu!3m2!1d11.150062499999999!2d79.08331249999999!5e0!3m2!1sen!2sin!4v1743415957736!5m2!1sen!2sin' width='600' height='400' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ariyalur' && $_SESSION['station']=='532M+28') 
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7829.137057688287!2d79.07372914075566!3d11.145477406106313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baadf64aacdec61%3A0x7b67cecaf20a3c78!2sAriyalur%2C%20Tamil%20Nadu!3m2!1d11.140367699999999!2d79.07445!4m5!1s0x3baadf64aacdec61%3A0x5e78a5240979ce1!2s532M%2B28%2C%20Ariyalur%2C%20Tamil%20Nadu!3m2!1d11.150062499999999!2d79.08331249999999!5e0!3m2!1sen!2sin!4v1743416411148!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sendurai' && $_SESSION['station']=='532M+28') 
    
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d724557.3016653762!2d78.71942746679777!3d11.225233725866325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab25c1f76b7e03%3A0x9af31f63ffe374a0!2sSendurai%2C%20Tamil%20Nadu%20621714!3m2!1d11.253426099999999!2d79.1728708!4m5!1s0x3baadf64aacdec61%3A0x5e78a5240979ce1!2s532M%2B28%2C%20Ariyalur%2C%20Tamil%20Nadu!3m2!1d11.150062499999999!2d79.08331249999999!5e0!3m2!1sen!2sin!4v1743416912833!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Udayarpalayam' && $_SESSION['station']=='532M+28') 
    
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125257.89691782164!2d79.10731027369107!3d11.164720943603394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab2a266f6f215f%3A0x121bdb6d5e7fde48!2sUdayarpalayam%2C%20Tamil%20Nadu%20621804!3m2!1d11.1854634!2d79.29651179999999!4m5!1s0x3baadf64aacdec61%3A0x5e78a5240979ce1!2s532M%2B28%2C%20Ariyalur%2C%20Tamil%20Nadu!3m2!1d11.150062499999999!2d79.08331249999999!5e0!3m2!1sen!2sin!4v1743418062078!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }


    //X96V+32 Kumbakonam
    if($_SESSION['taluk'] =='Andimadam' && $_SESSION['station']=='X96V+32')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651944.7193721903!2d79.09656510872401!3d11.195211594756842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54cd554616356d%3A0xe6449434c1fd5ae3!2sAndimadam%2C%20Tamil%20Nadu%20621801!3m2!1d11.329791!2d79.3532489!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1743418433175!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ariyalur' && $_SESSION['station']=='X96V+32') 
    {
     echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250647.9927391862!2d79.06989545330286!3d11.010473960151906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baadf64aacdec61%3A0x7b67cecaf20a3c78!2sAriyalur%2C%20Tamil%20Nadu!3m2!1d11.140367699999999!2d79.07445!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1743418671873!5m2!1sen!2sin' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sendurai' && $_SESSION['station']=='X96V+32') 
    
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250558.15828828077!2d79.12215976036018!3d11.115521107555184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab25c1f76b7e03%3A0x9af31f63ffe374a0!2sSendurai%2C%20Tamil%20Nadu%20621714!3m2!1d11.253426099999999!2d79.1728708!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1743513691424!5m2!1sen!2sin width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
      }
     if($_SESSION['taluk'] =='Udayarpalayam' && $_SESSION['station']=='X96V+32') 
    
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d921829.0037573593!2d78.77433691186035!3d11.57334904349503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab2a266f6f215f%3A0x121bdb6d5e7fde48!2sUdayarpalayam%2C%20Tamil%20Nadu%20621804!3m2!1d11.1854634!2d79.29651179999999!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1743418932482!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
  }

//964G+P3F, Alathiyur
  if($_SESSION['taluk'] =='Andimadam' && $_SESSION['station']=='964G+P3F,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d159281.13733030268!2d79.16889805006498!3d11.329670660587837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54cd554616356d%3A0xe6449434c1fd5ae3!2sAndimadam%2C%20Tamil%20Nadu%20621801!3m2!1d11.329791!2d79.3532489!4m5!1s0x3bab31ac6a832bc5%3A0xd56cd5575fc132b8!2s964G%2BP3F%2C%20Alathiyur%2C%20Tamil%20Nadu!3m2!1d11.3568125!2d79.22517189999999!5e0!3m2!1sen!2sin!4v1743419228422!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ariyalur' && $_SESSION['station']=='964G+P3F,') 
    {
     echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d192459.2293935523!2d79.0910607655467!3d11.23465831644113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baadf64aacdec61%3A0x7b67cecaf20a3c78!2sAriyalur%2C%20Tamil%20Nadu!3m2!1d11.140367699999999!2d79.07445!4m5!1s0x3bab31ac6a832bc5%3A0xd56cd5575fc132b8!2s964G%2BP3F%2C%20Alathiyur%2C%20Tamil%20Nadu!3m2!1d11.3568125!2d79.22517189999999!5e0!3m2!1sen!2sin!4v1743419486702!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sendurai' && $_SESSION['station']=='964G+P3F,') 
    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d137420.42323805462!2d79.15361099111438!3d11.275427721576087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab25c1f76b7e03%3A0x9af31f63ffe374a0!2sSendurai%2C%20Tamil%20Nadu%20621714!3m2!1d11.253426099999999!2d79.1728708!4m5!1s0x3bab31ac6a832bc5%3A0xd56cd5575fc132b8!2s964G%2BP3F%2C%20Alathiyur%2C%20Tamil%20Nadu!3m2!1d11.3568125!2d79.22517189999999!5e0!3m2!1sen!2sin!4v1743419565924!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Udayarpalayam' && $_SESSION['station']=='964G+P3F,') 

    {
      echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d138929.6333894026!2d79.1768238794109!3d11.274274780795302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab2a266f6f215f%3A0x121bdb6d5e7fde48!2sUdayarpalayam%2C%20Tamil%20Nadu%20621804!3m2!1d11.1854634!2d79.29651179999999!4m5!1s0x3bab31ac6a832bc5%3A0xd56cd5575fc132b8!2s964G%2BP3F%2C%20Alathiyur%2C%20Tamil%20Nadu!3m2!1d11.3568125!2d79.22517189999999!5e0!3m2!1sen!2sin!4v1743419665075!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
//Chengalpattu district ev station
//MXCG+44H, Chengalpattu
if($_SESSION['taluk'] =='Chengalpattu' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15570.362746298328!2d79.96969289601901!3d12.674821051820873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52fc650e6e057b%3A0x55352b7042976327!2sChengalpattu!3m2!1d12.6819372!2d79.98884129999999!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743514224195!5m2!1sen!2sin' width='600' height='450' style=border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Cheyyur' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249289.3951222374!2d79.7577207600143!3d12.506427335785688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a530eaa2a9eee1f%3A0xc4531ff69a5bbefe!2sCheyyur%2C%20Tamil%20Nadu%20603302!3m2!1d12.342642399999999!2d80.0113959!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743516155294!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madurantakam' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d763591.2913236963!2d79.1773920611519!3d12.510142406351267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a531b7ab2928a35%3A0x50a0a27481632d63!2sMaduranthakam%2C%20Tamil%20Nadu%20603306!3m2!1d12.5089244!2d79.88473549999999!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743516700782!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pallavaram' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248988.88834591687!2d79.88957418361241!3d12.814082585244389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525e3510bb6cb3%3A0x8e59bb4c53bf97bc!2sPallavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9675069!2d80.1490955!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743516851339!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tambaram' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d460256.36516700464!2d79.71520786071095!3d12.940357444737288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9249308!2d80.1000026!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743517050561!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thiruporur' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124551.21647546602!2d79.99769200051371!3d12.698698792976582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5256ad486a9463%3A0x5f8811c1f1ce4241!2sThiruporur%2C%20Tamil%20Nadu!3m2!1d12.7303628!2d80.1890413!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743517276970!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Thirukazhukundram' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d91517.84419012255!2d79.98404045010133!3d12.630557439821546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53002f2f1b2665%3A0x74428aee32ee8df0!2sTirukazhukundram%2C%20Tamil%20Nadu!3m2!1d12.609112!2d80.0674695!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743517373942!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vandalur' && $_SESSION['station']=='MXCG+44H,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249026.38393315664!2d79.85754998066808!3d12.77609297699715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f609c674bbcb%3A0x1fac36089fe1f633!2sVandalur%2C%20Tamil%20Nadu%20600048!3m2!1d12.891255899999999!2d80.08100089999999!4m5!1s0x3a52fc650e6e057b%3A0xf06d5c69c88a1a2d!2sMXCG%2B44H%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6703125!2d79.9753594!5e0!3m2!1sen!2sin!4v1743517514233!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //MXPM+2C Pulipakkam
    if($_SESSION['taluk'] =='Chengalpattu' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d23153.46358952726!2d79.95904940996037!3d12.687962821828327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52fc650e6e057b%3A0x55352b7042976327!2sChengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6819372!2d79.98884129999999!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743518096590!5m2!1sen!2sin' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Cheyyur' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249282.27329065462!2d79.75772076057359!3d12.51380465812848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a530eaa2a9eee1f%3A0xc4531ff69a5bbefe!2sCheyyur%2C%20Tamil%20Nadu%20603302!3m2!1d12.342642399999999!2d80.0113959!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743518402867!5m2!1sen!2sin' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madurantakam' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249221.56531691633!2d79.74266981534096!3d12.576517623155127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a531b7ab2928a35%3A0x50a0a27481632d63!2sMaduranthakam%2C%20Tamil%20Nadu%20603306!3m2!1d12.5089244!2d79.88473549999999!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743518937810!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pallavaram' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248976.47813300672!2d79.89947363458691!3d12.826631938438068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525e3510bb6cb3%3A0x8e59bb4c53bf97bc!2sPallavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9675069!2d80.1490955!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743519096532!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tambaram' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248996.52760514684!2d79.88308893301257!3d12.806351664083879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9249308!2d80.1000026!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743519292940!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thiruporur' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124549.16118451278!2d80.00347955059173!3d12.702893939057448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5256577d314847%3A0xe5508c3323aa16d6!2sThirupporur%2C%20Tamil%20Nadu!3m2!1d12.7303074!2d80.18902709999999!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743519520697!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Thirukazhukundram' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62288.22936136083!2d79.98642377525856!3d12.64706408548772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53002f2f1b2665%3A0x74428aee32ee8df0!2sTirukazhukundram%2C%20Tamil%20Nadu!3m2!1d12.609112!2d80.0674695!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743519598910!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vandalur' && $_SESSION['station']=='MXPM+2C')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124506.64733274594!2d79.94866065220522!3d12.789367308334532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f609c674bbcb%3A0x1fac36089fe1f633!2sVandalur%2C%20Tamil%20Nadu%20600048!3m2!1d12.891255899999999!2d80.08100089999999!4m5!1s0x3a52fb8f9750ea9d%3A0x5bef1eaec43f1532!2sMXPM%2B2C%2C%20Pulipakkam%2C%20Tamil%20Nadu%20603002!3m2!1d12.685062499999999!2d79.98356249999999!5e0!3m2!1sen!2sin!4v1743519673151!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //PX4G+GVH, J C K Nagar, Paranur
    if($_SESSION['taluk'] =='Chengalpattu' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo"<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d32799.58035039164!2d79.96077755688988!3d12.696897260367834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52fc650e6e057b%3A0x55352b7042976327!2sChengalpattu!3m2!1d12.6819372!2d79.98884129999999!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596232139!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Cheyyur' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249270.36044436484!2d79.75772076150913!3d12.526135311908876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a530eaa2a9eee1f%3A0xc4531ff69a5bbefe!2sCheyyur%2C%20Tamil%20Nadu%20603302!3m2!1d12.342642399999999!2d80.0113959!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596395881!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madurantakam' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124595.94862133136!2d79.85539904881604!3d12.60705387865947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a531b7ab2928a35%3A0x50a0a27481632d63!2sMaduranthakam%2C%20Tamil%20Nadu%20603306!3m2!1d12.5089244!2d79.88473549999999!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596493872!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pallavaram' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248972.4719872737!2d79.89947363490145!3d12.830680423340207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525e3510bb6cb3%3A0x8e59bb4c53bf97bc!2sPallavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9675069!2d80.1490955!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596563611!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tambaram' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124494.7671362152!2d79.96352630265615!3d12.813429085893565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9249308!2d80.1000026!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596646250!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thiruporur' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124520.7680930577!2d80.0000979516693!3d12.760709535073696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5256577d314847%3A0xe5508c3323aa16d6!2sThirupporur%2C%20Tamil%20Nadu!3m2!1d12.7303074!2d80.18902709999999!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596712396!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Thirukazhukundram' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d91356.43438209874!2d79.99041146119664!3d12.638772585652983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53002f2f1b2665%3A0x74428aee32ee8df0!2sTirukazhukundram%2C%20Tamil%20Nadu!3m2!1d12.609112!2d80.0674695!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596787486!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vandalur' && $_SESSION['station']=='PX4G+GVH,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124504.64997567616!2d79.94866065228103!3d12.793415804558135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f609c674bbcb%3A0x1fac36089fe1f633!2sVandalur%2C%20Tamil%20Nadu%20600048!3m2!1d12.891255899999999!2d80.08100089999999!4m5!1s0x3a52fbbfd2a0a45d%3A0x42feeaadb5b2d5e0!2sPX4G%2BGVH%2C%20Paranur%2C%20Tamil%20Nadu!3m2!1d12.7063125!2d79.9772344!5e0!3m2!1sen!2sin!4v1743596876854!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

//MXQJ+F2 Gokulapuram
    if($_SESSION['taluk'] =='Chengalpattu' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15569.467663274523!2d79.97246834602318!3d12.68945815160719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52fc650e6e057b%3A0x55352b7042976327!2sChengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6819372!2d79.98884129999999!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597172899!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Cheyyur' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249279.73082331923!2d79.75772076077322!3d12.51643729825965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a530eaa2a9eee1f%3A0xc4531ff69a5bbefe!2sCheyyur%2C%20Tamil%20Nadu%20603302!3m2!1d12.342642399999999!2d80.0113959!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597247346!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madurantakam' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124599.8712936587!2d79.8553990486672!3d12.598986036208647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a531b7ab2928a35%3A0x50a0a27481632d63!2sMaduranthakam%2C%20Tamil%20Nadu%20603306!3m2!1d12.5089244!2d79.88473549999999!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597329364!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pallavaram' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248975.33994406805!2d79.89947363467627!3d12.82778228414803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525e3510bb6cb3%3A0x8e59bb4c53bf97bc!2sPallavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9675069!2d80.1490955!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597411282!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tambaram' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248995.39118563294!2d79.88308893310179!3d12.807502009792408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9249308!2d80.1000026!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597592738!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thiruporur' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124525.70741132481!2d80.01572430148188!3d12.750670344443803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5256577d314847%3A0xe5508c3323aa16d6!2sThirupporur%2C%20Tamil%20Nadu!3m2!1d12.7303074!2d80.18902709999999!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597661018!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Thirukazhukundram' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62287.58708400762!2d79.98510757527056!3d12.649696734872371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53002f2f1b2665%3A0x74428aee32ee8df0!2sTirukazhukundram%2C%20Tamil%20Nadu!3m2!1d12.609112!2d80.0674695!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597727703!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vandalur' && $_SESSION['station']=='MXQJ+F2')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124512.71573220061!2d79.97885375197491!3d12.777059369816902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525891aa3c6739%3A0xfca26f0c1f67827b!2sVandalur%2C%20Tamil%20Nadu%20600048!3m2!1d12.860196!2d80.1465759!4m5!1s0x3a52fc69c6f16375%3A0xa22cd202f47762f1!2sMXQJ%2BF2%2C%20Gokulapuram%2C%20Tamil%20Nadu!3m2!1d12.688687499999999!2d79.9800625!5e0!3m2!1sen!2sin!4v1743597021444!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
  
    }

//PXFJ+QJ Chengalpattu
    if($_SESSION['taluk'] =='Chengalpattu' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31137.254468512776!2d79.96179889914882!3d12.703186405616076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52fc650e6e057b%3A0x55352b7042976327!2sChengalpattu%2C%20Tamil%20Nadu!3m2!1d12.6819372!2d79.98884129999999!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743597909565!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Cheyyur' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249263.24972009382!2d79.75772076206748!3d12.533489734346364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a530eaa2a9eee1f%3A0xc4531ff69a5bbefe!2sCheyyur%2C%20Tamil%20Nadu%20603302!3m2!1d12.342642399999999!2d80.0113959!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743597973155!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madurantakam' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249221.38700350738!2d79.74182206535501!3d12.576701372466987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a531b7ab2928a35%3A0x50a0a27481632d63!2sMaduranthakam%2C%20Tamil%20Nadu%20603306!3m2!1d12.5089244!2d79.88473549999999!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598061734!5m2!1sen!2sin' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pallavaram' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248959.63752829068!2d79.90199373590934!3d12.843642075009733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525e3510bb6cb3%3A0x8e59bb4c53bf97bc!2sPallavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9675069!2d80.1490955!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598149389!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tambaram' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124489.83755293275!2d79.9680287028432!3d12.823400276596683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9249308!2d80.1000026!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598219428!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thiruporur' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124541.90757572242!2d80.00009370086697!3d12.717688725238286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5256577d314847%3A0xe5508c3323aa16d6!2sThirupporur%2C%20Tamil%20Nadu!3m2!1d12.7303074!2d80.18902709999999!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598298072!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Thirukazhukundram' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d147134.47960377694!2d79.93768487330638!3d12.628652014280885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53002f2f1b2665%3A0x74428aee32ee8df0!2sTirukazhukundram%2C%20Tamil%20Nadu!3m2!1d12.609112!2d80.0674695!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598374875!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vandalur' && $_SESSION['station']=='PXFJ+QJ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124498.25104527193!2d79.95118075252387!3d12.80637749246923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f609c674bbcb%3A0x1fac36089fe1f633!2sVandalur%2C%20Tamil%20Nadu%20600048!3m2!1d12.891255899999999!2d80.08100089999999!4m5!1s0x3a52fc650e6e057b%3A0xa29c5796b12cc97e!2sPXFJ%2BQJ%2C%20Chengalpattu%2C%20Tamil%20Nadu!3m2!1d12.724437499999999!2d79.9815625!5e0!3m2!1sen!2sin!4v1743598449318!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //Chennai district ev station
//V6GG+6V Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124433.6602175111!2d80.13505940497517!3d12.936497821256443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600338638!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d507240.06992599985!2d80.20676253698292!3d12.827913142368581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600442702!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d195240.59051962144!2d80.08872363207155!3d12.957881194714753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600589203!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124408.39308709942!2d80.16247545593409!3d12.987050524236206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600685520!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d232186.35156468293!2d80.14166164477761!3d12.952671148039782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600760722!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124431.37571896115!2d80.14916145506187!3d12.941076466996076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600837845!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248787.03673632504!2d80.0100176994623!3d13.016720580658996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600908243!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124413.8401526807!2d80.09055360572735!3d12.976168784354142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743600975203!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d229006.30018556613!2d80.1174471088191!3d12.93468301980337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601052561!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124424.35302563997!2d80.1645192553284!3d12.955141553910778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601118789!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248805.60862941036!2d80.09156759800405!3d12.998206049496096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601193388!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d187270.01420298027!2d80.14252724902691!3d12.98081367786194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601267761!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d38372.1332455588!2d80.20493588402101!3d12.89248242515153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601364457!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248783.91466449405!2d80.10180914970745!3d13.019830469098542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601432281!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248802.12951887195!2d80.09513659827721!3d13.001676386591706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601514088!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='V6GG+6V')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62218.753584261285!2d80.19036362655419!3d12.928784069790833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0xf7a7cf7f99e7a15d!2sV6GG%2B6V%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.8755625!2d80.2271875!5e0!3m2!1sen!2sin!4v1743601605791!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //R6VR+MC Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124441.46229701838!2d80.14504645467908!3d12.920848685820237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602259612!5m2!1sen!2sin' width='600' height='450 style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248852.906511887!2d80.00528104429016!3d12.950936775341837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602482650!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248885.66571049378!2d80.11774431491547!3d12.918097744287751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602558493!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248832.48920582543!2d80.08353894589331!3d12.971362499339069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602637090!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d352091.6235367235!2d79.96111834005391!3d12.836839839922584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602721064!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124436.98601664967!2d80.15271645484894!3d12.929829327461979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602801009!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248833.79951012996!2d80.00528104579043!3d12.97005260421231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743602910789!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248874.3384265804!2d80.00269964260728!3d12.929461905276792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603001388!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124431.29030896707!2d80.15782855506512!3d12.94124761683683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603078001!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124432.18345346056!2d80.1715214050312!3d12.93945776850221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603153055!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248816.75766337235!2d80.07546364712859!3d12.987078990876995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603229261!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248836.69854246607!2d80.09836979556282!3d12.967154014996407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603319880!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62232.4132055135!2d80.19641502629946!3d12.873873932571543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603409762!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248799.61762804457!2d80.10861134847443!3d13.004181377277433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603484902!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248817.81095111315!2d80.10304884704588!3d12.986027294788588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603561764!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='R6VR+MC')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124445.30952314434!2d80.15200255453304!3d12.913125193009494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x49bc8beb7dcf8541!2sR6VR%2BMC%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.844187499999999!2d80.2410625!5e0!3m2!1sen!2sin!4v1743603621861!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //278C+Q9 Chennai

    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d157453.7033822816!2d80.18466011800123!3d13.013902445964606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743777586838!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade/'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62183.43171070128!2d80.1828145272129!3d13.069722637040915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743777671705!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d39908.38656858134!2d80.22868930527225!3d13.042024270228683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743777776870!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy'no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62186.43782238604!2d80.21633122715681!3d13.057786089811563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743777862479!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d46561.47864028098!2d80.23858796444307!3d13.051463478562972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743777950547!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31098.785522141232!2d80.22508459950433!3d13.013485037547548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778283130!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124360.24487805089!2d80.17922765776132!3d13.082850585241296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778360150!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62189.12426492823!2d80.17909987710674!3d13.047109792290174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778424555!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31097.009574391635!2d80.22525874952073!3d13.027634736725874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778496551!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15548.617124529865!2d80.25346404611906!3d13.025845496710277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778567714!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62183.618667929346!2d80.21764582720942!3d13.068980587213142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778881990!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62187.497051330414!2d80.22894442713704!3d13.053577590788553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743778951664!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124421.65394332723!2d80.16699000543082!3d12.960543298886156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743779013157!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124356.3372771975!2d80.20462420790962!3d13.09059527805311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743779100074!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62182.667938608574!2d80.24026387722711!3d13.07275368633745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743779309622!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='278C+Q9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31100.736019478874!2d80.22320304948629!3d12.997927188451227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x31c456edb0b159e8!2s278C%2BQ9%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0169375!2d80.2709375!5e0!3m2!1sen!2sin!4v1743779460844!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //26GJ+9Q Chennai
     if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='26GJ+9Q')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31099.061589591147!2d80.19058174950182!3d13.011284137675379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779537861!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62182.29772604963!2d80.15403377723402!3d13.074222635996556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779599403!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31094.43327802839!2d80.2164926995445!3d13.048134335535812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779666371!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62185.304855217284!2d80.20605347717795!3d13.062286088766987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779728461!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31094.24373435442!2d80.2268488495463!3d13.049641285448352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779785362!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15549.194164659397!2d80.21655024611641!3d13.01665094684374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743779989562!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124355.63565949032!2d80.1313790079362!3d13.091985376763011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780061364!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='26GJ+9Q')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31094.02164298488!2d80.17628629954838!3d13.051406785345884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780088681!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='26GJ+9Q')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7774.111070018406!2d80.22167744088192!3d13.032135499155157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780119702!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='26GJ+9Q')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15548.309288342161!2d80.23919254612049!3d13.030747946639107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780147193!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62182.484746529306!2d80.20614237723053!3d13.073480586168754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780174073!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62186.36444290994!2d80.20624862715817!3d13.058077589743913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780202543!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124419.02662609298!2d80.15462785553053!3d12.965799293997549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780233263!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124354.69996279679!2d80.1848021579718!3d13.093839025042747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780263574!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62181.9266912099!2d80.22044182724093!3d13.075694685654929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780292352!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='26GJ+9Q ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31100.34443911988!2d80.2019339494899!3d13.001052038269698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x7db73f70a722f532!2s26GJ%2B9Q%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0259375!2d80.2319375!5e0!3m2!1sen!2sin!4v1743780321020!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //3777+2J Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62193.20732151504!2d80.18725857703058!3d13.03086669606203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743780360550!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62177.70255389895!2d80.1726965273197!3d13.092442131768955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743781234228!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31092.08329662988!2d80.22469329956627!3d13.066805584452267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865293776!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31090.356592436736!2d80.23172624958224!3d13.080508033657276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865216502!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7772.987573314867!2d80.26034564088452!3d13.067861549025558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865406837!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62191.858963267296!2d80.20292717705573!3d13.036232894815818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865499600!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62174.370908911544!2d80.21621772738185!3d13.105636278708262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865572540!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62184.96276222879!2d80.17296312718432!3d13.063644538451658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865636849!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31094.463117295356!2d80.22366874954427!3d13.047897085549588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865699516!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31094.467318017625!2d80.24146664954421!3d13.047863685551539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865767817!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62177.875596746264!2d80.21015682731647!3d13.091756481928037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865839906!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d21457.678998393072!2d80.25164551670382!3d13.07591002922389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865905955!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124410.29445718748!2d80.16523595586193!3d12.983253127766845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743865976099!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62172.413764818666!2d80.24396817741832!3d13.113380976912005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743866036137!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62176.95644838472!2d80.23840567733365!3d13.095398031083201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743866102465!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='3777+2J')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62195.776816403086!2d80.20084877698262!3d13.020634598438594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x7ab1833057a8d526!2s3777%2B2J%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.062562499999999!2d80.2640625!5e0!3m2!1sen!2sin!4v1743866170967!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //365X+85 Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62193.14848576409!2d80.18122652703167!3d13.031100896007636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866263130!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62178.35535825133!2d80.16257922730752!3d13.08985533236911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866336392!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15546.17618535056!2d80.22530574613032!3d13.0646690461469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866410894!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31090.626020872158!2d80.22048279957977!3d13.07837088378127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866479400!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15546.096603791053!2d80.2431027461307!3d13.065932896128555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866539841!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31096.301507296495!2d80.2151007495273!3d13.033271986398566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866613071!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62173.754109229936!2d80.18017077739331!3d13.108077528142037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866687068!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62184.96274963684!2d80.1632756771843!3d13.063644588451655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866751171!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15547.156670976474!2d80.22429634612581!3d13.049087896372958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866817429!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15547.317690451653!2d80.24658154612504!3d13.046527346410098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743866930273!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62178.542598453925!2d80.198340927304!3d13.089113282541273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867009018!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31091.156455938944!2d80.23344539957486!3d13.07416238402541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867089200!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124410.10942131477!2d80.15931525586892!3d12.983622727423201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867164070!5m2!1sen!2sin' width='600'  height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62172.96820675304!2d80.23557782740801!3d13.111187427420747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867237683!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62178.413432721456!2d80.22690657730648!3d13.0896251824225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867311114!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='365X+85')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62196.52060531786!2d80.19242212696876!3d13.017671249126952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x932a9f3e21b7a0d9!2s365X%2B85%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0583125!2d80.24793749999999!5e0!3m2!1sen!2sin!4v1743867390226!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //36CC+PW Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62191.91006870789!2d80.16990422705474!3d13.036029544863037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867465726!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31088.258788527364!2d80.16925869960164!3d13.097136432692784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867527575!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3886.447491651383!2d80.22082467489477!3d13.070801537253699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867596142!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15544.882433236075!2d80.2213237461363!3d13.0852004958491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867655550!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15545.578674581928!2d80.23067239613306!3d13.074155296009293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867725821!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62190.6760436457!2d80.1839962270778!3d13.040938893723014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867796377!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62172.02811290996!2d80.1713347274255!3d13.114906526558215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867866011!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31091.767039374172!2d80.17091099956919!3d13.069316334306583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867922124!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31093.422616494892!2d80.20206979955391!3d13.056167535069585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743867994422!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31093.744827133516!2d80.22401849955091!3d13.053606985218183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868057213!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31088.352459811762!2d80.20210029960079!3d13.096394382735841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868116766!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15545.147786886373!2d80.2296228961351!3d13.080991995910155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868173623!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124408.16528058943!2d80.15437535594272!3d12.987505423813262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868234451!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62171.241808219784!2d80.22256187744016!3d13.118016425837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868393891!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31087.876115486757!2d80.23390999960513!3d13.100167482517026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868476552!5m2!1sen!2sin' width='60' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='36CC+PW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62194.59528746031!2d80.18399622700471!3d13.025340597345496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x200fb8b4f9480d5e!2s36CC%2BPW%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0718125!2d80.2223125!5e0!3m2!1sen!2sin!4v1743868552199!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //452R+96 Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62188.67108563827!2d80.15960582711519!3d13.048911391871874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743870295678!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31086.60978542322!2d80.15061784961686!3d13.110192831935699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743870450667!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31089.580250794686!2d80.1868684995894!3d13.08666418330019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743870517353!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31088.39860872183!2d80.19311729960035!3d13.096028782757031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743870592720!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31089.366118818674!2d80.2050638495914!3d13.088361683201715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743870659484!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62187.33171441547!2d80.16556807714014!3d13.05423459063603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871056596!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31084.16965453107!2d80.1895409496394!3d13.129489780817014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871157382!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31089.92725693323!2d80.15708314958621!3d13.083912883459758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871225852!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62183.33842344566!2d80.16728222721459!3d13.070092886954983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871297032!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62183.777613051025!2d80.18755202720641!3d13.06834968735957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871381105!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31086.0879189009!2d80.19090934962163!3d13.114322181696275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871458723!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31088.58150676911!2d80.20184399959865!3d13.094579732841071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871549451!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124401.18666955741!2d80.13250530620758!3d13.001433210865914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871629118!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62165.35313621954!2d80.20409957755!3d13.141283620442461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871702430!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62170.46794142883!2d80.1980011274546!3d13.121076425127418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871782314!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='452R+96')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124382.49306749023!2d80.12668990691702!3d13.038669526265858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0x54e8874ef9b1fda7!2s452R%2B96%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.100937499999999!2d80.1905625!5e0!3m2!1sen!2sin!4v1743871871607!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //35QF+84 Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62190.355632999635!2d80.15127777708379!3d13.042213293427098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872027152!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31087.38338763507!2d80.1410930996097!3d13.104069232290762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872147471!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31090.527963081116!2d80.17798724958062!3d13.079148733736131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872251715!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31088.390770060207!2d80.1839599496004!3d13.096090882753433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872359032!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62180.628521446706!2d80.17558237726516!3d13.080843784460047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872445995!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62189.01693722411!2d80.1590108271087!3d13.04753649219111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872566156!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62170.090009980486!2d80.16040702746167!3d13.122570574780957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872642376!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15545.388729844508!2d80.15791154613392!3d13.077169495965585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743872748970!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d156084.08206121705!2d80.21724313922715!3d13.03184042111464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873215130!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62183.777613051025!2d80.17867077720643!3d13.06834968735957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873319375!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31086.729873948698!2d80.18202809961576!3d13.10924243199079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873410303!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62178.649000643396!2d80.17453287730207!3d13.088691582639111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873500523!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124404.54371188191!2d80.12417725608016!3d12.994735117092109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873569231!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62166.95177383114!2d80.19521832752017!3d13.13497112190581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873648079!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62173.53155358895!2d80.19280947739753!3d13.108958277937745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873714543!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='35QF+84')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124387.74976284346!2d80.11557490671753!3d13.02820913598344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a5265ea4f7d3361%3A0xadacfd70c74cde77!2s35QF%2B84%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.088312499999999!2d80.17281249999999!5e0!3m2!1sen!2sin!4v1743873794711!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //45J8+WX Korattur, Chennai
    if($_SESSION['taluk'] =='Alandur' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124368.88088441112!2d80.09733895743359!3d13.065718401145796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267434f312fcf%3A0xf9198a49e9fe5cd1!2sAlandur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9974873!2d80.2006371!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743873903164!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
if($_SESSION['taluk'] =='Ambattur' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15759.268089520147!2d80.1515278313409!3d13.125986811156674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5263ba9a487b3f%3A0x1e923f00f5206296!2sAmbattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1185879!2d80.1574261!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743873991841!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Aminijkarai' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62175.12243710675!2d80.15305297736782!3d13.102661179398336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526685d94f22f9%3A0x4b0e36475dddf085!2sAminjikarai%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0697906!2d80.2245136!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874105099!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Ayanavaram' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31085.764887022073!2d80.17962589962464!3d13.11687758154813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52644904af6069%3A0x82df834aedd6b21e!2sAyanavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.098633999999999!2d80.2336945!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874215687!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Egmore' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62174.69365891077!2d80.1712483273758!3d13.10435867900459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52660d4d9305c9%3A0xe2896dfdb1f85568!2sEgmore%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.073225899999999!2d80.2609209!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874307236!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Guindy' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124366.19875430183!2d80.10274800753541!3d13.071041596203544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5267709aa40a7d%3A0xca348695fc512750!2sGuindy%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0066625!2d80.2206369!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874395608!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Madhavaram' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31082.26042987341!2d80.17667319965706!3d13.144568829943129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5264db59c3d4b5%3A0x9be03109019f05f!2sMadhavaram%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1487898!2d80.2305586!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874478145!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Maduravoyal' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62176.060860398924!2d80.1196198273503!3d13.0989452802603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52614907840a99%3A0xa88708759e2b8a26!2sMaduravoyal%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0655842!2d80.1607768!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874560267!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Mambalam' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62179.09856758659!2d80.15176532729367!3d13.086909683052543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5266fd9b77e82b%3A0xb9394ee179f66162!2sWest%20Mambalam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.038287599999999!2d80.2209499!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874645567!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Thirumayilai' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62179.74447981421!2d80.1743367272816!3d13.084349133646661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526776e6e957f5%3A0xeb38eaf8312aae88!2sThirumayilai%2C%20Railway%20Station%20Thirumayilai%2C%20Venkatesa%20Agraharam%2C%20Mylapore%2C%20Chennai%2C%20Tamil%20Nadu%20600004!3m2!1d13.0347539!2d80.2669633!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874745102!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Perambur' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31084.068581618878!2d80.17769404964035!3d13.13028848077073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1210302!2d80.2325781!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874819269!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Purasawalkam' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62173.12255113388!2d80.16802847740512!3d13.110576727562366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5265dca1806f09%3A0x2b7e01875ad82bf4!2sPurasaiwakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0902242!2d80.2542716!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743874994350!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Sholinganallur' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248785.54059451158!2d80.0374318995798!3d13.018210975118627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525b79de7f381b%3A0xffbb2dd48afe3f1b!2sSholinganallur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.9009877!2d80.2279301!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743875069713!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tiruvottiyur' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62162.48192652289!2d80.19088427760353!3d13.152613617816359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526fe4269d4315%3A0x576b0710a1bdf054!2sTiruvottiyur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1642598!2d80.30014129999999!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743875142827!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Tondiarpet' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62167.86099535013!2d80.18478582750325!3d13.131379572738465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a526f90af3fdb87%3A0x2c3e6aabe8070e2b!2sTondiarpet%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.126106199999999!2d80.2879959!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743875209288!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Velachery' && $_SESSION['station']=='45J8+WX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124374.03338182754!2d80.10283825723805!3d13.055486310646877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a525d9ff2065a3b%3A0x66435015604038cc!2sVelachery%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d12.975460499999999!2d80.2207047!4m5!1s0x3a52645e09cf0d7b%3A0x280949394e173604!2s45J8%2BWX%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.1323125!2d80.16743749999999!5e0!3m2!1sen!2sin!4v1743875334648!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
   //Coimbatore district stations
   //VV47+92 Coimbatore
    if($_SESSION['taluk'] =='Anaimalai' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250892.20983749419!2d76.71709528411667!3d10.719763777407277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba83b9afe4e320f%3A0xf57279cf79b8e1c4!2sAnaimalai%2C%20Tamil%20Nadu%20642104!3m2!1d10.5820882!2d76.9342587!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876496063!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Annur' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250618.91733476118!2d76.85498165558705!3d11.04458102936962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8fca85dc0f0a3%3A0x80c60bd6af3744c6!2sAnnur%2C%20Tamil%20Nadu%20641653!3m2!1d11.2321032!2d77.10671599999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876532627!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(North)' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125346.23356158988!2d76.84188542033783!3d10.958100191555875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8f621210960c5%3A0xf3b57504c61c695a!2sCoimbatore%20North%2C%20Tamil%20Nadu%20641029!3m2!1d11.060285!2d76.94577799999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876562894!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(South)' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125357.5771992226!2d76.86693411990721!3d10.931287817285808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba859dbb41ea05f%3A0x319e2d63f5fd6e29!2sCoimbatore%20South%2C%20Tamil%20Nadu!3m2!1d11.0066031!2d77.02606759999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876592059!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kinathukadavu' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d70779.18969915024!2d76.89767684099549!3d10.859494223088758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba84f6725f184d5%3A0xe40716d0161f487a!2sKinathukadavu%2C%20Tamil%20Nadu%20642109!3m2!1d10.8171704!2d77.01858659999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876621044!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madukkarai' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62688.48727191625!2d76.87019726779394!3d10.88528815301888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85adf04540711%3A0xf464f9b0288f910!2sMadukkarai%2C%20Tamil%20Nadu!3m2!1d10.9144962!2d76.948555!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876647102!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Mettupalayam' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250589.2149589502!2d76.78321370792045!3d11.079316496242727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8ee9623c506a5%3A0x3162d68da8ba75f5!2sMettupalayam%2C%20Tamil%20Nadu!3m2!1d11.302784899999999!2d76.9383385!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876674649!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Perur' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125363.85776727424!2d76.82438916966872!3d10.916414781562564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85eacff7cb4cd%3A0x6ec7a4a308201e17!2sPerur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641010!3m2!1d10.9754861!2d76.91534589999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876702463!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Pollachi' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250840.4550845945!2d76.75227368818274!3d10.782018087772565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba839d117dea505%3A0xb3fd96d9c8642659!2sPollachi%2C%20Tamil%20Nadu%20642001!3m2!1d10.6608925!2d77.00475899999999!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876729588!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sulur' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125353.60467327734!2d76.91111682005797!3d10.940684858267021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba855b5630f846d%3A0xbfaf0134da155f58!2sSulur%2C%20Tamil%20Nadu!3m2!1d11.025449!2d77.124616!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876762618!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Valparai' && $_SESSION['station']=='VV47+92')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501957.2020916537!2d76.58742211904928!3d10.615042482556506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8279db1aa1b0f%3A0x86bc2b6e18667469!2sValparai%2C%20Tamil%20Nadu%20642127!3m2!1d10.3269734!2d76.9553967!4m5!1s0x3ba859af2f971cb5%3A0x4700535e9820fbcf!2sVV47%2B92%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.8559375!2d76.8625625!5e0!3m2!1sen!2sin!4v1743876796250!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //WX9M+7W Coimbatore
    if($_SESSION['taluk'] =='Anaimalai' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250866.95524651743!2d76.81230648610078!3d10.750186310276584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba83b9afe4e320f%3A0xf57279cf79b8e1c4!2sAnaimalai%2C%20Tamil%20Nadu%20642104!3m2!1d10.5820882!2d76.9342587!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743876881793!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Annur' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250592.50178305668!2d76.90367055766218!3d11.075478010950846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8fca85dc0f0a3%3A0x80c60bd6af3744c6!2sAnnur%2C%20Tamil%20Nadu%20641653!3m2!1d11.2321032!2d77.10671599999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743876915137!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(North)' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125333.12775163827!2d76.89007342083532!3d10.98899726191819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8f621210960c5%3A0xf3b57504c61c695a!2sCoimbatore%20North%2C%20Tamil%20Nadu%20641029!3m2!1d11.060285!2d76.94577799999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743876949845!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(South)' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62672.2497523537!2d76.96376571809678!3d10.962193184564407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba859dbb41ea05f%3A0x319e2d63f5fd6e29!2sCoimbatore%20South%2C%20Tamil%20Nadu!3m2!1d11.0066031!2d77.02606759999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743876980941!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kinathukadavu' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62691.52676791321!2d76.9597219677373!3d10.870832606489902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba84f6725f184d5%3A0xe40716d0161f487a!2sKinathukadavu%2C%20Tamil%20Nadu%20642109!3m2!1d10.8171704!2d77.01858659999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877008340!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madukkarai' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15670.647216190475!2d76.95708984555765!3d10.913286427900873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85adf04540711%3A0xf464f9b0288f910!2sMadukkarai%2C%20Tamil%20Nadu!3m2!1d10.9144962!2d76.948555!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877039426!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Mettupalayam' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250562.95304491196!2d76.79631385998353!3d11.109939178932978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8ee9623c506a5%3A0x3162d68da8ba75f5!2sMettupalayam%2C%20Tamil%20Nadu!3m2!1d11.302784899999999!2d76.9383385!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877071506!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Perur' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62677.13913104747!2d76.9095356680056!3d10.939092040105779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85eacff7cb4cd%3A0x6ec7a4a308201e17!2sPerur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641010!3m2!1d10.9754861!2d76.91534589999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877100547!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Pollachi' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250831.9043611935!2d76.83645483885454!3d10.792269348332216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba839d117dea505%3A0xb3fd96d9c8642659!2sPollachi%2C%20Tamil%20Nadu%20642001!3m2!1d10.6608925!2d77.00475899999999!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877130055!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sulur' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62670.257943338795!2d77.01351156813394!3d10.971590232310813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba855b5630f846d%3A0xbfaf0134da155f58!2sSulur%2C%20Tamil%20Nadu!3m2!1d11.025449!2d77.124616!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877177460!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Valparai' && $_SESSION['station']=='WX9M+7W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501945.32842199947!2d76.65673927104064!3d10.622271621021467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8279db1aa1b0f%3A0x86bc2b6e18667469!2sValparai%2C%20Tamil%20Nadu%20642127!3m2!1d10.3269734!2d76.9553967!4m5!1s0x3ba859af2f971cb5%3A0xfe8b0847388aa9b8!2sWX9M%2B7W%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d10.9181875!2d76.98481249999999!5e0!3m2!1sen!2sin!4v1743877219406!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //22PP+7R Coimbatore
    if($_SESSION['taluk'] =='Anaimalai' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501620.0266558258!2d76.67700677559554!3d10.818470248167124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba83b9afe4e320f%3A0xf57279cf79b8e1c4!2sAnaimalai%2C%20Tamil%20Nadu%20642104!3m2!1d10.5820882!2d76.9342587!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877265031!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Annur' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125272.09049969797!2d77.02070167315227!3d11.131777325125979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8fca85dc0f0a3%3A0x80c60bd6af3744c6!2sAnnur%2C%20Tamil%20Nadu%20641653!3m2!1d11.2321032!2d77.10671599999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877316262!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(North)' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62655.604883732936!2d76.95090486840726!3d11.040478265799242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8f621210960c5%3A0xf3b57504c61c695a!2sCoimbatore%20North%2C%20Tamil%20Nadu%20641029!3m2!1d11.060285!2d76.94577799999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877355562!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(South)' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62657.53860111024!2d77.0137170183712!3d11.031411667971463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba859dbb41ea05f%3A0x319e2d63f5fd6e29!2sCoimbatore%20South%2C%20Tamil%20Nadu!3m2!1d11.0066031!2d77.02606759999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877383723!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kinathukadavu' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250711.0151749443!2d76.85488644835183!3d10.936184495229863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba84f6725f184d5%3A0xe40716d0161f487a!2sKinathukadavu%2C%20Tamil%20Nadu%20642109!3m2!1d10.8171704!2d77.01858659999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877416971!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madukkarai' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125338.45016831072!2d76.9114254706333!3d10.9764599739429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85adf04540711%3A0xf464f9b0288f910!2sMadukkarai%2C%20Tamil%20Nadu!3m2!1d10.9144962!2d76.948555!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877450692!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Mettupalayam' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250514.27651230304!2d76.84329321380739!3d11.166479112473791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8ee9623c506a5%3A0x3162d68da8ba75f5!2sMettupalayam%2C%20Tamil%20Nadu!3m2!1d11.302784899999999!2d76.9383385!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877482045!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Perur' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62663.392417769726!2d76.93608776826204!3d11.003919974559793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85eacff7cb4cd%3A0x6ec7a4a308201e17!2sPerur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641010!3m2!1d10.9754861!2d76.91534589999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877514986!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Pollachi' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250777.1701136773!2d76.85488644315461!3d10.857662396872913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba839d117dea505%3A0xb3fd96d9c8642659!2sPollachi%2C%20Tamil%20Nadu%20642001!3m2!1d10.6608925!2d77.00475899999999!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877547650!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sulur' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62653.79992726929!2d77.04105901844089!3d11.048934513773492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba855b5630f846d%3A0xbfaf0134da155f58!2sSulur%2C%20Tamil%20Nadu!3m2!1d11.025449!2d77.124616!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877583725!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Valparai' && $_SESSION['station']=='22PP+7R')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501832.5641304613!2d76.70572708995233!3d10.69068591603193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8279db1aa1b0f%3A0x86bc2b6e18667469!2sValparai%2C%20Tamil%20Nadu%20642127!3m2!1d10.3269734!2d76.9553967!4m5!1s0x3ba859af2f971cb5%3A0x2ce06bbb50d44b14!2s22PP%2B7R%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.0356875!2d77.03706249999999!5e0!3m2!1sen!2sin!4v1743877613808!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //3492+F4 Neelambur
    if($_SESSION['taluk'] =='Anaimalai' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501608.8136914563!2d76.68756737747594!3d10.825170445080499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba83b9afe4e320f%3A0xf57279cf79b8e1c4!2sAnaimalai%2C%20Tamil%20Nadu%20642104!3m2!1d10.5820882!2d76.9342587!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877662688!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Annur' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125265.39305947268!2d77.04538702340653!3d11.147334210238302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8fca85dc0f0a3%3A0x80c60bd6af3744c6!2sAnnur%2C%20Tamil%20Nadu%20641653!3m2!1d11.2321032!2d77.10671599999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877693464!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(North)' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62654.89184756244!2d76.98141546842051!3d11.043819614998782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8f621210960c5%3A0xf3b57504c61c695a!2sCoimbatore%20North%2C%20Tamil%20Nadu%20641029!3m2!1d11.060285!2d76.94577799999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877721643!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(South)' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62656.841636181314!2d77.01879821838419!3d11.034680367188315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba859dbb41ea05f%3A0x319e2d63f5fd6e29!2sCoimbatore%20South%2C%20Tamil%20Nadu!3m2!1d11.0066031!2d77.02606759999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877750792!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kinathukadavu' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250705.34838165133!2d76.87835174879704!3d10.942884769506069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba84f6725f184d5%3A0xe40716d0161f487a!2sKinathukadavu%2C%20Tamil%20Nadu%20642109!3m2!1d10.8171704!2d77.01858659999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877787947!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madukkarai' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125334.88304662504!2d76.94193607076863!3d10.984864115882123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85adf04540711%3A0xf464f9b0288f910!2sMadukkarai%2C%20Tamil%20Nadu!3m2!1d10.9144962!2d76.948555!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877826525!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Mettupalayam' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250502.51358839055!2d76.89295036473148!3d11.180099910353704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8ee9623c506a5%3A0x3162d68da8ba75f5!2sMettupalayam%2C%20Tamil%20Nadu!3m2!1d11.302784899999999!2d76.9383385!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877860842!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Perur' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d132464.78729992828!2d76.92069803047819!3d11.021441601451173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85eacff7cb4cd%3A0x6ec7a4a308201e17!2sPerur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641010!3m2!1d10.9754861!2d76.91534589999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877888901!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Pollachi' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250771.5435055125!2d76.87835174359665!3d10.864362671120887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba839d117dea505%3A0xb3fd96d9c8642659!2sPollachi%2C%20Tamil%20Nadu%20642001!3m2!1d10.6608925!2d77.00475899999999!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877920345!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sulur' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31326.899740531877!2d77.08671729739596!3d11.048936603462852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba855b5630f846d%3A0xbfaf0134da155f58!2sSulur%2C%20Tamil%20Nadu!3m2!1d11.025449!2d77.124616!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877950557!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Valparai' && $_SESSION['station']=='3492+F4')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501821.48201892327!2d76.69685169181089!3d10.697386112763809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8279db1aa1b0f%3A0x86bc2b6e18667469!2sValparai%2C%20Tamil%20Nadu%20642127!3m2!1d10.3269734!2d76.9553967!4m5!1s0x3ba8f8a7ed97034d%3A0xcffef52d136ec6dd!2s3492%2BF4%2C%20Neelambur%2C%20Tamil%20Nadu%20641062!3m2!1d11.0686875!2d77.1003125!5e0!3m2!1sen!2sin!4v1743877976764!5m2!1sen!2sin' width='600' height='450' style=''border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //3XJP+WQ Coimbatore
    if($_SESSION['taluk'] =='Anaimalai' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501596.75155561423!2d76.6474549794987!3d10.832373484268006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e9!4m5!1s0x3ba83b9afe4e320f%3A0xf57279cf79b8e1c4!2sAnaimalai%2C%20Tamil%20Nadu%20642104!3m2!1d10.5820882!2d76.9342587!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878033968!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Annur' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125261.67530607966!2d76.96442467354763!3d11.155960601984397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8fca85dc0f0a3%3A0x80c60bd6af3744c6!2sAnnur%2C%20Tamil%20Nadu%20641653!3m2!1d11.2321032!2d77.10671599999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878292045!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(North)' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31324.635785408384!2d76.94577314741693!3d11.070121852194386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8f621210960c5%3A0xf3b57504c61c695a!2sCoimbatore%20North%2C%20Tamil%20Nadu%20641029!3m2!1d11.060285!2d76.94577799999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878255419!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Coimbatore(South)' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62654.746721751!2d76.96530266842328!3d11.044499564835881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba859dbb41ea05f%3A0x319e2d63f5fd6e29!2sCoimbatore%20South%2C%20Tamil%20Nadu!3m2!1d11.0066031!2d77.02606759999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878321927!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kinathukadavu' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250699.25247777044!2d76.82403494927595!3d10.950087891854409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba84f6725f184d5%3A0xe40716d0161f487a!2sKinathukadavu%2C%20Tamil%20Nadu%20642109!3m2!1d10.8171704!2d77.01858659999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878349933!5m2!1sen!2sin' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Madukkarai' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125328.85494957234!2d76.8829082709975!3d10.999051902276156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85adf04540711%3A0xf464f9b0288f910!2sMadukkarai%2C%20Tamil%20Nadu!3m2!1d10.9144962!2d76.948555!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878380206!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Mettupalayam' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125247.97992219568!2d76.87861807406752!3d11.1876816716419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8ee9623c506a5%3A0x3162d68da8ba75f5!2sMettupalayam%2C%20Tamil%20Nadu!3m2!1d11.302784899999999!2d76.9383385!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878408841!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Perur' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62657.99148591892!2d76.90992591836276!3d11.029287168480515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba85eacff7cb4cd%3A0x6ec7a4a308201e17!2sPerur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641010!3m2!1d10.9754861!2d76.91534589999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878452797!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Pollachi' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250765.4908015989!2d76.83247984407215!3d10.871565793438869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba839d117dea505%3A0xb3fd96d9c8642659!2sPollachi%2C%20Tamil%20Nadu%20642001!3m2!1d10.6608925!2d77.00475899999999!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878478129!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Sulur' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62652.73458444381!2d77.0160972684608!3d11.053922662578671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba855b5630f846d%3A0xbfaf0134da155f58!2sSulur%2C%20Tamil%20Nadu!3m2!1d11.025449!2d77.124616!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878504735!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Valparai' && $_SESSION['station']=='3XJP+WQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501809.5605530278!2d76.70572709381017!3d10.704589151756084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8279db1aa1b0f%3A0x86bc2b6e18667469!2sValparai%2C%20Tamil%20Nadu%20642127!3m2!1d10.3269734!2d76.9553967!4m5!1s0x3ba859af2f971cb5%3A0x788cd942e63c077b!2s3XJP%2BWQ%2C%20Coimbatore%2C%20Tamil%20Nadu!3m2!1d11.082312499999999!2d76.9869375!5e0!3m2!1sen!2sin!4v1743878532531!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //Cuddalore District station
    //QQ44+XX Cuddalore
    if($_SESSION['taluk'] =='Bhuvanagiri' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250116.31645213053!2d79.54549424506814!3d11.618541988162994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c6b22825746f%3A0x3a2169c60bfc7ca3!2sBhuvanagiri%2C%20Tamil%20Nadu!3m2!1d11.4459041!2d79.6530174!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927363347!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Chidambaram' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250155.8197242698!2d79.56539434196524!3d11.574447155848954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c23aa1bce10b%3A0xe1a29e91a8ec81aa!2sChidambaram%2C%20Tamil%20Nadu!3m2!1d11.407044899999999!2d79.6912455!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927399006!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Cuddalore' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7812.349415850571!2d79.75926314079403!3d11.752739653846637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a549888444e5d9d%3A0x6aa2c2d991f57236!2sCuddalore%2C%20Tamil%20Nadu!3m2!1d11.748041899999999!2d79.7713687!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927430341!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Kattumannarkoil' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500417.97545638535!2d79.3300727771473!3d11.514836386382187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54d09e4c13314f%3A0xae4469453abdc35b!2sKattumannarkoil%2C%20Tamil%20Nadu%20608301!3m2!1d11.279966199999999!2d79.5519144!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927472384!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kurinjipadi' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125039.61965168077!2d79.60080253197653!3d11.659779071716054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54b852dcb82763%3A0xa1c4b38bebb1555a!2sKurinjipadi%2C%20Tamil%20Nadu%20607302!3m2!1d11.562152699999999!2d79.59732989999999!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927552606!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Panruti' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124988.25756378094!2d79.57707233392604!3d11.773284564011606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54af5a3b3e8267%3A0xb41239c6f2ec332f!2sPanruti%2C%20Tamil%20Nadu!3m2!1d11.766579199999999!2d79.5629117!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927587631!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Srimushnam' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250157.26163652766!2d79.42283639185199!3d11.572834511983686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54ccc6d3f5556d%3A0xaf3696985c78b73d!2sSrimushnam%2C%20Tamil%20Nadu!3m2!1d11.401709799999999!2d79.4061296!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927614508!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Titakudi' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250157.16159022917!2d79.28005704185982!3d11.572946411557988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab3bf0fe6a3d1d%3A0x9ba996c2a7393a2f!2sTittakudi%2C%20Tamil%20Nadu%20606106!3m2!1d11.4025102!2d79.12057089999999!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927644051!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Veppur' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500342.87263123057!2d79.03734348973802!3d11.556969644751556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab232a9b4f9c8d%3A0x79b19824e168234e!2sVeppur%2C%20Tamil%20Nadu%20621717!3m2!1d11.3196389!2d79.0659179!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927672497!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vriddachalam' && $_SESSION['station']=='QQ44+XX')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250128.11552473897!2d79.38308134414135!3d11.605388788171041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab4a796cb7ceaf%3A0xe7cd39ca29dbafb1!2sVirudhachalam%2C%20Tamil%20Nadu%20606001!3m2!1d11.5160935!2d79.32661949999999!4m5!1s0x3a549888444e5d9d%3A0xcb286772b61ae5d7!2sQQ44%2BXX%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.7574375!2d79.7574375!5e0!3m2!1sen!2sin!4v1743927702524!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //QQ78+73R, Cuddalore
    if($_SESSION['taluk'] =='Bhuvanagiri' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250116.31645213053!2d79.54549424506814!3d11.618541988162994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c6b22825746f%3A0x3a2169c60bfc7ca3!2sBhuvanagiri%2C%20Tamil%20Nadu!3m2!1d11.4459041!2d79.6530174!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743927876812!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Chidambaram' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250131.6811541937!2d79.56539434386131!3d11.601411053296209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c23aa1bce10b%3A0xe1a29e91a8ec81aa!2sChidambaram%2C%20Tamil%20Nadu!3m2!1d11.407044899999999!2d79.6912455!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743927907940!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Cuddalore' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15624.531868211348!2d79.75648379576978!3d11.755682115341703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a549888444e5d9d%3A0x6aa2c2d991f57236!2sCuddalore%2C%20Tamil%20Nadu!3m2!1d11.748041899999999!2d79.7713687!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743927959445!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Kattumannarkoil' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500412.7391204365!2d79.33007277802513!3d11.517778941558142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54d09e4c13314f%3A0xae4469453abdc35b!2sKattumannarkoil%2C%20Tamil%20Nadu%20608301!3m2!1d11.279966199999999!2d79.5519144!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928045976!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kurinjipadi' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125038.29429948972!2d79.60080253202685!3d11.66272166892151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54b852dcb82763%3A0xa1c4b38bebb1555a!2sKurinjipadi%2C%20Tamil%20Nadu%20607302!3m2!1d11.562152699999999!2d79.59732989999999!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928095230!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Panruti' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124992.15539778487!2d79.58034328377813!3d11.76470857214283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54af5a3b3e8267%3A0xb41239c6f2ec332f!2sPanruti%2C%20Tamil%20Nadu!3m2!1d11.766579199999999!2d79.5629117!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928131894!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Srimushnam' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250154.63043231846!2d79.4228363920587!3d11.575777100789754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54ccc6d3f5556d%3A0xaf3696985c78b73d!2sSrimushnam%2C%20Tamil%20Nadu!3m2!1d11.401709799999999!2d79.4061296!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928159435!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Titakudi' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250154.53036092865!2d79.28005704206653!3d11.57588900036408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab3bf0fe6a3d1d%3A0x9ba996c2a7393a2f!2sTittakudi%2C%20Tamil%20Nadu%20606106!3m2!1d11.4025102!2d79.12057089999999!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928188517!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Veppur' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500342.87263123057!2d79.03734348973802!3d11.556969644751556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab232a9b4f9c8d%3A0x79b19824e168234e!2sVeppur%2C%20Tamil%20Nadu%20621717!3m2!1d11.3196389!2d79.0659179!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928217702!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vriddachalam' && $_SESSION['station']=='QQ78+73R,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250125.47702128065!2d79.38308134434862!3d11.608331376982552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab4a796cb7ceaf%3A0xe7cd39ca29dbafb1!2sVirudhachalam%2C%20Tamil%20Nadu%20606001!3m2!1d11.5160935!2d79.32661949999999!4m5!1s0x3a549888444e5d9d%3A0x116b48945d2ae920!2sQQ78%2B73R%2C%20Cuddalore%2C%20Tamil%20Nadu!3m2!1d11.763237499999999!2d79.7651406!5e0!3m2!1sen!2sin!4v1743928244531!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //QMM3+5W Nellikuppam
    if($_SESSION['taluk'] =='Bhuvanagiri' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250122.09633237644!2d79.54549424461415!3d11.612100612651673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c6b22825746f%3A0x3a2169c60bfc7ca3!2sBhuvanagiri%2C%20Tamil%20Nadu!3m2!1d11.4459041!2d79.6530174!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928348059!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Chidambaram' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250144.3897249182!2d79.54642459286302!3d11.587222707254092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54c23aa1bce10b%3A0xe1a29e91a8ec81aa!2sChidambaram%2C%20Tamil%20Nadu!3m2!1d11.407044899999999!2d79.6912455!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928394139!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Cuddalore' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62496.04543563709!2d79.67190747138305!3d11.764850593169568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a549888444e5d9d%3A0x6aa2c2d991f57236!2sCuddalore%2C%20Tamil%20Nadu!3m2!1d11.748041899999999!2d79.7713687!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928433563!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Kattumannarkoil' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500389.56951597094!2d79.30942338190948!3d11.530790193380717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54d09e4c13314f%3A0xae4469453abdc35b!2sKattumannarkoil%2C%20Tamil%20Nadu%20608301!3m2!1d11.279966199999999!2d79.5519144!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928465260!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Kurinjipadi' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d366308.25832716405!2d79.47314666861288!3d11.529513677530579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54b852dcb82763%3A0xa1c4b38bebb1555a!2sKurinjipadi%2C%20Tamil%20Nadu%20607302!3m2!1d11.562152699999999!2d79.59732989999999!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928510265!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Panruti' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62493.0772990701!2d79.56639982143837!3d11.777908940074566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54af5a3b3e8267%3A0xb41239c6f2ec332f!2sPanruti%2C%20Tamil%20Nadu!3m2!1d11.766579199999999!2d79.5629117!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928536985!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Srimushnam' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250142.98798854824!2d79.36567599297317!3d11.58878850129886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54ccc6d3f5556d%3A0xaf3696985c78b73d!2sSrimushnam%2C%20Tamil%20Nadu!3m2!1d11.401709799999999!2d79.4061296!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928566579!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Titakudi' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250140.50288956717!2d79.21925984316836!3d11.591563940743281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab3bf0fe6a3d1d%3A0x9ba996c2a7393a2f!2sTittakudi%2C%20Tamil%20Nadu%20606106!3m2!1d11.4025102!2d79.12057089999999!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928606826!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Veppur' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d659242.4512225006!2d78.86691669695342!3d11.480560657864542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab232a9b4f9c8d%3A0x79b19824e168234e!2sVeppur%2C%20Tamil%20Nadu%20621717!3m2!1d11.3196389!2d79.0659179!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928638672!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vriddachalam' && $_SESSION['station']=='QMM3+5W')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250085.79204045024!2d79.32592094746582!3d11.65250160909522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab4a796cb7ceaf%3A0xe7cd39ca29dbafb1!2sVirudhachalam%2C%20Tamil%20Nadu%20606001!3m2!1d11.5160935!2d79.32661949999999!4m5!1s0x3a54a3c21f0a957b%3A0xd5b832f00a815b36!2sQMM3%2B5W%2C%20Nellikuppam%2C%20Tamil%20Nadu%20607105!3m2!1d11.7829375!2d79.65481249999999!5e0!3m2!1sen!2sin!4v1743928671132!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //Dharmapuri district station
    //5599+X9 Dharmapuri
    if($_SESSION['taluk'] =='Dharmapuri' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31203.564849174563!2d78.14470204853592!3d12.150036538055463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac16f95a63ed01%3A0x3f2cb64e61c93aef!2sDharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1210997!2d78.1582143!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929302127!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Harur' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124830.49659605093!2d78.23779863991408!3d12.115367140542933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac657ad3485185%3A0x3415d3760b215623!2sHarur%2C%20Tamil%20Nadu!3m2!1d12.051848!2d78.4749496!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929330626!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Karimangalam' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124772.9841724116!2d78.1063543420969!3d12.237731175255801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac397cb42767d1%3A0x659ed597857918e8!2sKariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3055494!2d78.20911219999999!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929365411!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Nallampalli' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124828.31607262828!2d78.06050543999679!3d12.120028636146959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac1a7eec94ecc5%3A0x3d8c5ede4d0927fd!2sNallampalli%2C%20Tamil%20Nadu%20636807!3m2!1d12.061165299999999!2d78.11358179999999!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929392956!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Palacode' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124774.56052435245!2d78.03572409203709!3d12.234393378397593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac24f090348f6d%3A0xdd929d413ecdb74b!2sPalacode%2C%20Tamil%20Nadu%20636808!3m2!1d12.3045694!2d78.0729903!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929422794!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pappireddipatti' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249725.3393965502!2d78.11727442577717!3d12.046381366967811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac740be73df7c5%3A0xfcc16b9511f8194b!2sPappireddipatti%2C%20Tamil%20Nadu%20636905!3m2!1d11.914540299999999!2d78.3674927!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929450892!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pennagaram' && $_SESSION['station']=='5599+X9')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124805.83462019257!2d77.95022499085006!3d12.167986640939356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baea05a28b2bd37%3A0x604d76b9b99e06e7!2sPennagaram%2C%20Tamil%20Nadu%20636810!3m2!1d12.1348349!2d77.8928225!4m5!1s0x3bac16f95a63ed01%3A0xaa22f13c0dbed58f!2s5599%2BX9%2C%20Dharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1699375!2d78.1684375!5e0!3m2!1sen!2sin!4v1743929478764!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    
    //W3Q4+RW Thoppur
if($_SESSION['taluk'] =='Dharmapuri' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124870.16414141897!2d78.02016068840847!3d12.030255770862851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac16f95a63ed01%3A0x3f2cb64e61c93aef!2sDharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1210997!2d78.1582143!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929524849!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Harur' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249720.05835150948!2d78.10057982619198!3d12.052057845529895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac657ad3485185%3A0x3415d3760b215623!2sHarur%2C%20Tamil%20Nadu!3m2!1d12.051848!2d78.4749496!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929559051!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Karimangalam' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249650.10294053212!2d77.96318523168614!3d12.127004362663849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac397cb42767d1%3A0x659ed597857918e8!2sKariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3055494!2d78.20911219999999!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929592639!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Nallampalli' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124884.05769644305!2d77.99783138788109!3d12.000304899152995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac1a7eec94ecc5%3A0x3d8c5ede4d0927fd!2sNallampalli%2C%20Tamil%20Nadu%20636807!3m2!1d12.061165299999999!2d78.11358179999999!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929623667!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Palacode' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249651.07917483588!2d77.92575743160954!3d12.125961616597131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac24f090348f6d%3A0xdd929d413ecdb74b!2sPalacode%2C%20Tamil%20Nadu%20636808!3m2!1d12.3045694!2d78.0729903!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929653576!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pappireddipatti' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124896.52749023703!2d78.12478683740781!3d11.973360424614707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac740be73df7c5%3A0xfcc16b9511f8194b!2sPappireddipatti%2C%20Tamil%20Nadu%20636905!3m2!1d11.914540299999999!2d78.3674927!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929679779!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pennagaram' && $_SESSION['station']=='W3Q4+RW')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124864.69400821254!2d77.92985638861607!3d12.042027809747163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baea05a28b2bd37%3A0x604d76b9b99e06e7!2sPennagaram%2C%20Tamil%20Nadu%20636810!3m2!1d12.1348349!2d77.8928225!4m5!1s0x3bac044e4e33930b%3A0x4179cf7bead464b!2sW3Q4%2BRW%2C%20Thoppur%2C%20Tamil%20Nadu!3m2!1d11.9395625!2d78.0573125!5e0!3m2!1sen!2sin!4v1743929710295!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //75FW+MQ Jollampatty
    if($_SESSION['taluk'] =='Dharmapuri' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124791.58291284942!2d78.080331591391!3d12.198292562389133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac16f95a63ed01%3A0x3f2cb64e61c93aef!2sDharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1210997!2d78.1582143!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933587349!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Harur' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249602.3169227137!2d78.15538728543919!3d12.177938570616083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac657ad3485185%3A0x3415d3760b215623!2sHarur%2C%20Tamil%20Nadu!3m2!1d12.051848!2d78.4749496!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933619046!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Karimangalam' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31187.076634707646!2d78.18226579868832!3d12.289867679827768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac397cb42767d1%3A0x659ed597857918e8!2sKariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3055494!2d78.20911219999999!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933651728!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Nallampalli' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124801.86301490871!2d78.0744983910008!3d12.176439632974702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac1a7eec94ecc5%3A0x3d8c5ede4d0927fd!2sNallampalli%2C%20Tamil%20Nadu%20636807!3m2!1d12.061165299999999!2d78.11358179999999!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933709677!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Palacode' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62372.21935639688!2d78.09676062369226!3d12.298019517308406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac24f090348f6d%3A0xdd929d413ecdb74b!2sPalacode%2C%20Tamil%20Nadu%20636808!3m2!1d12.3045694!2d78.0729903!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933736974!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pappireddipatti' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249666.9822619256!2d78.13434093036052!3d12.108962580727457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac740be73df7c5%3A0xfcc16b9511f8194b!2sPappireddipatti%2C%20Tamil%20Nadu%20636905!3m2!1d11.914540299999999!2d78.3674927!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933760590!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pennagaram' && $_SESSION['station']=='75FW+MQ')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124785.47116765233!2d77.964217941623!3d12.211266350171142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baea05a28b2bd37%3A0x604d76b9b99e06e7!2sPennagaram%2C%20Tamil%20Nadu%20636810!3m2!1d12.1348349!2d77.8928225!4m5!1s0x3bac3c11bcd433b5%3A0x78bc7753b8a13f8c!2s75FW%2BMQ%2C%20Jollampatty%2C%20Tamil%20Nadu!3m2!1d12.2741875!2d78.19693749999999!5e0!3m2!1sen!2sin!4v1743933787468!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //73MG+M6 Dharmapuri
    if($_SESSION['taluk'] =='Dharmapuri' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124788.06279127789!2d78.03275209152459!3d12.205766605350181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac16f95a63ed01%3A0x3f2cb64e61c93aef!2sDharmapuri%2C%20Tamil%20Nadu!3m2!1d12.1210997!2d78.1582143!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743933832279!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Harur' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249611.70731551977!2d78.1119256847017!3d12.167946108280562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac657ad3485185%3A0x3415d3760b215623!2sHarur%2C%20Tamil%20Nadu!3m2!1d12.051848!2d78.4749496!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743933864842!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Karimangalam' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62372.40899968531!2d78.1002081236887!3d12.297220367496273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac397cb42767d1%3A0x659ed597857918e8!2sKariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3055494!2d78.20911219999999!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743933921869!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Nallampalli' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124803.66222600745!2d78.02180109093257!3d12.172610986582027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac1a7eec94ecc5%3A0x3d8c5ede4d0927fd!2sNallampalli%2C%20Tamil%20Nadu%20636807!3m2!1d12.061165299999999!2d78.11358179999999!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743933962170!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Palacode' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15593.270838004242!2d78.06450424591364!3d12.294378257393355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac24f090348f6d%3A0xdd929d413ecdb74b!2sPalacode%2C%20Tamil%20Nadu%20636808!3m2!1d12.3045694!2d78.0729903!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743933989677!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pappireddipatti' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249676.29530078368!2d78.0738128296291!3d12.0989968183321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac740be73df7c5%3A0xfcc16b9511f8194b!2sPappireddipatti%2C%20Tamil%20Nadu%20636905!3m2!1d11.914540299999999!2d78.3674927!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743934021331!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Pennagaram' && $_SESSION['station']=='73MG+M6')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124786.27515460523!2d77.91466084159246!3d12.209560451777508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baea05a28b2bd37%3A0x604d76b9b99e06e7!2sPennagaram%2C%20Tamil%20Nadu%20636810!3m2!1d12.1348349!2d77.8928225!4m5!1s0x3bac16fb237164db%3A0xccdf7100420957f7!2s73MG%2BM6%2C%20Tamil%20Nadu!3m2!1d12.2841875!2d78.07556249999999!5e0!3m2!1sen!2sin!4v1743934049552!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    //Dindigul District station
    //9X85+XV Begambur
     if($_SESSION['taluk'] =='Athoor' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62802.000068234396!2d77.86876211567686!3d10.331880036392796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0753f1e2d93a4f%3A0x580d4273fb22237!2sAthoor%2C%20Tamil%20Nadu%20624701!3m2!1d10.2895693!2d77.85652209999999!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934698885!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Dindigul(West)' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15698.319525332643!2d77.95054384543033!3d10.375437135998139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9fe44114c09fd%3A0xfbd621f7f1a831b5!2sDindigul%20West%2C%20Tamil%20Nadu!3m2!1d10.3853587!2d77.9648015!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934740445!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Dindigul(East)' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15699.107738683466!2d77.96074774542672!3d10.35971283623576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00aeef6759d0dd%3A0xc0ee22661f9bff81!2sDindigul%20East%2C%20Tamil%20Nadu!3m2!1d10.3540536!2d77.97918419999999!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934770246!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Gunjiliamparai' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251053.56722507876!2d77.87177797143939!3d10.523335634851616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa175e30f7e227%3A0x1d3d07f890767329!2sGujiliamparai%2C%20Tamil%20Nadu%20624703!3m2!1d10.680864!2d78.1129666!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934799570!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Kodaikanal' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251264.09959020416!2d77.56452260489782!3d10.261457247784659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0766637f0a0387%3A0x9ffae9373758c13c!2sKodaikanal%2C%20Tamil%20Nadu!3m2!1d10.2391086!2d77.4977456!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934834345!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Natham' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125618.00989760597!2d78.01245531002067!3d10.296766028961935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00bccc22f15139%3A0xba14fcea98f581cf!2sNatham%2C%20Tamil%20Nadu%20624401!3m2!1d10.2261119!2d78.22945349999999!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934861612!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Nilakottai' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125632.67282369477!2d77.82889690946399!3d10.259887614672685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b074c336030096f%3A0xe353581c05ee0a2f!2sNilakottai%2C%20Tamil%20Nadu%20624208!3m2!1d10.164748099999999!2d77.8531838!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934888180!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
     if($_SESSION['taluk'] =='Oddanchattiram' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125560.7308745596!2d77.7768009121951!3d10.439592340821422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9e4bb1d71c463%3A0x425779a47ffca30!2sOddanchatram%2C%20Tamil%20Nadu%20624619!3m2!1d10.4897472!2d77.7543611!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934927123!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Palani' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251125.59222934916!2d77.5770613157805!3d10.43447622816101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9de87ad84703f%3A0x15eb8f900655b911!2sPalani%2C%20Tamil%20Nadu!3m2!1d10.4500374!2d77.5161356!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743934959931!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Vedasandur' && $_SESSION['station']=='9X85+XV')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125557.83220579277!2d77.87340471230513!3d10.446768883887195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa028ea0b0fdb9%3A0x280b77c1f834dff7!2sVedasandur%2C%20Tamil%20Nadu%20624710!3m2!1d10.5311313!2d77.9476157!4m5!1s0x3b00aafb5377e251%3A0xcd2812c880c46719!2s9X85%2BXV%2C%20Begambur%2C%20Tamil%20Nadu!3m2!1d10.3674375!2d77.9596875!5e0!3m2!1sen!2sin!4v1743935038882!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }

    //9XP8+CXF, Chennamanayakkanpatti,
    if($_SESSION['taluk'] =='Athoor' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo "<iframe src='https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62800.79902155165!2d77.87194466569925!3d10.337888784939333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0753f1e2d93a4f%3A0x580d4273fb22237!2sAthoor%2C%20Tamil%20Nadu%20624701!3m2!1d10.2895693!2d77.85652209999999!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935216029!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
    }
    if($_SESSION['taluk'] =='Dindigul(West)' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3924.4497104534958!2d77.96355267485124!3d10.385811489740224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9fe44114c09fd%3A0xfbd621f7f1a831b5!2sDindigul%20West%2C%20Tamil%20Nadu!3m2!1d10.3853587!2d77.9648015!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935257945!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Dindigul(East)' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31397.17653246502!2d77.96224954674646!3d10.370078594307222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00aeef6759d0dd%3A0xc0ee22661f9bff81!2sDindigul%20East%2C%20Tamil%20Nadu!3m2!1d10.3540536!2d77.97918419999999!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935288314!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gunjiliamparai' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251047.82782616987!2d77.86310852189037!3d10.5303846076353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa175e30f7e227%3A0x1d3d07f890767329!2sGujiliamparai%2C%20Tamil%20Nadu%20624703!3m2!1d10.680864!2d78.1129666!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935384045!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kodaikanal' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251257.9846153028!2d77.56894275537823!3d10.269156717953509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0766637f0a0387%3A0x9ffae9373758c13c!2sKodaikanal%2C%20Tamil%20Nadu!3m2!1d10.2391086!2d77.4977456!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935423546!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Natham' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125614.3038673432!2d78.01485686016132!3d10.30606631995884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00bccc22f15139%3A0xba14fcea98f581cf!2sNatham%2C%20Tamil%20Nadu%20624401!3m2!1d10.2261119!2d78.22945349999999!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935497555!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nilakottai' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125628.97991828491!2d77.82902715960414!3d10.269187905665238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b074c336030096f%3A0xe353581c05ee0a2f!2sNilakottai%2C%20Tamil%20Nadu%20624208!3m2!1d10.164748099999999!2d77.8531838!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935522689!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Oddanchattiram' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125559.62807330767!2d77.77937361223702!3d10.442323238182656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9e4bb1d71c463%3A0x425779a47ffca30!2sOddanchatram%2C%20Tamil%20Nadu%20624619!3m2!1d10.4897472!2d77.7543611!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935556011!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Palani' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251122.09688182772!2d77.58376061605509!3d10.43880581142416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9de87ad84703f%3A0x15eb8f900655b911!2sPalani%2C%20Tamil%20Nadu!3m2!1d10.4500374!2d77.5161356!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935774914!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vedasandur' && $_SESSION['station']=='9XP8+CXF,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125557.83220579277!2d77.88399626230515!3d10.446768883887195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa028ea0b0fdb9%3A0x280b77c1f834dff7!2sVedasandur%2C%20Tamil%20Nadu%20624710!3m2!1d10.5311313!2d77.9476157!4m5!1s0x3b00aa9d6a756d5f%3A0x70a1d27db0c9bf97!2s9XP8%2BCXF%2C%20Chennamanayakkanpatti%2C%20Dindigul%2C%20Tamil%20Nadu!3m2!1d10.3860625!2d77.96742189999999!5e0!3m2!1sen!2sin!4v1743935813392!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //CXG3+XP8, Thadikombu
    if($_SESSION['taluk'] =='Athoor' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125591.28799183998!2d77.82805991103506!3d10.363639864249608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0753f1e2d93a4f%3A0x580d4273fb22237!2sAthoor%2C%20Tamil%20Nadu%20624701!3m2!1d10.2895693!2d77.85652209999999!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743935915207!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Dindigul(West)' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31393.01088284604!2d77.93863359678492!3d10.411537591801977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9fe44114c09fd%3A0xfbd621f7f1a831b5!2sDindigul%20West%2C%20Tamil%20Nadu!3m2!1d10.3853587!2d77.9648015!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936001741!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Dindigul(East)' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62789.3140777523!2d77.9273290659135!3d10.395173621088425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00aeef6759d0dd%3A0xc0ee22661f9bff81!2sDindigul%20East%2C%20Tamil%20Nadu!3m2!1d10.3540536!2d77.97918419999999!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936047709!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gunjiliamparai' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251028.31605957003!2d77.86310852342334!3d10.554313615263924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa175e30f7e227%3A0x1d3d07f890767329!2sGujiliamparai%2C%20Tamil%20Nadu%20624703!3m2!1d10.680864!2d78.1129666!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936205657!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe';
    }
    if($_SESSION['taluk'] =='Kodaikanal' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251237.49376889618!2d77.56626020698835!3d10.29491556817419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0766637f0a0387%3A0x9ffae9373758c13c!2sKodaikanal%2C%20Tamil%20Nadu!3m2!1d10.2391086!2d77.4977456!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936256492!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Natham' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125604.02203383743!2d78.00942701055169!3d10.33182524502881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00bccc22f15139%3A0xba14fcea98f581cf!2sNatham%2C%20Tamil%20Nadu%20624401!3m2!1d10.2261119!2d78.22945349999999!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936297565!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nilakottai' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251237.49376889618!2d77.74393315698832!3d10.29491556817419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b074c336030096f%3A0xe353581c05ee0a2f!2sNilakottai%2C%20Tamil%20Nadu%20624208!3m2!1d10.164748099999999!2d77.8531838!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936327261!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Oddanchattiram' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125544.70326082685!2d77.77198556280356!3d10.4792127525472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9e4bb1d71c463%3A0x425779a47ffca30!2sOddanchatram%2C%20Tamil%20Nadu%20624619!3m2!1d10.4897472!2d77.7543611!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936355593!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Palani' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251097.12916027743!2d77.56988061801684!3d10.469681092097803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9de87ad84703f%3A0x15eb8f900655b911!2sPalani%2C%20Tamil%20Nadu!3m2!1d10.4500374!2d77.5161356!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936385553!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vedasandur' && $_SESSION['station']=='CXG3+XP8,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62772.34893561145!2d77.9074698662299!3d10.479226050784401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa028ea0b0fdb9%3A0x280b77c1f834dff7!2sVedasandur%2C%20Tamil%20Nadu%20624710!3m2!1d10.5311313!2d77.9476157!4m5!1s0x3baa01b9e53e4e19%3A0x33293abd5d52e98e!2sCXG3%2BXP8%2C%20Thadikombu%2C%20Tamil%20Nadu%20624709!3m2!1d10.427412499999999!2d77.9543281!5e0!3m2!1sen!2sin!4v1743936412844!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Erode District Station
    //8PR8+5Q Erode
    if($_SESSION['taluk'] =='Anthiyur' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250260.07944795938!2d77.48888278377562!3d11.45726525200944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9479ffa3882f3%3A0xf13aa1aa9aded562!2sAnthiyur%2C%20Tamil%20Nadu!3m2!1d11.5770734!2d77.5877318!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743938504524!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bhavani' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62578.70744132626!2d77.6570148698414!3d11.395253031021387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba969d702b47dc1%3A0x2bca1b88fb019719!2sBhavani%2C%20Tamil%20Nadu%20638301!3m2!1d11.4470564!2d77.6839768!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743938546975!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Erode' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3911.9175394559247!2d77.71448032486558!3d11.340733588844438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96f46762f4671%3A0xd97da6e3d9c7f75e!2sErode%2C%20Tamil%20Nadu!3m2!1d11.3410364!2d77.7171642!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743938580069!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gobichettipalayam' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125156.96493690334!2d77.49511777752234!3d11.396274972460002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba93d97aa5c5915%3A0x255ab43b25c6212b!2sGobichettipalayam%2C%20Kuthirai%20Vandi%20Theru%2C%20Tamil%20Nadu%20638452!3m2!1d11.4549451!2d77.4365196!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743938644109!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kodumudi' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250477.1986056029!2d77.63707466672008!3d11.209357798432674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9804cd09a6451%3A0xd8405236dde5f59d!2sKodumudi%2C%20Tamil%20Nadu%20638151!3m2!1d11.0788297!2d77.886746!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743938747998!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Modakurichi' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d68506.29208991381!2d77.71037418820352!3d11.283422748438019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba97afa7975a471%3A0x376855df6e077bf7!2sModakurichi%2C%20Tamil%20Nadu%20638104!3m2!1d11.235441!2d77.7780526!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743939084072!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nambiyur' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250383.1319234583!2d77.3538266241095!3d11.317421485463226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9196c599691c9%3A0xc705c9aec2cc0a3d!2sNambiyur%2C%20Tamil%20Nadu%20638458!3m2!1d11.3559969!2d77.3197861!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743939128721!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Perundurai' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62597.166425181495!2d77.60963626949714!3d11.311092501093261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96d661db84bdd%3A0xceccb22a93bf1188!2sPerundurai%2C%20Tamil%20Nadu!3m2!1d11.2746098!2d77.58270069999999!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743939152682!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathyamangalam' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250290.74505302953!2d77.3167876313668!3d11.422573184245154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba920d7acaa3fc1%3A0x280672077bfe9e9b!2sSathyamangalam%2C%20Tamil%20Nadu%20638402!3m2!1d11.5034192!2d77.2444348!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743939188318!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalavadi' && $_SESSION['station']=='8PR8+5Q')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500333.5228984404!2d77.03246384130546!3d11.56220431506294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baf32a93148f263%3A0xfe8b040277cb654e!2sTalavadi%2C%20Tamil%20Nadu%20638461!3m2!1d11.778157!2d77.0051809!4m5!1s0x3ba96f46762f4671%3A0xdd178775796be0a5!2s8PR8%2B5Q%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.3404375!2d77.7169375!5e0!3m2!1sen!2sin!4v1743939216536!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

    //8MP9+PR Erode
    if($_SESSION['taluk'] =='Anthiyur' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250260.42593136185!2d77.47127843374841!3d11.456873853500959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9479ffa3882f3%3A0xf13aa1aa9aded562!2sAnthiyur%2C%20Tamil%20Nadu!3m2!1d11.5770734!2d77.5877318!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939298914!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bhavani' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62579.375445683974!2d77.62002821982897!3d11.392218081744769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba969d702b47dc1%3A0x2bca1b88fb019719!2sBhavani%2C%20Tamil%20Nadu%20638301!3m2!1d11.4470564!2d77.6839768!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939420458!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Erode' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31295.229636011863!2d77.67316539768869!3d11.341743885965125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96f46762f4671%3A0xd97da6e3d9c7f75e!2sErode%2C%20Tamil%20Nadu!3m2!1d11.3410364!2d77.7171642!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939449256!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gobichettipalayam' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125157.1147042116!2d77.47006867751665!3d11.395934822784314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba93d97aa5c5915%3A0x255ab43b25c6212b!2sGobichettipalayam%2C%20Kuthirai%20Vandi%20Theru%2C%20Tamil%20Nadu%20638452!3m2!1d11.4549451!2d77.4365196!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939474758!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kodumudi' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250478.75176021963!2d77.6120756165981!3d11.207564905289727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9804cd09a6451%3A0xd8405236dde5f59d!2sKodumudi%2C%20Tamil%20Nadu%20638151!3m2!1d11.0788297!2d77.886746!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939501904!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Modakurichi' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62601.82667653154!2d77.68129611941022!3d11.289747006187975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba97afa7975a471%3A0x376855df6e077bf7!2sModakurichi%2C%20Tamil%20Nadu%20638104!3m2!1d11.235441!2d77.7780526!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939528086!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nambiyur' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250367.87644955417!2d77.32985597530788!3d11.334851118915854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9196c599691c9%3A0xc705c9aec2cc0a3d!2sNambiyur%2C%20Tamil%20Nadu%20638458!3m2!1d11.3559969!2d77.3197861!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939558600!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Perundurai' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62598.049702730845!2d77.58786421948068!3d11.307049852058036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96d661db84bdd%3A0xceccb22a93bf1188!2sPerundurai%2C%20Tamil%20Nadu!3m2!1d11.2746098!2d77.58270069999999!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939617993!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathyamangalam' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250291.04526883765!2d77.29202998134318!3d11.422233035542027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba920d7acaa3fc1%3A0x280672077bfe9e9b!2sSathyamangalam%2C%20Tamil%20Nadu%20638402!3m2!1d11.5034192!2d77.2444348!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939650555!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalavadi' && $_SESSION['station']=='8MP9+PR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500334.13056370564!2d77.00770619120358!3d11.561864170240852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baf32a93148f263%3A0xfe8b040277cb654e!2sTalavadi%2C%20Tamil%20Nadu%20638461!3m2!1d11.778157!2d77.0051809!4m5!1s0x3ba96f46762f4671%3A0x2808985d393ee3fb!2s8MP9%2BPR%2C%20Erode%2C%20Tamil%20Nadu!3m2!1d11.336812499999999!2d77.6695625!5e0!3m2!1sen!2sin!4v1743939677682!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //9JXG+P4 Ellispettai
if($_SESSION['taluk'] =='Anthiyur' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125116.51942154755!2d77.53884222905761!3d11.487770585283913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9479ffa3882f3%3A0xf13aa1aa9aded562!2sAnthiyur%2C%20Tamil%20Nadu!3m2!1d11.5770734!2d77.5877318!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939758901!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bhavani' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31286.301769775422!2d77.6342251977712!3d11.422948081125623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba969d702b47dc1%3A0x2bca1b88fb019719!2sBhavani%2C%20Tamil%20Nadu%20638301!3m2!1d11.4470564!2d77.6839768!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939788582!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Erode' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62584.13425042561!2d77.6309310697402!3d11.370574236904593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96f46762f4671%3A0xd97da6e3d9c7f75e!2sErode%2C%20Tamil%20Nadu!3m2!1d11.3410364!2d77.7171642!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939814703!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gobichettipalayam' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125143.42444147044!2d77.45961457803637!3d11.426986693185093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba93d97aa5c5915%3A0x255ab43b25c6212b!2sGobichettipalayam%2C%20Kuthirai%20Vandi%20Theru%2C%20Tamil%20Nadu%20638452!3m2!1d11.4549451!2d77.4365196!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939844314!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kodumudi' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250451.33202117734!2d77.59125966875206!3d11.239175534418562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9804cd09a6451%3A0xd8405236dde5f59d!2sKodumudi%2C%20Tamil%20Nadu%20638151!3m2!1d11.0788297!2d77.886746!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939887275!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Modakurichi' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125191.4225207151!2d77.61927797621433!3d11.317749497371668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba97afa7975a471%3A0x376855df6e077bf7!2sModakurichi%2C%20Tamil%20Nadu%20638104!3m2!1d11.235441!2d77.7780526!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939914610!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nambiyur' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250321.60747744603!2d77.31912852894246!3d11.387553167799346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9196c599691c9%3A0xc705c9aec2cc0a3d!2sNambiyur%2C%20Tamil%20Nadu%20638458!3m2!1d11.3559969!2d77.3197861!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939953557!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Perundurai' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125182.87819526886!2d77.53615607653873!3d11.337271228740319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96d661db84bdd%3A0xceccb22a93bf1188!2sPerundurai%2C%20Tamil%20Nadu!3m2!1d11.2746098!2d77.58270069999999!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743939980696!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathyamangalam' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250263.60256172446!2d77.28157588349889!3d11.453284817178229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba920d7acaa3fc1%3A0x280672077bfe9e9b!2sSathyamangalam%2C%20Tamil%20Nadu%20638402!3m2!1d11.5034192!2d77.2444348!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743940013464!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalavadi' && $_SESSION['station']=='9JXG+P4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252754.7974594423!2d77.162426712014!3d11.591600415115039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baf32a93148f263%3A0xfe8b040277cb654e!2sTalavadi%2C%20Tamil%20Nadu%20638461!3m2!1d11.778157!2d77.0051809!4m5!1s0x3ba96a519ee04d3f%3A0x81eebd786b437610!2s9JXG%2BP4%2C%20Ellispettai%2C%20Tamil%20Nadu%20638102!3m2!1d11.399312499999999!2d77.62531249999999!5e0!3m2!1sen!2sin!4v1743940040088!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Kallakurichi district Station
//JR29+33J, Rayappanur
 if($_SESSION['taluk'] =='Chinnasalem' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d71335.24364836238!2d78.79399830070611!3d11.601566759822516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab6fa8d7766677%3A0xaea36293dcef8d48!2sChinnasalem%2C%20Tamil%20Nadu%20606201!3m2!1d11.634229399999999!2d78.8785025!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940758720!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallakurichi' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125036.04015995192!2d78.8053917321124!3d11.667724714170483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab66e5dfc2508d%3A0xb773491d8d92cdff!2sKallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7383735!2d78.9638899!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940785052!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarapuram' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250004.77686781515!2d78.72401025382929!3d11.742164518637342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9dcf1c30951b%3A0x8b24f416b11e752c!2sSankarapuram%2C%20Tamil%20Nadu%20606401!3m2!1d11.887381699999999!2d78.91677039999999!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940809014!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Thirukoilur' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249968.41395775735!2d78.8446362566854!3d11.782190116805845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacaf571c96374d%3A0xf913e267da3a7b0b!2sThirukoilure%2C%20Tamil%20Nadu%20605757!3m2!1d11.9674332!2d79.2055324!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940833802!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ulundurpet' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250098.48072400878!2d78.88303144646915!3d11.638396812694257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab51ff82158abd%3A0x50573bb07a3d3410!2sUlundurpet%2C%20Tamil%20Nadu%20606107!3m2!1d11.6773811!2d79.28846539999999!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940860529!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalvarayanmalai' && $_SESSION['station']=='JR29+33J,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62522.642896886995!2d78.73311157088702!3d11.647190621084148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab799b37d2ac49%3A0x8d889779c8d89a3d!2sKalvarayan%20Hill%2C%20Ezhuthur%2C%20Tamil%20Nadu%20606207!3m2!1d11.7042658!2d78.7357521!4m5!1s0x3bab71bf0921ff7f%3A0xd1109011a750d19f!2sJR29%2B33J%2C%20Rayappanur%2C%20Tamil%20Nadu%20606201!3m2!1d11.6002125!2d78.81764059999999!5e0!3m2!1sen!2sin!4v1743940888376!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//HJRG+QW Thulukkanur
if($_SESSION['taluk'] =='Chinnasalem' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125064.87746363545!2d78.67043563101784!3d11.603560075130092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab6fa8d7766677%3A0xaea36293dcef8d48!2sChinnasalem%2C%20Tamil%20Nadu%20606201!3m2!1d11.634229399999999!2d78.8785025!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743940936809!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallakurichi' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250083.60682962133!2d78.6307536476374!3d11.654928999872142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab66e5dfc2508d%3A0xb773491d8d92cdff!2sKallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7383735!2d78.9638899!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743940962924!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarapuram' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250016.32395792514!2d78.6309016029223!3d11.729426166977852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9dcf1c30951b%3A0x8b24f416b11e752c!2sSankarapuram%2C%20Tamil%20Nadu%20606401!3m2!1d11.887381699999999!2d78.91677039999999!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743940992313!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Thirukoilur' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249979.9998747826!2d78.75152760577541!3d11.769451765116981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacaf571c96374d%3A0xf913e267da3a7b0b!2sThirukoilure%2C%20Tamil%20Nadu%20605757!3m2!1d11.9674332!2d79.2055324!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743941019557!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ulundurpet' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500197.21418164246!2d78.62814276415644!3d11.638256258009523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab51ff82158abd%3A0x50573bb07a3d3410!2sUlundurpet%2C%20Tamil%20Nadu%20606107!3m2!1d11.6773811!2d79.28846539999999!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743941046689!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalvarayanmalai' && $_SESSION['station']=='HJRG+QW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125046.57474585478!2d78.60936953171247!3d11.644325086394492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab799b37d2ac49%3A0x8d889779c8d89a3d!2sKalvarayan%20Hill%2C%20Ezhuthur%2C%20Tamil%20Nadu%20606207!3m2!1d11.7042658!2d78.7357521!4m5!1s0x3bab9dc43f60b80b%3A0x67d4d4c5f85ab470!2sHJRG%2BQW%2C%20Thulukkanur%2C%20Tamil%20Nadu!3m2!1d11.5919375!2d78.6273125!5e0!3m2!1sen!2sin!4v1743941075258!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//PW6X+85 Kallakurichi
if($_SESSION['taluk'] =='Chinnasalem' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62516.93981360708!2d78.87160412099335!3d11.672518015071091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab6fa8d7766677%3A0xaea36293dcef8d48!2sChinnasalem%2C%20Tamil%20Nadu%20606201!3m2!1d11.634229399999999!2d78.8785025!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941112019!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallakurichi' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31252.95899890387!2d78.93256849807945!3d11.721312963393924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab66e5dfc2508d%3A0xb773491d8d92cdff!2sKallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7383735!2d78.9638899!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941138335!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarapuram' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124978.01117411147!2d78.85811778431496!3d11.795799292669589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9dcf1c30951b%3A0x8b24f416b11e752c!2sSankarapuram%2C%20Tamil%20Nadu%20606401!3m2!1d11.887381699999999!2d78.91677039999999!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941164549!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Thirukoilur' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249919.52849849852!2d78.90912866052517!3d11.835789313629757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacaf571c96374d%3A0xf913e267da3a7b0b!2sThirukoilure%2C%20Tamil%20Nadu%20605757!3m2!1d11.9674332!2d79.2055324!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941191175!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ulundurpet' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250035.7935416339!2d78.95059515139309!3d11.707917048623523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab51ff82158abd%3A0x50573bb07a3d3410!2sUlundurpet%2C%20Tamil%20Nadu%20606107!3m2!1d11.6773811!2d79.28846539999999!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941219848!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalvarayanmalai' && $_SESSION['station']=='PW6X+85')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125043.81697438507!2d78.7571362318172!3d11.65045518057162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab799b37d2ac49%3A0x8d889779c8d89a3d!2sKalvarayan%20Hill%2C%20Ezhuthur%2C%20Tamil%20Nadu%20606207!3m2!1d11.7042658!2d78.7357521!4m5!1s0x3bab66e5dfc2508d%3A0xbade568802425720!2sPW6X%2B85%2C%20Kallakurichi%2C%20Tamil%20Nadu!3m2!1d11.7108125!2d78.9479375!5e0!3m2!1sen!2sin!4v1743941244411!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Kanchipuram District Station
    //RPM4+CP Kanchipuram
    
    if($_SESSION['taluk'] =='Kanchipuram' && $_SESSION['station']=='RPM4+CP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6576.467354444173!2d79.70326000358652!3d12.83582908198022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52c2f7e0c7f12d%3A0xde5f8682b1cb2a4d!2sKanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.837178699999999!2d79.7041698!4m5!1s0x3a52c2f7e0c7f12d%3A0xa44ae631f0be296b!2sRPM4%2BCP%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8335625!2d79.7068125!5e0!3m2!1sen!2sin!4v1743941738443!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundrathur' && $_SESSION['station']=='RPM4+CP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d269983.96246107784!2d79.73585967005869!3d12.937037884065361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a528aa64f1f758b%3A0xbfca0f9632a31459!2sKundrathur%2C%20Chennai%2C%20Tamil%20Nadu%20600069!3m2!1d12.997667999999999!2d80.0972003!4m5!1s0x3a52c2f7e0c7f12d%3A0xa44ae631f0be296b!2sRPM4%2BCP%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8335625!2d79.7068125!5e0!3m2!1sen!2sin!4v1743941798412!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Sriperumbudur' && $_SESSION['station']=='RPM4+CP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124460.95364435857!2d79.75568365393931!3d12.88167197229674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f2c66c981c67%3A0x2e697ce6d307cfbe!2sSriperumbudur%2C%20Tamil%20Nadu!3m2!1d12.9624975!2d79.94527479999999!4m5!1s0x3a52c2f7e0c7f12d%3A0xa44ae631f0be296b!2sRPM4%2BCP%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8335625!2d79.7068125!5e0!3m2!1sen!2sin!4v1743941840325!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthiramerur' && $_SESSION['station']=='RPM4+CP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124539.33508885866!2d79.62275265096461!3d12.722931620341933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e0195398d045%3A0xfbe388f2c6d764b8!2sUthiramerur%2C%20Tamil%20Nadu%20603406!3m2!1d12.614873399999999!2d79.7593693!4m5!1s0x3a52c2f7e0c7f12d%3A0xa44ae631f0be296b!2sRPM4%2BCP%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8335625!2d79.7068125!5e0!3m2!1sen!2sin!4v1743941872755!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajabad' && $_SESSION['station']=='RPM4+CP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62246.70112321707!2d79.72116782603304!3d12.816190646010416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e6024baa0cdb%3A0x8cf64ac85a648aa4!2sWalajabad%2C%20Tamil%20Nadu!3m2!1d12.794790899999999!2d79.82127!4m5!1s0x3a52c2f7e0c7f12d%3A0xa44ae631f0be296b!2sRPM4%2BCP%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.8335625!2d79.7068125!5e0!3m2!1sen!2sin!4v1743941905319!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //VPFW+8XC, Kanchipuram
     if($_SESSION['taluk'] =='Kanchipuram' && $_SESSION['station']=='VPFW+8XC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31118.447288530224!2d79.71384424932262!3d12.85580909671715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52c2f7e0c7f12d%3A0xde5f8682b1cb2a4d!2sKanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.837178699999999!2d79.7041698!4m5!1s0x3a52c2f7e0c7f12d%3A0x2fb771fda0a59c79!2sVPFW%2B8XC%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.873312499999999!2d79.7473906!5e0!3m2!1sen!2sin!4v1743941974133!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundrathur' && $_SESSION['station']=='VPFW+8XC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248868.37726462638!2d79.75747889307536!3d12.935438533027337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a528aa64f1f758b%3A0xbfca0f9632a31459!2sKundrathur%2C%20Chennai%2C%20Tamil%20Nadu%20600069!3m2!1d12.997667999999999!2d80.0972003!4m5!1s0x3a52c2f7e0c7f12d%3A0x2fb771fda0a59c79!2sVPFW%2B8XC%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.873312499999999!2d79.7473906!5e0!3m2!1sen!2sin!4v1743942009415!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Sriperumbudur' && $_SESSION['station']=='VPFW+8XC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124442.93530432707!2d79.7639773046232!3d12.91789208857221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f2c66c981c67%3A0x2e697ce6d307cfbe!2sSriperumbudur%2C%20Tamil%20Nadu!3m2!1d12.9624975!2d79.94527479999999!4m5!1s0x3a52c2f7e0c7f12d%3A0x2fb771fda0a59c79!2sVPFW%2B8XC%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.873312499999999!2d79.7473906!5e0!3m2!1sen!2sin!4v1743942038131!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthiramerur' && $_SESSION['station']=='VPFW+8XC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249057.06986410532!2d79.56928587825846!3d12.744919893382221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e0195398d045%3A0xfbe388f2c6d764b8!2sUthiramerur%2C%20Tamil%20Nadu%20603406!3m2!1d12.614873399999999!2d79.7593693!4m5!1s0x3a52c2f7e0c7f12d%3A0x2fb771fda0a59c79!2sVPFW%2B8XC%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.873312499999999!2d79.7473906!5e0!3m2!1sen!2sin!4v1743942063221!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajabad' && $_SESSION['station']=='VPFW+8XC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62241.985186133636!2d79.74727037612097!3d12.835258041566712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e6024baa0cdb%3A0x8cf64ac85a648aa4!2sWalajabad%2C%20Tamil%20Nadu!3m2!1d12.794790899999999!2d79.82127!4m5!1s0x3a52c2f7e0c7f12d%3A0x2fb771fda0a59c79!2sVPFW%2B8XC%2C%20Kanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.873312499999999!2d79.7473906!5e0!3m2!1sen!2sin!4v1743942099368!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //VMF9+7V Kuram
     if($_SESSION['taluk'] =='Kanchipuram' && $_SESSION['station']=='VMF9+7V')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31118.444964463404!2d79.66841859932265!3d12.85582784671606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52c2f7e0c7f12d%3A0xde5f8682b1cb2a4d!2sKanchipuram%2C%20Tamil%20Nadu%20631501!3m2!1d12.837178699999999!2d79.7041698!4m5!1s0x3a52c14d13a6d637%3A0x5ffbc59c6b3ee9df!2sVMF9%2B7V%2C%20Kuram%2C%20Tamil%20Nadu!3m2!1d12.8731875!2d79.6696875!5e0!3m2!1sen!2sin!4v1743942138182!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundrathur' && $_SESSION['station']=='VMF9+7V')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248844.7790341071!2d79.71857744492833!3d12.959071395070294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a528aa64f1f758b%3A0xbfca0f9632a31459!2sKundrathur%2C%20Chennai%2C%20Tamil%20Nadu%20600069!3m2!1d12.997667999999999!2d80.0972003!4m5!1s0x3a52c14d13a6d637%3A0x5ffbc59c6b3ee9df!2sVMF9%2B7V%2C%20Kuram%2C%20Tamil%20Nadu!3m2!1d12.8731875!2d79.6696875!5e0!3m2!1sen!2sin!4v1743942177295!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
     if($_SESSION['taluk'] =='Sriperumbudur' && $_SESSION['station']=='VMF9+7V')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124443.56112997961!2d79.72507585459944!3d12.916635739741652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f2c66c981c67%3A0x2e697ce6d307cfbe!2sSriperumbudur%2C%20Tamil%20Nadu!3m2!1d12.9624975!2d79.94527479999999!4m5!1s0x3a52c14d13a6d637%3A0x5ffbc59c6b3ee9df!2sVMF9%2B7V%2C%20Kuram%2C%20Tamil%20Nadu!3m2!1d12.8731875!2d79.6696875!5e0!3m2!1sen!2sin!4v1743942203611!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthiramerur' && $_SESSION['station']=='VMF9+7V')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249057.36304695287!2d79.55186322823543!3d12.744621694495844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e0195398d045%3A0xfbe388f2c6d764b8!2sUthiramerur%2C%20Tamil%20Nadu%20603406!3m2!1d12.614873399999999!2d79.7593693!4m5!1s0x3a52c14d13a6d637%3A0x5ffbc59c6b3ee9df!2sVMF9%2B7V%2C%20Kuram%2C%20Tamil%20Nadu!3m2!1d12.8731875!2d79.6696875!5e0!3m2!1sen!2sin!4v1743942226863!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajabad' && $_SESSION['station']=='VMF9+7V')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62241.728977745915!2d79.70836892612571!3d12.836293141325532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52e6024baa0cdb%3A0x8cf64ac85a648aa4!2sWalajabad%2C%20Tamil%20Nadu!3m2!1d12.794790899999999!2d79.82127!4m5!1s0x3a52c14d13a6d637%3A0x5ffbc59c6b3ee9df!2sVMF9%2B7V%2C%20Kuram%2C%20Tamil%20Nadu!3m2!1d12.8731875!2d79.6696875!5e0!3m2!1sen!2sin!4v1743942251538!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Kaniyakumari District station
    //4GF7+V9R, Kottaram
     if($_SESSION['taluk'] =='Agastheeswaram' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25138.281814437305!2d77.51584948648497!3d8.112222755291013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ed9630ea6dff%3A0x7f2b235321c1f040!2sAgasteeswaram%2C%20Tamil%20Nadu%20629702!3m2!1d8.1009467!2d77.536169!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949504451!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalkulam' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126379.52224060033!2d77.33198223110803!3d8.166430968248381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f9b6f60cc557%3A0x7e578f2781ab8238!2sKalkulam%2C%20Tamil%20Nadu%20629802!3m2!1d8.1825493!2d77.3151654!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949855019!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Killiyoor' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126369.9297588758!2d77.28216448147225!3d8.196680188232033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ffedbc3669cf%3A0x6dc1d91cfd5a7d34!2sKilliyoor%2C%20Tamil%20Nadu%20629157!3m2!1d8.2645901!2d77.21552989999999!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949882975!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilavancode' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126362.97408226806!2d77.27680508173633!3d8.218545266541074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b05ab460934e761%3A0x93c4cd39ef098891!2sVilavancode%2C%20Tamil%20Nadu%20629163!3m2!1d8.3129145!2d77.2048111!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949908435!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvattar' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126359.53434775358!2d77.30737658186699!3d8.229336705837376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0454463d199683%3A0x3c81140d588b8a2d!2sThiruvattaru%2C%20Tamil%20Nadu%20629177!3m2!1d8.3347929!2d77.2663771!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949935099!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thovalai' && $_SESSION['station']=='4GF7+V9R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63187.95497565849!2d77.46081890847796!3d8.177835114352291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f45adc487807%3A0x14b03774be50452a!2sThovalai%2C%20Tamil%20Nadu%20629302!3m2!1d8.2312!2d77.5060438!4m5!1s0x3b04f2825d375b15%3A0x21e2023e19739ff0!2s4GF7%2BV9R%2C%20Kottaram%2C%20Tamil%20Nadu!3m2!1d8.1247375!2d77.5133906!5e0!3m2!1sen!2sin!4v1743949959708!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //6HQC+4Q Palavoor
    if($_SESSION['taluk'] =='Agastheeswaram' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126378.60571782505!2d77.47546348114277!3d8.169325965375254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ed9630ea6dff%3A0x7f2b235321c1f040!2sAgasteeswaram%2C%20Tamil%20Nadu%20629702!3m2!1d8.1009467!2d77.536169!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743949998588!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalkulam' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126359.31936403674!2d77.36128148187512!3d8.230010705168894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f9b6f60cc557%3A0x7e578f2781ab8238!2sKalkulam%2C%20Tamil%20Nadu%20629802!3m2!1d8.1825493!2d77.3151654!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743950025618!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Killiyoor' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252716.38009066504!2d77.22905219076621!3d8.23355035270681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ffedbc3669cf%3A0x6dc1d91cfd5a7d34!2sKilliyoor%2C%20Tamil%20Nadu%20629157!3m2!1d8.2645901!2d77.21552989999999!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743950049916!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilavancode' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252705.06412643832!2d77.22369279165565!3d8.251261582443268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b05ab460934e761%3A0x93c4cd39ef098891!2sVilavancode%2C%20Tamil%20Nadu%20629163!3m2!1d8.3129145!2d77.2048111!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743950074630!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvattar' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126343.73202004215!2d77.33667583246701!3d8.278733656857284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0454463d199683%3A0x3c81140d588b8a2d!2sThiruvattaru%2C%20Tamil%20Nadu%20629177!3m2!1d8.3347929!2d77.2663771!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743950098632!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thovalai' && $_SESSION['station']=='6HQC+4Q ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31587.874601300453!2d77.51852314498377!3d8.254493173850722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f45adc487807%3A0x14b03774be50452a!2sThovalai%2C%20Tamil%20Nadu%20629302!3m2!1d8.2312!2d77.5060438!4m5!1s0x3b048b58535177b1%3A0x5902d42405b8cf52!2s6HQC%2B4Q%2C%20Palavoor%2C%20Tamil%20Nadu%20627114!3m2!1d8.2378125!2d77.57193749999999!5e0!3m2!1sen!2sin!4v1743950125769!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //59VV+XP Nagercoil
    if($_SESSION['taluk'] =='Agastheeswaram' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63194.494196294196!2d77.43739585835606!3d8.136470624615802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ed9630ea6dff%3A0x7f2b235321c1f040!2sAgasteeswaram%2C%20Tamil%20Nadu%20629702!3m2!1d8.1009467!2d77.536169!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950171029!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalkulam' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63191.00457049565!2d77.3260390584211!3d8.158570519131759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f9b6f60cc557%3A0x7e578f2781ab8238!2sKalkulam%2C%20Tamil%20Nadu%20629802!3m2!1d8.1825493!2d77.3151654!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950198073!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Killiyoor' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126369.56072793201!2d77.23501908148623!3d8.197841687079654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04ffedbc3669cf%3A0x6dc1d91cfd5a7d34!2sKilliyoor%2C%20Tamil%20Nadu%20629157!3m2!1d8.2645901!2d77.21552989999999!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950228893!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilavancode' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126357.22773551467!2d77.23576703195457!3d8.236565348668169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b05ab460934e761%3A0x93c4cd39ef098891!2sVilavancode%2C%20Tamil%20Nadu%20629163!3m2!1d8.3129145!2d77.2048111!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950253672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvattar' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126353.78051594575!2d77.26633853208547!3d8.247356787966467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0454463d199683%3A0x3c81140d588b8a2d!2sThiruvattaru%2C%20Tamil%20Nadu%20629177!3m2!1d8.3347929!2d77.2663771!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950278346!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thovalai' && $_SESSION['station']=='59VV+XP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63185.43409427878!2d77.42151510852499!3d8.193725810410596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04f45adc487807%3A0x14b03774be50452a!2sThovalai%2C%20Tamil%20Nadu%20629302!3m2!1d8.2312!2d77.5060438!4m5!1s0x3b04f0dfc0ddc7b7%3A0x6ac6b21c44e12ba!2s5C59%2BXP%2C%20Nagercoil%2C%20Tamil%20Nadu!3m2!1d8.1599375!2d77.41931249999999!5e0!3m2!1sen!2sin!4v1743950302306!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Karur district station
    //X375+97 Karur
     if($_SESSION['taluk'] =='Aravakurichi' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125382.73349370468!2d77.9092036189522!3d10.871594124604245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba98a8e0bf0d1c5%3A0x8637e3f5f37a74b!2sAravakurichi%2C%20Tamil%20Nadu%20639201!3m2!1d10.7747161!2d77.90900069999999!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950695980!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadavur' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250790.11561716266!2d77.97777884213755!3d10.842231106191116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa11e6ea61b9f1%3A0x5d7970cf109dbb93!2sKadavur%2C%20Tamil%20Nadu%20621301!3m2!1d10.7294135!2d78.2306986!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950729013!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karur' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7834.073103779965!2d78.06224569074429!3d10.960611556798085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2f072495398f%3A0x947cfc7a1f7d9f1b!2sKarur%2C%20Tamil%20Nadu!3m2!1d10.960077799999999!2d78.0766036!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950757441!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnarayapuram' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125355.8812545308!2d78.08076841997155!3d10.935300563434431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa37e9cd9b870b%3A0xb99c3a91a8656e65!2sKrishnarayapuram%2C%20Tamil%20Nadu%20639102!3m2!1d10.9573742!2d78.2726027!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950785432!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulithalai' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250711.79050523503!2d78.07458124829095!3d10.935267448750789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa458950f07aed%3A0xd63d36b4be2cde4f!2sKulithalai%2C%20Tamil%20Nadu%20639104!3m2!1d10.9425987!2d78.4171909!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950817560!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manmangalam' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d72977.98501083495!2d78.00736325185264!3d11.036853349034132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2c32a0c14313%3A0xc5d7809d3412523f!2sManmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0268251!2d78.06560999999999!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950852409!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pugalur' && $_SESSION['station']=='X375+97')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125317.9524916299!2d77.95699762141138!3d11.024666227719155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2b58d1eb5769%3A0xd4a84cfce9fbfc92!2sPunjai%20Pugalur%2C%20Tamil%20Nadu%20639113!3m2!1d11.0866846!2d78.0169363!4m5!1s0x3baa2f072495398f%3A0x7eff03448fa66555!2sX375%2B97%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9634375!2d78.0581875!5e0!3m2!1sen!2sin!4v1743950881963!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //X369+9C Karur
     if($_SESSION['taluk'] =='Aravakurichi' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125383.85942005135!2d77.9087203189095!3d10.868914827178056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba98a8e0bf0d1c5%3A0x8637e3f5f37a74b!2sAravakurichi%2C%20Tamil%20Nadu%20639201!3m2!1d10.7747161!2d77.90900069999999!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951019011!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadavur' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250790.29258479236!2d77.97777884212366!3d10.842020007002663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa11e6ea61b9f1%3A0x5d7970cf109dbb93!2sKadavur%2C%20Tamil%20Nadu%20621301!3m2!1d10.7294135!2d78.2306986!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951056797!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karur' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3917.026141080594!2d78.06999122485973!3d10.961397839198838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2f072495398f%3A0x947cfc7a1f7d9f1b!2sKarur%2C%20Tamil%20Nadu!3m2!1d10.960077799999999!2d78.0766036!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951083802!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnarayapuram' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125355.85656787311!2d78.08076841997251!3d10.935358963378395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa37e9cd9b870b%3A0xb99c3a91a8656e65!2sKrishnarayapuram%2C%20Tamil%20Nadu%20639102!3m2!1d10.9573742!2d78.2726027!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951114248!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulithalai' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250710.72951965273!2d78.0745812483743!3d10.936522343932735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa458950f07aed%3A0xd63d36b4be2cde4f!2sKulithalai%2C%20Tamil%20Nadu%20639104!3m2!1d10.9425987!2d78.4171909!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951156808!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manmangalam' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62665.56182771311!2d78.02394671822157!3d10.993714377006192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2c32a0c14313%3A0xc5d7809d3412523f!2sManmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0268251!2d78.06560999999999!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951183495!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pugalur' && $_SESSION['station']=='X369+9C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62661.160384963085!2d77.98329071830365!3d11.014410422045481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2ba6b2714fdd%3A0xfe99df633804a2c6!2sPugalur%2C%20Rly%20stn%20to%20TNPL%20Factory%20Road%2C%20Punjaipugalur%2C%20Tamil%20Nadu%20639136!3m2!1d11.051079999999999!2d77.992091!4m5!1s0x3baa2f072495398f%3A0x3a026ec4e99fa7e7!2sX369%2B9C%2C%20Karur%2C%20Tamil%20Nadu!3m2!1d10.9609375!2d78.0685625!5e0!3m2!1sen!2sin!4v1743951212756!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //2369+V7 Manmangalam
     if($_SESSION['taluk'] =='Aravakurichi' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250747.1045872948!2d77.82679219551662!3d10.893417759477499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba98a8e0bf0d1c5%3A0x8637e3f5f37a74b!2sAravakurichi%2C%20Tamil%20Nadu%20639201!3m2!1d10.7747161!2d77.90900069999999!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951271330!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadavur' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250769.7010105924!2d77.97777884374136!3d10.866555862692037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa11e6ea61b9f1%3A0x5d7970cf109dbb93!2sKadavur%2C%20Tamil%20Nadu%20621301!3m2!1d10.7294135!2d78.2306986!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951488397!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karur' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31333.635890900518!2d78.04813339733373!3d10.985663607253578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2f072495398f%3A0x947cfc7a1f7d9f1b!2sKarur%2C%20Tamil%20Nadu!3m2!1d10.960077799999999!2d78.0766036!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951512380!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnarayapuram' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125345.58746349337!2d78.08076842036232!3d10.95962539009255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa37e9cd9b870b%3A0xb99c3a91a8656e65!2sKrishnarayapuram%2C%20Tamil%20Nadu%20639102!3m2!1d10.9573742!2d78.2726027!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951536524!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulithalai' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250691.20304401574!2d78.07458124990829!3d10.959592205373118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa458950f07aed%3A0xd63d36b4be2cde4f!2sKulithalai%2C%20Tamil%20Nadu%20639104!3m2!1d10.9425987!2d78.4171909!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951570645!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manmangalam' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15665.034194527085!2d78.05686229558349!3d11.01921802631315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2c32a0c14313%3A0xc5d7809d3412523f!2sManmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0268251!2d78.06560999999999!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951596171!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pugalur' && $_SESSION['station']=='2369+V7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62653.754947354435!2d77.99809271844173!3d11.049145163723038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa2b58d1eb5769%3A0xd4a84cfce9fbfc92!2sPunjai%20Pugalur%2C%20Tamil%20Nadu%20639113!3m2!1d11.0866846!2d78.0169363!4m5!1s0x3baa2c32a0c14313%3A0x30d842b7f1361098!2s2369%2BV7%2C%20Manmangalam%2C%20Tamil%20Nadu%20639006!3m2!1d11.0121875!2d78.0681875!5e0!3m2!1sen!2sin!4v1743951620104!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Krishnagiri district station
//86R8+H9 Kariamangalam
if($_SESSION['taluk'] =='Anchetty' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249376.6694516769!2d77.80423120316048!3d12.415671776295243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae8fda54022257%3A0xfd6e2d8b98ebd373!2sAnchetty%2C%20Tamil%20Nadu%20635102!3m2!1d12.3543053!2d77.7221969!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951779528!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bargur' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124674.38590913067!2d78.20299529583909!3d12.444753030718108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4b4b38fd31b3%3A0xeb89e88ac6dd654a!2sBargur%2C%20Tamil%20Nadu%20635104!3m2!1d12.542876699999999!2d78.3569922!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951808337!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Denkanikottai' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249308.22873748245!2d77.84353215853524!3d12.486897409018475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae87809cda83d1%3A0xaba5950a1d4150b9!2sDenkanikottai%2C%20Tamil%20Nadu%20635107!3m2!1d12.5269836!2d77.7898513!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951833874!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnagiri' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124675.69455740898!2d78.12972319578942!3d12.44202753327503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac34936b787041%3A0x8447c907029835db!2sKrishnagiri%2C%20Tamil%20Nadu%20635001!3m2!1d12.5265661!2d78.2149575!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951858906!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Hosur' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249258.70569705102!2d77.86071151242433!3d12.538187266742932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae70c883f728a3%3A0xd71a6bc0275ac9be!2sHosur%2C%20Tamil%20Nadu!3m2!1d12.740912699999999!2d77.8252923!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951884201!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pochampalli' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124708.86118532978!2d78.23034069453064!3d12.372754748301293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4f661ecdda99%3A0x4abf5eaedccd2d7f!2sPochampalli%2C%20Tamil%20Nadu%20635203!3m2!1d12.3780187!2d78.411683!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951910517!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shoolagiri' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249285.38227251903!2d77.95354166032948!3d12.510584670199641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badd12664f6c66b%3A0xdcf6750d34510f85!2sShoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6795168!2d78.0124294!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951935091!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthangarai' && $_SESSION['station']=='86R8+H9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124724.87988801635!2d78.29216559392269!3d12.339160529862262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac5c43a5203f11%3A0x9b2589dab62b320f!2sUthangarai%2C%20Tamil%20Nadu%20635207!3m2!1d12.2636674!2d78.5352633!4m5!1s0x3bac397cb42767d1%3A0xd1ec3febc197106d!2s86R8%2BH9%2C%20Kariamangalam%2C%20Tamil%20Nadu%20635111!3m2!1d12.3414375!2d78.2159375!5e0!3m2!1sen!2sin!4v1743951960484!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//H5J4+QR Polupalli
if($_SESSION['taluk'] =='Anchetty' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249261.0812996527!2d77.77995021223781!3d12.535731625944965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae8fda54022257%3A0xfd6e2d8b98ebd373!2sAnchetty%2C%20Tamil%20Nadu%20635102!3m2!1d12.3543053!2d77.7221969!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952008717!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bargur' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124626.2212632302!2d78.17462529766706!3d12.544659187068975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4b4b38fd31b3%3A0xeb89e88ac6dd654a!2sBargur%2C%20Tamil%20Nadu%20635104!3m2!1d12.542876699999999!2d78.3569922!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952033809!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Denkanikottai' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249203.44441900248!2d77.81317546676401!3d12.595177453286896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae87809cda83d1%3A0xaba5950a1d4150b9!2sDenkanikottai%2C%20Tamil%20Nadu%20635107!3m2!1d12.5269836!2d77.7898513!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952063094!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnagiri' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31155.487654551423!2d78.16602774898028!3d12.55347986436685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac34936b787041%3A0x8447c907029835db!2sKrishnagiri%2C%20Tamil%20Nadu%20635001!3m2!1d12.5265661!2d78.2149575!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952091662!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Hosur' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249141.92290455004!2d77.83097937159518!3d12.658326766995186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae70c883f728a3%3A0xd71a6bc0275ac9be!2sHosur%2C%20Tamil%20Nadu!3m2!1d12.740912699999999!2d77.8252923!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952117672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pochampalli' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124658.03956162406!2d78.2022055964595!3d12.47874789883523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4f661ecdda99%3A0x4abf5eaedccd2d7f!2sPochampalli%2C%20Tamil%20Nadu%20635203!3m2!1d12.3780187!2d78.411683!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952144604!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shoolagiri' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62292.92381930135!2d78.04742302517106!3d12.627805439990071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badd12664f6c66b%3A0xdcf6750d34510f85!2sShoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6795168!2d78.0124294!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952172764!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthangarai' && $_SESSION['station']=='H5J4+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249370.99203260682!2d78.18138425360634!3d12.421595504054496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac5c43a5203f11%3A0x9b2589dab62b320f!2sUthangarai%2C%20Tamil%20Nadu%20635207!3m2!1d12.2636674!2d78.5352633!4m5!1s0x3badcd09aa3f2299%3A0x4f0105f339dd36ad!2sH5J4%2BQR%2C%20Polupalli%2C%20Tamil%20Nadu%20635121!3m2!1d12.581937499999999!2d78.1570625!5e0!3m2!1sen!2sin!4v1743952210321!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//J2WW+FW Shoolagiri
if($_SESSION['taluk'] =='Anchetty' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249252.33342854967!2d77.71994976292477!3d12.544771892070125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae8fda54022257%3A0xfd6e2d8b98ebd373!2sAnchetty%2C%20Tamil%20Nadu%20635102!3m2!1d12.3543053!2d77.7221969!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952261142!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bargur' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249214.6116219866!2d78.02201776588707!3d12.583681346329373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4b4b38fd31b3%3A0xeb89e88ac6dd654a!2sBargur%2C%20Tamil%20Nadu%20635104!3m2!1d12.542876699999999!2d78.3569922!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952289618!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Denkanikottai' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124601.70382424488!2d77.83558634859759!3d12.595215289737325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae87809cda83d1%3A0xaba5950a1d4150b9!2sDenkanikottai%2C%20Tamil%20Nadu%20635107!3m2!1d12.5269836!2d77.7898513!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952335414!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Krishnagiri' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124603.009459976!2d78.03402914854809!3d12.592528042252196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac34936b787041%3A0x8447c907029835db!2sKrishnagiri%2C%20Tamil%20Nadu%20635001!3m2!1d12.5265661!2d78.2149575!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952366815!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Hosur' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124553.79060543979!2d77.85339025041603!3d12.693442697887216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bae70c883f728a3%3A0xd71a6bc0275ac9be!2sHosur%2C%20Tamil%20Nadu!3m2!1d12.740912699999999!2d77.8252923!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952402656!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pochampalli' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249278.4098633916!2d78.04959806087696!3d12.51780489313318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac4f661ecdda99%3A0x4abf5eaedccd2d7f!2sPochampalli%2C%20Tamil%20Nadu%20635203!3m2!1d12.3780187!2d78.411683!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952438802!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shoolagiri' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31142.183714545874!2d78.00802279910327!3d12.662885757969637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badd12664f6c66b%3A0xdcf6750d34510f85!2sShoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6795168!2d78.0124294!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952462664!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthangarai' && $_SESSION['station']=='J2WW+FW')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249333.45623630783!2d78.11118805655413!3d12.460690007326821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac5c43a5203f11%3A0x9b2589dab62b320f!2sUthangarai%2C%20Tamil%20Nadu%20635207!3m2!1d12.2636674!2d78.5352633!4m5!1s0x3badd12664f6c66b%3A0x4193a4554edcf683!2sJ2WW%2BFW%2C%20Shoolagiri%2C%20Tamil%20Nadu%20635117!3m2!1d12.6461875!2d78.04731249999999!5e0!3m2!1sen!2sin!4v1743952489386!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Madurai district station
//V3WQ+H4 Madurai
if($_SESSION['taluk'] =='Madurai(East)' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125772.54637180697!2d78.0176108541538!3d9.901266412827415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c3e63be433f3%3A0x483cff9db8cad04a!2sMadurai%20East%2C%20Tamil%20Nadu!3m2!1d9.9582692!2d78.1888259!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953161592!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(North)' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31441.576454055412!2d78.08471914633603!3d9.917540071740731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c5ed4e00d66b%3A0xf2dfdacc192d8d17!2sMadurai-North%20taluk%2C%20Tamil%20Nadu%20625014!3m2!1d9.935395!2d78.122967!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953192735!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(West)' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31441.87460595322!2d78.07305154633329!3d9.914432121929682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cedc99eb6057%3A0xf1c816c6674ca19b!2sMadurai%20West%2C%20Tamil%20Nadu!3m2!1d9.9300585!2d78.0958331!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953223198!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(South)' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15722.238260088154!2d78.06958714532031!3d9.88726859339757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfd02cd9b42d%3A0x9914d57cd844bb23!2sMadurai-South%20taluk%2C%20Tamil%20Nadu%20625005!3m2!1d9.877920999999999!2d78.073802!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953252826!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallikudi' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125812.03869367536!2d77.94748130265444!3d9.797660763704572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d5826082a0ed%3A0x30f305b77ed48d75!2sKalligudi%2C%20Tamil%20Nadu%20625701!3m2!1d9.7103469!2d77.9749223!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953280966!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melur' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125748.81586153686!2d78.1286532050547!3d9.963008852773326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00eb1f30934e3b%3A0xe9111866172916ef!2sMelur%2C%20Tamil%20Nadu%20625106!3m2!1d10.031287899999999!2d78.3382117!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953479868!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peraiyur' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125807.85294424891!2d77.8555474528134!3d9.808693152956536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0728fed8011731%3A0x751252975ebdfdb3!2sPeraiyur%2C%20Tamil%20Nadu%20625703!3m2!1d9.7353861!2d77.7896347!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953512580!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumangalam' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62894.333214943355!2d77.99627731395474!3d9.859106651107822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d3acd93db035%3A0x5d14ca9195ad73dc!2sTirumangalam%2C%20Tamil%20Nadu%20625706!3m2!1d9.8216147!2d77.9891394!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953540146!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirupparankundram' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7861.0673568617285!2d78.0747422906824!3d9.88943331084143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfcfd8c9335b%3A0xae30a9cabfd07874!2sThiruparankundram%2C%20Tamil%20Nadu!3m2!1d9.8822567!2d78.0719718!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953569420!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Usilampatti' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125766.30757195054!2d77.86124770439069!3d9.917535496998683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b07371f05c880a5%3A0xe172b9691126c4c9!2sUsilampatti%2C%20Tamil%20Nadu%20625532!3m2!1d9.9649231!2d77.788508!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953596860!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vadipatti' && $_SESSION['station']=='V3WQ+H4')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125741.21505165196!2d77.94750160534326!3d9.982704833625794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00b5014b5db9a7%3A0x474a49e484b54e87!2sVadipatti%2C%20Tamil%20Nadu!3m2!1d10.0843179!2d77.9610158!4m5!1s0x3b00c582b1189633%3A0x9f55dd2c55142f61!2sV3WQ%2BH4%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.8964375!2d78.0878125!5e0!3m2!1sen!2sin!4v1743953622661!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
//W4RQ+9M Madurai
if($_SESSION['taluk'] =='Madurai(East)' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31437.805270670804!2d78.1429379963709!3d9.956768169356355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c3e63be433f3%3A0x483cff9db8cad04a!2sMadurai%20East%2C%20Tamil%20Nadu!3m2!1d9.9582692!2d78.1888259!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953662700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(North)' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7859.919109844945!2d78.12592164068504!3d9.937323310659462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c5ed4e00d66b%3A0xf2dfdacc192d8d17!2sMadurai-North%20taluk%2C%20Tamil%20Nadu%20625014!3m2!1d9.935395!2d78.122967!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953735304!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(West)' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31440.12088501973!2d78.09694724634947!3d9.932699170819173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cedc99eb6057%3A0xf1c816c6674ca19b!2sMadurai%20West%2C%20Tamil%20Nadu!3m2!1d9.9300585!2d78.0958331!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953766022!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(South)' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62884.70065316052!2d78.06441111413437!3d9.909471188854305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfd02cd9b42d%3A0x9914d57cd844bb23!2sMadurai-South%20taluk%2C%20Tamil%20Nadu%20625005!3m2!1d9.877920999999999!2d78.073802!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953795208!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallikudi' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251605.56191647766!2d77.90366167806702!3d9.822044955169567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d5826082a0ed%3A0x30f305b77ed48d75!2sKalligudi%2C%20Tamil%20Nadu%20625701!3m2!1d9.7103469!2d77.9749223!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953829204!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melur' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125740.81051458546!2d78.15583490535862!3d9.98375203260789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00eb1f30934e3b%3A0xe9111866172916ef!2sMelur%2C%20Tamil%20Nadu%20625106!3m2!1d10.031287899999999!2d78.3382117!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953868018!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peraiyur' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251598.85101999826!2d77.81172782859437!3d9.830868170792424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0728fed8011731%3A0x751252975ebdfdb3!2sPeraiyur%2C%20Tamil%20Nadu%20625703!3m2!1d9.7353861!2d77.7896347!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953899144!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumangalam' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125782.9791102064!2d77.9936669537577!3d9.874001389361739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d3acd93db035%3A0x5d14ca9195ad73dc!2sTirumangalam%2C%20Tamil%20Nadu%20625706!3m2!1d9.8216147!2d77.9891394!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953931403!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirupparankundram' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31442.142604177734!2d78.08501659633082!3d9.911637672099578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfcfd8c9335b%3A0xae30a9cabfd07874!2sThiruparankundram%2C%20Tamil%20Nadu!3m2!1d9.8822567!2d78.0719718!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953959480!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Usilampatti' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251511.4855378083!2d77.79907078545939!3d9.945025526352884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b07371f05c880a5%3A0xe172b9691126c4c9!2sUsilampatti%2C%20Tamil%20Nadu%20625532!3m2!1d9.9649231!2d77.788508!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743953986592!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vadipatti' && $_SESSION['station']=='W4RQ+9M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125731.64497275611!2d77.96773615570662!3d10.007449209577208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00b5014b5db9a7%3A0x474a49e484b54e87!2sVadipatti%2C%20Tamil%20Nadu!3m2!1d10.0843179!2d77.9610158!4m5!1s0x3b00c582b1189633%3A0x1b4c30ff6883cbf3!2sW4RQ%2B9M%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9409375!2d78.13918749999999!5e0!3m2!1sen!2sin!4v1743954015062!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
//W4QM+44 Madurai
if($_SESSION['taluk'] =='Madurai(East)' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31438.030085578106!2d78.13824329636884!3d9.954433919498195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c3e63be433f3%3A0x483cff9db8cad04a!2sMadurai%20East%2C%20Tamil%20Nadu!3m2!1d9.9582692!2d78.1888259!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954064228!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(North)' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3929.973336732134!2d78.12527247484486!3d9.936176390165995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00c5ed4e00d66b%3A0xf2dfdacc192d8d17!2sMadurai-North%20taluk%2C%20Tamil%20Nadu%20625014!3m2!1d9.935395!2d78.122967!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954100875!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(West)' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15720.115523099106!2d78.10402304533005!3d9.931552692724438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cedc99eb6057%3A0xf1c816c6674ca19b!2sMadurai%20West%2C%20Tamil%20Nadu!3m2!1d9.9300585!2d78.0958331!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954131605!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madurai(South)' && $_SESSION['station']=='W4QM+44 ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62884.920555828154!2d78.06118701413028!3d9.908324239133256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfd02cd9b42d%3A0x9914d57cd844bb23!2sMadurai-South%20taluk%2C%20Tamil%20Nadu%20625005!3m2!1d9.877920999999999!2d78.073802!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954158942!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kallikudi' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251605.56191647766!2d77.89941062806699!3d9.822044955169567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d5826082a0ed%3A0x30f305b77ed48d75!2sKalligudi%2C%20Tamil%20Nadu%20625701!3m2!1d9.7103469!2d77.9749223!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954191505!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melur' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125741.76817032865!2d78.15114020532226!3d9.981272835017757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00eb1f30934e3b%3A0xe9111866172916ef!2sMelur%2C%20Tamil%20Nadu%20625106!3m2!1d10.031287899999999!2d78.3382117!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954220392!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peraiyur' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251598.18506235123!2d77.79563597864667!3d9.831743317382854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0728fed8011731%3A0x751252975ebdfdb3!2sPeraiyur%2C%20Tamil%20Nadu%20625703!3m2!1d9.7353861!2d77.7896347!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954247001!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumangalam' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125779.85291606277!2d77.97757510387639!3d9.882179231402107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00d3acd93db035%3A0x5d14ca9195ad73dc!2sTirumangalam%2C%20Tamil%20Nadu%20625706!3m2!1d9.8216147!2d77.9891394!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954279658!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirupparankundram' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31442.24604033524!2d78.08179249632988!3d9.910558922165178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00cfcfd8c9335b%3A0xae30a9cabfd07874!2sThiruparankundram%2C%20Tamil%20Nadu!3m2!1d9.8822567!2d78.0719718!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954307416!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Usilampatti' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251515.40528401712!2d77.79584668515143!3d9.93993154617126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b07371f05c880a5%3A0xe172b9691126c4c9!2sUsilampatti%2C%20Tamil%20Nadu%20625532!3m2!1d9.9649231!2d77.788508!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954334965!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vadipatti' && $_SESSION['station']=='W4QM+44')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125731.64497275611!2d77.96451205570659!3d10.00744920957722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00b5014b5db9a7%3A0x474a49e484b54e87!2sVadipatti%2C%20Tamil%20Nadu!3m2!1d10.0843179!2d77.9610158!4m5!1s0x3b00c582b1189633%3A0x80498fd545de2947!2sW4QM%2B44%2C%20Madurai%2C%20Tamil%20Nadu!3m2!1d9.9378125!2d78.1328125!5e0!3m2!1sen!2sin!4v1743954363361!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   //Mayiladuthurai District station
   //6PCP+CX Sirkali
   if($_SESSION['taluk'] =='Kuthalam' && $_SESSION['station']=='6PCP+CX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125265.94127653402!2d79.5656669733857!3d11.14606161145603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a552600dd9af86b%3A0xee1aef69a7c90a8f!2sKuthalam%2C%20Tamil%20Nadu%20609801!3m2!1d11.0711082!2d79.5587698!4m5!1s0x3a54de1af2991ed9%3A0xd1df83612cd2df66!2s6PCP%2BCX%2C%20Sirkali%2C%20Tamil%20Nadu!3m2!1d11.221062499999999!2d79.7374375!5e0!3m2!1sen!2sin!4v1743955702165!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mayiladuthurai' && $_SESSION['station']=='6PCP+CX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125259.37151196133!2d79.61237682363513!3d11.161302846873358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5526c731f25c21%3A0x4339eccad0b5866a!2sMayiladuthurai%2C%20Tamil%20Nadu%20609001!3m2!1d11.101770499999999!2d79.6525686!4m5!1s0x3a54de1af2991ed9%3A0xd1df83612cd2df66!2s6PCP%2BCX%2C%20Sirkali%2C%20Tamil%20Nadu!3m2!1d11.221062499999999!2d79.7374375!5e0!3m2!1sen!2sin!4v1743955736624!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sirkazhi' && $_SESSION['station']=='6PCP+CX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15653.659257750762!2d79.72787959563583!3d11.23086502314809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54de1af2991ed9%3A0x13e9ce3a26f66c3b!2sSirkali%2C%20Tamil%20Nadu!3m2!1d11.2407109!2d79.7372255!4m5!1s0x3a54de1af2991ed9%3A0xd1df83612cd2df66!2s6PCP%2BCX%2C%20Sirkali%2C%20Tamil%20Nadu!3m2!1d11.221062499999999!2d79.7374375!5e0!3m2!1sen!2sin!4v1743955763106!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tharangambadi' && $_SESSION['station']=='6PCP+CX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125275.68359846405!2d79.70967852301588!3d11.123422383122888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a551a485b0b41b1%3A0x297e97596c01694a!2sTharangambadi%2C%20Tamil%20Nadu!3m2!1d11.0286007!2d79.8547524!4m5!1s0x3a54de1af2991ed9%3A0xd1df83612cd2df66!2s6PCP%2BCX%2C%20Sirkali%2C%20Tamil%20Nadu!3m2!1d11.221062499999999!2d79.7374375!5e0!3m2!1sen!2sin!4v1743955795711!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   //P2P5+FQ Madur
if($_SESSION['taluk'] =='Kuthalam' && $_SESSION['station']=='P2P5+FQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d547754.6485940063!2d78.92027542143538!3d11.437317050129629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a552600dd9af86b%3A0xee1aef69a7c90a8f!2sKuthalam%2C%20Tamil%20Nadu%20609801!3m2!1d11.0711082!2d79.5587698!4m5!1s0x3bab5d88fde79ddf%3A0xe444205dadf3b957!2sP2P5%2BFQ%2C%20Kanaiyar%2C%20Madur%2C%20Tamil%20Nadu%20606203!3m2!1d11.7361875!2d79.00943749999999!5e0!3m2!1sen!2sin!4v1743956271055!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mayiladuthurai' && $_SESSION['station']=='P2P5+FQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d547762.7417794731!2d79.00040971099239!3d11.433137761056484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5526c731f25c21%3A0x4339eccad0b5866a!2sMayiladuthurai%2C%20Tamil%20Nadu%20609001!3m2!1d11.101770499999999!2d79.6525686!4m5!1s0x3bab5d88fde79ddf%3A0xe444205dadf3b957!2sP2P5%2BFQ%2C%20Kanaiyar%2C%20Madur%2C%20Tamil%20Nadu%20606203!3m2!1d11.7361875!2d79.00943749999999!5e0!3m2!1sen!2sin!4v1743956310794!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sirkazhi' && $_SESSION['station']=='P2P5+FQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500463.64637256076!2d79.04360471949059!3d11.489140127897452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54de1af2991ed9%3A0x13e9ce3a26f66c3b!2sSirkali%2C%20Tamil%20Nadu!3m2!1d11.2407109!2d79.7372255!4m5!1s0x3bab5d88fde79ddf%3A0xe444205dadf3b957!2sP2P5%2BFQ%2C%20Kanaiyar%2C%20Madur%2C%20Tamil%20Nadu%20606203!3m2!1d11.7361875!2d79.00943749999999!5e0!3m2!1sen!2sin!4v1743956337207!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tharangambadi' && $_SESSION['station']=='P2P5+FQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500652.6610876692!2d79.1024105378016!3d11.382184459100628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a551a485b0b41b1%3A0x297e97596c01694a!2sTharangambadi%2C%20Tamil%20Nadu!3m2!1d11.0286007!2d79.8547524!4m5!1s0x3bab5d88fde79ddf%3A0xe444205dadf3b957!2sP2P5%2BFQ%2C%20Kanaiyar%2C%20Madur%2C%20Tamil%20Nadu%20606203!3m2!1d11.7361875!2d79.00943749999999!5e0!3m2!1sen!2sin!4v1743956363500!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   //MRJW+RX Velankanni
   if($_SESSION['taluk'] =='Kuthalam' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250758.94165071557!2d79.53815239458669!3d10.879354413509867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a552600dd9af86b%3A0xee1aef69a7c90a8f!2sKuthalam%2C%20Tamil%20Nadu%20609801!3m2!1d11.0711082!2d79.5587698!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1743956534418!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mayiladuthurai' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250746.9024920162!2d79.58180374553251!3d10.893657708555708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5526c731f25c21%3A0x4339eccad0b5866a!2sMayiladuthurai%2C%20Tamil%20Nadu%20609001!3m2!1d11.101770499999999!2d79.6525686!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1743956499691!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sirkazhi' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d883867.4065091694!2d79.30725502470278!3d10.87339780475716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a54de1af2991ed9%3A0x13e9ce3a26f66c3b!2sSirkali%2C%20Tamil%20Nadu!3m2!1d11.2407109!2d79.7372255!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1743956433938!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tharangambadi' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501501.89581436093!2d79.41156694540555!3d10.888853565755543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a551a485b0b41b1%3A0x297e97596c01694a!2sTharangambadi%2C%20Tamil%20Nadu!3m2!1d11.0286007!2d79.8547524!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1743956398758!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Nagapattinam District station
    //MRJW+RX Velankanni
    if($_SESSION['taluk'] =='Kilvelur' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62721.47268144164!2d79.7535466171788!3d10.727383990972166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556a80174121e3%3A0x6ec581ac81c68e67!2sKilvelur%2C%20Tamil%20Nadu%20611104!3m2!1d10.7690326!2d79.74205549999999!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1744008996588!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nagapattinam' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62721.90820358693!2d79.79311671717069!3d10.72528374147753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556c9797ef6927%3A0xc869efbb726e6072!2sNagapattinam%2C%20Tamil%20Nadu!3m2!1d10.767231299999999!2d79.8448512!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1744009027450!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirukkuvalai' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62739.588283064455!2d79.74227881684092!3d10.639677912088514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5542b4dcfa822f%3A0x9ce3c2419035759d!2sThirukkuvalai%2C%20Tamil%20Nadu!3m2!1d10.6321297!2d79.7196462!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1744009053219!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vedaranyam' && $_SESSION['station']=='MRJW+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251047.84998011068!2d79.67140022188865!3d10.530357407740336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3aff894a64379663%3A0xdfaf4c3d08381fa9!2sVedaranyam%2C%20Tamil%20Nadu%20614810!3m2!1d10.3773716!2d79.8494647!4m5!1s0x3a556ed46f2b695d%3A0x98e5faf4dbfc8048!2sMRJW%2BRX%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.682062499999999!2d79.8474375!5e0!3m2!1sen!2sin!4v1744009079258!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //MRXM+VF Velankanni
 if($_SESSION['taluk'] =='Kilvelur' && $_SESSION['station']=='MRXM+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62719.64525596648!2d79.74700766721287!3d10.73619208885289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556a80174121e3%3A0x6ec581ac81c68e67!2sKilvelur%2C%20Tamil%20Nadu%20611104!3m2!1d10.7690326!2d79.74205549999999!4m5!1s0x3a556ed46f2b695d%3A0x266d6b8d9474ad9c!2sMRXM%2BVF%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6996875!2d79.8336875!5e0!3m2!1sen!2sin!4v1744009143668!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nagapattinam' && $_SESSION['station']=='MRXM+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62720.081131554616!2d79.79182356720473!3d10.734091839358216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556c9797ef6927%3A0xc869efbb726e6072!2sNagapattinam%2C%20Tamil%20Nadu!3m2!1d10.767231299999999!2d79.8448512!4m5!1s0x3a556ed46f2b695d%3A0x266d6b8d9474ad9c!2sMRXM%2BVF%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6996875!2d79.8336875!5e0!3m2!1sen!2sin!4v1744009169069!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirukkuvalai' && $_SESSION['station']=='MRXM+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62738.0345180219!2d79.73582751686989!3d10.647228410269639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5542b4dcfa822f%3A0x9ce3c2419035759d!2sThirukkuvalai%2C%20Tamil%20Nadu!3m2!1d10.6321297!2d79.7196462!4m5!1s0x3a556ed46f2b695d%3A0x266d6b8d9474ad9c!2sMRXM%2BVF%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6996875!2d79.8336875!5e0!3m2!1sen!2sin!4v1744009196089!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vedaranyam' && $_SESSION['station']=='MRXM+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251042.16490685547!2d79.67140022233525!3d10.537335080801842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3aff894a64379663%3A0xdfaf4c3d08381fa9!2sVedaranyam%2C%20Tamil%20Nadu%20614810!3m2!1d10.3773716!2d79.8494647!4m5!1s0x3a556ed46f2b695d%3A0x266d6b8d9474ad9c!2sMRXM%2BVF%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6996875!2d79.8336875!5e0!3m2!1sen!2sin!4v1744009219856!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //MRJW+Q7R, Velankanni
     if($_SESSION['taluk'] =='Kilvelur' && $_SESSION['station']=='MRJW+Q7R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d169309.29557967253!2d79.69256275975606!3d10.700098471735954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556a80174121e3%3A0x6ec581ac81c68e67!2sKilvelur%2C%20Tamil%20Nadu%20611104!3m2!1d10.7690326!2d79.74205549999999!4m5!1s0x3a556ed46f2b695d%3A0xd79dcdb000796337!2sMRJW%2BQ7R%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6819875!2d79.8456406!5e0!3m2!1sen!2sin!4v1744009299524!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nagapattinam' && $_SESSION['station']=='MRJW+Q7R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62721.920488848176!2d79.7922182671704!3d10.725224491491778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a556c9797ef6927%3A0xc869efbb726e6072!2sNagapattinam%2C%20Tamil%20Nadu!3m2!1d10.767231299999999!2d79.8448512!4m5!1s0x3a556ed46f2b695d%3A0xd79dcdb000796337!2sMRJW%2BQ7R%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6819875!2d79.8456406!5e0!3m2!1sen!2sin!4v1744009328398!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirukkuvalai' && $_SESSION['station']=='MRJW+Q7R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62739.588283064455!2d79.7413803668409!3d10.639677912088514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5542b4dcfa822f%3A0x9ce3c2419035759d!2sThirukkuvalai%2C%20Tamil%20Nadu!3m2!1d10.6321297!2d79.7196462!4m5!1s0x3a556ed46f2b695d%3A0xd79dcdb000796337!2sMRJW%2BQ7R%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6819875!2d79.8456406!5e0!3m2!1sen!2sin!4v1744009351545!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vedaranyam' && $_SESSION['station']=='MRJW+Q7R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251047.84998011068!2d79.67140022188865!3d10.530357407740336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3aff894a64379663%3A0xdfaf4c3d08381fa9!2sVedaranyam%2C%20Tamil%20Nadu%20614810!3m2!1d10.3773716!2d79.8494647!4m5!1s0x3a556ed46f2b695d%3A0xd79dcdb000796337!2sMRJW%2BQ7R%2C%20Velankanni%2C%20Tamil%20Nadu!3m2!1d10.6819875!2d79.8456406!5e0!3m2!1sen!2sin!4v1744009382776!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Namakkal district station
    //65Q8+WG Namakkal
    if($_SESSION['taluk'] =='Kollimalai' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125209.27571336174!2d78.1750029255367!3d11.276851586421394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babb98203e2b5e9%3A0x18dc43aab135b9fa!2sKolli%20Hills%2C%20Tamil%20Nadu!3m2!1d11.248513899999999!2d78.3387066!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009502789!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumarapalayam' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250353.3682230509!2d77.77994442644759!3d11.351402505737356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9682c3ed35ab1%3A0x5c4ea7abeacf1286!2sKomarapalayam%2C%20Tamil%20Nadu%20638183!3m2!1d11.4362628!2d77.7232172!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009534125!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mohanur' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125259.9922387727!2d78.06278847361152!3d11.159863698250195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa32599c9a4347%3A0x67708b9d06acfed3!2sMohanur%2C%20Tamil%20Nadu%20637015!3m2!1d11.0604257!2d78.1388344!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009561059!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Namakkal' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15653.670018061463!2d78.15358594563578!3d11.230666673151054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babce5e3f22014f%3A0xa0ab89ef32c34a77!2sNamakkal%2C%20Tamil%20Nadu!3m2!1d11.2193848!2d78.16784179999999!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009585923!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rasipuram' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250362.81217082747!2d78.00683657570572!3d11.34063129685054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc20ec06afb6f%3A0x45b97c5f12fb6da9!2sRasipuram%2C%20Tamil%20Nadu!3m2!1d11.4614624!2d78.1854772!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009615121!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Senthamangalam' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62609.59372258054!2d78.15880226926537!3d11.254082564703841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc89ae9ae4db9%3A0x109e4fd806bf7d1e!2sSenthamangalam%2C%20Tamil%20Nadu%20637409!3m2!1d11.2813371!2d78.2357948!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009640316!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruchengode' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125194.83626901069!2d77.94527552608477!3d11.309940604825883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96191aa62873b%3A0xcbcc6272306596d2!2sTiruchengode%2C%20Tamil%20Nadu%20637211!3m2!1d11.379023499999999!2d77.8949435!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009665019!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramathivelur' && $_SESSION['station']=='65Q8+WG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125248.8465103423!2d78.0026586740346!3d11.185677123558923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babd4b04c2efbb1%3A0x35c4d71f6b52e69f!2sVelur%2C%20Tamil%20Nadu%20638182!3m2!1d11.1120526!2d78.0038721!4m5!1s0x3babce5e3f22014f%3A0x2840768355d019a1!2s65Q8%2BWG%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2398125!2d78.16631249999999!5e0!3m2!1sen!2sin!4v1744009690796!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //75H7+VJ Namakkal
    if($_SESSION['taluk'] =='Kollimalai' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125202.35116695118!2d78.17483947579959!3d11.292731621256227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babb98203e2b5e9%3A0x18dc43aab135b9fa!2sKolli%20Hills%2C%20Tamil%20Nadu!3m2!1d11.248513899999999!2d78.3387066!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009727184!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumarapalayam' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250353.3682230509!2d77.77964927644756!3d11.351402505737356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9682c3ed35ab1%3A0x5c4ea7abeacf1286!2sKomarapalayam%2C%20Tamil%20Nadu%20638183!3m2!1d11.4362628!2d77.7232172!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009752439!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mohanur' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125255.59382014797!2d78.06278847377848!3d11.170057438498509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa32599c9a4347%3A0x67708b9d06acfed3!2sMohanur%2C%20Tamil%20Nadu%20637015!3m2!1d11.0604257!2d78.1388344!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009777017!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Namakkal' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62610.50678524772!2d78.12463806924835!3d11.249882665706968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babce5e3f22014f%3A0xa0ab89ef32c34a77!2sNamakkal%2C%20Tamil%20Nadu!3m2!1d11.2193848!2d78.16784179999999!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009804153!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rasipuram' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125169.92529107473!2d78.0992739270304!3d11.366802400566149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc20ec06afb6f%3A0x45b97c5f12fb6da9!2sRasipuram%2C%20Tamil%20Nadu!3m2!1d11.4614624!2d78.1854772!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009830779!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Senthamangalam' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31300.10532641252!2d78.17920499764365!3d11.297153438625003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc89ae9ae4db9%3A0x109e4fd806bf7d1e!2sSenthamangalam%2C%20Tamil%20Nadu%20637409!3m2!1d11.2813371!2d78.2357948!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009857915!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruchengode' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125184.04210304393!2d77.95131117649454!3d11.334613931276095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96191aa62873b%3A0xcbcc6272306596d2!2sTiruchengode%2C%20Tamil%20Nadu%20637211!3m2!1d11.379023499999999!2d77.8949435!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009881261!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramathivelur' && $_SESSION['station']=='75H7+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125244.43805204763!2d78.00236352420197!3d11.195870863810837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babd4b04c2efbb1%3A0x35c4d71f6b52e69f!2sVelur%2C%20Tamil%20Nadu%20638182!3m2!1d11.1120526!2d78.0038721!4m5!1s0x3babce5e3f22014f%3A0x315222d5eddfa24!2s75H7%2BVJ%2C%20Namakkal%2C%20Tamil%20Nadu!3m2!1d11.2796875!2d78.1640625!5e0!3m2!1sen!2sin!4v1744009908506!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //527H+RX Paramathi
    if($_SESSION['taluk'] =='Kollimalai' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d316465.24469685124!2d78.11816634536429!3d11.235804359678635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babb98203e2b5e9%3A0x18dc43aab135b9fa!2sKolli%20Hills%2C%20Tamil%20Nadu!3m2!1d11.248513899999999!2d78.3387066!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744009947004!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumarapalayam' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250390.0906971426!2d77.71579862356289!3d11.309462165857994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9682c3ed35ab1%3A0x5c4ea7abeacf1286!2sKomarapalayam%2C%20Tamil%20Nadu%20638183!3m2!1d11.4362628!2d77.7232172!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744009972706!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mohanur' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62638.96691979855!2d78.03650511871756!3d11.118186797192836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa32599c9a4347%3A0x67708b9d06acfed3!2sMohanur%2C%20Tamil%20Nadu%20637015!3m2!1d11.0604257!2d78.1388344!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744009997181!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Namakkal' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62621.893726303184!2d78.05767031903592!3d11.197374478253494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babce5e3f22014f%3A0xa0ab89ef32c34a77!2sNamakkal%2C%20Tamil%20Nadu!3m2!1d11.2193848!2d78.16784179999999!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744010024687!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rasipuram' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250387.06091730177!2d77.94267327380086!3d11.312928252621392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc20ec06afb6f%3A0x45b97c5f12fb6da9!2sRasipuram%2C%20Tamil%20Nadu!3m2!1d11.4614624!2d78.1854772!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744010053807!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Senthamangalam' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125232.72323194165!2d78.05024347464663!3d11.222914787956174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babc89ae9ae4db9%3A0x109e4fd806bf7d1e!2sSenthamangalam%2C%20Tamil%20Nadu%20637409!3m2!1d11.2813371!2d78.2357948!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744010079409!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruchengode' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125213.13124167609!2d77.88112972539032!3d11.268000144875884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba96191aa62873b%3A0xcbcc6272306596d2!2sTiruchengode%2C%20Tamil%20Nadu%20637211!3m2!1d11.379023499999999!2d77.8949435!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744010108837!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramathivelur' && $_SESSION['station']=='527H+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d274315.0372761851!2d77.81013120113457!3d11.1448178892024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babd4b04c2efbb1%3A0x35c4d71f6b52e69f!2sVelur%2C%20Tamil%20Nadu%20638182!3m2!1d11.1120526!2d78.0038721!4m5!1s0x3babd380b5821d0f%3A0xf0b919a9654073c8!2s527H%2BRX%2C%20Paramathi%2C%20Tamil%20Nadu%20637207!3m2!1d11.164562499999999!2d78.0299375!5e0!3m2!1sen!2sin!4v1744010223075!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Nilgiris District station
    //CVF8+8M Kotagiri
    if($_SESSION['taluk'] =='Coonoor' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62580.915921402215!2d76.78523541980022!3d11.385216183413815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba894efa2fd0d5b%3A0x192d8d872b04dbbb!2sCoonoor%2C%20Tamil%20Nadu!3m2!1d11.3438958!2d76.7945213!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010268443!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudalur' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250263.26264578168!2d76.51355248352556!3d11.453668915714452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8a722ce0fff11%3A0x4abee536cee1126d!2sGudalur%2C%20Tamil%20Nadu!3m2!1d11.501172799999999!2d76.4921583!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010297623!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kotagiri' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1955.3926668542297!2d76.86291478855327!3d11.42312119719195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8c02f379bca31%3A0xf7b63bc2a4ce6aab!2sKotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4217666!2d76.8617275!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010324842!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundah' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125180.4943292993!2d76.66672572662924!3d11.34271187354876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba89a7f173a2265%3A0xec21319f482c015c!2sKundah%2C%20Tamil%20Nadu%20643209!3m2!1d11.262891699999999!2d76.6333291!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010350708!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pandalur' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250228.12708699366!2d76.43790628628548!3d11.493303114715655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba61bdb37fde4a1%3A0x2f96bc8966378888!2sPandalur%2C%20Tamil%20Nadu%20643233!3m2!1d11.488441799999999!2d76.3391259!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010387838!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udagamandalam' && $_SESSION['station']=='CVF8+8M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125148.24118051166!2d76.6975740278535!3d11.41607100358857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8bd84b5f3d78d%3A0x179bdb14c93e3f42!2sOoty%2C%20Tamil%20Nadu!3m2!1d11.4102038!2d76.6950324!4m5!1s0x3ba8c02f379bca31%3A0x25553dee93194805!2sCVF8%2B8M%2C%20Kotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4233125!2d76.8666875!5e0!3m2!1sen!2sin!4v1744010417002!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    // CP73+HM4, Ooty
    if($_SESSION['taluk'] =='Coonoor' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62582.342017055475!2d76.7080669564787!3d11.37873038495814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba894efa2fd0d5b%3A0x192d8d872b04dbbb!2sCoonoor%2C%20Tamil%20Nadu!3m2!1d11.3438958!2d76.7945213!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011183906!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudalur' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125131.13718926843!2d76.51548417533134!3d11.45478556668326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8a722ce0fff11%3A0x4abee536cee1126d!2sGudalur%2C%20Tamil%20Nadu!3m2!1d11.501172799999999!2d76.4921583!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011219235!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kotagiri' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62576.62629080867!2d76.74176130658647!3d11.404703228767234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8c02f379bca31%3A0xf7b63bc2a4ce6aab!2sKotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4217666!2d76.8617275!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011247700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundah' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125183.30847788148!2d76.59218982332882!3d11.33628892966295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba89a7f173a2265%3A0xec21319f482c015c!2sKundah%2C%20Tamil%20Nadu%20643209!3m2!1d11.262891699999999!2d76.6333291!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011276168!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pandalur' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250260.48825120804!2d76.35742642101087!3d11.456803453650101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba61bdb37fde4a1%3A0x2f96bc8966378888!2sPandalur%2C%20Tamil%20Nadu%20643233!3m2!1d11.488441799999999!2d76.3391259!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011308811!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udagamandalam' && $_SESSION['station']=='CP73+HM4,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7821.856882204866!2d76.69434659056462!3d11.41274005510929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8bd84b5f3d78d%3A0x179bdb14c93e3f42!2sOoty%2C%20Tamil%20Nadu!3m2!1d11.4102038!2d76.6950324!4m5!1s0x3ba8bdbe3c0879dd%3A0x49d762460e4a9955!2sCP73%2BHM4%2C%20Pudumund%2C%20Ooty%2C%20Tamil%20Nadu!3m2!1d11.4138875!2d76.7042031!5e0!3m2!1sen!2sin!4v1744011338881!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //FFXV+8HW, Gudalur
    if($_SESSION['taluk'] =='Coonoor' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125144.40936591734!2d76.56053807482188!3d11.42475549529661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba894efa2fd0d5b%3A0x192d8d872b04dbbb!2sCoonoor!3m2!1d11.3438958!2d76.7945213!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744010843516!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudalur' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1954.8628245628252!2d76.49190843854056!3d11.499703947174138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8a722ce0fff11%3A0x4abee536cee1126d!2sGudalur%2C%20Tamil%20Nadu!3m2!1d11.501172799999999!2d76.4921583!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744010874554!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kotagiri' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250264.88362791805!2d76.51206087066187!3d11.451837122576299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8c02f379bca31%3A0xf7b63bc2a4ce6aab!2sKotagiri%2C%20Tamil%20Nadu%20643217!3m2!1d11.4217666!2d76.8617275!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744010901686!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kundah' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250330.89549157285!2d76.4399135154203!3d11.376993107966838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba89a7f173a2265%3A0xec21319f482c015c!2sKundah%2C%20Tamil%20Nadu%20643209!3m2!1d11.262891699999999!2d76.6333291!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744010928925!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pandalur' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62558.87273189264!2d76.37531355692138!3d11.485007609640757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba61bdb37fde4a1%3A0x2f96bc8966378888!2sPandalur%2C%20Tamil%20Nadu%20643233!3m2!1d11.488441799999999!2d76.3391259!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744010962921!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udagamandalam' && $_SESSION['station']=='FFXV+8HW,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125131.13718926841!2d76.5119031253313!3d11.454785566683272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba8bd84b5f3d78d%3A0x179bdb14c93e3f42!2sOoty%2C%20Tamil%20Nadu!3m2!1d11.4102038!2d76.6950324!4m5!1s0x3ba8a722ce0fff11%3A0xc7ebc5cffe8325e9!2sFFXV%2B8HW%2C%20Gudalur%2C%20Tamil%20Nadu!3m2!1d11.498362499999999!2d76.4939531!5e0!3m2!1sen!2sin!4v1744011009036!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Perambalur District station
    //6VWV+4X Elambalur
    if($_SESSION['taluk'] =='Alathur' && $_SESSION['station']=='6VWV+4X')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d445354.2460879643!2d78.15159356226701!3d10.98519134637492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baae2aca64e530b%3A0x1aebbbd0151ed248!2sAlathur%2C%20Tamil%20Nadu%20621109!3m2!1d11.1282087!2d78.8390956!4m5!1s0x3bab1b005af4710b%3A0xe1912d28516d958b!2s6VWV%2B4X%2C%20Elambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.245312499999999!2d78.8949375!5e0!3m2!1sen!2sin!4v1744014456020!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kunnam' && $_SESSION['station']=='6VWV+4X')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d409791.69220116135!2d78.21234985911514!3d10.997999026082791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab22004f6cc4fb%3A0xaeedbf03baa12028!2sKunnam%2C%20Tamil%20Nadu%20621708!3m2!1d11.2343681!2d79.0222271!4m5!1s0x3bab1b005af4710b%3A0xe1912d28516d958b!2s6VWV%2B4X%2C%20Elambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.245312499999999!2d78.8949375!5e0!3m2!1sen!2sin!4v1744014486744!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Perambalur' && $_SESSION['station']=='6VWV+4X')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d409791.69220116135!2d78.21234985911514!3d10.997999026082791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab1b69f8350197%3A0x70ef43f0315a8d8b!2sPerambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.2342104!2d78.8806852!4m5!1s0x3bab1b005af4710b%3A0xe1912d28516d958b!2s6VWV%2B4X%2C%20Elambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.245312499999999!2d78.8949375!5e0!3m2!1sen!2sin!4v1744014514285!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veppanthattai' && $_SESSION['station']=='6VWV+4X')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d433179.6151384887!2d78.18514703053417!3d10.98273067374112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab0fc13ee4f819%3A0x7b3ab4abc3f0f62!2sVeppanthattai%2C%20Tamil%20Nadu%20621103!3m2!1d11.3793928!2d78.7296988!4m5!1s0x3bab1b005af4710b%3A0xe1912d28516d958b!2s6VWV%2B4X%2C%20Elambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.245312499999999!2d78.8949375!5e0!3m2!1sen!2sin!4v1744014550028!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //6V4J+QJ Perambalur
    if($_SESSION['taluk'] =='Alathur' && $_SESSION['station']=='6V4J+QJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3079359.195268975!2d78.9126325379627!3d10.545488955079046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baae2aca64e530b%3A0x1aebbbd0151ed248!2sAlathur%2C%20Tamil%20Nadu%20621109!3m2!1d11.1282087!2d78.8390956!4m5!1s0x3bab1b69f8350197%3A0xb87069470555431e!2s6V4J%2BQJ%2C%20Perambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.206937499999999!2d78.8815625!5e0!3m2!1sen!2sin!4v1744014618026!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kunnam' && $_SESSION['station']=='6V4J+QJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3079359.195268975!2d78.9126325379627!3d10.545488955079046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab22004f6cc4fb%3A0xaeedbf03baa12028!2sKunnam%2C%20Tamil%20Nadu%20621708!3m2!1d11.2343681!2d79.0222271!4m5!1s0x3bab1b69f8350197%3A0xb87069470555431e!2s6V4J%2BQJ%2C%20Perambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.206937499999999!2d78.8815625!5e0!3m2!1sen!2sin!4v1744014645362!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Perambalur' && $_SESSION['station']=='6V4J+QJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab1b69f8350197%3A0x70ef43f0315a8d8b!2sPerambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.2342104!2d78.8806852!4m5!1s0x3bab1b69f8350197%3A0xb87069470555431e!2s6V4J%2BQJ%2C%20Perambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.206937499999999!2d78.8815625!5e0!3m2!1sen!2sin!4v1744014676493!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veppanthattai' && $_SESSION['station']=='6V4J+QJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab0fc13ee4f819%3A0x7b3ab4abc3f0f62!2sVeppanthattai%2C%20Tamil%20Nadu%20621103!3m2!1d11.3793928!2d78.7296988!4m5!1s0x3bab1b69f8350197%3A0xb87069470555431e!2s6V4J%2BQJ%2C%20Perambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.206937499999999!2d78.8815625!5e0!3m2!1sen!2sin!4v1744014703318!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //5P9Q+JPX, Mattaparai
    if($_SESSION['taluk'] =='Alathur' && $_SESSION['station']=='5P9Q+JPX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baae2aca64e530b%3A0x1aebbbd0151ed248!2sAlathur%2C%20Tamil%20Nadu%20621109!3m2!1d11.1282087!2d78.8390956!4m5!1s0x3bab018385ddc8d5%3A0x26332b8b4582cb77!2s5P9Q%2BJPX%2C%20Mattaparai%2C%20Tamil%20Nadu%20621118!3m2!1d11.169112499999999!2d78.7393594!5e0!3m2!1sen!2sin!4v1744014758723!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kunnam' && $_SESSION['station']=='5P9Q+JPX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab22004f6cc4fb%3A0xaeedbf03baa12028!2sKunnam%2C%20Tamil%20Nadu%20621708!3m2!1d11.2343681!2d79.0222271!4m5!1s0x3bab018385ddc8d5%3A0x26332b8b4582cb77!2s5P9Q%2BJPX%2C%20Mattaparai%2C%20Tamil%20Nadu%20621118!3m2!1d11.169112499999999!2d78.7393594!5e0!3m2!1sen!2sin!4v1744014785955!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Perambalur' && $_SESSION['station']=='5P9Q+JPX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab1b69f8350197%3A0x70ef43f0315a8d8b!2sPerambalur%2C%20Tamil%20Nadu%20621212!3m2!1d11.2342104!2d78.8806852!4m5!1s0x3bab018385ddc8d5%3A0x26332b8b4582cb77!2s5P9Q%2BJPX%2C%20Mattaparai%2C%20Tamil%20Nadu%20621118!3m2!1d11.169112499999999!2d78.7393594!5e0!3m2!1sen!2sin!4v1744014811966!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veppanthattai' && $_SESSION['station']=='5P9Q+JPX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d651701.0311368144!2d78.90694989510745!3d11.136153041879533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab0fc13ee4f819%3A0x7b3ab4abc3f0f62!2sVeppanthattai%2C%20Tamil%20Nadu%20621103!3m2!1d11.3793928!2d78.7296988!4m5!1s0x3bab018385ddc8d5%3A0x26332b8b4582cb77!2s5P9Q%2BJPX%2C%20Mattaparai%2C%20Tamil%20Nadu%20621118!3m2!1d11.169112499999999!2d78.7393594!5e0!3m2!1sen!2sin!4v1744014837259!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Pudukkottai District station
//9RPF+52 Pudukkottai
if($_SESSION['taluk'] =='Alangudi' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1135125.7450349266!2d79.00622535164497!3d11.020541477727333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007492581efcd9%3A0xf4fd4eb4ac649925!2sAlangudi%2C%20Ambedkar%20Nagar%2C%20Tamil%20Nadu%20622301!3m2!1d10.3611135!2d78.97959999999999!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015359386!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Aranthangi' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1135125.7450349266!2d79.00622535164497!3d11.020541477727333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b006c989a22c701%3A0xaf50b6bd7bfb093b!2sAranthangi%2C%20Tamil%20Nadu%20614616!3m2!1d10.1730375!2d78.9979149!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015396366!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Avadaiyarkoil' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b003fdf914c62e5%3A0xc22a33b4b1268534!2sAvudaiyarkoil%2C%20Tamil%20Nadu!3m2!1d10.0772541!2d79.0420223!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015422888!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gandarvakottai' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa98777f7a2d05%3A0x4ed554ee6b8c0674!2sGandarvakkottai%2C%20Tamil%20Nadu%20613301!3m2!1d10.5735738!2d79.0136172!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015463748!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Llluppur' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5541e667356e6f%3A0x4d4741a5dbd203bc!2sIluppur%2C%20Tamil%20Nadu%20611105!3m2!1d10.7348492!2d79.7391598!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015489896!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karambakkudi' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa717f5ffe1db%3A0x6e1bf284bb1e2cbe!2sKarambakkudi%2C%20Tamil%20Nadu%20622302!3m2!1d10.458425!2d79.135097!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015515258!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulathur' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa4bd307f91b9%3A0x15280a44ad712efa!2sKulathur%2C%20Tamil%20Nadu%20614902!3m2!1d10.5792038!2d79.1346391!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015549866!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamelkudi' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0022e3bef25ee1%3A0xdbdb00e7c0a23bb8!2sManamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.0407853!2d79.2306163!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015575364!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponnamaravathi' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1650542.6083466883!2d79.14175301766247!3d11.002526669222128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0085c9a601af01%3A0xb64ed22054dc74cd!2sPonnamaravathi%2C%20Tamil%20Nadu%20622407!3m2!1d10.2776061!2d78.5423917!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015603405!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pudukottai' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1016465.4879161671!2d79.01698270251866!3d10.874965667306057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00782d25029679%3A0x4503e2d3b4a3897f!2sPudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3832867!2d78.800129!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015633525!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumayam' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1016465.4879161671!2d79.01698270251866!3d10.874965667306057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007b544a37e975%3A0x914782be6ee3cbb9!2sTirumayam%2C%20Tamil%20Nadu!3m2!1d10.2468937!2d78.74940529999999!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015664759!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Viralimalai' && $_SESSION['station']=='9RPF+52')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1016465.4879161671!2d79.01698270251866!3d10.874965667306057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa64ba462ffec7%3A0xf0c1dbd37bf74e5c!2sViralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6036802!2d78.5462098!4m5!1s0x3b00782d25029679%3A0x7dbf4125be78625a!2s9RPF%2B52%2C%20Pudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3854375!2d78.82256249999999!5e0!3m2!1sen!2sin!4v1744015689952!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//3626+CC, Manamelkudi
if($_SESSION['taluk'] =='Alangudi' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1016465.4879161671!2d79.01698270251866!3d10.874965667306057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007492581efcd9%3A0xf4fd4eb4ac649925!2sAlangudi%2C%20Ambedkar%20Nagar%2C%20Tamil%20Nadu%20622301!3m2!1d10.3611135!2d78.97959999999999!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015735004!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Aranthangi' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1016465.4879161671!2d79.01698270251866!3d10.874965667306057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b006c989a22c701%3A0xaf50b6bd7bfb093b!2sAranthangi%2C%20Tamil%20Nadu%20614616!3m2!1d10.1730375!2d78.9979149!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015763580!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Avadaiyarkoil' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b003fdf914c62e5%3A0xc22a33b4b1268534!2sAvudaiyarkoil%2C%20Tamil%20Nadu!3m2!1d10.0772541!2d79.0420223!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015795321!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gandarvakottai' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa98777f7a2d05%3A0x4ed554ee6b8c0674!2sGandarvakkottai%2C%20Tamil%20Nadu%20613301!3m2!1d10.5735738!2d79.0136172!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015825016!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Llluppur' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5541e667356e6f%3A0x4d4741a5dbd203bc!2sIluppur%2C%20Tamil%20Nadu%20611105!3m2!1d10.7348492!2d79.7391598!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015853178!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karambakkudi' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa717f5ffe1db%3A0x6e1bf284bb1e2cbe!2sKarambakkudi%2C%20Tamil%20Nadu%20622302!3m2!1d10.458425!2d79.135097!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015885537!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulathur' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa4bd307f91b9%3A0x15280a44ad712efa!2sKulathur%2C%20Tamil%20Nadu%20614902!3m2!1d10.5792038!2d79.1346391!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015922086!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamelkudi' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0022e3bef25ee1%3A0xdbdb00e7c0a23bb8!2sManamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.0407853!2d79.2306163!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015950767!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponnamaravathi' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1232286.816364436!2d78.98451506879339!3d10.817567954706602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0085c9a601af01%3A0xb64ed22054dc74cd!2sPonnamaravathi%2C%20Tamil%20Nadu%20622407!3m2!1d10.2776061!2d78.5423917!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744015979026!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pudukottai' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00782d25029679%3A0x4503e2d3b4a3897f!2sPudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3832867!2d78.800129!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744016044972!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumayam' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007b544a37e975%3A0x914782be6ee3cbb9!2sTirumayam%2C%20Tamil%20Nadu!3m2!1d10.2468937!2d78.74940529999999!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744016075843!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Viralimalai' && $_SESSION['station']=='3626+CC,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa64ba462ffec7%3A0xf0c1dbd37bf74e5c!2sViralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6036802!2d78.5462098!4m5!1s0x3b0022e3bef25ee1%3A0xe9f5feb791c1c3ab!2s3626%2BCC%2C%20Manamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.051062499999999!2d79.2110625!5e0!3m2!1sen!2sin!4v1744016100069!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//JHF7+H7 Viralimalai
if($_SESSION['taluk'] =='Alangudi' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007492581efcd9%3A0xf4fd4eb4ac649925!2sAlangudi%2C%20Ambedkar%20Nagar%2C%20Tamil%20Nadu%20622301!3m2!1d10.3611135!2d78.97959999999999!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016310808!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Aranthangi' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b006c989a22c701%3A0xaf50b6bd7bfb093b!2sAranthangi%2C%20Tamil%20Nadu%20614616!3m2!1d10.1730375!2d78.9979149!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016339071!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Avadaiyarkoil' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b003fdf914c62e5%3A0xc22a33b4b1268534!2sAvudaiyarkoil%2C%20Tamil%20Nadu!3m2!1d10.0772541!2d79.0420223!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016363955!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gandarvakottai' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa98777f7a2d05%3A0x4ed554ee6b8c0674!2sGandarvakkottai%2C%20Tamil%20Nadu%20613301!3m2!1d10.5735738!2d79.0136172!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016576026!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Llluppur' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa7dda69f6194f%3A0x7d08c1b23f9b8503!2sIllupur%2C%20Kanakkampatti%2C%20Tamil%20Nadu%20622102!3m2!1d10.512251899999999!2d78.6246135!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016603776!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karambakkudi' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa717f5ffe1db%3A0x6e1bf284bb1e2cbe!2sKarambakkudi%2C%20Tamil%20Nadu%20622302!3m2!1d10.458425!2d79.135097!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016634900!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kulathur' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baaa4bd307f91b9%3A0x15280a44ad712efa!2sKulathur%2C%20Tamil%20Nadu%20614902!3m2!1d10.5792038!2d79.1346391!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016660094!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamelkudi' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0022e3bef25ee1%3A0xdbdb00e7c0a23bb8!2sManamelkudi%2C%20Tamil%20Nadu%20614620!3m2!1d10.0407853!2d79.2306163!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016686310!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponnamaravathi' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0085c9a601af01%3A0xb64ed22054dc74cd!2sPonnamaravathi%2C%20Tamil%20Nadu%20622407!3m2!1d10.2776061!2d78.5423917!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016714988!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pudukottai' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00782d25029679%3A0x4503e2d3b4a3897f!2sPudukkottai%2C%20Tamil%20Nadu%20622003!3m2!1d10.3832867!2d78.800129!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016740582!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thirumayam' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2778429.7880182215!2d79.07971119369368!3d10.900671488431449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b007b544a37e975%3A0x914782be6ee3cbb9!2sTirumayam%2C%20Tamil%20Nadu!3m2!1d10.2468937!2d78.74940529999999!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016766468!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Viralimalai' && $_SESSION['station']=='JHF7+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2044909.690961322!2d78.99128190020399!3d10.845408543771507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baa64ba462ffec7%3A0xf0c1dbd37bf74e5c!2sViralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6036802!2d78.5462098!4m5!1s0x3baa64ba462ffec7%3A0xb4b1005b132fe41a!2sJHF7%2BH7%2C%20Viralimalai%2C%20Tamil%20Nadu%20621316!3m2!1d10.6239375!2d78.5631875!5e0!3m2!1sen!2sin!4v1744016794036!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Ramanathapuram district station
    //9V4F+VF Ramanathapuram
if($_SESSION['taluk'] =='Kadaladi' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2044909.690961322!2d78.99128190020399!3d10.845408543771507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b017035917ccccd%3A0xb744e2625905fb55!2sKadaladi%2C%20Tamil%20Nadu%20623120!3m2!1d9.1691927!2d78.4474407!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744017893821!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kamuthi' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2472593.275988378!2d79.03478394375347!3d11.053187369486634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0114621f644ddf%3A0x46eaa9beb3d515a1!2sKamudi%2C%20Tamil%20Nadu!3m2!1d9.4125952!2d78.36673569999999!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744017928842!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilakarai' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b019b069bcf465d%3A0x914ca2e623a4b937!2sKeelakarai%2C%20Tamil%20Nadu!3m2!1d9.2343379!2d78.7836027!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744017962286!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mudukulathur' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0172dc1420e1f9%3A0xba5363bb6fdb73fe!2sMuthukulathur%2C%20Tamil%20Nadu%20623704!3m2!1d9.3444509!2d78.5157495!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744017995919!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramakudi' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b010617efde0787%3A0x1dd74f186a6c43ce!2sParamakudi%2C%20Tamil%20Nadu!3m2!1d9.5503862!2d78.5841633!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744018030837!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajasingamangalam' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01b2014bc3db8b%3A0x7f4f917e180383bc!2sR.S.%20Mangalam%2C%20Tamil%20Nadu%20623525!3m2!1d9.6383168!2d78.8474593!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744018059917!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ramanathapuram' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0197f8992ac103%3A0xd76b783dce15f99!2sRamanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3639356!2d78.8394819!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744018088178!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rameswaram' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01e3c4e61cf2b3%3A0xd667f9b98bbd63a1!2sRameswaram%2C%20Tamil%20Nadu!3m2!1d9.287583699999999!2d79.3129488!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744018115721!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvadanai' && $_SESSION['station']=='9V4F+VF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b004c716676a4cb%3A0x223500a49b5aa97f!2sThiruvadanai%2C%20Tamil%20Nadu%20623407!3m2!1d9.7831611!2d78.91726229999999!4m5!1s0x3b0197f8992ac103%3A0x4f09840ffd0811b3!2s9V4F%2BVF%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3571875!2d78.8736875!5e0!3m2!1sen!2sin!4v1744018149417!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
//9R86+HP Ramanathapuram,
if($_SESSION['taluk'] =='Kadaladi' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b017035917ccccd%3A0xb744e2625905fb55!2sKadaladi%2C%20Tamil%20Nadu%20623120!3m2!1d9.1691927!2d78.4474407!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018383302!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kamuthi' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0114621f644ddf%3A0x46eaa9beb3d515a1!2sKamudi%2C%20Tamil%20Nadu!3m2!1d9.4125952!2d78.36673569999999!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018409003!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilakarai' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b019b069bcf465d%3A0x914ca2e623a4b937!2sKeelakarai%2C%20Tamil%20Nadu!3m2!1d9.2343379!2d78.7836027!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018434397!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mudukulathur' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0172dc1420e1f9%3A0xba5363bb6fdb73fe!2sMuthukulathur%2C%20Tamil%20Nadu%20623704!3m2!1d9.3444509!2d78.5157495!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018459065!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramakudi' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b010617efde0787%3A0x1dd74f186a6c43ce!2sParamakudi%2C%20Tamil%20Nadu!3m2!1d9.5503862!2d78.5841633!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018491131!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajasingamangalam' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2879448.992798722!2d79.13410841035524!3d11.100281609271942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01b2014bc3db8b%3A0x7f4f917e180383bc!2sR.S.%20Mangalam%2C%20Tamil%20Nadu%20623525!3m2!1d9.6383168!2d78.8474593!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018519597!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ramanathapuram' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0197f8992ac103%3A0xd76b783dce15f99!2sRamanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3639356!2d78.8394819!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018544270!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rameswaram' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01e3c4e61cf2b3%3A0xd667f9b98bbd63a1!2sRameswaram%2C%20Tamil%20Nadu!3m2!1d9.287583699999999!2d79.3129488!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018578372!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvadanai' && $_SESSION['station']=='9R86+HP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b004c716676a4cb%3A0x223500a49b5aa97f!2sThiruvadanai%2C%20Tamil%20Nadu%20623407!3m2!1d9.7831611!2d78.91726229999999!4m5!1s0x3b0197f8992ac103%3A0x2757c10de9f10ac5!2s9R86%2BHP%2C%20Ramanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3664375!2d78.8118125!5e0!3m2!1sen!2sin!4v1744018608381!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//6QRM+QR Keelakarai
if($_SESSION['taluk'] =='Kadaladi' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b017035917ccccd%3A0xb744e2625905fb55!2sKadaladi%2C%20Tamil%20Nadu%20623120!3m2!1d9.1691927!2d78.4474407!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018649130!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kamuthi' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0114621f644ddf%3A0x46eaa9beb3d515a1!2sKamudi%2C%20Tamil%20Nadu!3m2!1d9.4125952!2d78.36673569999999!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018670939!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilakarai' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3499333.252881998!2d79.1597095892527!3d11.343028110074526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b019b069bcf465d%3A0x914ca2e623a4b937!2sKeelakarai%2C%20Tamil%20Nadu!3m2!1d9.2343379!2d78.7836027!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018694357!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mudukulathur' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0172dc1420e1f9%3A0xba5363bb6fdb73fe!2sMuthukulathur%2C%20Tamil%20Nadu%20623704!3m2!1d9.3444509!2d78.5157495!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018719376!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Paramakudi' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b010617efde0787%3A0x1dd74f186a6c43ce!2sParamakudi%2C%20Tamil%20Nadu!3m2!1d9.5503862!2d78.5841633!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018748867!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajasingamangalam' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01b2014bc3db8b%3A0x7f4f917e180383bc!2sR.S.%20Mangalam%2C%20Tamil%20Nadu%20623525!3m2!1d9.6383168!2d78.8474593!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018773546!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ramanathapuram' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0197f8992ac103%3A0xd76b783dce15f99!2sRamanathapuram%2C%20Tamil%20Nadu!3m2!1d9.3639356!2d78.8394819!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018797406!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rameswaram' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b01e3c4e61cf2b3%3A0xd667f9b98bbd63a1!2sRameswaram%2C%20Tamil%20Nadu!3m2!1d9.287583699999999!2d79.3129488!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018821776!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvadanai' && $_SESSION['station']=='6QRM+QR')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b004c716676a4cb%3A0x223500a49b5aa97f!2sThiruvadanai%2C%20Tamil%20Nadu%20623407!3m2!1d9.7831611!2d78.91726229999999!4m5!1s0x3b019b069bcf465d%3A0x85796bcf8fdffd15!2s6QRM%2BQR%2C%20Keelakarai%2C%20Tamil%20Nadu!3m2!1d9.241937499999999!2d78.78456249999999!5e0!3m2!1sen!2sin!4v1744018848199!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Ranipet District station
    //W88W+M3 Ranipet
    if($_SESSION['taluk'] =='Arakkonam' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4237924.000156862!2d79.35308482817898!3d11.58241935244546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52bc2d60d615b1%3A0x82ed0176fa1df9c!2sArakkonam%2C%20Tamil%20Nadu!3m2!1d13.0840593!2d79.6704128!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019179872!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Arkadu' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad34536b0bd559%3A0x5a10f3d71d9cd23f!2sArcot%2C%20Tamil%20Nadu!3m2!1d12.9047129!2d79.3238106!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019240085!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalavai' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52d2848ee297a3%3A0x5262ba5d5d8edc07!2sKalavai%2C%20Tamil%20Nadu%20632506!3m2!1d12.7662255!2d79.41769579999999!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019266606!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nemili' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3badad00dc2ac40b%3A0x2d75428daff885ae!2sNemili%2C%20Tamil%20Nadu%20635852!3m2!1d12.5999813!2d78.51629849999999!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019295072!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sholinghur' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52b28b51cbc39b%3A0x327e8997e0e682aa!2sSholinghur%2C%20Tamil%20Nadu!3m2!1d13.1115847!2d79.4310052!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019319137!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajapet' && $_SESSION['station']=='W88W+M3')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad353b17827b67%3A0xe7ef15461599f78f!2sWalajapet%2C%20Tamil%20Nadu!3m2!1d12.9254169!2d79.36408449999999!4m5!1s0x3bad35b01071dd9b%3A0x84d6a5b4ac68389a!2sW88W%2BM3%2C%20Ranipet%2C%20Tamil%20Nadu!3m2!1d12.9166875!2d79.3451875!5e0!3m2!1sen!2sin!4v1744019348012!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //WC2X+88 Ranipet
    if($_SESSION['taluk'] =='Arakkonam' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52bc2d60d615b1%3A0x82ed0176fa1df9c!2sArakkonam%2C%20Tamil%20Nadu!3m2!1d13.0840593!2d79.6704128!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019392149!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Arkadu' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad34536b0bd559%3A0x5a10f3d71d9cd23f!2sArcot%2C%20Tamil%20Nadu!3m2!1d12.9047129!2d79.3238106!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019416011!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalavai' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52d2848ee297a3%3A0x5262ba5d5d8edc07!2sKalavai%2C%20Tamil%20Nadu%20632506!3m2!1d12.7662255!2d79.41769579999999!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019438229!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nemili' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3badad00dc2ac40b%3A0x2d75428daff885ae!2sNemili%2C%20Tamil%20Nadu%20635852!3m2!1d12.5999813!2d78.51629849999999!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019460353!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sholinghur' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52b28b51cbc39b%3A0x327e8997e0e682aa!2sSholinghur%2C%20Tamil%20Nadu!3m2!1d13.1115847!2d79.4310052!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019484413!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajapet' && $_SESSION['station']=='WC2X+88')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad353b17827b67%3A0xe7ef15461599f78f!2sWalajapet%2C%20Tamil%20Nadu!3m2!1d12.9254169!2d79.36408449999999!4m5!1s0x3a52c99c66f40a65%3A0x6575497d95538094!2sWC2X%2B88%2C%20Tamil%20Nadu!3m2!1d12.900812499999999!2d79.4483125!5e0!3m2!1sen!2sin!4v1744019507965!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //4C84+JQ Sholinghur
    if($_SESSION['taluk'] =='Arakkonam' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52bc2d60d615b1%3A0x82ed0176fa1df9c!2sArakkonam%2C%20Tamil%20Nadu!3m2!1d13.0840593!2d79.6704128!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019547490!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Arkadu' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad34536b0bd559%3A0x5a10f3d71d9cd23f!2sArcot%2C%20Tamil%20Nadu!3m2!1d12.9047129!2d79.3238106!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019572275!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalavai' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52d2848ee297a3%3A0x5262ba5d5d8edc07!2sKalavai%2C%20Tamil%20Nadu%20632506!3m2!1d12.7662255!2d79.41769579999999!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019598185!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nemili' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3badad00dc2ac40b%3A0x2d75428daff885ae!2sNemili%2C%20Tamil%20Nadu%20635852!3m2!1d12.5999813!2d78.51629849999999!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019626340!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sholinghur' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a52b28b51cbc39b%3A0x327e8997e0e682aa!2sSholinghur%2C%20Tamil%20Nadu!3m2!1d13.1115847!2d79.4310052!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019653277!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Walajapet' && $_SESSION['station']=='4C84+JQ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d911632.0529241317!2d78.94264890466015!3d12.616912290146807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3bad353b17827b67%3A0xe7ef15461599f78f!2sWalajapet%2C%20Tamil%20Nadu!3m2!1d12.9254169!2d79.36408449999999!4m5!1s0x3a52b28b51cbc39b%3A0x9c1fe06ca6704126!2s4C84%2BJQ%2C%20Sholinghur%2C%20Tamil%20Nadu!3m2!1d13.116562499999999!2d79.4069375!5e0!3m2!1sen!2sin!4v1744019676518!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Salem District Station
//M4MG+4CQ, Salem
if($_SESSION['taluk'] =='Attur' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250095.0661295141!2d78.19395059673737!3d11.642194148263057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9c37c03c5ea1%3A0xc7d099f6358641f1!2sAttur!3m2!1d11.5983184!2d78.59743519999999!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020217578!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Idappadi' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125058.265629048!2d77.90031693126882!3d11.618302661118703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9597f7213686d%3A0xdd2172f68ae50f45!2sEdappadi%2C%20Tamil%20Nadu%20637101!3m2!1d11.5848807!2d77.8381526!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020256670!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gangavalli' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250140.72344686338!2d78.22053489315104!3d11.591317641679995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baba003c1aa1855%3A0x9b5e43b660930241!2sGangavalli%2C%20Tamil%20Nadu%20636105!3m2!1d11.4963762!2d78.6506038!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020280368!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayampatti' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124986.31964970876!2d78.00581638399964!3d11.777546059971504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac0623f7c13e6b%3A0xb94b6e0c5aebf474!2sKadayampatti%2C%20Tamil%20Nadu!3m2!1d11.8699931!2d78.1114667!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020310434!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mettur' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249997.97476555468!2d77.79660900436356!3d11.749661990189699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba953186a385f89%3A0xfe84837515daa0ff!2sMettur%2C%20Tamil%20Nadu%20636401!3m2!1d11.7830323!2d77.796701!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020334227!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Omalur' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62509.551172792584!2d78.04537682113114!3d11.705250607303334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf9699fe94cd9%3A0xb5e67106b1e9c27f!2sOmalur%2C%20Tamil%20Nadu!3m2!1d11.7428803!2d78.0473128!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020361270!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pethanaickenpalayam' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250083.3954325309!2d78.14856634765407!3d11.655163798980025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9ace2581208f%3A0xd53ffe3f52e821d3!2sPethanaickenpalayam%2C%20Tamil%20Nadu!3m2!1d11.6489522!2d78.50644729999999!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020384359!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15629.073662999734!2d78.1231199957489!3d11.675379766532211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf1ccf52cba0b%3A0xee9989007068ca47!2sSalem%2C%20Tamil%20Nadu!3m2!1d11.664325!2d78.1460142!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020411433!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(South)' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31259.94256184862!2d78.10983769801489!3d11.659444667064237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babe5bd0c82a4bd%3A0x50278c7d33063ba!2sSalem%20South%2C%20Tamil%20Nadu!3m2!1d11.633398999999999!2d78.127702!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020436804!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(West)' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15628.90946388508!2d78.10910719574969!3d11.678292416489004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babfa8d572437a9%3A0x67db9878efcb9c5b!2sSalem%20West%2C%20Tamil%20Nadu!3m2!1d11.6707018!2d78.1159352!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020461485!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankagiri' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125075.33895188628!2d77.92157483062074!3d11.580195997341708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba95e3912e6c8e7%3A0x48974d5c0936ee65!2sSangagiri%2C%20Tamil%20Nadu!3m2!1d11.4744536!2d77.869128!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020485245!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalaivasal' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250101.19760488448!2d78.27437039625569!3d11.63537452418062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab715e9b5e4d2f%3A0x54d3f8717c39ffec!2sThalaivasal%2C%20Tamil%20Nadu%20636112!3m2!1d11.5867369!2d78.7582748!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020515948!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vazhapady' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125041.68188056101!2d78.17884703189823!3d11.655198976065943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab8e1e5860174f%3A0xf6b191ae3de9a0f5!2sVazhapadi%2C%20Tamil%20Nadu!3m2!1d11.6561908!2d78.40185579999999!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020540849!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Yercaud' && $_SESSION['station']=='M4MG+4CQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62503.83259111894!2d78.1166299212378!3d11.73052280130864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf42b4747d5eb%3A0x1d3ccd9945d5e7ee!2sYercaud%2C%20Tamil%20Nadu%20636601!3m2!1d11.774792399999999!2d78.2097052!4m5!1s0x3babf1ccf52cba0b%3A0x183e2cb64957cb28!2sM4MG%2B4CQ%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.6828375!2d78.12610939999999!5e0!3m2!1sen!2sin!4v1744020564076!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
//Q342+3C Omalur
if($_SESSION['taluk'] =='Attur' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250062.97157140996!2d78.15752839925831!3d11.677826662887087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9c37c03c5ea1%3A0xc7d099f6358641f1!2sAttur%2C%20Tamil%20Nadu%20636102!3m2!1d11.5983184!2d78.59743519999999!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020605485!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Idappadi' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125033.61146870641!2d77.90547333220458!3d11.673112809054183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9597f7213686d%3A0xdd2172f68ae50f45!2sEdappadi%2C%20Tamil%20Nadu%20637101!3m2!1d11.5848807!2d77.8381526!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020638000!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gangavalli' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250133.01046615178!2d78.1854783937569!3d11.599927758936586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baba003c1aa1855%3A0x9b5e43b660930241!2sGangavalli%2C%20Tamil%20Nadu%20636105!3m2!1d11.4963762!2d78.6506038!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020669305!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayampatti' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124969.8108883832!2d77.99851028462625!3d11.813787575623508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac0623f7c13e6b%3A0xb94b6e0c5aebf474!2sKadayampatti%2C%20Tamil%20Nadu!3m2!1d11.8699931!2d78.1114667!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020696379!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mettur' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124982.8456140281!2d77.84148368413149!3d11.785181702733222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba953186a385f89%3A0xfe84837515daa0ff!2sMettur%2C%20Tamil%20Nadu%20636401!3m2!1d11.7830323!2d77.796701!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020728057!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Omalur' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15624.837881848684!2d78.03892939576842!3d11.750288565421608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf9699fe94cd9%3A0xb5e67106b1e9c27f!2sOmalur%2C%20Tamil%20Nadu!3m2!1d11.7428803!2d78.0473128!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020754190!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pethanaickenpalayam' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250051.26567003012!2d78.11214415017776!3d11.690796313630491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9ace2581208f%3A0xd53ffe3f52e821d3!2sPethanaickenpalayam%2C%20Tamil%20Nadu!3m2!1d11.6489522!2d78.50644729999999!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020781501!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62508.249087509124!2d78.05546837115538!3d11.711009655937055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf1ccf52cba0b%3A0xee9989007068ca47!2sSalem%2C%20Tamil%20Nadu!3m2!1d11.664325!2d78.1460142!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020810238!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(South)' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125023.7044768939!2d78.01297878258062!3d11.695066288212493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babe5bd0c82a4bd%3A0x50278c7d33063ba!2sSalem%20South%2C%20Tamil%20Nadu!3m2!1d11.633398999999999!2d78.127702!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020838397!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(West)' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62507.59031504427!2d78.04637437116772!3d11.713922305246111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babfa8d572437a9%3A0x67db9878efcb9c5b!2sSalem%20West%2C%20Tamil%20Nadu!3m2!1d11.6707018!2d78.1159352!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020868966!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankagiri' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250118.57071583986!2d77.8337931448911!3d11.616030147712177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba95e3912e6c8e7%3A0x48974d5c0936ee65!2sSangagiri%2C%20Tamil%20Nadu!3m2!1d11.4744536!2d77.869128!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020911525!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalaivasal' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500138.4972191951!2d78.07309687399953!3d11.67086611228778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab715e9b5e4d2f%3A0x54d3f8717c39ffec!2sThalaivasal%2C%20Tamil%20Nadu%20636112!3m2!1d11.5867369!2d78.7582748!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020936992!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vazhapady' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250051.2656700301!2d78.06001345017775!3d11.690796313630505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab8e1e5860174f%3A0xf6b191ae3de9a0f5!2sVazhapadi%2C%20Tamil%20Nadu!3m2!1d11.6561908!2d78.40185579999999!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020963854!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Yercaud' && $_SESSION['station']=='Q342+3C')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62503.83259111894!2d78.08982852123782!3d11.73052280130864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf42b4747d5eb%3A0x1d3ccd9945d5e7ee!2sYercaud%2C%20Tamil%20Nadu%20636601!3m2!1d11.774792399999999!2d78.2097052!4m5!1s0x3babfb8d6e3b8083%3A0x677d782ccad562ff!2sQ342%2B3C%2C%20Tamil%20Nadu!3m2!1d11.7551875!2d78.0510625!5e0!3m2!1sen!2sin!4v1744020989073!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//H3Q8+7M Salem
if($_SESSION['taluk'] =='Attur' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250105.85970797003!2d78.16414689588957!3d11.630186543898997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9c37c03c5ea1%3A0xc7d099f6358641f1!2sAttur%2C%20Tamil%20Nadu%20636102!3m2!1d11.5983184!2d78.59743519999999!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021040674!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Idappadi' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125085.58957364163!2d77.86967953023161!3d11.5572576691561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9597f7213686d%3A0xdd2172f68ae50f45!2sEdappadi%2C%20Tamil%20Nadu%20637101!3m2!1d11.5848807!2d77.8381526!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021066618!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gangavalli' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250149.36304708943!2d78.19073119247246!3d11.581665628390622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baba003c1aa1855%3A0x9b5e43b660930241!2sGangavalli%2C%20Tamil%20Nadu%20636105!3m2!1d11.4963762!2d78.6506038!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021101969!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayampatti' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250020.7909401719!2d77.87481420257146!3d11.72449468569472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac0623f7c13e6b%3A0xb94b6e0c5aebf474!2sKadayampatti%2C%20Tamil%20Nadu!3m2!1d11.8699931!2d78.1114667!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021125668!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mettur' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250065.89566142822!2d77.75075979902864!3d11.674584675201121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba953186a385f89%3A0xfe84837515daa0ff!2sMettur%2C%20Tamil%20Nadu%20636401!3m2!1d11.7830323!2d77.796701!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021154945!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Omalur' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125037.7497582847!2d78.00412798204749!3d11.663930467773572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf9699fe94cd9%3A0xb5e67106b1e9c27f!2sOmalur%2C%20Tamil%20Nadu!3m2!1d11.7428803!2d78.0473128!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021179246!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pethanaickenpalayam' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250109.61009752357!2d78.11876264559496!3d11.6260114597687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab9ace2581208f%3A0xd53ffe3f52e821d3!2sPethanaickenpalayam%2C%20Tamil%20Nadu!3m2!1d11.6489522!2d78.50644729999999!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021211869!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62526.42865654234!2d78.06208687081642!3d11.630348025084071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf1ccf52cba0b%3A0xee9989007068ca47!2sSalem%2C%20Tamil%20Nadu!3m2!1d11.664325!2d78.1460142!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021242601!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(South)' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31265.10397493896!2d78.07351454796716!3d11.613510169791484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babe5bd0c82a4bd%3A0x50278c7d33063ba!2sSalem%20South%2C%20Tamil%20Nadu!3m2!1d11.633398999999999!2d78.127702!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021269312!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Salem(West)' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62526.99174509466!2d78.05150312080585!3d11.6278408256796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babfa8d572437a9%3A0x67db9878efcb9c5b!2sSalem%20West%2C%20Tamil%20Nadu!3m2!1d11.6707018!2d78.1159352!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021298053!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankagiri' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125097.15584907494!2d77.88471332979255!3d11.531321193830713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba95e3912e6c8e7%3A0x48974d5c0936ee65!2sSangagiri%2C%20Tamil%20Nadu!3m2!1d11.4744536!2d77.869128!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021326756!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thalaivasal' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d500212.4909922583!2d78.07971536159543!3d11.62975713724962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab715e9b5e4d2f%3A0x54d3f8717c39ffec!2sThalaivasal%2C%20Tamil%20Nadu%20636112!3m2!1d11.5867369!2d78.7582748!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021353005!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vazhapady' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250109.61009752357!2d78.06663194559495!3d11.6260114597687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab8e1e5860174f%3A0xf6b191ae3de9a0f5!2sVazhapadi%2C%20Tamil%20Nadu!3m2!1d11.6561908!2d78.40185579999999!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021376274!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Yercaud' && $_SESSION['station']=='H3Q8+7M')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125026.90678953766!2d78.0878091324591!3d11.687974544944332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3babf42b4747d5eb%3A0x1d3ccd9945d5e7ee!2sYercaud%2C%20Tamil%20Nadu%20636601!3m2!1d11.774792399999999!2d78.2097052!4m5!1s0x3babf1ccf52cba0b%3A0x30c4a86ed15b20d0!2sH3Q8%2B7M%2C%20Salem%2C%20Tamil%20Nadu!3m2!1d11.5881875!2d78.0666875!5e0!3m2!1sen!2sin!4v1744021398915!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Sivagangai District station
    //RJWP+C8 Kalayarkoil
    if($_SESSION['taluk'] =='Devakottai' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125772.78787231745!2d78.65043925414462!3d9.90063611344072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b005b259eac5305%3A0x7a97e8405ad15962!2sDevakottai%2C%20Tamil%20Nadu%20630302!3m2!1d9.9554422!2d78.8162334!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025098897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Illayangudi' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d172502.6593851474!2d78.51378287376014!3d9.7171364077148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0100cd348d96c9%3A0xc973056be17b7b6f!2sIlayangudi%2C%20Tamil%20Nadu%20630702!3m2!1d9.6269504!2d78.62584009999999!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025132560!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalayarkoil' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1965.5272869823407!2d78.63229998854743!3d9.845783747562981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00f860a3b29ce7%3A0xe4ec7cdcb8ae37fb!2sKalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8456868!2d78.6313624!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025163156!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karaikudi' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125749.026875123!2d78.62606150504665!3d9.962461503305503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b005d8b08de4f3b%3A0x1f24fc0ab84584f8!2sKaraikudi%2C%20Tamil%20Nadu!3m2!1d10.07354!2d78.773198!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025211186!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamadurai' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125818.54764322781!2d78.45940295240732!3d9.780480630444872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b011d2cdcb71a97%3A0xd50933a9bc93511c!2sManamadurai%2C%20Tamil%20Nadu!3m2!1d9.6962434!2d78.4555724!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025238945!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Singampunari' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251457.33729464182!2d78.4069850397142!3d10.015132453728262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0091de852664d1%3A0xa8788a44cfe4f1d9!2sSingampunari%2C%20Tamil%20Nadu%20630502!3m2!1d10.184022299999999!2d78.4264638!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025266658!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagangai' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d65679.5179405487!2d78.51735513735534!3d9.856013832977217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00facfe87f2517%3A0x99cc213b48bfc694!2sSivaganga%2C%20Tamil%20Nadu%20630561!3m2!1d9.8479616!2d78.4832344!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025293780!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251485.69227286367!2d78.41861948748617!3d9.978481446222702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b008ba9901a9939%3A0x803ea5abdec32b03!2sTirupattur%2C%20630211%2C%20Tamil%20Nadu%20630211!3m2!1d10.1084774!2d78.59731!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025366722!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppuvanam' && $_SESSION['station']=='RJWP+C8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251695.74241282756!2d78.28281897098051!3d9.702708620499848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00dda894321c8d%3A0x70ae4df010d93f14!2sTiruppuvanam%2C%20Tamil%20Nadu%20630611!3m2!1d9.8259645!2d78.2575816!4m5!1s0x3b00f860a3b29ce7%3A0xdb1271976ee114a3!2sRJWP%2BC8%2C%20Kalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8460625!2d78.6358125!5e0!3m2!1sen!2sin!4v1744025397395!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //3QC6+28 Karaikudi
    if($_SESSION['taluk'] =='Devakottai' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125727.90181503548!2d78.68900700584871!3d10.017111050189117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b005b259eac5305%3A0x7a97e8405ad15962!2sDevakottai%2C%20Tamil%20Nadu%20630302!3m2!1d9.9554422!2d78.8162334!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025437496!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Illayangudi' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251582.16692976284!2d78.52828087990535!3d9.852769835475131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0100cd348d96c9%3A0xc973056be17b7b6f!2sIlayangudi%2C%20Tamil%20Nadu%20630702!3m2!1d9.6269504!2d78.62584009999999!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025467165!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalayarkoil' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125749.36277304775!2d78.64019115503395!3d9.961590154152713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b00f860a3b29ce7%3A0xe4ec7cdcb8ae37fb!2sKalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8456868!2d78.6313624!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025493545!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karaikudi' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7856.687423522384!2d78.76204309069237!3d10.070897310152445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b005d8b08de4f3b%3A0x1f24fc0ab84584f8!2sKaraikudi%2C%20Tamil%20Nadu!3m2!1d10.07354!2d78.773198!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025525025!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamadurai' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251542.26223253994!2d78.43952923304109!3d9.904959332266758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b011d2cdcb71a97%3A0xd50933a9bc93511c!2sManamadurai%2C%20Tamil%20Nadu!3m2!1d9.6962434!2d78.4555724!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025554198!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Singampunari' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251371.34309667873!2d78.42886234647129!3d10.12548362509919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0091de852664d1%3A0xa8788a44cfe4f1d9!2sSingampunari%2C%20Tamil%20Nadu%20630502!3m2!1d10.184022299999999!2d78.4264638!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025593554!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagangai' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251483.88640913286!2d78.45184953762809!3d9.980819637130136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b00facfe87f2517%3A0x99cc213b48bfc694!2sSivaganga%2C%20Tamil%20Nadu%20630561!3m2!1d9.8479616!2d78.4832344!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025620125!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125697.44258508252!2d78.59667920700507!3d10.095392174168502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b008ba9901a9939%3A0x803ea5abdec32b03!2sTirupattur%2C%20630211%2C%20Tamil%20Nadu%20630211!3m2!1d10.1084774!2d78.59731!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025663336!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppuvanam' && $_SESSION['station']=='3QC6+28')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251491.8287835312!2d78.34351298700399!3d9.970531977137965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b00dda894321c8d%3A0x70ae4df010d93f14!2sTiruppuvanam%2C%20Tamil%20Nadu%20630611!3m2!1d9.8259645!2d78.2575816!4m5!1s0x3b005d8b08de4f3b%3A0x443f9f03767fa930!2s3QC6%2B28%2C%20Karaikudi%2C%20Tamil%20Nadu!3m2!1d10.070062499999999!2d78.7608125!5e0!3m2!1sen!2sin!4v1744025689087!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //MCQX+9XQ, Manamadurai
    if($_SESSION['taluk'] =='Devakottai' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251563.19858939783!2d78.47236553139591!3d9.87761168873272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b005b259eac5305%3A0x7a97e8405ad15962!2sDevakottai%2C%20Tamil%20Nadu%20630302!3m2!1d9.9554422!2d78.8162334!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025729105!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Illayangudi' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125875.72704266674!2d78.45073380023645!3d9.62825312893022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0100cd348d96c9%3A0xc973056be17b7b6f!2sIlayangudi%2C%20Tamil%20Nadu%20630702!3m2!1d9.6269504!2d78.62584009999999!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025761039!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kalayarkoil' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125819.82242739043!2d78.45797105235894!3d9.777112383727316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b00f860a3b29ce7%3A0xe4ec7cdcb8ae37fb!2sKalayarkoil%2C%20Tamil%20Nadu%20630551!3m2!1d9.8456868!2d78.6313624!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025785242!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Karaikudi' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251544.84392615658!2d78.46430143283816!3d9.901591095377508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b005d8b08de4f3b%3A0x1f24fc0ab84584f8!2sKaraikudi%2C%20Tamil%20Nadu!3m2!1d10.07354!2d78.773198!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025811460!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manamadurai' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15731.472475741948!2d78.43968939527778!3d9.69229554636572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b011d2cdcb71a97%3A0xd50933a9bc93511c!2sManamadurai%2C%20Tamil%20Nadu!3m2!1d9.6962434!2d78.4555724!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025837084!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Singampunari' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d503018.67966720264!2d78.15094889100207!3d9.947812923097478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0091de852664d1%3A0xa8788a44cfe4f1d9!2sSingampunari%2C%20Tamil%20Nadu%20630502!3m2!1d10.184022299999999!2d78.4264638!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025863367!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagangai' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125823.26635966674!2d78.38141805222814!3d9.768007042601353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b00facfe87f2517%3A0x99cc213b48bfc694!2sSivaganga%2C%20Tamil%20Nadu%20630561!3m2!1d9.8479616!2d78.4832344!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025889876!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d334221.6774157589!2d78.35317108304719!3d9.903921978769182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b008ba9901a9939%3A0x803ea5abdec32b03!2sTirupattur%2C%20630211%2C%20Tamil%20Nadu%20630211!3m2!1d10.1084774!2d78.59731!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025927183!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppuvanam' && $_SESSION['station']=='MCQX+9XQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125827.4263712323!2d78.27164465207025!3d9.756997253332795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b00dda894321c8d%3A0x70ae4df010d93f14!2sTiruppuvanam%2C%20Tamil%20Nadu%20630611!3m2!1d9.8259645!2d78.2575816!4m5!1s0x3b011d2cdcb71a97%3A0x43d6f28ac776d7ab!2sMCQX%2B9XQ%2C%20Manamadurai%2C%20Tamil%20Nadu!3m2!1d9.6884625!2d78.44998439999999!5e0!3m2!1sen!2sin!4v1744025968278!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Tenkasi District station
//X837+7R Tenkasi
if($_SESSION['taluk'] =='Alangulam' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126134.78134452291!2d77.33176374040085!3d8.90635188677061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0423bfc3f8a709%3A0x28d20682c570cc6!2sAlangulam%2C%20Tamil%20Nadu!3m2!1d8.8658325!2d77.4986933!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026293542!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayanallur' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126096.87574370718!2d77.24310969184005!3d9.015562079306973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0684ff84b4092b%3A0x22b415a79c6612b5!2sKadayanallur%2C%20Tamil%20Nadu!3m2!1d9.0778543!2d77.34518609999999!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026322423!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarankoil' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126079.39624885927!2d77.33270164250375!3d9.065482830228872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0697eb07d96005%3A0x3d454d43a9559d3d!2sSankarankoil%2C%20Tamil%20Nadu%20627756!3m2!1d9.177796599999999!2d77.5351242!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026347037!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shenkottai' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31528.98201064054!2d77.26110814552813!3d8.960835330245093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06810e54a796f5%3A0x7daa844824a5d448!2sShenkottai%2C%20Tamil%20Nadu!3m2!1d8.9724562!2d77.2488281!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026373406!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagiri' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252100.17186636906!2d77.19774103919816!3d9.148585690027032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06ece0c5b045c5%3A0xb8f5ce2bc1023441!2sSivagiri%2C%20Tamil%20Nadu!3m2!1d9.3440145!2d77.42856119999999!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026416288!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tenkasi' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1970.594002785172!2d77.31385258854453!3d8.954817097775917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0429c15ac547f7%3A0x9a707276cd8ae327!2sTenkasi%2C%20Tamil%20Nadu!3m2!1d8.956400799999999!2d77.3152492!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026439319!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvengadam' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252130.0083543763!2d77.31890953685327!3d9.106382305844518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b91771bf3c79%3A0xe8c0e60a0d3fa7cd!2sThiruvengadam%2C%20Tamil%20Nadu%20627719!3m2!1d9.2596512!2d77.6726785!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026461746!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veerakeralampudur' && $_SESSION['station']=='X837+7R')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63063.86065750743!2d77.34346376079266!3d8.926793029291478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b042723f9e7354f%3A0xcad699a522d5fefe!2sVeerakeralampudur%2C%20Tamil%20Nadu%20627861!3m2!1d8.9376166!2d77.4488569!4m5!1s0x3b0429c15ac547f7%3A0x4bf6c78beaa56fca!2sX837%2B7R%2C%20Tenkasi%2C%20Tamil%20Nadu!3m2!1d8.9531875!2d77.3145625!5e0!3m2!1sen!2sin!4v1744026486164!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//5CR2+6XM Tenkasi
if($_SESSION['taluk'] =='Alangulam' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252187.14742769272!2d77.26488023236261!3d9.025013525769872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0423bfc3f8a709%3A0x28d20682c570cc6!2sAlangulam%2C%20Tamil%20Nadu!3m2!1d8.8658325!2d77.4986933!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026522201!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayanallur' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63027.579325257575!2d77.33299291146942!3d9.134256778298168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0684ff84b4092b%3A0x22b415a79c6612b5!2sKadayanallur%2C%20Tamil%20Nadu!3m2!1d9.0778543!2d77.34518609999999!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026548344!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarankoil' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63019.02281083468!2d77.42739141162903!3d9.182507216455846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0697eb07d96005%3A0x3d454d43a9559d3d!2sSankarankoil%2C%20Tamil%20Nadu%20627756!3m2!1d9.177796599999999!2d77.5351242!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026666243!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shenkottai' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126073.74976493156!2d77.2424854927181!3d9.081550814438065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06810e54a796f5%3A0x7daa844824a5d448!2sShenkottai%2C%20Tamil%20Nadu!3m2!1d8.9724562!2d77.2488281!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026690720!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagiri' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126007.75069387647!2d77.33169214522393!3d9.267313482092062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06ece0c5b045c5%3A0xb8f5ce2bc1023441!2sSivagiri%2C%20Tamil%20Nadu!3m2!1d9.3440145!2d77.42856119999999!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026727479!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tenkasi' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126076.57203243059!2d77.28580964261094!3d9.073523122326913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0429c15ac547f7%3A0x9a707276cd8ae327!2sTenkasi%2C%20Tamil%20Nadu!3m2!1d8.956400799999999!2d77.3152492!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026751135!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvengadam' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126019.19397175036!2d77.45286064478945!3d9.235370413419627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b91771bf3c79%3A0xe8c0e60a0d3fa7cd!2sThiruvengadam%2C%20Tamil%20Nadu%20627719!3m2!1d9.2596512!2d77.6726785!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026776221!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veerakeralampudur' && $_SESSION['station']=='5CR2+6XM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252159.76108994865!2d77.23249113451494!3d9.06410337203948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b042723f9e7354f%3A0xcad699a522d5fefe!2sVeerakeralampudur%2C%20Tamil%20Nadu%20627861!3m2!1d8.9376166!2d77.4488569!4m5!1s0x3b069bb83dc13fa1%3A0x6dda8524813ee058!2s5CR2%2B6XM%2C%20Tamil%20Nadu!3m2!1d9.1905875!2d77.4024219!5e0!3m2!1sen!2sin!4v1744026799672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//X6HX+97R, Shenkottai
if($_SESSION['taluk'] =='Alangulam' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126130.4253021735!2d77.29855279056626!3d8.91896957434796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0423bfc3f8a709%3A0x28d20682c570cc6!2sAlangulam%2C%20Tamil%20Nadu!3m2!1d8.8658325!2d77.4986933!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744026861423!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kadayanallur' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63046.57066719476!2d77.25617846111517!3d9.026250404830432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0684ff84b4092b%3A0x22b415a79c6612b5!2sKadayanallur%2C%20Tamil%20Nadu!3m2!1d9.0778543!2d77.34518609999999!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744026888350!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sankarankoil' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126075.64376670652!2d77.3093925426462!3d9.07616426973136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0697eb07d96005%3A0x3d454d43a9559d3d!2sSankarankoil%2C%20Tamil%20Nadu%20627756!3m2!1d9.177796599999999!2d77.5351242!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744026913600!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Shenkottai' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3940.9636893711427!2d77.24600412483225!3d8.975488441083735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06810e54a796f5%3A0x7daa844824a5d448!2sShenkottai%2C%20Tamil%20Nadu!3m2!1d8.9724562!2d77.2488281!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744026947539!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivagiri' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252092.5987505476!2d77.17851443979332!3d9.159267098072473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06ece0c5b045c5%3A0xb8f5ce2bc1023441!2sSivagiri%2C%20Tamil%20Nadu!3m2!1d9.3440145!2d77.42856119999999!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744026982762!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tenkasi' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31528.910443023236!2d77.26109724552876!3d8.96166008019438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0429c15ac547f7%3A0x9a707276cd8ae327!2sTenkasi%2C%20Tamil%20Nadu!3m2!1d8.956400799999999!2d77.3152492!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744027007034!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvengadam' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252103.88377178513!2d77.2956004389064!3d9.143345760610377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b91771bf3c79%3A0xe8c0e60a0d3fa7cd!2sThiruvengadam%2C%20Tamil%20Nadu%20627719!3m2!1d9.2596512!2d77.6726785!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744027036834!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Veerakeralampudur' && $_SESSION['station']=='X6HX+97R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126121.31070545425!2d77.26905059091229!3d8.945313748416659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b042723f9e7354f%3A0xcad699a522d5fefe!2sVeerakeralampudur%2C%20Tamil%20Nadu%20627861!3m2!1d8.9376166!2d77.4488569!4m5!1s0x3b06810e54a796f5%3A0x2308bfe96c930ee9!2sX6HX%2B97R%2C%20Shenkottai%2C%20Tamil%20Nadu!3m2!1d8.9784875!2d77.2481406!5e0!3m2!1sen!2sin!4v1744027069807!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Thanjavur District station
    //Q4HV+33 Thanjavur
    if($_SESSION['taluk'] =='Budalur' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125429.41943063973!2d78.98411586717998!3d10.759945531938005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa952cdd1283bf%3A0x6eff4aa0acf31b8c!2sBudalur%2C%20Tamil%20Nadu%20613602!3m2!1d10.79679!2d78.97689989999999!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027566407!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumbakonam' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125384.12076485105!2d79.17767046889956!3d10.868292827775575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a5532b360353419%3A0x9ecb5d94413ad35!2sKumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601852!2d79.3844976!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027592113!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Orathanadu' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125453.3389158862!2d79.13171336627195!3d10.702296637423695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab0358a690e8b%3A0x286fad59dd9a9788!2sOrathanadu%2C%20Tamil%20Nadu%20614625!3m2!1d10.6277112!2d79.2525381!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027663217!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Papanasam' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125391.37637540036!2d79.13191646862411!3d10.851010444379948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baace8b781eb183%3A0x1a064b320b08bafc!2sPapanasam%2C%20Tamil%20Nadu%20614207!3m2!1d10.923349799999999!2d79.2863745!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027688203!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pattukkottai' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250990.64118352236!2d79.06388387638334!3d10.600366537573102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000093eb3cbfc9%3A0xe8d7c5789de8fb3d!2sPattukkottai%2C%20Tamil%20Nadu%20614601!3m2!1d10.4232271!2d79.3199985!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027720154!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peravurani' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d502092.8124434586!2d78.8694833963053!3d10.532129862557372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000f9dd696297d%3A0xc2bc762c31c9b7a9!2sPeravurani%2C%20Tamil%20Nadu%20614804!3m2!1d10.2866254!2d79.2007694!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027756298!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thanjavur' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7838.753235069059!2d79.13606394073356!3d10.782439757466644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab89cea453039%3A0xe113da9b1f632be6!2sThanjavur%2C%20Tamil%20Nadu!3m2!1d10.787719!2d79.1384288!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027789131!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvaiyaru' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62700.48112973125!2d79.09649016757028!3d10.82813571674626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baac3fc29abc855%3A0xe3d0f49ba4f489ea!2sThiruvaiyaru%2C%20Tamil%20Nadu%20613204!3m2!1d10.879854499999999!2d79.10604099999999!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027820948!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvidaimarudur' && $_SESSION['station']=='Q4HV+33')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125376.33081014286!2d79.21491841919534!3d10.886817809981777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a552dea2a711037%3A0xfb6f057e49d629d2!2sThiruvidaimaruthur%2C%20Tamil%20Nadu!3m2!1d10.997235199999999!2d79.45236969999999!4m5!1s0x3baab89cea453039%3A0x623c0cd466f38d39!2sQ4HV%2B33%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.777687499999999!2d79.1426875!5e0!3m2!1sen!2sin!4v1744027860104!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //R4C6+GP Thanjavur
    if($_SESSION['taluk'] =='Budalur' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62706.44919975556!2d79.00313716745895!3d10.799585673607746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa952cdd1283bf%3A0x6eff4aa0acf31b8c!2sBudalur%2C%20Tamil%20Nadu%20613602!3m2!1d10.79679!2d78.97689989999999!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744027962682!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumbakonam' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125374.68070825336!2d79.16502911925795!3d10.890737856217061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a5532b360353419%3A0x9ecb5d94413ad35!2sKumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601852!2d79.3844976!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744027986981!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Orathanadu' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125442.33851992192!2d79.08154776668955!3d10.728846961864186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab0358a690e8b%3A0x286fad59dd9a9788!2sOrathanadu%2C%20Tamil%20Nadu%20614625!3m2!1d10.6277112!2d79.2525381!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028010506!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Papanasam' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125380.40481476179!2d79.1168411190406!3d10.87713346928331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baace8b781eb183%3A0x1a064b320b08bafc!2sPapanasam%2C%20Tamil%20Nadu%20614207!3m2!1d10.923349799999999!2d79.2863745!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028035658!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pattukkottai' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250969.29152956005!2d79.03286567806069!3d10.626376287265888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000093eb3cbfc9%3A0xe8d7c5789de8fb3d!2sPattukkottai%2C%20Tamil%20Nadu%20614601!3m2!1d10.4232271!2d79.3199985!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028059305!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peravurani' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d502050.3850379622!2d78.83467295342112!3d10.55813931087057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000f9dd696297d%3A0xc2bc762c31c9b7a9!2sPeravurani%2C%20Tamil%20Nadu%20614804!3m2!1d10.2866254!2d79.2007694!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028081761!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thanjavur' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31352.435170227196!2d79.09748214715997!3d10.807145867966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab89cea453039%3A0xe113da9b1f632be6!2sThanjavur%2C%20Tamil%20Nadu!3m2!1d10.787719!2d79.1384288!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028104690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvaiyaru' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31347.888940240122!2d79.09756929720201!3d10.850582815357633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baac3fc29abc855%3A0xe3d0f49ba4f489ea!2sThiruvaiyaru%2C%20Tamil%20Nadu%20613204!3m2!1d10.879854499999999!2d79.10604099999999!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028128620!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvidaimarudur' && $_SESSION['station']=='R4C6+GP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250733.7776145273!2d79.11655794656362!3d10.909229798739185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a552dea2a711037%3A0xfb6f057e49d629d2!2sThiruvidaimaruthur%2C%20Tamil%20Nadu!3m2!1d10.997235199999999!2d79.45236969999999!4m5!1s0x3baab89cea453039%3A0x2606b66891f56b70!2sR4C6%2BGP%2C%20Thanjavur%2C%20Tamil%20Nadu!3m2!1d10.8213125!2d79.1118125!5e0!3m2!1sen!2sin!4v1744028150779!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //X96V+32 Kumbakonam
    if($_SESSION['taluk'] =='Budalur' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250781.1337527058!2d79.02041374284317!3d10.852939965024696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa952cdd1283bf%3A0x6eff4aa0acf31b8c!2sBudalur%2C%20Tamil%20Nadu%20613602!3m2!1d10.79679!2d78.97689989999999!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028194071!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kumbakonam' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3917.0160173127183!2d79.38608312485974!3d10.962162389198118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a5532b360353419%3A0x9ecb5d94413ad35!2sKumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601852!2d79.3844976!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028216615!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Orathanadu' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250821.31968962925!2d79.10442248968613!3d10.804945749569198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab0358a690e8b%3A0x286fad59dd9a9788!2sOrathanadu%2C%20Tamil%20Nadu%20614625!3m2!1d10.6277112!2d79.2525381!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028247662!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Papanasam' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62675.672137968686!2d79.30205501803299!3d10.946028288441742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baace8b781eb183%3A0x1a064b320b08bafc!2sPapanasam%2C%20Tamil%20Nadu%20614207!3m2!1d10.923349799999999!2d79.2863745!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028271145!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pattukkottai' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501812.8508102685!2d78.97496129325842!3d10.702601632385122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000093eb3cbfc9%3A0xe8d7c5789de8fb3d!2sPattukkottai%2C%20Tamil%20Nadu%20614601!3m2!1d10.4232271!2d79.3199985!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028295184!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Peravurani' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501924.71514177916!2d78.97496127449772!3d10.634810227595073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b000f9dd696297d%3A0xc2bc762c31c9b7a9!2sPeravurani%2C%20Tamil%20Nadu%20614804!3m2!1d10.2866254!2d79.2007694!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028316902!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thanjavur' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125379.10318105354!2d79.18734216909007!3d10.880228516310467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baab89cea453039%3A0xe113da9b1f632be6!2sThanjavur%2C%20Tamil%20Nadu!3m2!1d10.787719!2d79.1384288!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028338568!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvaiyaru' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125368.5305734872!2d79.17071176949139!3d10.905336092199027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baac3fc29abc855%3A0xe3d0f49ba4f489ea!2sThiruvaiyaru%2C%20Tamil%20Nadu%20613204!3m2!1d10.879854499999999!2d79.10604099999999!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028365674!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvidaimarudur' && $_SESSION['station']=='X96V+32')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31334.375603092452!2d79.40182564732686!3d10.978693507671373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a552dea2a711037%3A0xfb6f057e49d629d2!2sThiruvidaimaruthur%2C%20Tamil%20Nadu!3m2!1d10.997235199999999!2d79.45236969999999!4m5!1s0x3a5532b360353419%3A0xd346e495b8ab8f69!2sX96V%2B32%2C%20Kumbakonam%2C%20Tamil%20Nadu!3m2!1d10.9601875!2d79.3925625!5e0!3m2!1sen!2sin!4v1744028389099!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Theni District Station
    //P7FG+XG Cumbum
    if($_SESSION['taluk'] =='Andipatti' && $_SESSION['station']=='P7FG+XG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251573.1211205497!2d77.27702973061619!3d9.864624389305805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b073f0b80954439%3A0xb27ad910e21e7b4e!2sAndippatti%2C%20Tamil%20Nadu!3m2!1d9.9997308!2d77.61924929999999!4m5!1s0x3b0701597e5b491d%3A0x8e575829a37b8955!2sP7FG%2BXG%2C%20Cumbum%2C%20Tamil%20Nadu!3m2!1d9.7249375!2d77.2763125!5e0!3m2!1sen!2sin!4v1744028699139!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bodinaickkanur' && $_SESSION['station']=='P7FG+XG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251571.97686543068!2d77.19398793070607!3d9.866122933469994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b070d36c2965c59%3A0xc13421eb588f7141!2sBodinayakanur%2C%20Tamil%20Nadu!3m2!1d10.008785699999999!2d77.3497332!4m5!1s0x3b0701597e5b491d%3A0x8e575829a37b8955!2sP7FG%2BXG%2C%20Cumbum%2C%20Tamil%20Nadu!3m2!1d9.7249375!2d77.2763125!5e0!3m2!1sen!2sin!4v1744028724310!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Theni' && $_SESSION['station']=='P7FG+XG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251574.033392842!2d77.20417368054453!3d9.863429493959194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b071353e94a7877%3A0x962bf8fd53981722!2sTheni%2C%20Tamil%20Nadu!3m2!1d10.007932199999999!2d77.4735441!4m5!1s0x3b0701597e5b491d%3A0x8e575829a37b8955!2sP7FG%2BXG%2C%20Cumbum%2C%20Tamil%20Nadu!3m2!1d9.7249375!2d77.2763125!5e0!3m2!1sen!2sin!4v1744028749134!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Periyakulam' && $_SESSION['station']=='P7FG+XG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251527.5276180075!2d77.25482383419883!3d9.924161357534036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0769fa08199abb%3A0xe7649f571df4b3c8!2sPeriyakulam%2C%20Tamil%20Nadu%20625601!3m2!1d10.123877799999999!2d77.54747069999999!4m5!1s0x3b0701597e5b491d%3A0x8e575829a37b8955!2sP7FG%2BXG%2C%20Cumbum%2C%20Tamil%20Nadu!3m2!1d9.7249375!2d77.2763125!5e0!3m2!1sen!2sin!4v1744028772076!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthamapalayam' && $_SESSION['station']=='P7FG+XG')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62912.64102965678!2d77.25573071361326!3d9.762673874591128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0705a83db75171%3A0x88f139d030148514!2sUthamapalayam%2C%20Tamil%20Nadu%20625533!3m2!1d9.8063436!2d77.3294827!4m5!1s0x3b0701597e5b491d%3A0x8e575829a37b8955!2sP7FG%2BXG%2C%20Cumbum%2C%20Tamil%20Nadu!3m2!1d9.7249375!2d77.2763125!5e0!3m2!1sen!2sin!4v1744028796361!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //WC65+R2G, Theni
if($_SESSION['taluk'] =='Andipatti' && $_SESSION['station']=='WC65+R2G,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125750.08599107726!2d77.43089970500647!3d9.959713805977099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b073f0b80954439%3A0xb27ad910e21e7b4e!2sAndippatti%2C%20Tamil%20Nadu!3m2!1d9.9997308!2d77.61924929999999!4m5!1s0x3b0714bd681adaf9%3A0x3f3964a4e9649114!2sWC65%2BR2G%2C%20Tamil%20Nadu!3m2!1d9.9120625!2d77.4075781!5e0!3m2!1sen!2sin!4v1744028835824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bodinaickkanur' && $_SESSION['station']=='WC65+R2G,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62875.1814426811!2d77.35838381431194!3d9.958995326812806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b070d36c2965c59%3A0xc13421eb588f7141!2sBodinayakanur%2C%20Tamil%20Nadu!3m2!1d10.008785699999999!2d77.3497332!4m5!1s0x3b0714bd681adaf9%3A0x3f3964a4e9649114!2sWC65%2BR2G%2C%20Tamil%20Nadu!3m2!1d9.9120625!2d77.4075781!5e0!3m2!1sen!2sin!4v1744028859897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Theni' && $_SESSION['station']=='WC65+R2G,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62874.987897399726!2d77.3992458643156!3d9.959999726568672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b071353e94a7877%3A0x962bf8fd53981722!2sTheni%2C%20Tamil%20Nadu!3m2!1d10.007932199999999!2d77.4735441!4m5!1s0x3b0714bd681adaf9%3A0x3f3964a4e9649114!2sWC65%2BR2G%2C%20Tamil%20Nadu!3m2!1d9.9120625!2d77.4075781!5e0!3m2!1sen!2sin!4v1744028884954!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Periyakulam' && $_SESSION['station']=='WC65+R2G,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125727.93464472596!2d77.39983090584742!3d10.017026350271404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0769fa08199abb%3A0xe7649f571df4b3c8!2sPeriyakulam%2C%20Tamil%20Nadu%20625601!3m2!1d10.123877799999999!2d77.54747069999999!4m5!1s0x3b0714bd681adaf9%3A0x3f3964a4e9649114!2sWC65%2BR2G%2C%20Tamil%20Nadu!3m2!1d9.9120625!2d77.4075781!5e0!3m2!1sen!2sin!4v1744028909478!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthamapalayam' && $_SESSION['station']=='WC65+R2G,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62894.60018488038!2d77.32621131394973!3d9.857707151448437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0705a83db75171%3A0x88f139d030148514!2sUthamapalayam%2C%20Tamil%20Nadu%20625533!3m2!1d9.8063436!2d77.3294827!4m5!1s0x3b0714bd681adaf9%3A0x3f3964a4e9649114!2sWC65%2BR2G%2C%20Tamil%20Nadu!3m2!1d9.9120625!2d77.4075781!5e0!3m2!1sen!2sin!4v1744028937265!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //2F7J+V7J ,Theni
    if($_SESSION['taluk'] =='Andipatti' && $_SESSION['station']=='2F7J+V7J')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62865.864073543264!2d77.50877446448571!3d10.007234415091016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b073f0b80954439%3A0xb27ad910e21e7b4e!2sAndippatti%2C%20Tamil%20Nadu!3m2!1d9.9997308!2d77.61924929999999!4m5!1s0x3b0714bd681adaf9%3A0x862c739b34974ff0!2s2F7J%2BV7J%2C%20Tamil%20Nadu!3m2!1d10.0147125!2d77.4806406!5e0!3m2!1sen!2sin!4v1744028972560!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Bodinaickkanur' && $_SESSION['station']=='2F7J+V7J')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62866.62326144549!2d77.37409516447157!3d10.003312466043758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b070d36c2965c59%3A0xc13421eb588f7141!2sBodinayakanur%2C%20Tamil%20Nadu!3m2!1d10.008785699999999!2d77.3497332!4m5!1s0x3b0714bd681adaf9%3A0x862c739b34974ff0!2s2F7J%2BV7J%2C%20Tamil%20Nadu!3m2!1d10.0147125!2d77.4806406!5e0!3m2!1sen!2sin!4v1744028998127!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Theni' && $_SESSION['station']=='2F7J+V7J')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7858.126316905534!2d77.4720502906891!3d10.011641960377252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b071353e94a7877%3A0x962bf8fd53981722!2sTheni%2C%20Tamil%20Nadu!3m2!1d10.007932199999999!2d77.4735441!4m5!1s0x3b0714bd681adaf9%3A0x862c739b34974ff0!2s2F7J%2BV7J%2C%20Tamil%20Nadu!3m2!1d10.0147125!2d77.4806406!5e0!3m2!1sen!2sin!4v1744029029426!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Periyakulam' && $_SESSION['station']=='2F7J+V7J')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62853.27751438992!2d77.48575946472047!3d10.072036049355944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0769fa08199abb%3A0xe7649f571df4b3c8!2sPeriyakulam%2C%20Tamil%20Nadu%20625601!3m2!1d10.123877799999999!2d77.54747069999999!4m5!1s0x3b0714bd681adaf9%3A0x862c739b34974ff0!2s2F7J%2BV7J%2C%20Tamil%20Nadu!3m2!1d10.0147125!2d77.4806406!5e0!3m2!1sen!2sin!4v1744029055024!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Uthamapalayam' && $_SESSION['station']=='2F7J+V7J')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125769.4752148826!2d77.32226985427039!3d9.90927845503182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0705a83db75171%3A0x88f139d030148514!2sUthamapalayam%2C%20Tamil%20Nadu%20625533!3m2!1d9.8063436!2d77.3294827!4m5!1s0x3b0714bd681adaf9%3A0x862c739b34974ff0!2s2F7J%2BV7J%2C%20Tamil%20Nadu!3m2!1d10.0147125!2d77.4806406!5e0!3m2!1sen!2sin!4v1744029079423!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Thoothukudi District Station
    //2Q2J+89R, Kayathar
    if($_SESSION['taluk'] =='Eral' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252341.98210329536!2d77.71001157019359!3d8.800772558965086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b038ca14934e1cf%3A0xda5788cbac5cee4c!2sEral%2C%20Tamil%20Nadu%20628801!3m2!1d8.6266415!2d78.02381969999999!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029440897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ettayapuram' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126078.68267519628!2d77.79612609253077!3d9.067514978231614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015214b8677a9f%3A0x41f84d041513b0d7!2sEttaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.147727399999999!2d77.9905654!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029475338!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kayatharu' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31527.846133646788!2d77.7558615955386!3d8.973916379440736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0402e12cb0c8f5%3A0x38acc058a6a4da77!2sKayathar%2C%20Tamil%20Nadu!3m2!1d8.9469905!2d77.7738163!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029506953!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kovilpatti' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126078.69572155297!2d77.73658794253032!3d9.067477828268135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b26570998f29%3A0xd95cda8fab23619b!2sKovilpatti%2C%20Tamil%20Nadu!3m2!1d9.172669599999999!2d77.87148789999999!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029530806!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ottapidaram' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126120.07603161217!2d77.81248029095921!3d8.94887644491039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03fbff85994859%3A0x38f7755385db4b9b!2sOttapidaram%2C%20Tamil%20Nadu%20628401!3m2!1d8.9059694!2d78.0232781!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029556418!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathankulam' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504790.38417216367!2d77.51811409371892!3d8.722390488355561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047865cdb41d31%3A0xb20923183ee569b1!2sSathankulam%2C%20Tamil%20Nadu%20628704!3m2!1d8.4442039!2d77.9120458!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029579659!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivaikuntam' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252331.2374797919!2d77.65666907103811!3d8.816516246884694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047544438e8ef3%3A0x4d67d7833fc2823c!2sSrivaikuntam%2C%20Tamil%20Nadu!3m2!1d8.6322418!2d77.913242!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029680723!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchendur' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504754.18457181356!2d77.59195614979436!3d8.749130966145453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0390118f119e01%3A0xb9bc989564965383!2sThiruchendur%2C%20Tamil%20Nadu!3m2!1d8.4976846!2d78.11942959999999!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029865456!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thoothukudi' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252300.14309501214!2d77.76451132348195!3d8.861921317904567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03ee67b4ad764f%3A0x2443e6dc90ee7d3!2sThoothukudi%2C%20Tamil%20Nadu!3m2!1d8.764166099999999!2d78.1348361!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029893205!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilathikulam' && $_SESSION['station']=='2Q2J+89R,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252157.384784399!2d77.80209598470172!3d9.067487308734556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015b07cb831477%3A0x1605a502f098c276!2sVilathikulam%2C%20Tamil%20Nadu!3m2!1d9.130932!2d78.1673325!4m5!1s0x3b0402e12cb0c8f5%3A0x1f85e091f1ccfe3e!2s2Q2J%2B89R%2C%20Kayathar%2C%20Tamil%20Nadu!3m2!1d9.0008625!2d77.78089059999999!5e0!3m2!1sen!2sin!4v1744029926178!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    //52M8+QJ6, Ettaiyapuram
     if($_SESSION['taluk'] =='Eral' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504542.7640239908!2d77.7366761852763!3d8.903714727842623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b038ca14934e1cf%3A0xda5788cbac5cee4c!2sEral%2C%20Tamil%20Nadu%20628801!3m2!1d8.6266415!2d78.02381969999999!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030047381!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ettayapuram' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31511.004726095478!2d77.9828734956943!3d9.165694067661883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015214b8677a9f%3A0x41f84d041513b0d7!2sEttaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.147727399999999!2d77.9905654!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030105390!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kayatharu' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252158.67155144375!2d77.74622623460056!3d9.065655065938474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0402e12cb0c8f5%3A0x38acc058a6a4da77!2sKayathar%2C%20Tamil%20Nadu!3m2!1d8.9469905!2d77.7738163!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030130166!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kovilpatti' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63021.80380643537!2d77.90280236157714!3d9.166852720297276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b26570998f29%3A0xd95cda8fab23619b!2sKovilpatti%2C%20Tamil%20Nadu!3m2!1d9.172669599999999!2d77.87148789999999!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030164364!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ottapidaram' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252173.05609077797!2d77.86287523347005!3d9.045147696578757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03fbff85994859%3A0x38f7755385db4b9b!2sOttapidaram%2C%20Tamil%20Nadu%20628401!3m2!1d8.9059694!2d78.0232781!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030191501!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathankulam' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504665.6880109026!2d77.59875996464663!3d8.814164039846219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047865cdb41d31%3A0xb20923183ee569b1!2sSathankulam%2C%20Tamil%20Nadu%20628704!3m2!1d8.4442039!2d77.9120458!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030220377!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivaikuntam' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504536.5995538687!2d77.5915886363108!3d8.908182057440353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047544438e8ef3%3A0x4d67d7833fc2823c!2sSrivaikuntam%2C%20Tamil%20Nadu!3m2!1d8.6322418!2d77.913242!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030246795!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchendur' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504629.1111130017!2d77.70884642078522!3d8.840904518064175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0390118f119e01%3A0xb9bc989564965383!2sThiruchendur%2C%20Tamil%20Nadu!3m2!1d8.4976846!2d78.11942959999999!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030302912!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thoothukudi' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252222.54150295845!2d77.90242752958086!3d8.974243725536592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03ee67b4ad764f%3A0x2443e6dc90ee7d3!2sThoothukudi%2C%20Tamil%20Nadu!3m2!1d8.764166099999999!2d78.1348361!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030328428!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilathikulam' && $_SESSION['station']=='52M8+QJ6,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126047.41861757479!2d78.0015891437179!3d9.156111141202016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015b07cb831477%3A0x1605a502f098c276!2sVilathikulam%2C%20Tamil%20Nadu!3m2!1d9.130932!2d78.1673325!4m5!1s0x3b015214b8677a9f%3A0x759486294feb001d!2s52M8%2BQJ6%2C%20Ettaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.184412499999999!2d78.01651559999999!5e0!3m2!1sen!2sin!4v1744030352378!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //7W33+M65, Perayyampatti
     if($_SESSION['taluk'] =='Eral' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504510.18334694597!2d77.59086479074402!3d8.9273005061857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b038ca14934e1cf%3A0xda5788cbac5cee4c!2sEral%2C%20Tamil%20Nadu%20628801!3m2!1d8.6266415!2d78.02381969999999!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030408486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ettayapuram' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63015.74874442026!2d77.8906268616901!3d9.200903411942537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015214b8677a9f%3A0x41f84d041513b0d7!2sEttaiyapuram%2C%20Tamil%20Nadu!3m2!1d9.147727399999999!2d77.9905654!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030437792!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kayatharu' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252134.14381548553!2d77.67271018652826!3d9.100517428894035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0402e12cb0c8f5%3A0x38acc058a6a4da77!2sKayathar%2C%20Tamil%20Nadu!3m2!1d8.9469905!2d77.7738163!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030470027!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kovilpatti' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63013.58193691637!2d77.83869866173046!3d9.213058158961037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b06b26570998f29%3A0xd95cda8fab23619b!2sKovilpatti%2C%20Tamil%20Nadu!3m2!1d9.172669599999999!2d77.87148789999999!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030493897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ottapidaram' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252148.58326930314!2d77.78316008539345!3d9.08001005950217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03fbff85994859%3A0x38f7755385db4b9b!2sOttapidaram%2C%20Tamil%20Nadu%20628401!3m2!1d8.9059694!2d78.0232781!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030523484!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sathankulam' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504617.98041584477!2d77.51811412265327!3d8.849025989987666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047865cdb41d31%3A0xb20923183ee569b1!2sSathankulam%2C%20Tamil%20Nadu%20628704!3m2!1d8.4442039!2d77.9120458!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030549084!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivaikuntam' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504488.38817304233!2d77.48886239440169!3d8.943044008159628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b047544438e8ef3%3A0x4d67d7833fc2823c!2sSrivaikuntam%2C%20Tamil%20Nadu!3m2!1d8.6322418!2d77.913242!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030572641!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchendur' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504581.2602187437!2d77.59875997881576!3d8.875766468369369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b0390118f119e01%3A0xb9bc989564965383!2sThiruchendur%2C%20Tamil%20Nadu!3m2!1d8.4976846!2d78.11942959999999!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030601516!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thoothukudi' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d504424.98937135056!2d77.5996594550412!3d8.988683939388602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b03ee67b4ad764f%3A0x2443e6dc90ee7d3!2sThoothukudi%2C%20Tamil%20Nadu!3m2!1d8.764166099999999!2d78.1348361!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030625171!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vilathikulam' && $_SESSION['station']=='7W33+M65,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126035.03362053727!2d77.93780604418811!3d9.190973606980357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3b015b07cb831477%3A0x1605a502f098c276!2sVilathikulam%2C%20Tamil%20Nadu!3m2!1d9.130932!2d78.1673325!4m5!1s0x3b06b366f685a3cd%3A0x25e432685896784!2s7W33%2BM65%2C%20Perayyampatti%2C%20Tamil%20Nadu!3m2!1d9.254137499999999!2d77.90310939999999!5e0!3m2!1sen!2sin!4v1744030651586!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Tiruchirappalli District station
    //QMWJ+WF Tiruchirappalli
    if($_SESSION['taluk'] =='Lalgudi' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62697.71378747772!2d78.7081498176219!3d10.84134891357162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf1ed833cd2af%3A0x7d14690fdac6cb7c!2sLalgudi%2C%20Tamil%20Nadu!3m2!1d10.871156599999999!2d78.8197036!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031049619!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manachanallur' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125392.95733320265!2d78.61485806856413!3d10.847241098001966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf7aa54d764cf%3A0x35d8fe769687a487!2sManachanallur%2C%20Tamil%20Nadu%20621005!3m2!1d10.9104314!2d78.6997815!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031076755!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manapparai' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125452.69925743672!2d78.47292606629622!3d10.703842285935476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa6e361a76345b%3A0xfec74750bbc13689!2sManapparai%2C%20Boys%20Town%2C%20Tamil%20Nadu%20621306!3m2!1d10.608932399999999!2d78.42332669999999!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031103077!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marungapuri' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250972.8738315182!2d78.39625067777929!3d10.622016454077215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa77a847288ccd%3A0x1427320b06a2fd48!2sMarungapuri%2C%20Tamil%20Nadu!3m2!1d10.4475027!2d78.4354042!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031131131!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Musiri' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125384.32272972062!2d78.4953415188919!3d10.867812128237366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa4f8e2e89abcf%3A0x2bc0fe18d3cfa27b!2sMusiri%2C%20Tamil%20Nadu%20621211!3m2!1d10.951568199999999!2d78.441934!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031155197!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srirangam' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62701.464860760854!2d78.6550780175519!3d10.823434867875836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf5d38807dbd3%3A0x6fc3d1a428e19458!2sSrirangam%2C%20Tamil%20Nadu!3m2!1d10.850266099999999!2d78.69976989999999!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031176700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruchirappalli' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31353.216281054323!2d78.67604589715275!3d10.799665368416333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf50ff2aecdad%3A0x6de02c3bedbbaea6!2sTiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7904833!2d78.7046725!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031201582!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    if($_SESSION['taluk'] =='Thiruverumbur' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62706.652727282926!2d78.68799806745521!3d10.798610723842101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf33a01787211%3A0xc8d02fbe926010!2sThiruverumbur%2C%20Tamil%20Nadu!3m2!1d10.7850922!2d78.77502249999999!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031425840!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thottiyam' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250752.3390023278!2d78.35933174510538!3d10.887201083361104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa49ab7ca56989%3A0x3af444e7b49f6163!2sThottiyam%2C%20Tamil%20Nadu%20621215!3m2!1d10.9904174!2d78.33559919999999!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031448777!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thuraiyur' && $_SESSION['station']=='QMWJ+WF')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250684.12933443228!2d78.480614100464!3d10.967937723343757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3babab17e1915cf7%3A0xe33022cac0880ed6!2sThuraiyur%2C%20Tamil%20Nadu!3m2!1d11.151891299999999!2d78.5957143!4m5!1s0x3baaf50ff2aecdad%3A0xfa60fdd1649a462e!2sQMWJ%2BWF%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7973125!2d78.6811875!5e0!3m2!1sen!2sin!4v1744031470804!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
    //RMFP+J2 Tiruchirappalli
    if($_SESSION['taluk'] =='Lalgudi' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62693.51976086988!2d78.71118316770013!3d10.861343808768725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf1ed833cd2af%3A0x7d14690fdac6cb7c!2sLalgudi%2C%20Tamil%20Nadu!3m2!1d10.871156599999999!2d78.8197036!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031509670!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manachanallur' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62691.197601617285!2d78.66863491774345!3d10.872399006113758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf7aa54d764cf%3A0x35d8fe769687a487!2sManachanallur%2C%20Tamil%20Nadu%20621005!3m2!1d10.9104314!2d78.6997815!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031533670!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manapparai' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125447.4413245521!2d78.47363496649584!3d10.716539023711658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa6e361a76345b%3A0xfec74750bbc13689!2sManapparai%2C%20Boys%20Town%2C%20Tamil%20Nadu%20621306!3m2!1d10.608932399999999!2d78.42332669999999!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031555897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marungapuri' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250962.4374098955!2d78.3969595785992!3d10.634713155122036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa77a847288ccd%3A0x1427320b06a2fd48!2sMarungapuri%2C%20Tamil%20Nadu!3m2!1d10.4475027!2d78.4354042!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031582106!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Musiri' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125375.91447265589!2d78.49241971921107!3d10.88780700903176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa4f8e2e89abcf%3A0x2bc0fe18d3cfa27b!2sMusiri%2C%20Tamil%20Nadu%20621211!3m2!1d10.951568199999999!2d78.441934!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031603916!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srirangam' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15674.583814095606!2d78.68253699553951!3d10.838382979024972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf5d38807dbd3%3A0x6fc3d1a428e19458!2sSrirangam%2C%20Tamil%20Nadu!3m2!1d10.850266099999999!2d78.69976989999999!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031625632!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
    if($_SESSION['taluk'] =='Thiruchirappalli' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31351.759039876873!2d78.67746089716621!3d10.813616867578029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf50ff2aecdad%3A0x6de02c3bedbbaea6!2sTiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7904833!2d78.7046725!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031653783!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruverumbur' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62704.12583856977!2d78.68921001750229!3d10.810709020934123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf33a01787211%3A0xc8d02fbe926010!2sThiruverumbur%2C%20Tamil%20Nadu!3m2!1d10.7850922!2d78.77502249999999!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031675404!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thottiyam' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250735.49292445031!2d78.35640994642884!3d10.907195906551172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa49ab7ca56989%3A0x3af444e7b49f6163!2sThottiyam%2C%20Tamil%20Nadu%20621215!3m2!1d10.9904174!2d78.33559919999999!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031696085!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thuraiyur' && $_SESSION['station']=='RMFP+J2')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250667.15997032056!2d78.47769230179712!3d10.98793254662068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3babab17e1915cf7%3A0xe33022cac0880ed6!2sThuraiyur%2C%20Tamil%20Nadu!3m2!1d11.151891299999999!2d78.5957143!4m5!1s0x3baaf50ff2aecdad%3A0x5088fddc1ba39125!2sRMFP%2BJ2%2C%20Tiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.8240625!2d78.6850625!5e0!3m2!1sen!2sin!4v1744031721164!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //RPV7+6FX, Srirangam
    if($_SESSION['taluk'] =='Lalgudi' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62690.514753702766!2d78.72666856775618!3d10.875647755333633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf1ed833cd2af%3A0x7d14690fdac6cb7c!2sLalgudi%2C%20Tamil%20Nadu!3m2!1d10.871156599999999!2d78.8197036!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031763256!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manachanallur' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62689.19643195686!2d78.67138161778074!3d10.881917153828248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf7aa54d764cf%3A0x35d8fe769687a487!2sManachanallur%2C%20Tamil%20Nadu%20621005!3m2!1d10.9104314!2d78.6997815!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031799810!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manapparai' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250908.21149453448!2d78.40367538285952!3d10.7004434018186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa6e361a76345b%3A0xfec74750bbc13689!2sManapparai%2C%20Boys%20Town%2C%20Tamil%20Nadu%20621306!3m2!1d10.608932399999999!2d78.42332669999999!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031823362!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marungapuri' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250952.2896236506!2d78.40945307939653!3d10.647044357584232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa77a847288ccd%3A0x1427320b06a2fd48!2sMarungapuri%2C%20Tamil%20Nadu!3m2!1d10.4475027!2d78.4354042!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031847222!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Musiri' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125371.9065351408!2d78.49542871936325!3d10.897325149891214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa4f8e2e89abcf%3A0x2bc0fe18d3cfa27b!2sMusiri%2C%20Tamil%20Nadu%20621211!3m2!1d10.951568199999999!2d78.441934!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031871391!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srirangam' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15673.865921563802!2d78.6964447955429!3d10.852080728819315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf5d38807dbd3%3A0x6fc3d1a428e19458!2sSrirangam%2C%20Tamil%20Nadu!3m2!1d10.850266099999999!2d78.69976989999999!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031897304!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    
    if($_SESSION['taluk'] =='Thiruchirappalli' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31351.126871138928!2d78.68860189717206!3d10.819663667214742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf50ff2aecdad%3A0x6de02c3bedbbaea6!2sTiruchirappalli%2C%20Tamil%20Nadu!3m2!1d10.7904833!2d78.7046725!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031918594!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruverumbur' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62702.86183716876!2d78.7035151675259!3d10.816755819480887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baaf33a01787211%3A0xc8d02fbe926010!2sThiruverumbur%2C%20Tamil%20Nadu!3m2!1d10.7850922!2d78.77502249999999!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031942357!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thottiyam' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250716.67431473886!2d78.35941894790723!3d10.929489220936896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3baa49ab7ca56989%3A0x3af444e7b49f6163!2sThottiyam%2C%20Tamil%20Nadu%20621215!3m2!1d10.9904174!2d78.33559919999999!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031964172!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thuraiyur' && $_SESSION['station']=='RPV7+6FX,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250659.07133796162!2d78.48778540243255!3d10.997450660105889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3babab17e1915cf7%3A0xe33022cac0880ed6!2sThuraiyur%2C%20Tamil%20Nadu!3m2!1d11.151891299999999!2d78.5957143!4m5!1s0x3baaf5d38807dbd3%3A0x5e47252966a429c5!2sRPV7%2B6FX%2C%20Srirangam%2C%20Tamil%20Nadu!3m2!1d10.8431125!2d78.71373439999999!5e0!3m2!1sen!2sin!4v1744031986798!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Tirunelveli District Station
    //MP99+95 Tirunelveli
    if($_SESSION['taluk'] =='Ambasamudram' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d229452.69935737766!2d77.47496867266678!3d8.71914187138797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04395f1baf33f9%3A0x85c499464a1eaecf!2sAmbasamudram!3m2!1d8.7035955!2d77.4485388!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744432973744!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheranmahadevi' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63107.80125422421!2d77.60301254656653!3d8.668941892833955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0415868994ab3f%3A0x9e696c44e0a93e94!2sCheranmahadevi%2C%20Tamil%20Nadu!3m2!1d8.674728499999999!2d77.5658381!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433006815!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manur' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126184.28216332743!2d77.60745178490231!3d8.761702029298052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04197dd9b13d3d%3A0xebdbc600e137bbdc!2sManur%2C%20Tamil%20Nadu%20627201!3m2!1d8.855005499999999!2d77.6521807!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433033156!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nanguneri' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126242.86311874751!2d77.60196383265314!3d8.587396051362544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b046f34026db1e5%3A0xbd66f3b312fdbc3d!2sNanguneri%2C%20Tamil%20Nadu!3m2!1d8.4961056!2d77.6464534!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433062858!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Palayamkottai' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31551.78050935991!2d77.70556654196619!3d8.694155096669002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0412032e2c0f6d%3A0xc0068ceb8bdc63b7!2sPalayamkottai%2C%20Tirunelveli%2C%20Tamil%20Nadu%20627002!3m2!1d8.7198949!2d77.7344288!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433092939!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tisayanvilai' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252539.37090689992!2d77.59000094000857!3d8.506404071599613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b047e50930e95e5%3A0x1d70ec9eff576a24!2sThisayanvilai%2C%20Tamil%20Nadu%20627657!3m2!1d8.3343425!2d77.86348439999999!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433122662!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirunelveli' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31552.38149809232!2d77.72011084196053!3d8.687015297109388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0411625053c519%3A0xad791b361b359a4d!2sTirunelveli%2C%20Tamil%20Nadu!3m2!1d8.715017999999999!2d77.76562799999999!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433151842!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Radhapuram' && $_SESSION['station']=='MP99+95')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252562.51424596817!2d77.50117203816987!3d8.471225260799992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0489bb61c4ad57%3A0xddce4c604a98c7b3!2sRadhapuram%2C%20Tamil%20Nadu!3m2!1d8.263990699999999!2d77.6847202!4m5!1s0x3b0411625053c519%3A0x94a92016d777751b!2sMP99%2B95%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.6684375!2d77.71793749999999!5e0!3m2!1sen!2sin!4v1744433181335!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }


    //PPHC+MM Tirunelveli
    if($_SESSION['taluk'] =='Ambasamudram' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126206.81873611061!2d77.49783378403703!3d8.69505549504889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04395f1baf33f9%3A0x85c499464a1eaecf!2sAmbasamudram%2C%20Tamil%20Nadu!3m2!1d8.7035955!2d77.4485388!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433248054!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheranmahadevi' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63103.408249421955!2d77.60066864664937!3d8.695062136388746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0415868994ab3f%3A0x9e696c44e0a93e94!2sCheranmahadevi%2C%20Tamil%20Nadu!3m2!1d8.674728499999999!2d77.5658381!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433278621!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manur' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126174.14222679459!2d77.60507493529164!3d8.791524949891556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04197dd9b13d3d%3A0xebdbc600e137bbdc!2sManur%2C%20Tamil%20Nadu%20627201!3m2!1d8.855005499999999!2d77.6521807!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433306471!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nanguneri' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126234.45218533404!2d77.60432318297602!3d8.612637776425196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b046f34026db1e5%3A0xbd66f3b312fdbc3d!2sNanguneri%2C%20Tamil%20Nadu!3m2!1d8.4961056!2d77.6464534!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433336168!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Palayamkottai' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7887.305299690816!2d77.72303254041266!3d8.724495015300635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0412032e2c0f6d%3A0xc0068ceb8bdc63b7!2sPalayamkottai%2C%20Tirunelveli%2C%20Tamil%20Nadu%20627002!3m2!1d8.7198949!2d77.7344288!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433365972!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tisayanvilai' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252527.9346074037!2d77.60061769091722!3d8.523734503043384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b047fad49484d99%3A0x8d288f5364663387!2sTisayanvilai%2C%20Tamil%20Nadu%20627657!3m2!1d8.3311549!2d77.88289809999999!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433396481!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirunelveli' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31549.61370652335!2d77.72306069198645!3d8.719848745084489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0411625053c519%3A0xad791b361b359a4d!2sTirunelveli%2C%20Tamil%20Nadu!3m2!1d8.715017999999999!2d77.76562799999999!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433424130!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Radhapuram' && $_SESSION['station']=='PPHC+MM')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252545.91798707907!2d77.50353138948839!3d8.49646691091506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0489bb61c4ad57%3A0xddce4c604a98c7b3!2sRadhapuram%2C%20Tamil%20Nadu!3m2!1d8.263990699999999!2d77.6847202!4m5!1s0x3b0411625053c519%3A0xb96eb53534e9a897!2sPPHC%2BMM%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7291875!2d77.7216875!5e0!3m2!1sen!2sin!4v1744433450858!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

    //QM3R+FP2, Tirunelveli

    if($_SESSION['taluk'] =='Ambasamudram' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d126202.9611364771!2d77.50320538418514!3d8.70649933375544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04395f1baf33f9%3A0x85c499464a1eaecf!2sAmbasamudram%2C%20Tamil%20Nadu!3m2!1d8.7035955!2d77.4485388!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433489872!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheranmahadevi' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63101.479446715646!2d77.60305729668582!3d8.706505983565533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0415868994ab3f%3A0x9e696c44e0a93e94!2sCheranmahadevi%2C%20Tamil%20Nadu!3m2!1d8.674728499999999!2d77.5658381!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433518858!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Manur' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63084.890810677556!2d77.63077324699871!3d8.804319259449388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b04197dd9b13d3d%3A0xebdbc600e137bbdc!2sManur%2C%20Tamil%20Nadu%20627201!3m2!1d8.855005499999999!2d77.6521807!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433546195!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nanguneri' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252460.7395879971!2d77.5219114962558!3d8.624862853251335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b046f34026db1e5%3A0xbd66f3b312fdbc3d!2sNanguneri%2C%20Tamil%20Nadu!3m2!1d8.4961056!2d77.6464534!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433573018!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Palayamkottai' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31548.18526971888!2d77.6925322919998!3d8.736745944042694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0412032e2c0f6d%3A0xc0068ceb8bdc63b7!2sPalayamkottai%2C%20Tirunelveli%2C%20Tamil%20Nadu%20627002!3m2!1d8.7198949!2d77.7344288!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433748602!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tisayanvilai' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d252514.60027929815!2d77.59101074197662!3d8.543897123299512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b047e50930e95e5%3A0x1d70ec9eff576a24!2sThisayanvilai%2C%20Tamil%20Nadu%20627657!3m2!1d8.3343425!2d77.86348439999999!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433816532!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirunelveli' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63095.678087369735!2d77.68749949679521!3d8.740836625098254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0411625053c519%3A0xad791b361b359a4d!2sTirunelveli%2C%20Tamil%20Nadu!3m2!1d8.715017999999999!2d77.76562799999999!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433844382!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Radhapuram' && $_SESSION['station']=='QM3R+FP2,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d505075.82744741556!2d77.33867878672922!3d8.508614217407434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b0489bb61c4ad57%3A0xddce4c604a98c7b3!2sRadhapuram%2C%20Tamil%20Nadu!3m2!1d8.263990699999999!2d77.6847202!4m5!1s0x3b0411625053c519%3A0x55ebf2734f308e9d!2sQM3R%2BFP2%2C%20Tirunelveli%2C%20Tamil%20Nadu!3m2!1d8.7536375!2d77.6917656!5e0!3m2!1sen!2sin!4v1744433874794!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Tirupathur District station
//JHXM+G84, Vaniyambadi
if($_SESSION['taluk'] =='Ambur' && $_SESSION['station']=='JHXM+G84,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124546.85416119512!2d78.56182669775625!3d12.70760128464382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad08e1a0958fdf%3A0x61389b9026ec19f5!2sAmbur%2C%20Tamil%20Nadu!3m2!1d12.7801672!2d78.71772709999999!4m5!1s0x3bada9a399f60b0d%3A0x1499b226439199e!2sJHXM%2BG84%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.6487625!2d78.5833281!5e0!3m2!1sen!2sin!4v1744434502002!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Natrampalli' && $_SESSION['station']=='JHXM+G84,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d95411.4179923166!2d78.52008532139611!3d12.611175981319887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badad049f404e7d%3A0xb93a4dcadf623ff8!2sNatrampalli%2C%20Tamil%20Nadu!3m2!1d12.5915819!2d78.5125455!4m5!1s0x3bada9a399f60b0d%3A0x1499b226439199e!2sJHXM%2BG84%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.6487625!2d78.5833281!5e0!3m2!1sen!2sin!4v1744434440846!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='JHXM+G84,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d243297.7802871375!2d78.51291477717263!3d12.52401420498992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac540dd5ac6613%3A0x6f3185b3090fa58!2sTirupathur%2C%20Tamil%20Nadu!3m2!1d12.4950124!2d78.56784069999999!4m5!1s0x3bada9a399f60b0d%3A0x1499b226439199e!2sJHXM%2BG84%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.6487625!2d78.5833281!5e0!3m2!1sen!2sin!4v1744434407589!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vaniyambadi' && $_SESSION['station']=='JHXM+G84,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d51922.86717798995!2d78.5780089470041!3d12.662898435405491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bada9a399f60b0d%3A0x8ace6dc0bad6c5cc!2sVaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.682479599999999!2d78.61673739999999!4m5!1s0x3bada9a399f60b0d%3A0x1499b226439199e!2sJHXM%2BG84%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.6487625!2d78.5833281!5e0!3m2!1sen!2sin!4v1744434366014!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//PJ3V+G9 Vaniyambadi
if($_SESSION['taluk'] =='Ambur' && $_SESSION['station']=='PJ3V+G9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62267.217053031!2d78.63175721242247!3d12.732914265432775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad08e1a0958fdf%3A0x61389b9026ec19f5!2sAmbur%2C%20Tamil%20Nadu!3m2!1d12.7801672!2d78.71772709999999!4m5!1s0x3bada9a399f60b0d%3A0x1d77b08f2d307bbf!2sPJ3V%2BG9%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.7038125!2d78.64343749999999!5e0!3m2!1sen!2sin!4v1744434552279!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Natrampalli' && $_SESSION['station']=='PJ3V+G9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d134450.820348638!2d78.50811156137478!3d12.638745110836748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badad049f404e7d%3A0xb93a4dcadf623ff8!2sNatrampalli%2C%20Tamil%20Nadu!3m2!1d12.5915819!2d78.5125455!4m5!1s0x3bada9a399f60b0d%3A0x1d77b08f2d307bbf!2sPJ3V%2BG9%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.7038125!2d78.64343749999999!5e0!3m2!1sen!2sin!4v1744434589449!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='PJ3V+G9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124599.48902219493!2d78.52458859573623!3d12.599772485456503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac540dd5ac6613%3A0x6f3185b3090fa58!2sTirupathur%2C%20Tamil%20Nadu!3m2!1d12.4950124!2d78.56784069999999!4m5!1s0x3bada9a399f60b0d%3A0x1d77b08f2d307bbf!2sPJ3V%2BG9%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.7038125!2d78.64343749999999!5e0!3m2!1sen!2sin!4v1744434622937!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vaniyambadi' && $_SESSION['station']=='PJ3V+G9')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15569.403540408866!2d78.62113929519664!3d12.690506101591843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bada9a399f60b0d%3A0x8ace6dc0bad6c5cc!2sVaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.682479599999999!2d78.61673739999999!4m5!1s0x3bada9a399f60b0d%3A0x1d77b08f2d307bbf!2sPJ3V%2BG9%2C%20Vaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.7038125!2d78.64343749999999!5e0!3m2!1sen!2sin!4v1744434660214!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//WW2M+V8 Pallikonda
if($_SESSION['taluk'] =='Ambur' && $_SESSION['station']=='WW2M+V8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248924.4149771744!2d78.76655252707872!3d12.879147792540207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad08e1a0958fdf%3A0x61389b9026ec19f5!2sAmbur%2C%20Tamil%20Nadu!3m2!1d12.7801672!2d78.71772709999999!4m5!1s0x3bad14909960f425%3A0x9b52cd2d9c4e7f50!2sWW2M%2BV8%2C%20SVM%20Nagar%2C%20Pallikonda%2C%20Tamil%20Nadu%20635809!3m2!1d12.9021875!2d78.9333125!5e0!3m2!1sen!2sin!4v1744434711822!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Natrampalli' && $_SESSION['station']=='WW2M+V8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249055.19759208156!2d78.55811436669788!3d12.746824036140294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3badad049f404e7d%3A0xb93a4dcadf623ff8!2sNatrampalli%2C%20Tamil%20Nadu!3m2!1d12.5915819!2d78.5125455!4m5!1s0x3bad14909960f425%3A0x9b52cd2d9c4e7f50!2sWW2M%2BV8%2C%20SVM%20Nagar%2C%20Pallikonda%2C%20Tamil%20Nadu%20635809!3m2!1d12.9021875!2d78.9333125!5e0!3m2!1sen!2sin!4v1744434740294!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tirupathur' && $_SESSION['station']=='WW2M+V8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d498130.8562273735!2d78.52367631321103!3d12.736415950896891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac540dd5ac6613%3A0x6f3185b3090fa58!2sTirupathur%2C%20Tamil%20Nadu!3m2!1d12.4950124!2d78.56784069999999!4m5!1s0x3bad14909960f425%3A0x9b52cd2d9c4e7f50!2sWW2M%2BV8%2C%20SVM%20Nagar%2C%20Pallikonda%2C%20Tamil%20Nadu%20635809!3m2!1d12.9021875!2d78.9333125!5e0!3m2!1sen!2sin!4v1744434773364!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vaniyambadi' && $_SESSION['station']=='WW2M+V8')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248974.5022794978!2d78.71606472310307!3d12.828628830859211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bada9a399f60b0d%3A0x8ace6dc0bad6c5cc!2sVaniyambadi%2C%20Tamil%20Nadu!3m2!1d12.682479599999999!2d78.61673739999999!4m5!1s0x3bad14909960f425%3A0x9b52cd2d9c4e7f50!2sWW2M%2BV8%2C%20SVM%20Nagar%2C%20Pallikonda%2C%20Tamil%20Nadu%20635809!3m2!1d12.9021875!2d78.9333125!5e0!3m2!1sen!2sin!4v1744434803219!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Tiruppur District station
    //5883+VJ Avinashi
    if($_SESSION['taluk'] =='Avinashi' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d47296.617125968856!2d77.24923263108525!3d11.183319567348194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba903729a2d8461%3A0x1c3320dc2f44e3b3!2sAvinashi%2C%20Tamil%20Nadu!3m2!1d11.1729571!2d77.2686033!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435694456!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Dharapuram' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250699.1875043073!2d77.25011448617529!3d10.950164641445456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9bf8dce0d08cb%3A0x2a6c8d1c21a80cad!2sDharapuram%2C%20Tamil%20Nadu!3m2!1d10.7369152!2d77.5257693!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435725791!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kangeyam' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125281.06991588863!2d77.34066696957628!3d11.110886095109272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba99f585df32af3%3A0x890a9d4c243ef9e8!2sKangeyam%2C%20Tamil%20Nadu%20638701!3m2!1d11.005323299999999!2d77.5608695!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435757216!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madathukulam' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501532.4312664673!2d76.97859068723692!3d10.870703443872326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cfc7dc3be917%3A0x3c86bec60094d728!2sMadathukulam%2C%20Tamil%20Nadu%20642113!3m2!1d10.559083099999999!2d77.36236989999999!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435794714!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Palladam' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125290.41001944963!2d77.20447396921773!3d11.08911446595614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a95673dd8dfb%3A0x6effc31a8745d016!2sPalladam%2C%20Tamil%20Nadu!3m2!1d10.995576699999999!2d77.2852097!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435824119!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(North)' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31317.06839902803!2d77.30184229416058!3d11.140645897974299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9066ffcdf56b5%3A0x177c45c3ff2dc4f9!2sTiruppur%20North%2C%20Tamil%20Nadu!3m2!1d11.1221824!2d77.3405384!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435861634!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(South)' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62636.181211760195!2d77.28175610546317!3d11.131145244090275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a88447bd2889%3A0xa24d0114ab115d58!2sTiruppur%20South%2C%20Tamil%20Nadu!3m2!1d11.0989918!2d77.3414353!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435890150!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udumalaipettai' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501510.24084348214!2d76.91229664099588!3d10.883896291047758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cc53593a4a43%3A0x2a25be82b1f743e9!2sUdumalaipettai%2C%20Tamil%20Nadu!3m2!1d10.585477899999999!2d77.2513453!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435928619!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
 if($_SESSION['taluk'] =='Uthukuli' && $_SESSION['station']=='5883+VJ')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250476.1344115838!2d77.35496970388763!3d11.210586093618282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9092d2c1730e7%3A0x2686a648f8c3f9fa!2sUthukuli%2C%20Tamil%20Nadu%20638002!3m2!1d11.292774!2d77.75025889999999!4m5!1s0x3ba903729a2d8461%3A0x7bbf15ead1bc0db3!2s5883%2BVJ%2C%20Avinashi%2C%20Tamil%20Nadu!3m2!1d11.167187499999999!2d77.3040625!5e0!3m2!1sen!2sin!4v1744435963596!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //X7VV+MH Palladam
    if($_SESSION['taluk'] =='Avinashi' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125292.01721153145!2d77.1531678191561!3d11.085363869548086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba903729a2d8461%3A0x1c3320dc2f44e3b3!2sAvinashi%2C%20Tamil%20Nadu!3m2!1d11.1729571!2d77.2686033!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436276617!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Dharapuram' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250770.37648920194!2d77.24390098052204!3d10.86575186566839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9bf8dce0d08cb%3A0x2a6c8d1c21a80cad!2sDharapuram%2C%20Tamil%20Nadu!3m2!1d10.7369152!2d77.5257693!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436310297!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kangeyam' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125334.19477047476!2d77.34038231753706!3d10.986484964313282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba99f585df32af3%3A0x890a9d4c243ef9e8!2sKangeyam%2C%20Tamil%20Nadu%20638701!3m2!1d11.005323299999999!2d77.5608695!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436336157!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madathukulam' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250844.56855987525!2d77.1434428246302!3d10.777083106648561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cfc7dc3be917%3A0x3c86bec60094d728!2sMadathukulam%2C%20Tamil%20Nadu%20642113!3m2!1d10.559083099999999!2d77.36236989999999!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436364467!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Palladam' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3916.582467940168!2d77.28699777480824!3d10.994854889167494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a95673dd8dfb%3A0x6effc31a8745d016!2sPalladam%2C%20Tamil%20Nadu!3m2!1d10.995576699999999!2d77.2852097!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436392290!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(North)' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250608.09719263355!2d76.9857883434088!3d11.057247130702672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9066ffcdf56b5%3A0x177c45c3ff2dc4f9!2sTiruppur%20North%2C%20Tamil%20Nadu!3m2!1d11.1221824!2d77.3405384!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436427303!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(South)' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62654.339972430775!2d77.27794560512059!3d11.046405064377614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a88447bd2889%3A0xa24d0114ab115d58!2sTiruppur%20South%2C%20Tamil%20Nadu!3m2!1d11.0989918!2d77.3414353!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436456113!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udumalaipettai' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250833.5675821461!2d77.10462692550382!3d10.790276105887726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cc53593a4a43%3A0x2a25be82b1f743e9!2sUdumalaipettai%2C%20Tamil%20Nadu!3m2!1d10.585477899999999!2d77.2513453!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436530048!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

 if($_SESSION['taluk'] =='Uthukuli' && $_SESSION['station']=='X7VV+MH')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250538.36342752102!2d77.3581538489462!3d11.13853651931207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9092d2c1730e7%3A0x2686a648f8c3f9fa!2sUthukuli%2C%20Tamil%20Nadu%20638002!3m2!1d11.292774!2d77.75025889999999!4m5!1s0x3ba9a95673dd8dfb%3A0xb617ce4fe64e0428!2sX7VV%2BMH%2C%20Palladam%2C%20Tamil%20Nadu!3m2!1d10.994187499999999!2d77.2939375!5e0!3m2!1sen!2sin!4v1744436563931!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //694V+36 Tiruppur
    if($_SESSION['taluk'] =='Avinashi' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62622.456088264706!2d77.2759141057221!3d11.194774978873056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba903729a2d8461%3A0x1c3320dc2f44e3b3!2sAvinashi%2C%20Tamil%20Nadu!3m2!1d11.1729571!2d77.2686033!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436609616!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Dharapuram' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501362.92874632677!2d77.14244186594962!3d10.971080201637143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9bf8dce0d08cb%3A0x2a6c8d1c21a80cad!2sDharapuram%2C%20Tamil%20Nadu!3m2!1d10.7369152!2d77.5257693!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436646583!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kangeyam' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125283.40360640304!2d77.3879819694867!3d11.105450250313616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba99f585df32af3%3A0x890a9d4c243ef9e8!2sKangeyam%2C%20Tamil%20Nadu%20638701!3m2!1d11.005323299999999!2d77.5608695!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436675081!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Madathukulam' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501513.15352677694!2d77.13367819050248!3d10.882165517654228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cfc7dc3be917%3A0x3c86bec60094d728!2sMadathukulam%2C%20Tamil%20Nadu%20642113!3m2!1d10.559083099999999!2d77.36236989999999!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436706283!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Palladam' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125283.45652783079!2d77.24610691948467!3d11.105326950431671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a95673dd8dfb%3A0x6effc31a8745d016!2sPalladam%2C%20Tamil%20Nadu!3m2!1d10.995576699999999!2d77.2852097!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436943452!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(North)' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62628.828421778024!2d77.32559880560186!3d11.165277335925765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9066ffcdf56b5%3A0x177c45c3ff2dc4f9!2sTiruppur%20North%2C%20Tamil%20Nadu!3m2!1d11.1221824!2d77.3405384!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436973463!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruppur(South)' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62631.32879215751!2d77.34860640555468!3d11.153682038698964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9a88447bd2889%3A0xa24d0114ab115d58!2sTiruppur%20South%2C%20Tamil%20Nadu!3m2!1d11.0989918!2d77.3414353!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744436999665!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Udumalaipettai' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d501481.6578169189!2d76.95537219583771!3d10.900866480205817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9cc53593a4a43%3A0x2a25be82b1f743e9!2sUdumalaipettai%2C%20Tamil%20Nadu!3m2!1d10.585477899999999!2d77.2513453!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744437030998!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

 if($_SESSION['taluk'] =='Uthukuli' && $_SESSION['station']=='694V+36')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250436.66208451017!2d77.40727365702199!3d11.256051669793782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ba9092d2c1730e7%3A0x2686a648f8c3f9fa!2sUthukuli%2C%20Tamil%20Nadu%20638002!3m2!1d11.292774!2d77.75025889999999!4m5!1s0x3ba907b0424d75b9%3A0xe9306b67fda2e775!2s694V%2B36%2C%20Tiruppur%2C%20Tamil%20Nadu!3m2!1d11.2051875!2d77.3930625!5e0!3m2!1sen!2sin!4v1744437058444!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Tiruvallur District station
//5V4R+H7 Pullarambakkam
if($_SESSION['taluk'] =='Avadi' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d267384.85148999275!2d79.98438941641177!3d13.186255643472057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5289d19bef6d25%3A0xe575e8ba16808e64!2sAvadi!3m2!1d13.1067448!2d80.0969511!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446625000!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gummidipoondi' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248516.14868133853!2d79.84971640948258!3d13.283889689620802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d81cfa1adae09%3A0xeca1060d7fe1fe9f!2sGummidipoondi%2C%20Tamil%20Nadu%20601201!3m2!1d13.410955699999999!2d80.11697079999999!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446658544!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pallipattu' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248535.75499059993!2d79.50147600792653!3d13.264730010529764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d5591eea67fc1%3A0xb455242295398435!2sPallipattu%2C%20Tamil%20Nadu!3m2!1d13.337147799999999!2d79.4396687!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446686413!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponneri' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124278.46620297077!2d79.9584503580558!3d13.244004435848197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5278b41bef343b%3A0x4a9ea1928f03b9a!2sPonneri%2C%20Tamil%20Nadu!3m2!1d13.3340027!2d80.1943795!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446714158!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Poonamallee' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124351.10076142033!2d79.91076245526844!3d13.100966768411618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5261c44a4ce607%3A0x749b23fde024eab0!2sPoonamallee%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0472609!2d80.09453069999999!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446742480!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='RamaKrishnaRajupettai' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248617.52997507126!2d79.50027940143633!3d13.184523007628336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52ada2e05be667%3A0xa2c9e86270ff1426!2sRamkrishna%20Rajapet%2C%20Tamil%20Nadu%20631303!3m2!1d13.1668191!2d79.4373332!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446768359!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruttani' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d204752.2426274447!2d79.66587978768652!3d13.19278309792188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52a4e88096e81b%3A0x3f117fe0519ba508!2sThiruttani%2C%20Tamil%20Nadu!3m2!1d13.174641099999999!2d79.611721!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446796570!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvallur' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d106890.1402510366!2d79.79998195401602!3d13.09363408820349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52901710ff7ebb%3A0x38136c2ffb1168b4!2sTiruvallur%2C%20Tamil%20Nadu%20602003!3m2!1d13.1226901!2d79.91176899999999!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446834089!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   if($_SESSION['taluk'] =='Uthukkottai' && $_SESSION['station']=='5V4R+H7')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124277.88185095735!2d79.81086710807817!3d13.245149034788737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a529d5c53da715f%3A0x237bde7764b05e99!2sUthukkottai%2C%20Tamil%20Nadu!3m2!1d13.3338653!2d79.891724!4m5!1s0x3a529a973fe3dbf3%3A0x8a1be6d800a1c38a!2s5V4R%2BH7%2C%20Pullarambakkam%2C%20Tamil%20Nadu!3m2!1d13.1564375!2d79.8906875!5e0!3m2!1sen!2sin!4v1744446868541!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//5JH6+MP Thiruttani
if($_SESSION['taluk'] =='Avadi' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248661.76575603444!2d79.68948684792544!3d13.140935019257919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5289d19bef6d25%3A0xe575e8ba16808e64!2sAvadi%2C%20Tamil%20Nadu!3m2!1d13.1067448!2d80.0969511!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744446952728!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gummidipoondi' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248532.89903317214!2d79.72731730815319!3d13.26752260019306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d81cfa1adae09%3A0xeca1060d7fe1fe9f!2sGummidipoondi%2C%20Tamil%20Nadu%20601201!3m2!1d13.410955699999999!2d80.11697079999999!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447002648!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pallipattu' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124277.56499564204!2d79.44820240809037!3d13.24576963421431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d5591eea67fc1%3A0xb455242295398435!2sPallipattu%2C%20Tamil%20Nadu!3m2!1d13.337147799999999!2d79.4396687!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447042594!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponneri' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d239699.58231572993!2d79.76657969439809!3d13.21850366060308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5278b41bef343b%3A0x4a9ea1928f03b9a!2sPonneri%2C%20Tamil%20Nadu!3m2!1d13.3340027!2d80.1943795!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447094348!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Poonamallee' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248673.10168786524!2d79.68896459702574!3d13.129742210781842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5261c44a4ce607%3A0x749b23fde024eab0!2sPoonamallee%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0472609!2d80.09453069999999!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447136317!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='RamaKrishnaRajupettai' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124317.54799069137!2d79.44430485655602!3d13.167231206958796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52ada2e05be667%3A0xa2c9e86270ff1426!2sRamkrishna%20Rajapet%2C%20Tamil%20Nadu%20631303!3m2!1d13.1668191!2d79.4373332!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447184319!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruttani' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15539.547707184194!2d79.60284499533559!3d13.169528744627097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52a4e88096e81b%3A0x3f117fe0519ba508!2sThiruttani%2C%20Tamil%20Nadu!3m2!1d13.174641099999999!2d79.611721!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447208929!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvallur' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124326.75062872026!2d79.67928610620291!3d13.149089273776415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52901710ff7ebb%3A0x38136c2ffb1168b4!2sTiruvallur%2C%20Tamil%20Nadu%20602003!3m2!1d13.1226901!2d79.91176899999999!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447234649!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   if($_SESSION['taluk'] =='Uthukkottai' && $_SESSION['station']=='5JH6+MP')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248520.9647385854!2d79.58688715910033!3d13.27918585702725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a529d5c53da715f%3A0x237bde7764b05e99!2sUthukkottai%2C%20Tamil%20Nadu!3m2!1d13.3338653!2d79.891724!4m5!1s0x3a52a4e88096e81b%3A0x689c279abe84c1f2!2s5J56%2BMP%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1591875!2d79.6118125!5e0!3m2!1sen!2sin!4v1744447265734!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//5JH6+VQG, Thiruttani
if($_SESSION['taluk'] =='Avadi' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248655.55403140595!2d79.68880724841848!3d13.147064346522262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5289d19bef6d25%3A0xe575e8ba16808e64!2sAvadi%2C%20Tamil%20Nadu!3m2!1d13.1067448!2d80.0969511!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447350642!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gummidipoondi' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248532.89903317214!2d79.72427490815318!3d13.26752260019306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d81cfa1adae09%3A0xeca1060d7fe1fe9f!2sGummidipoondi%2C%20Tamil%20Nadu%20601201!3m2!1d13.410955699999999!2d80.11697079999999!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447376443!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pallipattu' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124272.07791240739!2d79.4434681083009!3d13.25651222427194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a4d5591eea67fc1%3A0xb455242295398435!2sPallipattu%2C%20Tamil%20Nadu!3m2!1d13.337147799999999!2d79.4396687!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447402866!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Ponneri' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d497182.3583147926!2d79.63401242372903!3d13.210420795885566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5278b41bef343b%3A0x4a9ea1928f03b9a!2sPonneri%2C%20Tamil%20Nadu!3m2!1d13.3340027!2d80.1943795!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447429056!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Poonamallee' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248673.10168786524!2d79.68592219702573!3d13.129742210781842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5261c44a4ce607%3A0x749b23fde024eab0!2sPoonamallee%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0472609!2d80.09453069999999!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447457883!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='RamaKrishnaRajupettai' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124314.56520726305!2d79.4422715066705!3d13.173106151513837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52ada2e05be667%3A0xa2c9e86270ff1426!2sRamkrishna%20Rajapet%2C%20Tamil%20Nadu%20631303!3m2!1d13.1668191!2d79.4373332!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447484191!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruttani' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3884.7658611574107!2d79.6093389748451!3d13.177157437157444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52a4e88096e81b%3A0x3f117fe0519ba508!2sThiruttani%2C%20Tamil%20Nadu!3m2!1d13.174641099999999!2d79.611721!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447506935!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvallur' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124327.75705686623!2d79.67680260616422!3d13.147103725617347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52901710ff7ebb%3A0x38136c2ffb1168b4!2sTiruvallur%2C%20Tamil%20Nadu%20602003!3m2!1d13.1226901!2d79.91176899999999!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447531399!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   if($_SESSION['taluk'] =='Uthukkottai' && $_SESSION['station']=='5JH6+VQG,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124255.07395430197!2d79.66625620895347!3d13.28974834352336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a529d5c53da715f%3A0x237bde7764b05e99!2sUthukkottai%2C%20Tamil%20Nadu!3m2!1d13.3338653!2d79.891724!4m5!1s0x3a52a4e88096e81b%3A0xdbd8defe7e961520!2s5JH6%2BVQG%2C%20Thiruttani%2C%20Tamil%20Nadu!3m2!1d13.1796875!2d79.6119531!5e0!3m2!1sen!2sin!4v1744447558474!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
//Thiruvannamalai District Station
//63PQ+4VQ, Tiruvannamalai
if($_SESSION['taluk'] =='Aarani' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d475896.31250008015!2d78.94221945999648!3d12.447949857687622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad2958f904290b%3A0x9b9e74218314f1a4!2sArani%2C%20Tamil%20Nadu!3m2!1d12.6680884!2d79.2847091!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447616899!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chengam' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124754.31245444108!2d78.86426508979436!3d12.277199038102376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacf1786f42c2bb%3A0x6acd1c2400e1e700!2sChengam%2C%20Tamil%20Nadu!3m2!1d12.311138399999999!2d78.7929545!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447642078!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chetpet' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d498288.69720847736!2d79.34491698649533!3d12.655842755742842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52667c6c4f2c3f%3A0x11a4d0895c197c9c!2sChetpet%2C%20Chennai%2C%20Tamil%20Nadu%20600031!3m2!1d13.071373!2d80.2416576!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447666835!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Jamunamarathur' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249376.37365449718!2d78.84293809120294!3d12.415980475008157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad1d9f7c911eb7%3A0x428c41c6566e72c5!2sJamunamarathur%2C%20Tamil%20Nadu%20635703!3m2!1d12.5971218!2d78.8877997!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447694462!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Kalasapakkam' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d303943.7851111844!2d78.98230159016103!3d12.329121485929312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacdc84c8dfaa2d%3A0x49e93839930f292a!2sKalasapakkam%2C%20Tamil%20Nadu%20606751!3m2!1d12.4343907!2d79.10474909999999!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447724798!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilpennathur' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62385.441632987764!2d79.11454986019262!3d12.242178280439136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc8473cec9ca1%3A0x8cf11aaa0f192023!2sKil%20Pennathur%2C%20Tindivanam%20Road%2C%20Tamil%20Nadu%20604601!3m2!1d12.247677699999999!2d79.2216753!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447749091!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Polur' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249417.6068816482!2d78.93477403792969!3d12.3728756869096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacd9466eec7883%3A0x41afb2879fb77b77!2sPolur%2C%20Tamil%20Nadu%20606803!3m2!1d12.5106863!2d79.12684999999999!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447772559!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thandarampattu' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62396.525463478436!2d78.98280290998358!3d12.195174291502576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9468e3302cb1%3A0x7f997625669cb121!2sThandarampattu%2C%20Tamil%20Nadu%20606707!3m2!1d12.1539538!2d78.9474114!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447800027!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Tiruvannamalai' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7798.524246244326!2d79.07699669061893!3d12.230522852083352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc0852cd3d6cd%3A0x74002b16e5bac856!2sTiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2252841!2d79.07469569999999!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447826879!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vandavasi' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249420.86985047397!2d79.17988763767073!3d12.369458299750091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53242d29a5ea3f%3A0x6da6e782783e0381!2sVandavasi%2C%20Tamil%20Nadu%20604408!3m2!1d12.5024906!2d79.6026844!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447850191!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheyyar' && $_SESSION['station']=='63PQ+4VQ,')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249345.36039431766!2d79.15026959366487!3d12.448304603672753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52d76570ca83f1%3A0x4a607a60b20bcff4!2sCheyyar%2C%20Tamil%20Nadu%20604407!3m2!1d12.661825799999999!2d79.54346799999999!4m5!1s0x3bacc0852cd3d6cd%3A0x436ea9430fe2713!2s63PQ%2B4VQ%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2353375!2d79.0897344!5e0!3m2!1sen!2sin!4v1744447874436!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   

//62GQ+66 Tiruvannamalai
if($_SESSION['taluk'] =='Aarani' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d510643.03325500083!2d78.99779330194723!3d12.596745608181516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad2958f904290b%3A0x9b9e74218314f1a4!2sAarani!3m2!1d12.6680884!2d79.2847091!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477511143!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chengam' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124758.5118264094!2d78.83333523963319!3d12.268333396442552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacf1786f42c2bb%3A0x6acd1c2400e1e700!2sChengam%2C%20Tamil%20Nadu!3m2!1d12.311138399999999!2d78.7929545!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477557979!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chetpet' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d250982.81047635758!2d79.02977841682676!3d12.342211803383162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacd31b2721c4ed%3A0xe47053ebb4b08cb8!2sChepet%2C%20Tamil%20Nadu%20606801!3m2!1d12.4619597!2d79.352188!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477602998!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Jamunamarathur' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d303835.72466464114!2d78.81054447984084!3d12.421981396054653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad1d9f7c911eb7%3A0x428c41c6566e72c5!2sJamunamarathur%2C%20Tamil%20Nadu%20635703!3m2!1d12.5971218!2d78.8877997!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477649271!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Kalasapakkam' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d186130.12012591996!2d78.95941856423947!3d12.327839247235024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacdc84c8dfaa2d%3A0x49e93839930f292a!2sKalasapakkam%2C%20Tamil%20Nadu%20606751!3m2!1d12.4343907!2d79.10474909999999!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477690334!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilpennathur' && $_SESSION['station']=='')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d153082.51424432648!2d79.03436093190165!3d12.236986378306502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc8473cec9ca1%3A0x8cf11aaa0f192023!2sKil%20Pennathur%2C%20Tindivanam%20Road%2C%20Tamil%20Nadu%20604601!3m2!1d12.247677699999999!2d79.2216753!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477718802!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Polur' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d367279.8173563228!2d78.85519449457357!3d12.327427074982495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacd9466eec7883%3A0x41afb2879fb77b77!2sPolur%2C%20Tamil%20Nadu%20606803!3m2!1d12.5106863!2d79.12684999999999!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477749164!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thandarampattu' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d67927.828082736!2d78.95542074994108!3d12.188362394667058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9468e3302cb1%3A0x7f997625669cb121!2sThandarampattu%2C%20Tamil%20Nadu%20606707!3m2!1d12.1539538!2d78.9474114!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477783035!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Tiruvannamalai' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15597.313961547072!2d79.0459266450667!3d12.22602315839819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc0852cd3d6cd%3A0x74002b16e5bac856!2sTiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2252841!2d79.07469569999999!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477812366!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vandavasi' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d329148.259012718!2d79.13962275425673!3d12.341282546847538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53242d29a5ea3f%3A0x6da6e782783e0381!2sVandavasi%2C%20Tamil%20Nadu%20604408!3m2!1d12.5024906!2d79.6026844!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477851208!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheyyar' && $_SESSION['station']=='62GQ+66')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d352655.9423590673!2d79.0325116298049!3d12.427418803541057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52d76570ca83f1%3A0x4a607a60b20bcff4!2sCheyyar%2C%20Tamil%20Nadu%20604407!3m2!1d12.661825799999999!2d79.54346799999999!4m5!1s0x3bacc0852cd3d6cd%3A0x955609d157ce1e89!2s62GQ%2B66%2C%20Tiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.225562499999999!2d79.0380625!5e0!3m2!1sen!2sin!4v1749477897203!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
//62JG+RX Athiyandal
if($_SESSION['taluk'] =='Aarani' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d383216.01604012586!2d78.99690948015193!3d12.44605118561554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad2958f904290b%3A0x9b9e74218314f1a4!2sArani%2C%20Tamil%20Nadu!3m2!1d12.6680884!2d79.2847091!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478008391!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chengam' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124757.12217928917!2d78.82846673968652!3d12.271267893681856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacf1786f42c2bb%3A0x6acd1c2400e1e700!2sChengam%2C%20Tamil%20Nadu!3m2!1d12.311138399999999!2d78.7929545!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478033887!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Chetpet' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249453.82480256734!2d79.02341438505458!3d12.3348915296711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacd31b2721c4ed%3A0xe47053ebb4b08cb8!2sChepet%2C%20Tamil%20Nadu%20606801!3m2!1d12.4619597!2d79.352188!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478080656!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Jamunamarathur' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d511803.03150895395!2d78.79017300431346!3d12.458488553282997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad1d9f7c911eb7%3A0x428c41c6566e72c5!2sJamunamarathur%2C%20Tamil%20Nadu%20635703!3m2!1d12.5971218!2d78.8877997!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478109561!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Kalasapakkam' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d205828.15750658713!2d78.93329784924053!3d12.304402868609076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacdc84c8dfaa2d%3A0x49e93839930f292a!2sKalasapakkam%2C%20Tamil%20Nadu%20606751!3m2!1d12.4343907!2d79.10474909999999!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478145529!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilpennathur' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124777.2537419102!2d79.0408341889138!3d12.22868863375195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc8473cec9ca1%3A0x8cf11aaa0f192023!2sKil%20Pennathur%2C%20Tindivanam%20Road%2C%20Tamil%20Nadu%20604601!3m2!1d12.247677699999999!2d79.2216753!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478176636!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Polur' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249419.73153089904!2d78.91208618776099!3d12.37065059527009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacd9466eec7883%3A0x41afb2879fb77b77!2sPolur%2C%20Tamil%20Nadu%20606803!3m2!1d12.5106863!2d79.12684999999999!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478203493!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thandarampattu' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d72425.61909753732!2d78.95631478717732!3d12.188848817446944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bac9468e3302cb1%3A0x7f997625669cb121!2sThandarampattu%2C%20Tamil%20Nadu%20606707!3m2!1d12.1539538!2d78.9474114!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478236078!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
if($_SESSION['taluk'] =='Tiruvannamalai' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d41089.60020364964!2d79.02698182599258!3d12.230468238313804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacc0852cd3d6cd%3A0x74002b16e5bac856!2sTiruvannamalai%2C%20Tamil%20Nadu!3m2!1d12.2252841!2d79.07469569999999!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478516714!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vandavasi' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d408716.3306084156!2d79.11207454529546!3d12.366258402716142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53242d29a5ea3f%3A0x6da6e782783e0381!2sVandavasi%2C%20Tamil%20Nadu%20604408!3m2!1d12.5024906!2d79.6026844!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478545995!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Cheyyar' && $_SESSION['station']=='62JG+RX')
    {
    echo '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d352068.955908509!2d79.06137788228797!3d12.409973655196286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52d76570ca83f1%3A0x4a607a60b20bcff4!2sCheyyar%2C%20Tamil%20Nadu%20604407!3m2!1d12.661825799999999!2d79.54346799999999!4m5!1s0x3bacc004c016f74b%3A0xd856c0ee40e88e0c!2s62JG%2BRX%2C%20Athiyandal%2C%20Tamil%20Nadu!3m2!1d12.2320625!2d79.02743749999999!5e0!3m2!1sen!2sin!4v1749478572721!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   //Tiruvarur District station
   //QJ8Q+RJ Thiruvarur
   if($_SESSION['taluk'] =='Koothanallur' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d76549.83304694583!2d79.53445695701382!3d10.739958193107624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554f2c8815604b%3A0x2182a72cbdacbc0!2sKoothanallur%2C%20Tamil%20Nadu!3m2!1d10.7098028!2d79.51929779999999!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479658888!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kudavasal' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d238805.73011845417!2d79.46233082685417!3d10.818615731022907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a55369a4134adad%3A0x84caebabca1674ec!2sKudavasal%2C%20Tamil%20Nadu%20612601!3m2!1d10.85583!2d79.4804201!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479709988!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mannargudi' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125446.45616084295!2d79.46193331322783!3d10.718916321409129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554c33a1439753%3A0x843b50ed6a3c7496!2sMannargudi%2C%20Tamil%20Nadu!3m2!1d10.6631615!2d79.4481754!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479746979!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nannilam' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d78543.8933974415!2d79.58102809566199!3d10.82343957730272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a553971536ef2bb%3A0x675e209dc87a72e3!2sNannilam%2C%20Tamil%20Nadu%20610105!3m2!1d10.8791405!2d79.61252809999999!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479780251!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Needamangalam' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d167515.4099788935!2d79.42588004357766!3d10.77705025899345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554aee39b59b39%3A0xd4b9deff93078c7f!2sNeedamangalam%2C%20Tamil%20Nadu!3m2!1d10.7713257!2d79.414322!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479807778!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruthiraipoondi' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d284857.2221307064!2d79.59606984521277!3d10.5779614747253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a555959f53fed43%3A0x706d035a5b1455b7!2sThruthuraipoondi%2C%20Tamil%20Nadu%20614713!3m2!1d10.5488795!2d79.639015!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479843730!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvarur' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2438.002625627775!2d79.63527596989395!3d10.766676752023645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5547319a7b4087%3A0x1eef1e257dd55299!2sThiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7661312!2d79.6343691!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479886355!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Valangaiman' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d207893.71455545514!2d79.49585218592529!3d10.75815989644336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a553357e08e8a4b%3A0xc94cb3e59d6befd3!2sValangaiman%2C%20Tamil%20Nadu!3m2!1d10.8887019!2d79.393221!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479930075!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Muthupet' && $_SESSION['station']=='QJ8Q+RJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d508909.2520629655!2d79.33191113113924!3d10.497742727707895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3afff91f2215795d%3A0x8a13bc88c1016408!2sMuthupet%2C%20Tamil%20Nadu!3m2!1d10.395699299999999!2d79.4949884!4m5!1s0x3a5547319a7b4087%3A0x7258fcc32a927996!2sQJ8Q%2BRJ%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7670625!2d79.6390625!5e0!3m2!1sen!2sin!4v1749479963638!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
   
   //QJ6V+66W, Thiruvarur
   if($_SESSION['taluk'] =='Koothanallur' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d85230.6964998112!2d79.54762882068832!3d10.745467504364061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554f2c8815604b%3A0x2182a72cbdacbc0!2sKoothanallur%2C%20Tamil%20Nadu!3m2!1d10.7098028!2d79.51929779999999!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480022618!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kudavasal' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d219545.85406709742!2d79.49419827572409!3d10.729256665403632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a55369a4134adad%3A0x84caebabca1674ec!2sKudavasal%2C%20Tamil%20Nadu%20612601!3m2!1d10.85583!2d79.4804201!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480054671!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Mannargudi' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d165238.52044866432!2d79.44144261586452!3d10.723456850093397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554c33a1439753%3A0x843b50ed6a3c7496!2sMannargudi%2C%20Tamil%20Nadu!3m2!1d10.6631615!2d79.4481754!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480088359!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Nannilam' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d173994.2523216438!2d79.54010598511047!3d10.829937097029177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a553971536ef2bb%3A0x675e209dc87a72e3!2sNannilam%2C%20Tamil%20Nadu%20610105!3m2!1d10.8791405!2d79.61252809999999!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480120206!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Needamangalam' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d164362.22121966546!2d79.44611335688076!3d10.759317476188667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a554aee39b59b39%3A0xd4b9deff93078c7f!2sNeedamangalam%2C%20Tamil%20Nadu!3m2!1d10.7713257!2d79.414322!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480157686!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruthiraipoondi' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d221519.89796620086!2d79.52150427324855!3d10.642150021802093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a555959f53fed43%3A0x706d035a5b1455b7!2sThruthuraipoondi%2C%20Tamil%20Nadu%20614713!3m2!1d10.5488795!2d79.639015!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480189428!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruvarur' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d13648.867518959876!2d79.63294437019206!3d10.764660537980186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5547319a7b4087%3A0x1eef1e257dd55299!2sThiruvarur%2C%20Tamil%20Nadu!3m2!1d10.7661312!2d79.6343691!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480247096!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Valangaiman' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d503265.64432715677!2d79.36292153985043!3d10.875420716855862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a553357e08e8a4b%3A0xc94cb3e59d6befd3!2sValangaiman%2C%20Tamil%20Nadu!3m2!1d10.8887019!2d79.393221!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480281282!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Muthupet' && $_SESSION['station']=='QJ6V+66W,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d308486.8658592961!2d79.39025921561989!3d10.584330283736023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3afff91f2215795d%3A0x8a13bc88c1016408!2sMuthupet%2C%20Tamil%20Nadu!3m2!1d10.395699299999999!2d79.4949884!4m5!1s0x3a5547319a7b4087%3A0x75dd8d7f87cfb5a2!2sQJ6V%2B66W%2C%20Thiruvarur%2C%20Tamil%20Nadu!3m2!1d10.760612499999999!2d79.6430781!5e0!3m2!1sen!2sin!4v1749480313484!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Vellore District station
    //X592+66 Vellore
    if($_SESSION['taluk'] =='Anaicut' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d135232.704585155!2d78.95998232017557!3d12.924847639529222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad15b3c160465b%3A0x956e6e0186cc1c32!2sAnaicut%2C%20Tamil%20Nadu!3m2!1d12.8801686!2d78.9882083!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481639426!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudiyatham' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124431.5074872202!2d78.92695780218278!3d12.940812417225164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6d361be288b5%3A0x88f9feef00e8cd73!2sGudiyatham%2C%20Tamil%20Nadu!3m2!1d12.9427995!2d78.86816139999999!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481673124!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pernampattu' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248863.05370275868!2d78.76997273194917!3d12.940773613035274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad74cf54486569%3A0x7ea8cac31ac7c380!2sPernambut%2C%20Tamil%20Nadu%20635810!3m2!1d12.9392559!2d78.71902039999999!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481703323!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Katpadi' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7776.0641321537805!2d79.13854749067099!3d12.969799949381427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad47105840b1a7%3A0x12ee1fcb23de3412!2sKatpadi%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9734246!2d79.1369301!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481731523!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilvaithinankuppam' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d89515.20629241178!2d79.02156101787071!3d12.96621095417981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6adc9341f8ff%3A0x3f242c1794d3018d!2sKilvaithinankuppam%2C%20Tamil%20Nadu%20632201!3m2!1d12.959581499999999!2d78.9934949!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481761093!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vellore' && $_SESSION['station']=='X592+66')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d33629.13679115166!2d79.12955939410739!3d12.952629975397926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad38e61fa68ffb%3A0xbedda6917d262b5e!2sVellore%2C%20Tamil%20Nadu!3m2!1d12.923554099999999!2d79.1330768!4m5!1s0x3bad38e61fa68ffb%3A0x47d80f9e27a33758!2sX592%2B66%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9680625!2d79.15056249999999!5e0!3m2!1sen!2sin!4v1749481805075!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //V4RQ+WV Vellore
    if($_SESSION['taluk'] =='Anaicut' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d272237.381116834!2d78.8244404829998!3d13.024622752831426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad15b3c160465b%3A0x956e6e0186cc1c32!2sAnaicut%2C%20Tamil%20Nadu!3m2!1d12.8801686!2d78.9882083!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749481857545!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudiyatham' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d143188.65774245307!2d78.91413453779427!3d12.929504840486366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6d361be288b5%3A0x88f9feef00e8cd73!2sGudiyatham%2C%20Tamil%20Nadu!3m2!1d12.9427995!2d78.86816139999999!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749481889597!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pernampattu' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248869.06032775404!2d78.7645993814724!3d12.93475383544341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad74cf54486569%3A0x7ea8cac31ac7c380!2sPernambut%2C%20Tamil%20Nadu%20635810!3m2!1d12.9392559!2d78.71902039999999!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749481922365!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Katpadi' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d107032.93926340391!2d79.1142239106064!3d12.905664312715855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad47105840b1a7%3A0x12ee1fcb23de3412!2sKatpadi%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9734246!2d79.1369301!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749481957999!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilvaithinankuppam' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d98486.5563382939!2d79.0292572954462!3d12.9154057415129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6adc9341f8ff%3A0x3f242c1794d3018d!2sKilvaithinankuppam%2C%20Tamil%20Nadu%20632201!3m2!1d12.959581499999999!2d78.9934949!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749481992983!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vellore' && $_SESSION['station']=='V4RQ+WV')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31111.95757553526!2d79.11492214607809!3d12.90806214367542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad38e61fa68ffb%3A0xbedda6917d262b5e!2sVellore%2C%20Tamil%20Nadu!3m2!1d12.923554099999999!2d79.1330768!4m5!1s0x3bad38e61fa68ffb%3A0x22d95fc8f5c053ca!2sV4RQ%2BWV%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.8923125!2d79.1396875!5e0!3m2!1sen!2sin!4v1749482024968!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //W4HM+M9 Vellore
    if($_SESSION['taluk'] =='Anaicut' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d83974.7478208666!2d79.0120189724112!3d12.910406535278613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad15b3c160465b%3A0x956e6e0186cc1c32!2sAnaicut%2C%20Tamil%20Nadu!3m2!1d12.8801686!2d78.9882083!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482368630!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudiyatham' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d193246.79898002234!2d78.9271209979944!3d12.924766846452787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6d361be288b5%3A0x88f9feef00e8cd73!2sGudiyatham%2C%20Tamil%20Nadu!3m2!1d12.9427995!2d78.86816139999999!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482396516!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pernampattu' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d340479.96898364206!2d78.79704146862902!3d12.909811726529412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad74cf54486569%3A0x7ea8cac31ac7c380!2sPernambut%2C%20Tamil%20Nadu%20635810!3m2!1d12.9392559!2d78.71902039999999!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482424129!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Katpadi' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d79982.38835670396!2d79.10673818276521!3d12.957651577444276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad47105840b1a7%3A0x12ee1fcb23de3412!2sKatpadi%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9734246!2d79.1369301!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482454716!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilvaithinankuppam' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d76198.30778297524!2d79.02108568943896!3d12.944430125580162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6adc9341f8ff%3A0x3f242c1794d3018d!2sKilvaithinankuppam%2C%20Tamil%20Nadu%20632201!3m2!1d12.959581499999999!2d78.9934949!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482483911!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vellore' && $_SESSION['station']=='W4HM+M9')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d5095.742194325172!2d79.13058407634455!3d12.926232821728357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad38e61fa68ffb%3A0xbedda6917d262b5e!2sVellore%2C%20Tamil%20Nadu!3m2!1d12.923554099999999!2d79.1330768!4m5!1s0x3bad38e61fa68ffb%3A0xfd5cc72b39ef6042!2sW4HM%2BM9%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9291875!2d79.1334375!5e0!3m2!1sen!2sin!4v1749482513221!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //W4XP+5M Vellore
    if($_SESSION['taluk'] =='Anaicut' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d127722.36072665013!2d78.95986637621428!3d12.913245558550063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad15b3c160465b%3A0x956e6e0186cc1c32!2sAnaicut%2C%20Tamil%20Nadu!3m2!1d12.8801686!2d78.9882083!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482561345!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Gudiyatham' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d158595.55474138685!2d78.92300691332609!3d12.940720548406613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6d361be288b5%3A0x88f9feef00e8cd73!2sGudiyatham%2C%20Tamil%20Nadu!3m2!1d12.9427995!2d78.86816139999999!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482592954!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Pernampattu' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d299048.3087834239!2d78.74815271138694!3d12.93618574498032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad74cf54486569%3A0x7ea8cac31ac7c380!2sPernambut%2C%20Tamil%20Nadu%20635810!3m2!1d12.9392559!2d78.71902039999999!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482631789!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Katpadi' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d32765.278068938347!2d79.12255540385772!3d12.960180354109443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad47105840b1a7%3A0x12ee1fcb23de3412!2sKatpadi%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9734246!2d79.1369301!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482659629!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kilvaithinankuppam' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d73859.58681197179!2d79.02330690620904!3d12.939903985293535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad6adc9341f8ff%3A0x3f242c1794d3018d!2sKilvaithinankuppam%2C%20Tamil%20Nadu%20632201!3m2!1d12.959581499999999!2d78.9934949!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482929989!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vellore' && $_SESSION['station']=='W4XP+5M')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d65764.80340090928!2d79.13589999113431!3d12.934604647107038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bad38e61fa68ffb%3A0xbedda6917d262b5e!2sVellore%2C%20Tamil%20Nadu!3m2!1d12.923554099999999!2d79.1330768!4m5!1s0x3bad38e61fa68ffb%3A0x61319593feda3f2e!2sW4XP%2B5M%2C%20Vellore%2C%20Tamil%20Nadu!3m2!1d12.9479375!2d79.1366875!5e0!3m2!1sen!2sin!4v1749482962350!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Villuppuram District station
    //XF3R+5X Viluppuram
    if($_SESSION['taluk'] =='Gingee' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249673.98685595577!2d79.3748612675765!3d12.10146780888243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5335719d9322b1%3A0xe5a6d6e2d6e6c6aa!2sGingee%2C%20Tamil%20Nadu%20604202!3m2!1d12.2529068!2d79.4160149!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483047673!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kandachipuram' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d190963.129016152!2d79.3179329451386!3d11.961981427178166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacadfacec40291%3A0xd04d59b10048dcd4!2sKandachipuram%2C%20Tamil%20Nadu%20605701!3m2!1d12.039494999999999!2d79.29866679999999!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483085229!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marakkanam' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d353748.14208820707!2d79.54884403377874!3d12.06862058069822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a537241fefbc6b5%3A0x7a8c83134730642c!2sMarakkanam%2C%20Tamil%20Nadu!3m2!1d12.189943!2d79.9248669!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483116461!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melmalaianur' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d372519.5292641415!2d79.18035183377542!3d12.143873783114957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baccc5d2ad8fedf%3A0xdd149269eaaff3d!2sSri%20Angala%20Parameswari%20Temple%2C%20Melmalayanur%2C%20Melmalayanur%2C%20Kodukankuppam%2C%20Tamil%20Nadu%20604204!3m2!1d12.345093199999999!2d79.3242941!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483147327!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tindivanam' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d327782.20124062814!2d79.404809290613!3d12.065841304258086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5340acd879b95b%3A0x5992d3fd3f53384b!2sTindivanam%2C%20Tamil%20Nadu%20604001!3m2!1d12.2266754!2d79.65035429999999!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483178003!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vanur' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d167944.89203238505!2d79.50767738719992!3d12.01923126281898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a535d7bdafc2d75%3A0x1300ae12673b7928!2sVanur%2C%20Tamil%20Nadu%20605109!3m2!1d12.0215122!2d79.7328117!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483214254!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vikravandi' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d90165.97925930608!2d79.47806360910312!3d11.988009312469925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53506df29620fd%3A0x39f09d432587dc86!2sVikravandi%2C%20Tamil%20Nadu%20605652!3m2!1d12.037548399999999!2d79.5461681!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483247857!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Villuppuram' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7806.788452643601!2d79.48440814059967!3d11.947184303127477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5356c0727b6b77%3A0x2c8815a4b312e5f3!2sViluppuram%2C%20Tamil%20Nadu!3m2!1d11.940137799999999!2d79.4861449!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483280096!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvennainallur' && $_SESSION['station']=='XF3R+5X')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124931.77113129811!2d79.34660153298343!3d11.8968815469274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab555b1ae79d7f%3A0x3937ae7b85590457!2sThiruvennainallur%2C%20Tamil%20Nadu%20607203!3m2!1d11.8620133!2d79.36626749999999!4m5!1s0x3a5356c0727b6b77%3A0x82dd54b72f6ffb0f!2sXF3R%2B5X%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.952937499999999!2d79.4924375!5e0!3m2!1sen!2sin!4v1749483385162!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //XF6X+R6P, Ayyankovilpattu
    if($_SESSION['taluk'] =='Gingee' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d419874.98251618043!2d79.23280577778287!3d12.117317624260469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5335719d9322b1%3A0xe5a6d6e2d6e6c6aa!2sGingee%2C%20Tamil%20Nadu%20604202!3m2!1d12.2529068!2d79.4160149!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483451416!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kandachipuram' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124884.29960755855!2d79.32010633480546!3d11.999782749630793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacadfacec40291%3A0xd04d59b10048dcd4!2sKandachipuram%2C%20Tamil%20Nadu%20605701!3m2!1d12.039494999999999!2d79.29866679999999!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483480699!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marakkanam' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d345269.38775044784!2d79.56772109535709!3d12.068653358128147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a537241fefbc6b5%3A0x7a8c83134730642c!2sMarakkanam%2C%20Tamil%20Nadu!3m2!1d12.189943!2d79.9248669!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483513677!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melmalaianur' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d477480.0071869397!2d79.36300387426664!3d12.02810383393783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baccc5d2ad8fedf%3A0xdd149269eaaff3d!2sSri%20Angala%20Parameswari%20Temple%2C%20Melmalayanur%2C%20Melmalayanur%2C%20Kodukankuppam%2C%20Tamil%20Nadu%20604204!3m2!1d12.345093199999999!2d79.3242941!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483549719!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tindivanam' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249679.85174179418!2d79.41385046711092!3d12.095188982577005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5340acd879b95b%3A0x5992d3fd3f53384b!2sTindivanam%2C%20Tamil%20Nadu%20604001!3m2!1d12.2266754!2d79.65035429999999!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483577881!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vanur' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124864.55060950598!2d79.53291253556338!3d12.042336259440379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a535d7bdafc2d75%3A0x1300ae12673b7928!2sVanur%2C%20Tamil%20Nadu%20605109!3m2!1d12.0215122!2d79.7328117!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483611878!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vikravandi' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62442.142347615925!2d79.4808004091232!3d11.999814937572554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53506df29620fd%3A0x39f09d432587dc86!2sVikravandi%2C%20Tamil%20Nadu%20605652!3m2!1d12.037548399999999!2d79.5461681!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483643422!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Villuppuram' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31225.996573397213!2d79.46865104501201!3d11.957214999430605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5356c0727b6b77%3A0x2c8815a4b312e5f3!2sViluppuram%2C%20Tamil%20Nadu!3m2!1d11.940137799999999!2d79.4861449!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483675572!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvennainallur' && $_SESSION['station']=='XF6X+R6P,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d194780.83027894358!2d79.38567725208614!3d11.892530718017804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab555b1ae79d7f%3A0x3937ae7b85590457!2sThiruvennainallur%2C%20Tamil%20Nadu%20607203!3m2!1d11.8620133!2d79.36626749999999!4m5!1s0x3a5356d326b12521%3A0xc8e6413f88c8f43a!2sXF6X%2BR6P%2C%20Ayyankovilpattu%2C%20Tamil%20Nadu!3m2!1d11.962087499999999!2d79.4980781!5e0!3m2!1sen!2sin!4v1749483717555!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //WFJG+P3R, Viluppuram
    if($_SESSION['taluk'] =='Gingee' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d304721.32853298937!2d79.36895583130371!3d12.111656126516035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5335719d9322b1%3A0xe5a6d6e2d6e6c6aa!2sGingee!3m2!1d12.2529068!2d79.4160149!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486042591!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kandachipuram' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d149294.6088446202!2d79.29988110580425!3d11.986708706944144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bacadfacec40291%3A0xd04d59b10048dcd4!2sKandachipuram%2C%20Tamil%20Nadu%20605701!3m2!1d12.039494999999999!2d79.29866679999999!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486066150!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Marakkanam' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249716.0941208104!2d79.54113006423366!3d12.056317179320542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a537241fefbc6b5%3A0x7a8c83134730642c!2sMarakkanam%2C%20Tamil%20Nadu!3m2!1d12.189943!2d79.9248669!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486090824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Melmalaianur' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d327678.1003495973!2d79.22141173280627!3d12.150685947386334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3baccc3786c58741%3A0x38249c799bc3eb5e!2sMelmalayanur%2C%20Tamil%20Nadu!3m2!1d12.3403894!2d79.3272391!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486119442!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tindivanam' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d249694.02884384783!2d79.4021671659854!3d12.079997989913334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5340acd879b95b%3A0x5992d3fd3f53384b!2sTindivanam%2C%20Tamil%20Nadu%20604001!3m2!1d12.2266754!2d79.65035429999999!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486150634!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vanur' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124871.60864415926!2d79.52001943529248!3d12.027145223784755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a535d7bdafc2d75%3A0x1300ae12673b7928!2sVanur%2C%20Tamil%20Nadu%20605109!3m2!1d12.0215122!2d79.7328117!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486180425!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vikravandi' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62445.65908159743!2d79.46790730905683!3d11.98462389116084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a53506df29620fd%3A0x39f09d432587dc86!2sVikravandi%2C%20Tamil%20Nadu%20605652!3m2!1d12.037548399999999!2d79.5461681!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486208325!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Villuppuram' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7807.109227330602!2d79.47550689059885!3d11.936052953168595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5356c0727b6b77%3A0x2c8815a4b312e5f3!2sViluppuram%2C%20Tamil%20Nadu!3m2!1d11.940137799999999!2d79.4861449!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486233016!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Thiruvennainallur' && $_SESSION['station']=='WFJG+P3R,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124071.40132308657!2d79.3790143844567!3d11.891172527657114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bab555b1ae79d7f%3A0x3937ae7b85590457!2sThiruvennainallur%2C%20Tamil%20Nadu%20607203!3m2!1d11.8620133!2d79.36626749999999!4m5!1s0x3a5356c0727b6b77%3A0xb11b8050519ba36!2sWFJG%2BP3R%2C%20Viluppuram%2C%20Tamil%20Nadu!3m2!1d11.9318625!2d79.4751406!5e0!3m2!1sen!2sin!4v1749486262663!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //Virudhunagar District station
    //GJ7M+8H6, Srivilliputhur
    if($_SESSION['taluk'] =='Aruppukkottai' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d408181.97000787576!2d77.82736845470393!3d9.695339391082962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01300feac34d1f%3A0x1a5296c51d18ce21!2sAruppukkottai%2C%20Tamil%20Nadu!3m2!1d9.5139114!2d78.100168!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486337628!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariapatti' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251770.07755107075!2d77.70293540112269!3d9.60323640879496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486361309!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajapalayam' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d64959.82258136162!2d77.55181984679098!3d9.482088847629267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06e9d3a85aca8f%3A0x552789e33f3b0b11!2sRajapalayam%2C%20Tamil%20Nadu!3m2!1d9.451484299999999!2d77.55434249999999!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486389016!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sattur' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125946.81444822538!2d77.69247494401944!3d9.435607417222766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cab35e82e151%3A0xf98da1715aa9374b!2sSattur%2C%20Tamil%20Nadu%20626203!3m2!1d9.357978!2d77.91557949999999!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486413002!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivakasi' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d144658.0687779135!2d77.63529304582015!3d9.475626531015287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!3m2!1d9.4532852!2d77.80241699999999!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486439151!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivilliputhur' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3934.9542724019043!2d77.63139582478694!3d9.512702590569226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dcb7c2dc05ed%3A0x85ab3be7b79f6af2!2sSrivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.5121171!2d77.6340213!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486463948!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchuli' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251798.87123134898!2d77.75185794883548!3d9.56443056044329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01249dc66b7175%3A0x6aebcf41cef1393c!2sTiruchuli%2C%20Tamil%20Nadu!3m2!1d9.5349731!2d78.2009851!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486494466!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Virudhunagar' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251809.7979756581!2d77.63261104796747!3d9.549663468169959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012c93bcb2b013%3A0xd717404a42ed026e!2sVirudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5680116!2d77.96244349999999!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486517534!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vathirairuppu' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125898.07679820243!2d77.58194669589057!3d9.56809983766848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dedf547c7dfd%3A0xfa69624acb26dcab!2sWatrap%2C%20Tamil%20Nadu!3m2!1d9.636456299999999!2d77.6398924!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486558128!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vembakottai' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125951.37486197778!2d77.62131294384436!3d9.423115579448199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06c81f8868f1f5%3A0xaf1424243f778144!2sVembakottai%2C%20Tamil%20Nadu%20626131!3m2!1d9.3343262!2d77.76881039999999!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486590180!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariappati' && $_SESSION['station']=='GJ7M+8H6,')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251759.21905798087!2d77.70293540198514!3d9.617830351782166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b06dcb7c2dc05ed%3A0x72ebd0a51e6165e4!2sGJ7M%2B8H6%2C%20Srivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.513287499999999!2d77.6338906!5e0!3m2!1sen!2sin!4v1749486783102!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //HWWX+QJ Virudhunagar
    if($_SESSION['taluk'] =='Aruppukkottai' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125902.03706709923!2d77.94536719573853!3d9.557401848121565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01300feac34d1f%3A0x1a5296c51d18ce21!2sAruppukkottai%2C%20Tamil%20Nadu!3m2!1d9.5139114!2d78.100168!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749486826008!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariapatti' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d152838.33468385998!2d77.97090663882882!3d9.626742965507173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749486861443!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajapalayam' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d348271.92561462877!2d77.54380035676118!3d9.459574827114878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06e9d3a85aca8f%3A0x552789e33f3b0b11!2sRajapalayam%2C%20Tamil%20Nadu!3m2!1d9.451484299999999!2d77.55434249999999!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749486899597!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sattur' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251862.99262505697!2d77.76601449374195!3d9.47744725062158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cab35e82e151%3A0xf98da1715aa9374b!2sSattur%2C%20Tamil%20Nadu%20626203!3m2!1d9.357978!2d77.91557949999999!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749486927980!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivakasi' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125914.7655742561!2d77.79316339524983!3d9.522937331806268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!3m2!1d9.4532852!2d77.80241699999999!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749486996199!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivilliputhur' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d140194.30930301163!2d77.70337782949693!3d9.527589254287994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dcb7c2dc05ed%3A0x85ab3be7b79f6af2!2sSrivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.5121171!2d77.6340213!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487028866!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchuli' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125904.21543320297!2d77.98883189565485!3d9.551512303876851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01249dc66b7175%3A0x6aebcf41cef1393c!2sTiruchuli%2C%20Tamil%20Nadu!3m2!1d9.5349731!2d78.2009851!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487055079!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Virudhunagar' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d38815.48523919587!2d77.93112719951063!3d9.580342379003845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012c93bcb2b013%3A0xd717404a42ed026e!2sVirudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5680116!2d77.96244349999999!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487081797!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vathirairuppu' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d213539.30012554568!2d77.71257394544679!3d9.627892392092532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dedf547c7dfd%3A0xfa69624acb26dcab!2sWatrap%2C%20Tamil%20Nadu!3m2!1d9.636456299999999!2d77.6398924!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487113875!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vembakottai' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d422789.4690999317!2d77.59450642858715!3d9.433537399383665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06c81f8868f1f5%3A0xaf1424243f778144!2sVembakottai%2C%20Tamil%20Nadu%20626131!3m2!1d9.3343262!2d77.76881039999999!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487144271!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariappati' && $_SESSION['station']=='HWWX+QJ')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62935.48551996777!2d77.98488299981724!3d9.64100570425814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b012c93bcb2b013%3A0x24b9078bbb362741!2sHWWX%2BQJ%2C%20Virudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5969375!2d77.9490625!5e0!3m2!1sen!2sin!4v1749487185235!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    //FRR9+2P Sivakasi
    if($_SESSION['taluk'] =='Aruppukkottai' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d189200.17943983784!2d77.85158592130226!3d9.530981165155445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01300feac34d1f%3A0x1a5296c51d18ce21!2sAruppukkottai%2C%20Tamil%20Nadu!3m2!1d9.5139114!2d78.100168!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487247798!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariapatti' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d157154.19534986545!2d77.880745469077!3d9.58585258570936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487274115!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Rajapalayam' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d392255.00138306466!2d77.63730831585627!3d9.67688112790451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06e9d3a85aca8f%3A0x552789e33f3b0b11!2sRajapalayam%2C%20Tamil%20Nadu!3m2!1d9.451484299999999!2d77.55434249999999!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487305655!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sattur' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125951.0388906311!2d77.77421609385722!3d9.424036428546923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cab35e82e151%3A0xf98da1715aa9374b!2sSattur%2C%20Tamil%20Nadu%20626203!3m2!1d9.357978!2d77.91557949999999!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487357982!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Sivakasi' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d31483.41216552915!2d77.78881104260535!3d9.471579398928672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!3m2!1d9.4532852!2d77.80241699999999!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487423418!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Srivilliputhur' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125926.49788628177!2d77.64306024479946!3d9.491060362974416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dcb7c2dc05ed%3A0x85ab3be7b79f6af2!2sSrivilliputhur%2C%20Tamil%20Nadu%20626125!3m2!1d9.5121171!2d77.6340213!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487458232!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Tiruchuli' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d251811.20408082224!2d77.84529544785578!3d9.547761525605662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b01249dc66b7175%3A0x6aebcf41cef1393c!2sTiruchuli%2C%20Tamil%20Nadu!3m2!1d9.5349731!2d78.2009851!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487483629!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Virudhunagar' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d148699.93621197873!2d77.80414571763285!3d9.533218976937592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012c93bcb2b013%3A0xd717404a42ed026e!2sVirudhunagar%2C%20Tamil%20Nadu!3m2!1d9.5680116!2d77.96244349999999!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487522941!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vathirairuppu' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d181803.77732543947!2d77.67326258909439!3d9.538376577334473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06dedf547c7dfd%3A0xfa69624acb26dcab!2sWatrap%2C%20Tamil%20Nadu!3m2!1d9.636456299999999!2d77.6398924!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487551722!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Vembakottai' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125955.35839279849!2d77.69952839369142!3d9.412190490141791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b06c81f8868f1f5%3A0xaf1424243f778144!2sVembakottai%2C%20Tamil%20Nadu%20626131!3m2!1d9.3343262!2d77.76881039999999!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487588490!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    if($_SESSION['taluk'] =='Kariappati' && $_SESSION['station']=='FRR9+2P')
    {
        echo'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d173206.12487808685!2d77.8055674035876!3d9.512871329764538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3b012872c8782fbf%3A0x943c0fcdb3244923!2sKariapatti%2C%20Tamil%20Nadu!3m2!1d9.6743816!2d78.1028923!4m5!1s0x3b06cee43d812d0d%3A0x8c61a880d9a6043e!2sFRR9%2B2P%2C%20Sivakasi%2C%20Tamil%20Nadu!3m2!1d9.490062499999999!2d77.8193125!5e0!3m2!1sen!2sin!4v1749487618700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }
    ?>
  
</form>
  </body>
</html>
