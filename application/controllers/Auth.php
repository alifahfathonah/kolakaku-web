<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Public_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model("model_about");
        $this->load->library(array('form_validation'));
        $this->load->helper('form');
        $this->config->load('ion_auth', TRUE);
        $this->load->helper(array(
            'url',
            'language'
        ));
        $this->lang->load('auth');
    }
    
    public function login()
    {
        $editor_id          = 2;
        $contributor_id     = 3;

        // Validation
        $this->form_validation->set_rules(
            'email', 
            'Email', 
            'required|valid_email',
            array(
                'required' => '*) Email wajib diisi', 
                'valid_email' => '*) Masukkan Alamat Email dengan Benar'
            )
        );
        $this->form_validation->set_rules(
            'password', 
            'Password', 
            'required|min_length[6]',
            array(
                'required' => '*) Password wajib diisi', 
                'min_length' => '*) Password Minimal 6 Karakter'
            )
        );

        // Statement
        if ($this->form_validation->run() == true) {
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'))) {

                $this->session->set_flashdata('alert', $this->alert->set_alert(Alert::SUCCESS, $this->ion_auth->messages()));

                if ($this->ion_auth->is_admin()) {
                    redirect(base_url('/admin'));
                }
                elseif($this->ion_auth->in_group($editor_id)) {
                    redirect(base_url('/editor'));
                }
                elseif($this->ion_auth->in_group($contributor_id)) {
                    redirect(base_url('/contributor'));
                }
            }
            else {

                $this->session->set_flashdata('alert', $this->alert->set_alert(Alert::DANGER, $this->ion_auth->errors()));

                redirect('/login', 'refresh');

            }
        }
        else {
            $data['about']				= $this->model_about->get();

            $this->load->view("templates/_part_public/get_in/header", $data); 
            $this->load->view("v_public/get_in/log_in", $data); 
            $this->load->view("templates/_part_public/get_in/footer", $data); 
        }
    }

    public function signup() 
    {
        $tables                        = $this->config->item('tables', 'ion_auth');
        $identity_column               = $this->config->item('identity', 'ion_auth');

        // Start Form Validation]
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
            $group = array('3');
        }

        if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data, $group)) {

            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('alert', $this->alert->set_alert(Alert::SUCCESS, $this->ion_auth->messages()));
            redirect("auth/login", 'refresh');
        } 
        else {
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            if (!empty(validation_errors()) || $this->ion_auth->errors())
                $this->session->set_flashdata('alert', $this->alert->set_alert(Alert::DANGER, $data['message']));

            $data['first_name']       = array(
                'name' => 'first_name',
                'type' => 'text',
                'id' => 'first_name',
                'class' => 'input100',
                'placeholder' => 'First Name',
                'value' => $this->form_validation->set_value('first_name')
            );
            $data['last_name']        = array(
                'name' => 'last_name',
                'type' => 'text',
                'id' => 'last_name',
                'class' => 'input100',
                'placeholder' => 'Last Name',
                'value' => $this->form_validation->set_value('last_name')
            );
            $data['identity']         = array(
                'name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity')
            );
            $data['email']            = array(
                'name' => 'email',
                'type' => 'text',
                'id' => 'email',
                'class' => 'input100',
                'placeholder' => 'username@kolakaku.com',
                'value' => $this->form_validation->set_value('email')
            );
            $data['phone']            = array(
                'name' => 'phone',
                'type' => 'text',
                'id' => 'phone',
                'class' => 'input100',
                'placeholder' => '082123456789',
                'value' => $this->form_validation->set_value('phone')
            );
            $data['password']         = array(
                'name' => 'password',
                'type' => 'password',
                'id' => 'password',
                'class' => 'input100',
                'placeholder' => 'Password',
                'value' => $this->form_validation->set_value('password')
            );
            $data['password_confirm'] = array(
                'name' => 'password_confirm',
                'type' => 'password',
                'id' => 'password_confirm',
                'class' => 'input100',
                'placeholder' => 'Confirm Password',
                'value' => $this->form_validation->set_value('password_confirm')
            );

            $data['about']				= $this->model_about->get();

            $this->load->view("templates/_part_public/get_in/header", $data); 
            $this->load->view("v_public/get_in/sign_up", $data); 
            $this->load->view("templates/_part_public/get_in/footer", $data); 
        }
    }

    public function forgot_password() 
    {
        $data['about']				= $this->model_about->get();

        $this->load->view("page_get_in/view_forgot", $data); 
    }

    public function logout()
    {
        $this->data['title'] = "Logout";

        // log the user out
        $logout = $this->ion_auth->logout();

        // redirect them to the login page
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect(base_url(), 'refresh');
    }

}

?>