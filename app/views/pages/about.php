<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/aboutstyle.css">
</head>	
</body>
</html>

<?php
class About extends View
{
	Public function output()
	{		
		require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
<div class="section">
	<div class="container">
	<div class="title">
	<h1><center>About Us</center></h1>
	</div>
	<div class="content-section">
				
        </div>
		<div class="content">
		  <h4><center>Social initiative by Mofida Shiha to empower young 
          Egyptian female designers and innovators through providing the 
          appropriate environment that introduce them to the market.</center></h4>
		  <p><center>We all know about the famous TV Program (الستات مايعرفوش يكدبو)
          This was the start for the program host Mofida
          Shiha to recognize the need for supporting the
          female talents that she host a segment of them
          during her program which is working for the sake
          of them and covering all there interests.
          Mofida takes her recognition a step forward to be
          a Social initiative to empower young Egyptian
          female designers and innovators through
          providing the appropriate environment that
          introduce them to the market by promoting the
          community knowledge of fashion and style.</center></p>
		</div>

      
        <div class="images-section">
			<img src="../../images/img1.jpg">
		</div>

		<div class="social">
			<h2><a href="https://web.facebook.com/elsetatmarket/?ref=page_internal"><i class="fab fa-facebook-f"></i></a> <a href="https://www.instagram.com/elsetatmarket/"><i class="fab fa-instagram"></i></a></h2>
		</div>
	</div>
	</div>
</div>


EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
		
	}
	
}