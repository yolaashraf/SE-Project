<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
	public function contact()
    {
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new contact($this->getModel(), $this);
        $contactView->output();
    }
    public function Admin()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/admin.php';
        require_once $viewPath;
        $adminView = new admin($this->getModel(), $this);
        $adminView->output();
    }

    public function Compose()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/compose.php';
        require_once $viewPath;
        $composeView = new compose($this->getModel(), $this);
        $composeView->output();
    }

    public function Mailbox()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/mailbox.php';
        require_once $viewPath;
        $mailboxView = new mailbox($this->getModel(), $this);
        $mailboxView->output();
    }
    public function userProfile()
    {
        $viewPath = VIEWS_PATH . 'pages/userProfile/userprofile.php';
        require_once $viewPath;
        $userprofileView = new userprofile($this->getModel(), $this);
        $userprofileView->output();
    }
    public function securityUserProfile()
    {
        $viewPath = VIEWS_PATH . 'pages/userProfile/securityuserprofile.php';
        require_once $viewPath;
        $userprofileView = new securityuserprofile($this->getModel(), $this);
        $userprofileView->output();
    }
    
    public function Booking()
    {
        $viewPath = VIEWS_PATH . 'pages/booking.php';
        require_once $viewPath;
        $bookingView = new Booking($this->getModel(), $this);
        $bookingView->output();
    }

}
