<?php defined('SYSPATH') or die('No direct script access.');
class Login_Controller extends Private_Template_Controller {
	
    private $login_view;

	public function index()
	{

        $this->template->title = 'Login::Merchant';
        $this->template->content = View::factory('login',array('error' => '' ))->render(TRUE);
	    
    }
    
    public function process_login()
    {   
        $error = '';
        $this->session = Session::instance();
        $username  = $this->input->post('username', 'admin');        
        $user_model = new Tbl_User_Model();    
        $get_user = $user_model->get_user($username);
        $password = $this->input->post('password', 'admin');
        $pass_data = $get_user->password;
           //var_dump($pass_data);
        if ($get_user->loaded == TRUE)
        {
                  if ($pass_data == $password)
                {
                    $_SESSION['id'] = $get_user->id;
                    $_SESSION['username'] = $get_user->username;
                    $_SESSION['firstname'] = $get_user->firstname;
                    $_SESSION['lastname'] = $get_user->lastname;   

                    url::redirect('dashboard');
                }
                else
                {
                    $error = "Incorrect Password";
                } 
        } 
        else 
        {
          $error = "Incorrect Username/Password";
        }
        View::factory('login',array('error' => $error ))->render(TRUE);

    }

}