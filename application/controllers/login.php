<?php defined('SYSPATH') or die('No direct script access.');
class Login_Controller extends Public_Template_Controller {
	
    private $user;
    public $login_view;

        


	public function index()
	{
        $this->show_login();  	
	}

    public function show_login()
    {
        $this->login_view = new View('login');
        $this->template->title = 'Login::Merchant';
        $this->login_view->render(TRUE);
    }
    
    public function process_login()
    {   
    	$this->session = Session::instance();
      	
        $username = $this->input->post('username');

        $this->user = new Tbl_User_Model();
        $check_user = $this->check($username); 
        if ((bool) $check_user === TRUE)
        {
            $password = $this->input->get('password');
            $check_pass = $this->check($password);

            if ($cehck_pass == $password)
            {
                $_SESSION['id']       =$get_user->id;
                $_SESSION['username'] =$get_user->username;
                $_SESSION['password'] =$get_user->password;
                
               url::redirect('admin/dashboard');
            } 
            else 
            {
                echo "login failed";
            }

        }
       
    }

}