<?php defined('SYSPATH') or die('No direct script access.');
class Login_Controller extends Private_Template_Controller {
	
    private $login_model;
    private $login_view;

	public function index()
	{

        $this->template->title = 'Login::Merchant';
        $this->template->content = View::factory('login')->render(TRUE);
	}
    
    public function process_login()
    {   
        $this->auto_render = FALSE;
        $this->user_model = new Tbl_User_Model();
            $username    = $this->input->post('username', 'admin');
            $user_data = $this->user_model->get_user($username);
            
            if ($user_data->loaded === TRUE)
            {
                url::redirect('dashboard');
            }
        

    }

}