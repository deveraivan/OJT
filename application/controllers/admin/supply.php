<?php defined('SYSPATH') OR die('No direct access allowed.');

class Supply_Controller extends Private_Template_Controller
{
    private $supply_model;
    private $supplies_view;
    
    public function index()
    {
        $this->show_supplies_list();
    }
    
    private function show_supplies_list()
    { 
        $this->supply_model = new Supply_Model();
        $supplies_list = $this->supply_model->get_supplies();
        $this->supplies_view = View::factory('admin/supply')
                ->set('supplies_list', $supplies_list)
                ->render(TRUE);
    }
    public function show_add()
    {
        $this->template->title = 'New Supply';
        $this->template->content = View::factory('admin/create_supply')->render(TRUE);

    } 

    public function create_supply()
    {   
        $this->auto_render = FALSE;
        $this->user_model  = new User_Model();
        $data_supply = array(
            'date_acquired' =>  $this->input->post('date_acquired'),
            'hardware_type'  =>  $this->input->post('hardware_type'),
            'item'   =>  $this->input->post('item'),
            'manufacturer'  =>  $this->input->post('manufacturer'),
            'number_of_supply'  =>  $this->input->post('number_of_supply'), 
            'description'  =>  $this->input->post('description'),
            'status'  =>  $this->input->post('status'),            
        );       
        $this->supply_model->create($data_supply);
        url::redirect('/admin/supply');
    }
}
?>
