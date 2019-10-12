<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_add_sales_due_status extends CI_Migration
{
	public function __construct()
	{
		parent::__construct();
	}

	public function up()
	{
		$this->db->query('ALTER TABLE '. $this->db->dbprefix('sales') .' ADD due_status BOOLEAN NULL AFTER sale_type');
	}

	public function down()
	{
        $this->db->query('ALTER TABLE '. $this->db->dbprefix('sales') .' DROP due_status');
	}
}
?>