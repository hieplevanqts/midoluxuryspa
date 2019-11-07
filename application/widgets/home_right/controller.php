<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_right_widget extends MY_Widget
{
    // sibar bên phải
    function index(){

			$data = array();
			/*begin content*/$data['danhmuc']=$this->load->widget('danhmuc');$data['support']=$this->load->widget('support');/*end content*/

		$this->load->view('common/right', $data);
    }
}