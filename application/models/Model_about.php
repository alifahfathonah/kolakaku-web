<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_about extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    private $table          = 'table_about';
    private $id             = 'id';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
}


?>