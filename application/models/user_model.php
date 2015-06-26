<?php defined('SYSPATH') or die('No direct access allowed.');

class User_Model extends Model
{
    private $user_table;
	private $group_table;
    
    public function __construct() 
    {
            parent::__construct();
        $this->user_table = 'tbl_users';
		$this->group_table = 'tbl_groups';
    }
    
    public function create($data) 
    {
        $this->db->insert($this->, $data);
    }
    
    public function read($id) 
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->user_table);
        return $query->result_array();
    }
    
    public function update($id, $data)
    {
        $this->db->update($this->user_table, $data, array('id' => $id));
    }
    
    public function get_users() 
    {
        $this->db->select('tbl_users.firstname as firstname, tbl_users.lastname as lastname, tbl_users.username as username,tbl_groups.name as name');
        $this->db->from($this->user_table);
		$this->db->join($this->group_table, 'tbl_groups.id', 'tbl_users.group_id');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>

