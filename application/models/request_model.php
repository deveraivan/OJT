<?php defined('SYSPATH') OR die('No direct access allowed.');
class Request_Model extends Model {

private $request_table;

public function __construct()
{
	parent::__construct();
	$this->request_table = 'tbl_requests';
}

public function create($data)
{
	$this->db->insert($this->request_table, $data);
}

}