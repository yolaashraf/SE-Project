<!doctype html>
<html lang="en">
<html>
<head>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <title>User Profile</title>

<link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<?php
class userprofile extends View
{
  public function output()
  {

    require APPROOT . '/views/inc/header.php';
    //echo $text;
    $text = <<<EOT

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <!--<a class="nav-link" href="../billinginfo.php"  style=" color:#d40159" >Billing</a>
        <a class="nav-link" href="../app/views/pages/userProfile/securityuserprofile.php" style="color:#d40159" >Security</a> -->
    </nav>

    <hr class="mt-0 mb-4">
    
    <div class="row">
        <div class="col-xl-4">

            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">

                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="../../../images/Images_userProfile/Profilephoto.png" alt="">
                    
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG, 300x300</div>
                    
                    <!-- Profile picture upload button-->
                    <label for="file">Upload new image</label>
                     <input class="btn btn-primary" type="file" id="file"  style="background-color:#d40159; color:White" >
                </div>
            </div>
        </div>
        
        <div class="col-xl-8">
            
        <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    
                    <form method="post">
                       
                    <!--username-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="un" require>
                        </div>
                        
                        <!-- Form Row separator-->
                        <div class="row gx-3 mb-3">
                            
                        <!--first name-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="fn"require>
                            </div>
                            
                            <!-- last name-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="ln"require>
                            </div>
                        </div>
                        
                        <!-- email address -->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" name="email"require>
                        </div>
                        
                        <!-- Form Row separator-->
                        <div class="row gx-3 mb-3">
                            
                        <!-- phone number-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" name="phonNum"require>
                            </div>
                           
                            <!-- birthday -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" name="bd">
                            </div>
                        </div>
                        
                        <!-- button to save changes -->
                        <input class="btn btn-primary" type="submit" value="Save changes" style="background-color:#d40159; color:White" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
</html>
