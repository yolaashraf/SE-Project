<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html>
  <head>

     <title>Contact Us</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/contactstyle.css">
   </head>
</html>
<?php
class Contact extends View
{
	Public function output()
	{
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    
    <section>
    <div class="container">
    
    <div class="content">
      <div class="left-side">
      <div class="About Us">
      <div class="topic"><h2>Contact Us</h2></div>

    </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">01220030303</div>
          
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">elsetatmarket@gmail.com</div>
          
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>Feel free to get in touch with us, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </section>
  EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';
  
}

}
