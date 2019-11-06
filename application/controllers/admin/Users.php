<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller {

    private $services = null;
    private $name = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('services/Services_users');
        $this->load->model(
            array(
                'model_about',
                'model_users',
                'model_post'
            )
        );

        $this->services = new Services_users;
        $this->name     = $this->services->name;
    }

    public function add()
    {        
        $tables                        = $this->config->item('tables', 'ion_auth');
        $identity_column               = $this->config->item('identity', 'ion_auth');

        // Start Form Validation
        $this->form_validation->set_rules(
            'first_name', 
            $this->lang->line('create_user_validation_fname_label'), 
            'trim|required'
        );

        $this->form_validation->set_rules(
            'last_name', 
            $this->lang->line('create_user_validation_lname_label'), 
            'trim|required'
        );
        
        if ($identity_column !== 'email') {

            $this->form_validation->set_rules(
                'identity', 
                $this->lang->line('create_user_validation_identity_label'), 
                'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']'
            );

            $this->form_validation->set_rules(
                'email', 
                $this->lang->line('create_user_validation_email_label'), 
                'trim|required|valid_email'
            );

        } 
        else {

            $this->form_validation->set_rules(
                'email', 
                $this->lang->line('create_user_validation_email_label'), 
                'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]'
            );

        }

        $this->form_validation->set_rules(
            'phone', 
            $this->lang->line('create_user_validation_phone_label'), 
            'trim'
        );

        $this->form_validation->set_rules(
            'password', 
            $this->lang->line('create_user_validation_password_label'), 
            'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]'
        );

        $this->form_validation->set_rules(
            'password_confirm',
            $this->lang->line('create_user_validation_password_confirm_label'), 
            'required'
        );
        // End Form Validation        

        if ($this->form_validation->run() === TRUE) {
            $email    = strtolower($this->input->post('email'));
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');
            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone')
            );
            
            $group = array($this->input->post('role'));
        }

        if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data, $group)) {

            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::SUCCESS, $this->ion_auth->messages()));
            redirect("admin/users/add", 'refresh');
        } 
        else {

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            if (!empty(validation_errors()) || $this->ion_auth->errors()) {
                $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::DANGER, $data['message']));
            }

            $data['identity']         = array(
                'name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity')
            );

            $data[ "page_title" ]               = "Tambah Pengguna Baru";
            $data['about']				        = $this->model_about->get();
            $data['count_pending_post']		    = $this->model_post->pending_count_post();

    
            $this->load->view('templates/_part_admin/header', $data);
            $this->load->view('templates/_part_admin/sidebar', $data);
            $this->load->view('templates/_part_admin/topbar', $data);
            $this->load->view('v_admin/users/add', $data);
            $this->load->view('templates/_part_admin/footer', $data);
        }

    }

    public function contributor()
    {
        //Current Page
        $data["current_page"]               = 'admin/users/contributor';

        //Basic Variable
        $key                                = $this->input->get('key');
        $page                               = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $tabel_cell                         = ['id','username','first_name','last_name','email','group_name','active'];

        //Pagination Parameter
        $pagination['base_url']             = base_url($data["current_page"]) .'/index';
        $pagination['total_records']        = (isset($key)) ? $this->model_users->search_count($key , $this->name) : $this->model_users->get_total();
        $pagination['limit_per_page']       = 10;
        $pagination['start_record']         = $page * $pagination['limit_per_page'];
        $pagination['uri_segment']          = 4;

        //Set Pagination
        if ($pagination['total_records']>0) $this->data['links'] = $this->setPagination($pagination);

        //fetch data from database
        $fetch['select']                    = ['id','username','email','first_name','last_name','active','group_id'];
        $fetch['select_join']               = ['table_groups.name as group_name'];
        $fetch['join']                      = [array('table'=>'table_groups','id'=>'group_id','join'=>'left')];
        $fetch['where']                     = array('group_id'=> 3);
        $fetch['start']                     = $pagination['start_record'];
        $fetch['limit']                     = $pagination['limit_per_page'];
        $fetch['like']                      = ($key != null) ? array("name" => $this->name, "key" => $key) : null;
        $fetch['order']                     = array("field"=>"id","type"=>"ASC");
        $for_table                          = $this->model_users->fetch($fetch);

        //Get Flashdata
        $alert                              = $this->session->flashdata('alert');

        $data["page_title"]                 = "Contributor";
        $data["header"]                     = "Data Contributor";
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
        $this->load->view('v_admin/users/contributor/content', $data);
		$this->load->view('templates/_part_admin/footer', $data);
        
    }
    
}

