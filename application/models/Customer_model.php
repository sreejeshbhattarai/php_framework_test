<?php
Class Customer_model extends CI_Model{

    public function getCustomers(){
        $this->db->select('fname', 'lname');
        $this->db->from('Customers');
        return $this->db->get()->result_array;
    }
}

?>