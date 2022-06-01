<?php
class BookingModel extends model
{
    
    
    public function insertBooking($body)
    {
        $this->dbh->query("INSERT INTO booking (`Brand_name`,`Instagram_Link`,`Purpose`, `Brand_Logo`, `firstPic`,`secondPic`,`thirdPic`,`Tax_Card`) 
      VALUES(:Brand_name,:Instagram_Link,:Purpose, :Brand_Logo, :first_pic, :Second_pic, :third_pic, :Tax_Card)");
        $this->dbh->bind(':Brand_name', $body['Brand_name']);
        $this->dbh->bind(':Instagram_Link', $body['link']);
        $this->dbh->bind(':Purpose', $body['purpose']);
        $this->dbh->bind(':Brand_Logo',$body['brand_logo']);
       $this->dbh->bind(':first_pic', $body['product_img']);
        $this->dbh->bind(':Second_pic', $body['product_img_2']);
        $this->dbh->bind(':third_pic', $body['product_img_3']);
        $this->dbh->bind(':Tax_Card', $body['product_img_4']);
        return $this->dbh->execute();
    }
   # public function insertBooking(){
      #  $query = "INSERT INTO "
    #}
     
}

/* 
Brand name
Instagram Link
Purpose
Brand Logo
First Picture of a Product Sold
Second Picture of a Product Sold
Third Picture of a Product Sold
Tax Card */
