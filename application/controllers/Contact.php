<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model("model_about");
    }

	public function index()
	{
        $data['page']				    = "Kontak";
        $data['about']				    = $this->model_about->get();

		$this->load->view('templates/_part_public/header', $data);
		$this->load->view('v_public/contact', $data);
		$this->load->view('templates/_part_public/footer', $data);
	}
}

?>