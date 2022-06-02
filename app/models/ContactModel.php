<?php
class ContactModel extends model
{
     public function insertContact($body)
     {
         $this->dbh->query("INSERT INTO contact (`Name`,`Email`,`Message`) VALUES(:Name,:Email,:Message)");
         $this->dbh->bind(':Name', $body['name']);
         $this->dbh->bind(':Email', $body['email']);
         $this->dbh->bind(':Message', $body['message']);
         return $this->dbh->execute();
     }
}
