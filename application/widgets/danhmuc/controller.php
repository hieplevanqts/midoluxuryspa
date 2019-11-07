<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhmuc_widget extends MY_Widget
{
    // Nhận 2 biến truyền vào
    function index(){

			$data = array();
            $data['cate_all'] = $this->system_model->get_data('product_category',array(
            //'home' => 1,
            'lang' => $this->language,
            'parent_id' => 0
            ),array('sort' => 'asc'));
            foreach ($data['cate_all'] as $key => $cat) {
                $data['cate_all'][$key]->cat_sub =  $this->system_model->get_data('product_category',array(
                //'home' => 1,
                'lang' => $this->language,
                'parent_id' => $cat->id
                ),array('sort' => 'asc'));
            }
             $data['cate_news'] = $this->system_model->get_data('news_category',array(
                'lang' => $this->language,
                'parent_id' => 0
                ),array('sort' => 'asc'));
             foreach ($data['cate_news'] as $key => $cat) {
                $data['cate_news'][$key]->cat_sub =  $this->system_model->get_data('news_category',array(
                //'home' => 1,
                'lang' => $this->language,
                'parent_id' => $cat->id
                ),array('sort' => 'asc'));
            }
			$this->load->view('view',$data);
    }
}