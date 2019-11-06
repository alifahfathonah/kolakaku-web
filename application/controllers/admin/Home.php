<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_users");
        $this->load->model("model_post");
        $this->load->model("model_post_category");
    }

    public function index()
    {
        $data["page_title"]                 = "Beranda";
        $data['about']				        = $this->model_about->get();
        $data['count_pending_post']		    = $this->model_post->pending_count_post();
        
        $v['group_id']                      = 3;
        $contributor                        = $this->model_users->getWhere($v);

        $data['count_contributor']          = count($contributor);

        $w['level']                         = 1;
        $post                               = $this->model_post->getWhere($w);

        $data['count_post']                 = count($post);
        $data['count_post_category']        = count($this->model_post_category->get());

		$this->load->view('templates/_part_admin/header', $data);
		$this->load->view('templates/_part_admin/sidebar', $data);
		$this->load->view('templates/_part_admin/topbar', $data);
		$this->load->view('v_admin/home', $data);
		$this->load->view('templates/_part_admin/footer', $data);
    }
    
}


?>