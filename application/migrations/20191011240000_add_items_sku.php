<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_add_items_sku extends CI_Migration
{
	public function __construct()
	{
		parent::__construct();
	}

	public function up()
	{
		$this->db->query('ALTER TABLE '. $this->db->dbprefix('items') .' ADD sku VARCHAR(50) NULL AFTER category');
	}

	public function down()
	{
        $this->db->query('ALTER TABLE '. $this->db->dbprefix('items') .' DROP sku');
	}
}
?>