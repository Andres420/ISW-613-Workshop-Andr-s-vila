<?php
class Client_model extends CI_Model{
 
    function client_list(){
        $hasil=$this->db->get('clients');
        return $hasil->result();
    }
 
    function save_client(){
        $data = array(
                'id_card'  => $this->input->post('id_card'), 
                'name'  => $this->input->post('name'), 
                'lastname' => $this->input->post('lastname'),
                'cellphone' => $this->input->post('cellphone'), 
            );
        $result=$this->db->insert('clients',$data);
        return $result;
    }

    function update_client(){
        $id=$this->input->post('id');
        $id_card=$this->input->post('id_card');
        $name=$this->input->post('name');
        $lastname=$this->input->post('lastname');
        $cellphone=$this->input->post('cellphone');
 
        $this->db->set('id_card', $id_card);
        $this->db->set('name', $name);
        $this->db->set('lastname', $lastname);
        $this->db->set('cellphone', $cellphone);
        $this->db->where('id', $id);
        $result=$this->db->update('clients');
        return $result;
    }
 
    function delete_client(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('clients');
        return $result;
    }
     
}