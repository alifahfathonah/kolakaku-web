<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Public_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_post");
    }

	public function index()
	{
		redirect(base_url());
    }

	public function detail()
	{
        $data['page']				    = "Detail Berita";
		$data['about']				    = $this->model_about->get();

		$w['slug']            			= $this->uri->segment(2);
		$form_detail                    = $this->model_post->getWhere($w);

		$x['level']            			= 1;
		$x['status']            		= 1;
		$form_trending                  = $this->model_post->getWhere($x);
		
		$data['trending']				= $form_trending;
        $data['detail']				    = $form_detail;
        
		$this->load->view('templates/_part_public/header', $data);
        if ($data['detail']) {
			$this->load->view('v_public/post_detail', $data);
		}
        else {
			$this->load->view('page_error/portfolio', $data);
		}
		$this->load->view('templates/_part_public/footer', $data);
    }

}

?>
