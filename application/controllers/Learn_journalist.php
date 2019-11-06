<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Learn_journalist extends Public_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model("model_about");
    }

	public function index()
	{
        $data['page']				    = "Belajar Jurnalis";
        $data['about']				    = $this->model_about->get();

		$this->load->view('templates/_part_public/header', $data);
		$this->load->view('v_public/learn_journalist', $data);
		$this->load->view('templates/_part_public/footer', $data);
	}
}

?>