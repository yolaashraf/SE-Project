<?php
class Login extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    flash('register_success');
   
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/login';
    $registerUrl = URLROOT . 'users/register';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo URLROOT; ?>css/login.css">
      <title>Login Form</title>
    </head>
    <body>
      <?php
    echo "<form action='$action' method='post'>"
    ?> 
    <h1>Login</h1> 
            <div class="container">   
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="email" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <button type="submit">Login</button>   
                <input type="checkbox" checked="checked"> Remember me
                <?php
    echo "<a href='$registerUrl' class='form-control btn btn-lg btn-block'>Sign Up Here</a>"
    ?>        
            </div>   
        </form> 
    </body>
    </html>
    <?php
    $this->printEmail();
    $this->printPassword();

  
  }

  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
//     $text = <<<EOT
//     <div class="form-group">
//       <label for="$fieldName"> $label: <sup>*</sup></label>
//       <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" required="">
//       <span class="invalid-feedback">$err</span>
//     </div>
// EOT;
//     echo $text;
  }
}
