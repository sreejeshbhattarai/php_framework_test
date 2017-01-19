<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Customer extends CI_Controller
{
    public function showCustomers()
    {
        $this->load->model('Customer_model');
        $data['customer']=$this->Customer_model->getCustomers();
        $this->load->view('customer/showcustomers', $data);
    }
}