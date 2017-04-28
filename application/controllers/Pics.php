<?php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
        }

        
public function view($slug = "kittens")
{
        $data['title'] = $slug;
        $response = $this->pics_model->get_pics($slug); 
        $data['pics'] = $response->photos->photo;
        
        if (empty($data['pics']))
        {
                show_404();
        }
        $this->load->view('pics/index', $data);
}

        public function index()
{   
        $data['title'] = 'Cute Pics';        
        $response = $this->pics_model->get_pics();      
        $data['pics'] = $response->photos->photo;        
        $this->load->view('pics/index', $data);
}
}