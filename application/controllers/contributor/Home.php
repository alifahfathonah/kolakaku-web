<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Contributor_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_post");
    }

    public function index()
    {
        $user                               = $this->ion_auth->user()->row();
        $data["page_title"]                 = "Beranda";
        $data['about']				        = $this->model_about->get();
        $data['point']				        = $user->point;

        $w['id_contributor']                = $user->id;
        $form_value                         = $this->model_post->getWhere($w);

        $data['post']				        = count($form_value);

		$this->load->view('templates/_part_contributor/header', $data);
		$this->load->view('templates/_part_contributor/sidebar', $data);
		$this->load->view('templates/_part_contributor/topbar', $data);
		$this->load->view('v_contributor/home', $data);
		$this->load->view('templates/_part_contributor/footer', $data);
    }
    
}


?>