<?php
class UserProfileModel extends model
{
     public $title = 'This is the userProfile info';



public function updateProfile($name,$email)
{
    $this->dbh->query("UPDATE users SET name=:name1, email=:email");
    $this->dbh.bind(":name1", $name);
    $this->dbh.bind(":email", $email);
    $this->dbh->execute();
}

}
