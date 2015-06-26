<?php defined('SYSPATH') or die('No direct access allowed.');

class Supply_Model extends Model
{
    private $supply_table;
    
    public function __construct() 
    {
            parent::__construct();
        $this->supply_table = 'tbl_supplies';
    }
    
    public function create($data) 
    {
        $this->db->insert($this->supply_table, $data);
    }
    
    public function read($id) 
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->supply_table);
        return $query->result_array();
    }
    
    public function update($id, $data)
    {
        $this->db->update($this->supply_table, $data, array('id' => $id));
    }
    
    public function get_supplies() 
    {
        $this->db->select('tbl_supplies.id as id, tbl_supplies.item as item,
						   tbl_supplies.hardware_type as hardware_type, 
						   tbl_supplies.manufacturer as manufacturer,
						   tbl_supplies.number_of_supply as number_of_supply,
						   tbl_supplies.price as price');
        $this->db->from($this->supply_table);
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>

