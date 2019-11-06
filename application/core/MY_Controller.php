<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();

    public function __construct()
    {
       parent::__construct();
    }

    public function setPagination($pagination)
    {
        $config['base_url']                         = $pagination['base_url'];
        $config['total_rows']                       = $pagination['total_records'];
        $config['per_page']                         = $pagination['limit_per_page'];
        $config["uri_segment"]                      = $pagination['uri_segment'];

        // custom paging configuration
        $config['num_links']                        = $pagination['total_records']/$pagination['limit_per_page'];
        $config['use_page_numbers']                 = TRUE;
        $config['reuse_query_string']               = TRUE;

        $config['full_tag_open']                    = '<ul class="pagination">';
        $config['full_tag_close']                   = '</ul>';
        $config['first_link']                       = false;
        $config['last_link']                        = false;
        $config['first_tag_open']                   = '<li>';
        $config['first_tag_close']                  = '</li>';
        $config['prev_link']                        = '&laquo';
        $config['prev_tag_open']                    = '<li class="prev">';
        $config['prev_tag_close']                   = '</li>';
        $config['next_link']                        = '&raquo';
        $config['next_tag_open']                    = '<li>';
        $config['next_tag_close']                   = '</li>';
        $config['last_tag_open']                    = '<li>';
        $config['last_tag_close']                   = '</li>';
        $config['cur_tag_open']                     = '<li class="active"><a href="#">';
        $config['cur_tag_close']                    = '</a></li>';
        $config['num_tag_open']                     = '<li>';
        $config['num_tag_close']                    = '</li>';

        $this->pagination->initialize($config);

        // build paging links
        return $this->pagination->create_links();
    }

    public function errorValidation($error)
    {
        $alert = str_replace('<p>','<li>',$error);
        $alert = str_replace('</p>','</li>',$alert);
        $alert = "<ul>".$alert."</ul>";
        return $alert;
    }

}

class User_Controller extends MY_Controller {

    public function __construct() 
    {
        parent::__construct();
        if( !$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('alert', $this->alert->set_alert( Alert::DANGER,  $this->lang->line('login_not_login')));
            redirect(site_url('/login'));
  	    }
    }

}

class Admin_Controller extends User_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->is_admin())
        {
    		$this->session->set_flashdata('alert', $this->alert->set_alert( Alert::DANGER, $this->lang->line('login_must_admin')));
    		redirect(site_url('/login'));
        }
        else
        {
            // $this->data['menu'] = parent::getMenu();
        }
    }

}

class Editor_Controller extends User_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group(2))
        {
    		$this->session->set_flashdata('alert', $this->alert->set_alert( Alert::DANGER, $this->lang->line('login_unsuccessful')));
    		redirect(site_url('/login'));
        }
        else
        {
            // $this->data['menu'] = parent::getMenu();
        }
    }

}

class Contributor_Controller extends User_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group(3))
        {
    		$this->session->set_flashdata('alert', $this->alert->set_alert( Alert::DANGER, $this->lang->line('login_unsuccessful')));
    		redirect(site_url('/login'));
        }
        else
        {
            // $this->data['menu'] = parent::getMenu();
        }
    }

}

class Public_Controller extends MY_Controller {

    function __construct()
    {
		parent::__construct();
    }

}

?>