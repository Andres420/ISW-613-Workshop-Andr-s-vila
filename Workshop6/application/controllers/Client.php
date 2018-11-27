<?php
class Client extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('client_model');
    }
    function index(){
        $this->load->view('client_view');
    }
 
    function client_data(){
        $data=$this->client_model->client_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->client_model->save_client();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->client_model->update_client();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->client_model->delete_client();
        echo json_encode($data);
    }
 
}