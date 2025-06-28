<?php
session_start();
    if(isset($_SESSION['taluk']) && isset($_SESSION['station'])) 
    {
    echo "<h1>".$_SESSION['taluk'] ." to ".$_SESSION['station']." Station</h1></div>";
    
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
}
    ?>