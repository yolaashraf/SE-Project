<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="about us, About Us, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Booking</title>
    <link rel="stylesheet" href="../../public/css/nicepage.css" media="screen">
<link rel="stylesheet" href="../../public/css/booking.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../public/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../public/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="booking">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  
</html>

<?php
class Booking extends view
{

  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

    <body class="u-body u-xl-mode">
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_f5df">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-8 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1" data-href="https://nicepage.com">
                <div class="u-container-layout u-valign-top-lg u-container-layout-1">
                  <h1 class="u-align-left u-text u-text-default u-title u-text-1">Booking Form</h1>
                  <a href="#" class="u-btn u-button-style u-grey-90 u-btn-1">Choose Photo</a>
                  <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0px;" source="email" name="form">
                      <div class="u-form-email u-form-group u-form-group-1">
                        <label for="email-f2a8" class="u-label u-text-custom-color-1 u-label-1">Brand Name</label>
                        <input type="email" placeholder="Enter a brand name" id="email-f2a8" name="text" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <label for="name-f2a8" class="u-label u-text-custom-color-1 u-label-2">Instagram Link</label>
                        <input type="text" placeholder="www.example.com" id="name-f2a8" name="link" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-group u-form-message u-form-group-3">
                        <label for="message-f2a8" class="u-label u-text-custom-color-1 u-label-3">Purpose</label>
                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message-f2a8" name="message" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-textarea u-form-group-4">
                        <label for="textarea-6993" class="u-label u-text-custom-color-1 u-label-4">Brand Logo</label>
                        <textarea rows="4" cols="50" id="textarea-6993" name="textarea" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-textarea u-form-group-5">
                        <label for="textarea-40bb" class="u-label u-text-custom-color-1 u-label-5">First Picture of a Product Sold</label>
                        <textarea rows="4" cols="50" id="textarea-40bb" name="textarea-1" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-textarea u-form-group-6">
                        <label for="textarea-0696" class="u-label u-text-custom-color-1 u-label-6">Second Picture of a Product Sold</label>
                        <textarea rows="4" cols="50" id="textarea-0696" name="textarea-2" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-textarea u-form-group-7">
                        <label for="textarea-6e5a" class="u-label u-text-custom-color-1 u-label-7">Third Picture of a Product Sold</label>
                        <textarea rows="4" cols="50" id="textarea-6e5a" name="textarea-3" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-textarea u-form-group-8">
                        <label for="textarea-b53b" class="u-label u-text-custom-color-1 u-label-8">Tax Card</label>
                        <textarea rows="4" cols="50" id="textarea-b53b" name="textarea-4" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" autofocus="autofocus"></textarea>
                      </div>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                        <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-2">Submit<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                  <a href="#" class="u-btn u-button-style u-grey-90 u-btn-3">Choose Photo</a>
                  <a href="#" class="u-btn u-button-style u-grey-90 u-btn-4">Choose Photo<br>
                  </a>
                  <a href="#" class="u-btn u-button-style u-grey-90 u-btn-5">Choose Photo<br>
                  </a>
                  <a href="#" class="u-btn u-button-style u-grey-90 u-btn-6">Choose Photo<br>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      </a>
      <p class="u-text">
      </p>
      <a class="u-link" href="" target="_blank">
      </a>
    </section>
  </body>
   
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
