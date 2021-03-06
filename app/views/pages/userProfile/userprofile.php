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
    
    $email=$_SESSION['user_email'];

    $name=$_SESSION['user_name'];


     
    $text = <<<EOT

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
    </nav>

    <hr class="mt-0 mb-4">
        
        <div class="col-xl-12">
            
        <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    
                    <form method="POST" action='http://localhost/SE-Project/public/users/userprofile' >
                       
                    <!--username-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" name="Name" placeholder="$name" required>
                        </div>
                        
                        <!-- Form Row separator-->
                        <div class="row gx-3 mb-3">
                            
                    
                        </div>
                        
                        <!-- email address -->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="$email" name="Email"require>
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
