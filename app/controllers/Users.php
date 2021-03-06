<?php
class Users extends Controller
{
    public function register()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));

            //validation
            if (empty($registerModel->getName())) {
                $registerModel->setNameErr('Please enter a name');
            }
            else if(!preg_match("/^[a-zA-z]*$/",$_POST['name'])){
                $registerModel->setNameErr('Only alphabets and whitespace are allowed');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $registerModel->setEmailErr('Invalid email format');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 4) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($registerModel->getNameErr()) &&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) {
                //Hash Password
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Register.php';
        require_once $viewPath;
        $view = new Register($this->getModel(), $this);
        $view->output();
    }
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['email']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }

            // If no errors
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $userModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $userModel->setPasswordErr('Password is not correct');
                }
            }
            if($_POST['email'] =="mofida@admin.com"&&$_POST['password']=="admin"){
                header("location: http://localhost/SE-Project/public/pages/admin/admin",  true,  301 );  exit;
            }
           
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }

    public function createUserSession($user)
    {
       $_SESSION['user_id'] = $user->ID;
       $_SESSION['user_name'] = $user->name;
       $_SESSION['user_email']= $user->email;
        //header('location: ' . URLROOT . 'pages');
        
        header("location: http://localhost/SE-Project/public/public",  true,  301 );  exit;
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        header("location: http://localhost/SE-Project/public/public",  true,  301 );  exit;
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']); 
    }

    public function userprofile()
    {
        $UserProfileModel=$this->getModel();

         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {

            $UserProfileModel->updateProfile($_POST['Name'],$_POST['Email']);
            $_SESSION['user_name'] = $_POST['Name'];
            $_SESSION['user_email']= $_POST['Email'];
            
            $viewPath = VIEWS_PATH . 'pages/userProfile/userprofile.php';
            require_once $viewPath;
            $userprofileView = new userprofile($this->getModel(), $this);
            $userprofileView->output();
         }
                
    
    }

    public function feedback()
    {
        $FeedbackModel=$this->getModel();

         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {

            $FeedbackModel->updateFeedback($_POST['Name'],$_POST['Email'],$_POST['Feedback']);
            $_SESSION['user_name'] = $_POST['Name'];
            $_SESSION['user_email']= $_POST['Email'];
            $_SESSION['user_feedback']= $_POST['Feedback'];
            
            $viewPath = VIEWS_PATH . 'pages/feedback.php';
            require_once $viewPath;
            $feedbackView = new feedback($this->getModel(), $this);
            $feedbackView->output();
         }
                
    
    }

}
