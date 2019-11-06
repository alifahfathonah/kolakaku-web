<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_post");
    }

	public function index()
	{
        $data['page']				    = "Beranda";
		$data['about']				    = $this->model_about->get();

		$w['level']            			= 1;
		$w['status']            		= 1;

		$form_value                     = $this->model_post->getWhere($w);
		$form_latest                    = $this->model_post->getLatest($w);
		$form_latest_single             = $this->model_post->getLatestSingle($w);
		
		$data['trending']				= $form_value;
		$data['latest']					= $form_latest;
		$data['latestSingle']			= $form_latest_single;

		// print_r($data['latest']);exit;

		$this->load->view('templates/_part_public/header', $data);
		$this->load->view("v_public/home", $data);
		$this->load->view('templates/_part_public/footer', $data);
	}
}

?>
