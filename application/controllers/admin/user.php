<?php defined('SYSPATH') OR die('No direct access allowed.');
class User_Controller extends Private_Template_Controller {

	private $user_model;

	public function index()
	{
		 $this->template->title = 'User List';
		//$this->template->scripts .= html::script("media/js/create_request.js");
		 $this->show_users_list();

		
	}

	 private function show_users_list()
    { 
        $this->user_model = new User_Model();
        $users_list = $this->user_model->get_users();
        $this->users_view = View::factory('admin/user_list')
             ->set('users_list', $users_list)
             ->render(TRUE);
   }
   
	public function show_create()
	{
		$this->template->title = 'User Registration';
		$this->template->content = View::factory('client/register')->render(TRUE);

	}
	
	public function create_user()
	{	
		$this->auto_render = FALSE;
		$this->user_model  = new User_Model();
		$data_user = array(
			'firstname' =>  $this->input->post('firstname'),
			'lastname'  =>  $this->input->post('lastname'),
			'address'   =>  $this->input->post('address'),
			'password'  =>  $this->input->post('password'),
			'username'  =>  $this->input->post('username'), 
		);
		var_dump($data_user);
		$data_info = array(
			'country'    => $this->input->post('country'),
			'postalcode' => $this->input->post('postalcode'),
			'town_city'  => $this->input->post('town_city'), 
			);
		var_dump($data_info);
		$data_comp = array(
			'address'    => $this->input->post('comp_address'),
			'contact_no' => $this->input->post('contact_no'),
			'email'      => $this->input->post('email'),
			'name'       => $this->input->post('comp_name')
			);
		var_dump($data_comp);	
		$this->user_model->create_user($data_user);
		$this->user_model->create_info($data_info);
		$this->user_model->create_comp($data_comp);
		

		url::redirect('client/user');
	}
}