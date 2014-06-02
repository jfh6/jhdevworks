<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product extends CI_Controller
{
    public function showProducts()
    {
        $a = $this->admin->listProducts();
        return $a;
    }
}