<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
   
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';
   
   ?>
    <?php
    echo "<form action='$action' method='post'>"
    ?> 
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/login.css">
    <!-- <div class="row">
    <div class="col-md-6 mx-auto"> -->
    <!-- <div class="card card-body bg-light mt-5"> -->
    <h2>Sign Up</h2>
   
<?php
    $this->printName();
    $this->printEmail();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Register" class="form-control btn btn-lg btn-danger btn-block">
        </div>
        <div class="col">
          <a href="$loginUrl" class="form-control btn btn-lg btn-block">Current user, login here</a>
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printName()
  {
    $val = $this->model->getName();
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid);
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
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
