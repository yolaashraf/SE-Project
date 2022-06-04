<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public  $title = 'User Login Page';

    public function login()
    {
        $this->dbh->query('SELECT * from users WHERE email = :email');
        $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->single();
        $hash_pass = $record->password;

        if (password_verify($this->password,  $hash_pass)) {
            return $record;
        } else {
            return false;
        }
    }
}
?>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); 
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); 
}
</script>