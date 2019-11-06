<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends Admin_Controller {

    private $parent_page    = 'admin/posts';
    private $current_page   = 'admin/posts/pending';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->model("model_post_category");
        $this->load->model("model_post");
        $this->load->model("model_users");
        $this->load->library('services/Services_posts');
        $this->load->library('services/Services_posts_category');
        $this->services             = new Services_posts;
        $this->services_category    = new Services_posts_category;
        $this->name                 = $this->services->name;
    }

    public function index()
    {
       //Current Page
        $data["current_page"]               = 'admin/posts';

        //Basic Variable
        $key                                = $this->input->get('key');
        $page                               = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $tabel_cell                         = ['id','slug','title','date','level', 'username_contributor'];

        //Pagination Parameter
        $pagination['base_url']             = base_url($data["current_page"]) .'/index';
        $pagination['total_records']        = (isset($key)) ? $this->model_post->search_count($key , $this->name) : $this->model_post->get_total();
        $pagination['limit_per_page']       = 10;
        $pagination['start_record']         = $page * $pagination['limit_per_page'];
        $pagination['uri_segment']          = 3;

        //Set Pagination
        if ($pagination['total_records']>0) $this->data['links'] = $this->setPagination($pagination);

        //fetch data from database
        $fetch['select']                    = ['id','slug','title','date','level', 'id_reviewer'];
        $fetch['select_join']               = ['table_users.username as username_contributor'];
        $fetch['join']                      = [array('table'=>'table_users','id'=>'id_contributor','join'=>'left')];
        $fetch['where']                     = array('level'=> 1);
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
        $data['count_pending_post']		    = $this->model_post->pending_count_post();
        
		$this->load->view('templates/_part_admin/header', $data);
		$this->load->view('templates/_part_admin/sidebar', $data);
		$this->load->view('templates/_part_admin/topbar', $data);
		$this->load->view('v_admin/post/content', $data);
		$this->load->view('templates/_part_admin/footer', $data);
    }

    public function pending()
    {
        $data["parent_page"]                = $this->parent_page;
        $data["current_page"]               = $this->current_page;

        $tabel_cell                         = ['id','slug','title','date','level', 'username_contributor'];

        //fetch data from database
        $fetch['select']                    = ['id','slug','title','date','level', 'id_reviewer'];
        $fetch['select_join']               = ['table_users.username as username_contributor'];
        $fetch['join']                      = [array('table'=>'table_users','id'=>'id_contributor','join'=>'left')];
        $fetch['where']                     = array('level'=> 0);
        $fetch['start']                     = 0;
        $fetch['limit']                     = 1000;
        $fetch['order']                     = array("field"=>"id","type"=>"ASC");
        $for_table                          = $this->model_post->fetch($fetch);

        //Get Flashdata
        $alert                              = $this->session->flashdata('alert');

        $data["page_title"]                 = "BeritaKU";
        $data["header"]                     = "Data Berita";
        $data["header_sub"]                 = "Klik Tombol Action Untuk Aksi Lebih Lanjut";
        $data["alert"]                      = (isset($alert)) ? $alert : NULL ;
        $data["for_table"]                  = $for_table;
        $data["table_header"]               = $this->services->tabel_header($tabel_cell);
        $data['about']				        = $this->model_about->get();
        $data['count_pending_post']		    = $this->model_post->pending_count_post();
        
		$this->load->view('templates/_part_admin/header', $data);
		$this->load->view('templates/_part_admin/sidebar', $data);
		$this->load->view('templates/_part_admin/topbar', $data);
		$this->load->view('v_admin/post/pending', $data);
		$this->load->view('templates/_part_admin/footer', $data);
    }

    public function category()
    {
        $data["parent_page"]                = $this->parent_page;
        $data["current_page"]               = $this->current_page;

        $tabel_cell                         = ['id','name'];

        //fetch data from database
        $fetch['select']                    = ['id','name'];
        $fetch['start']                     = 0;
        $fetch['limit']                     = 1000;
        $fetch['order']                     = array("field"=>"id","type"=>"ASC");
        $for_table                          = $this->model_post_category->fetch($fetch);

        //Get Flashdata
        $alert                              = $this->session->flashdata('alert');

        $data["header"]                     = "Data Kategori Berita";
        $data["header_sub"]                 = "Klik Tombol Action Untuk Aksi Lebih Lanjut";
        $data["alert"]                      = (isset($alert)) ? $alert : NULL ;
        $data["for_table"]                  = $for_table;
        $data["table_header"]               = $this->services_category->tabel_header($tabel_cell);
        $data['about']				        = $this->model_about->get();
        $data['count_pending_post']		    = $this->model_post->pending_count_post();
        
		$this->load->view('templates/_part_admin/header', $data);
		$this->load->view('templates/_part_admin/sidebar', $data);
		$this->load->view('templates/_part_admin/topbar', $data);
		$this->load->view('v_admin/post/category', $data);
		$this->load->view('templates/_part_admin/footer', $data);
    }

    public function preview()
    {
        $id = $this->input->get('post_id');

        $w['id']                            = $id;
        $form_value                         = $this->model_post->getWhere($w);

        $data["page_title"]                 = "Preview Post";
        $data["header"]                     = "Tinjau Berita";
        $data["sub_header"]                 = 'Tinjau Berita Secara Teliti dan Benar';
        $data["current_page"]               = $this->current_page;
        $data['about']				        = $this->model_about->get();
        $data['count_pending_post']		    = $this->model_post->pending_count_post();
        $data["post"]                       = $form_value;
        $data['post_category']				= $this->model_post_category->get();

        // print_r($data['post']);
        // exit;
       
        $this->load->view('templates/_part_admin/header', $data);
		$this->load->view('templates/_part_admin/sidebar', $data);
		$this->load->view('templates/_part_admin/topbar', $data);
		$this->load->view('v_admin/post/preview', $data);
		$this->load->view('templates/_part_admin/footer', $data);
    }

    public function accept()
    {
        $id_reviewer                        = $this->ion_auth->get_user_id();
        $point                              = $this->input->post('point');
        $message                            = $this->input->post('message'); 
        $id_contributor                     = $this->input->post('id_contributor');
        $id_post                            = $this->input->post('id_post');
        
        $w['id']                            = $id_contributor;
        $form_value                         = $this->model_users->getWhere($w);
        
        $point_result                       = $form_value[0]->point + $point;

        $for_user = array(
            'point' => $point_result
        );

        $for_post = array(
            'level' => 1,
            'status' => 1,
            'id_reviewer' => $id_reviewer
        );

        $this->model_users->update($id_contributor, $for_user);
        $this->model_post->update($id_post, $for_post);
        
        $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Berita Telah Diterima"));
        redirect('admin/posts/pending');
    }

    public function reject()
    {
        $id_reviewer                        = $this->ion_auth->get_user_id();
        $message                            = $this->input->post('message'); 
        $id_post                            = $this->input->post('id_post');

        $for_post = array(
            'level' => 2,
            'id_reviewer' => $id_reviewer
        );

        $this->model_post->update($id_post, $for_post);
        
        $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Berita Telah Ditolak"));
        redirect('admin/posts/pending');
    }

    public function add_category()
    {
        $data['name']                       = $this->input->post('name_category');

        $this->model_post_category->add($data);
        
        $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Kategori Baru Telah Ditambahkan"));
        redirect('admin/posts/category');
    }
    
    public function edit_category()
    {
        $id_category                        = $this->input->post('category_id');
        $data['name']                       = $this->input->post('name_category');

        $for_post_category = array(
            'name' => $data['name']
        );

        $this->model_post_category->update($id_category, $for_post_category);
        
        $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Kategori Baru Telah Diubah"));
        redirect('admin/posts/category');
    }

    public function delete_category()
    {
        $id_category                        = $this->input->post('category_id');
        $data['name']                       = $this->input->post('category_name');

        $w['id']                            = $id_category ;
        $this->model_post_category->delete($w);
        
        $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Kategori <strong>".$data['name']."</strong> Telah Dihapus"));
        redirect('admin/posts/category');
    }

}

?>