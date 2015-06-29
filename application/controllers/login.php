<?php defined('SYSPATH') or die('No direct script access.');
class Login_Controller extends Private_Template_Controller {
	
    private $login_model;
    private $login_view;

	
    public function index()
	{

        $this->template->title = 'Login::Merchant';
        $this->template->content = View::factory('login',array('error' =>''))->render(TRUE);
	}
    
    public function process_login()
    {   
        $this->auto_render = FALSE;
        $username    = $this->input->post('username');
        $this->user_model = new Tbl_User_Model();
        $get_user    = $this->user_model->get_user($username);
        $password    = $this->input->post('password');    
            if ($get_user->loaded == TRUE)
            {
                $pass = $get_user->password;
                if($pass == $password)
                {
                $_SESSION['id']         = $get_user->id;
                $_SESSION['username']   = $get_user->username;
                $_SESSION['firstname']  = $get_user->firstname;
                $_SESSION['lastname']   = $get_user->lastname;

                url::redirect('admin/dashboard');
                } 
                else
                {
                    $error = 'Password Incorrect';
                }
            }
            else if (! $username && ! $password)
            {
                    $error = ' Please Input Username and Password';
            }
            else
            {
                    $error = 'Username Incorrect';
            }
            View::factory('login',array('error' => $error))->render(TRUE);
    }
}