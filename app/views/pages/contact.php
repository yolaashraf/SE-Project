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
    $this->getmessage();
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
      <form action="#" method="POST">
        <div class="input-box">
          <input type="text"name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="text" name="message" placeholder="Enter your message">
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
        <input type="submit" value="Send Now" class="u-form-submit">
      </div
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
public function getmessage(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->model->insertContact($_POST);
    
  }
}

}
