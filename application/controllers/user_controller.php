<?php defined('SYSPATH') OR die('No direct access allowed.');

class User_Controller extends Private_Template_Controller
{
    private $user_model;
    private $users_view;
    
    public function index()
    {
        $this->show_users_list();
    }
    
    private function show_users_list()
    { 
        $this->user_model = new User_Model();
        $users_list = $this->user_model->get_users();
        $this->users_view = View::factory('admin/user')
                ->set('users_list', $users_list)
                ->render(TRUE);
    }
}
?>
