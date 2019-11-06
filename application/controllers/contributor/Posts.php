<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends Contributor_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_post_category");
        $this->load->model("model_post");
        $this->load->library('services/Services_posts');
        $this->services = new Services_posts;
        $this->name     = $this->services->name;
    }

    public function index()
    {
        $id_contributor                     = $this->ion_auth->get_user_id();

        //Current Page
        $data["current_page"]               = 'contributor/posts';

        //Basic Variable
        $key                                = $this->input->get('key');
        $page                               = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $tabel_cell                         = ['id','slug','title','date','level', 'username'];

        //Pagination Parameter
        $pagination['base_url']             = base_url($data["current_page"]) .'/index';
        $pagination['total_records']        = (isset($key)) ? $this->model_post->search_count_contributor($key , $this->name, $this->ion_auth->get_user_id()) : $this->model_post->get_total();
        $pagination['limit_per_page']       = 10;
        $pagination['start_record']         = $page * $pagination['limit_per_page'];
        $pagination['uri_segment']          = 3;

        //Set Pagination
        if ($pagination['total_records']>0) $this->data['links'] = $this->setPagination($pagination);

        //fetch data from database
        $fetch['select']                    = ['id','slug','title','date','level', 'id_reviewer'];
        $fetch['select_join']               = ['table_users.username as username'];
        $fetch['join']                      = [array('table'=>'table_users','id'=>'id_reviewer','join'=>'left')];
        $fetch['where']                     = array('id_contributor'=> $id_contributor);
        $fetch['start']                     = $pagination['start_record'];
        $fetch['limit']                     = $pagination['limit_per_page'];
        $fetch['like']                      = ($key != null) ? array("name" => $this->name, "key" => $key) : null;
        $fetch['order']                     = array("field"=>"id","type"=>"ASC");
        $for_table                          = $this->model_post->fetch($fetch);

        //Get Flashdata
        $alert                              = $this->session->flashdata('alert');

        $data["page_title"]                 = "BeritaKU";
        $data["header"]                     = "Data Berita";
        $data["header_sub"]                 = "Klik Tombol Action Untuk Aksi Lebih Lanjut";
        $data["key"]                        = ($key!=null) ? $key : false;
        $data["alert"]                      = (isset($alert)) ? $alert : NULL ;
        $data["for_table"]                  = $for_table;
        $data["table_header"]               = $this->services->tabel_header($tabel_cell);
        $data["number"]                     = $pagination['start_record'];
        $data['about']				        = $this->model_about->get();

        // print_r($data["for_table"]);
        // exit;
        
		$this->load->view('templates/_part_contributor/header', $data);
		$this->load->view('templates/_part_contributor/sidebar', $data);
		$this->load->view('templates/_part_contributor/topbar', $data);
		$this->load->view('v_contributor/post/mine', $data);
		$this->load->view('templates/_part_contributor/footer', $data);
    }

    public function add()
    {

        // Start Form Validation
        $this->form_validation->set_rules(
            'post_title', 
            $this->lang->line('create_post_title'), 
            'required'
        );
        $this->form_validation->set_rules(
            'post_content', 
            $this->lang->line('create_post_content'), 
            'required'
        );
        if (empty($_FILES['userfile']['name']))
        {
            $this->form_validation->set_rules(
                'userfile', 
                $this->lang->line('create_post_cover'), 
                'required'
            );
        }

        if ($this->form_validation->run() === TRUE) {

            $filename                               = date('YmdHis');
            $config['upload_path']          		= './assets/uploads/posts/';
            $config['allowed_types']        		= 'gif|jpg|png|jpeg';
            $config['overwrite']                    = "true";
            $config['max_size']                     = "20000000";
            $config['max_width']                    = "10000";
            $config['max_height']                   = "10000";
            $config['file_name']                    = 'post-img-'.$filename;	

            $this->load->library('upload', $config);
	
            if(!$this->upload->do_upload())
            {
                echo $this->upload->display_errors();
            }
            else 
            {
                $file_upload                            = $this->upload->data();

                $data['slug']                           = slug($this->input->post('post_title'));
                $data['title']                          = ucwords($this->input->post('post_title'));
                $data['content']                        = $this->input->post('post_content');
                $data['date']                           = date('Y-m-d H:i:s');
                $data['image']                          = $file_upload['file_name'];
                $data['status']                         = 0;
                $data['level']                          = 0;
                $data['id_category']                    = $this->input->post('post_category_id');
                $data['id_contributor']                 = $this->ion_auth->get_user_id();

                $this->model_post->add($data);

                $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Berita Telah Dikirim, Silahkan Menungu Konfirmasi"));
                redirect("contributor/posts/add", 'refresh');
            }
        }
        else {

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            if (!empty(validation_errors()) || $this->ion_auth->errors()) {
                $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::DANGER, $data['message']));
            }

            $data["page_title"]                 = "Kirim Berita";
            $data['about']				        = $this->model_about->get();
            $data['post_category']				= $this->model_post_category->get();
    
            $this->load->view('templates/_part_contributor/header', $data);
            $this->load->view('templates/_part_contributor/sidebar', $data);
            $this->load->view('templates/_part_contributor/topbar', $data);
            $this->load->view('v_contributor/post/add', $data);
            $this->load->view('templates/_part_contributor/footer', $data);
        }
       
    }
    
}


?>