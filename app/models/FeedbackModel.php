<?php
class FeedbackModel extends model
{
     public $title = 'This is the userProfile info';



     public function updateFeedback($name,$email,$feedback)
     {
         $this->dbh->query("UPDATE feedback SET name=:name1, email=:email, feedback=:feedback");
         $this->dbh->bind(":name1", $name);
         $this->dbh->bind(":email", $email);
         $this->dbh->bind(":feedback", $feedback);
         $this->dbh->execute();
     }

}
