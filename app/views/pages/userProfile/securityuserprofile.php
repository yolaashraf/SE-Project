<!doctype html>
<html lang="en">
<html>
<head>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <title>Security</title>

<link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
class securityuserprofile extends View
{
  public function output()
  {

    require APPROOT . '/views/inc/header.php';
    //echo $text;
    $text = <<<EOT
<div class="container-xl px-4 mt-4">

        <!-- Account page navigation-->
        <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="userprofile.php" style="color:#d40159" >Profile</a>
        <a class="nav-link" href="billinginfo.php" style= "color:#d40159" >Billing</a>
        </nav>

        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-lg-8">

                <!-- Change password card and row adjustment-->
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form>
                            <!-- current password-->
                            <div class="mb-3">
                                <label class="small mb-1" for="currentPassword">Current Password</label>
                                <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password" require>
                            </div>

                            <!-- new password -->
                            <div class="mb-3">
                                <label class="small mb-1" for="newPassword">New Password</label>
                                <input class="form-control" id="newPassword" type="password" placeholder="Enter new password" require>
                            </div>

                            <!-- confirm password -->
                            <div class="mb-3">
                                <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password" require>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Save"  style="background-color:#d40159; color:White" >
                        </form>
                    </div>
                </div>

                <!-- Security preferences-->
                <div class="card mb-4">
                    <div class="card-header">Security Preferences</div>
                    <div class="card-body">
                
                        <!-- Data sharing options-->
                        <h5 class="mb-1">Data Sharing</h5>
                        <p class="small text-muted">Sharing usage data can help us to improve our products and better serve our users as they navigation through our application. When you agree to share usage data with us, crash reports and usage analytics will be automatically sent to our development team for investigation.</p>
                        <form>
                            <div class="form-check">
                                <input class="form-check-input" id="radioUsage1" type="radio" name="radioUsage" checked=""  style="background-color:#d40159; color:Black" >
                                <label class="form-check-label" for="radioUsage1">Yes, share data and crash reports with app developers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="radioUsage2" type="radio" name="radioUsage"  style="background-color:#d40159; color:Black" >
                                <label class="form-check-label" for="radioUsage2">No, limit my data sharing with app developers</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <!-- Delete account-->
                <div class="card mb-4">
                    <div class="card-header">Delete Account</div>
                    <div class="card-body">
                        <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                        <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
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