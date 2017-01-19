<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
public function sayHello()
{
    //you should not echo anything from controlller
    echo 'This is sayHello function in Test controller';
}

public function index()
{
    //you should not echo anything from controlller
    echo 'This is index function in Test controller';
}

public function second()
{
    $data['fname'] = 'Jim';
    $data['lname'] = 'Jones';
    $this->load->view('test/second', $data); //name of the folder inside views and then the php file name
}

public function showNames()
{
    $this->load->model('Test_model');
    $data['customers']=$this->Test_model->getCustomer();
    $this->load->view('test/showNames', $data);
}

}