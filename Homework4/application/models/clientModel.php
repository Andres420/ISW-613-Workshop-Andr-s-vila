<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
    }

    public function saveClient($post){
        $client_data = array();
        $client_data['id'] = $post['id'];
        $client_data['client_id'] = $post['client_id'];
        $client_data['name'] = $post['name'];
        $client_data['lastname'] = $post['lastname'];
        $client_data['cellphone'] = $post['cellphone'];
        if ($client_data['id'] > 0) {
            $this->db->where('id', $client_data['id']);
            $this->db->update('client', $client_data);
            //redirect('Client', 'refresh'); 
        } else {
            $this->db->insert('client',$client_data);
            //redirect('Client', 'refresh'); 
        }
        
            
        
    }
    public function deleteClient($get){        
            $this->db->where('id',$get['delete']);
            $this->db->delete('client');
            redirect('Client', 'refresh'); 

    }
}
