<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Contributor_Controller {

    private $current_page = 'settings';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('services/Services_users');
        $this->load->model("model_about");
        $this->load->model("model_users");
        $this->services = new Services_users;
        $this->name     = $this->services->name;
    }

    public function index()
    {
        $user['id']                         = $this->ion_auth->get_user_id();
        $form_value                         = $this->model_users->getWhere($user);

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

        $this->form_validation->set_rules(
            'phone', 
            $this->lang->line('create_user_validation_phone_label'), 
            'trim'
        );
        // End Form Validation       

        if ($this->input->post() != null) {
            if ($this->form_validation->run() === TRUE) {

                $additional_data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'phone' => $this->input->post('phone')
                );

                $update = $this->update($user['id'], $additional_data);

                if ($update) {
                    $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Data Berhasil Diubah"));
                    redirect("contributor/settings", 'refresh');
                }
            }
            else {
                $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
    
                if (!empty(validation_errors()) || $this->ion_auth->errors()) {
                    $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::DANGER, $data['message']));
                }
            }
        }

        $data["page_title"]                 = "Akun";
        $data['about']				        = $this->model_about->get();
        $data['user']				        = $form_value;
        
        $this->load->view('templates/_part_contributor/header', $data);
        $this->load->view('templates/_part_contributor/sidebar', $data);
        $this->load->view('templates/_part_contributor/topbar', $data);
        $this->load->view('v_contributor/settings', $data);
        $this->load->view('templates/_part_contributor/footer', $data);
        
    }

    public function change_password() {

        $user['id']                         = $this->ion_auth->get_user_id();
        $form_value                         = $this->model_users->getWhere($user);

        // Start Form Validation
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

        if ($this->input->post() != null) {
            if ($this->form_validation->run() === TRUE) {

                $additional_data = array(
                    'password' => $this->ion_auth_model->hash_password($this->input->post('password'), FALSE, FALSE)
                );

                $update = $this->update($user['id'], $additional_data);

                if ($update) {
                    $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::WARNING, "Password Berhasil Diubah"));
                    redirect("contributor/settings", 'refresh');
                }
            }
            else {
                $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
    
                if (!empty(validation_errors()) || $this->ion_auth->errors()) {
                    $this->session->set_flashdata('alert', $this->alert->set_alert_dialog(Alert::DANGER, $data['message']));
                }
            }
        }

        $data["page_title"]                 = "Akun";
        $data['about']				        = $this->model_about->get();
        $data['user']				        = $form_value;
        
        $this->load->view('templates/_part_contributor/header', $data);
        $this->load->view('templates/_part_contributor/sidebar', $data);
        $this->load->view('templates/_part_contributor/topbar', $data);
        $this->load->view('v_contributor/settings', $data);
        $this->load->view('templates/_part_contributor/footer', $data);
    }

    public function update($id, $data) {
        $insert = $this->model_users->update($id, $data);
        return $insert;
    }
    
}


?>