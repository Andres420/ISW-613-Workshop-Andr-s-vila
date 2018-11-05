<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clientModel');
    }

	public function index()
	{
		$this->load->view('client');
    }
    
    public function saveClient(){
        if($_POST){
            $this->clientModel->saveClient($_POST);
        }
        $this->load->view('client');
    }

    public function deleteClient(){
        $this->clientModel->deleteClient($_GET);
        $this->load->view('client');
    }
}
