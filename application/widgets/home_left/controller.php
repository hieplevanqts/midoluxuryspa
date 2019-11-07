<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_left_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){
		$data = array();
        /*begin content*/$data['product_noibat']=$this->load->widget('product_noibat');$data['news_nb']=$this->load->widget('news_nb');/*end content*/
		$this->load->view('common/left', $data);
    }
}