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
    
    public function Booking()
    {
        $viewPath = VIEWS_PATH . 'pages/booking.php';
        require_once $viewPath;
        $bookingView = new Booking($this->getModel(), $this);
        $bookingView->output();
    }

    public function Pending()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/pending.php';
        require_once $viewPath;
        $pendingView = new pending($this->getModel(), $this);
        $pendingView->output();
    }

    public function Accepted()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/accepted.php';
        require_once $viewPath;
        $acceptedView = new accepted($this->getModel(), $this);
        $acceptedView->output();
    }

    public function Rejected()
    {
        $viewPath = VIEWS_PATH . 'pages/admin/rejected.php';
        require_once $viewPath;
        $rejectedView = new rejected($this->getModel(), $this);
        $rejectedView->output();
    }

    public function Feedback()
    {
        $viewPath = VIEWS_PATH . 'pages/feedback.php';
        require_once $viewPath;
        $feedbackView = new feedback($this->getModel(), $this);
        $feedbackView->output();
    }

}
