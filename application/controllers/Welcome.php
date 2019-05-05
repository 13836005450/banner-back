<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome_model');
    }

    public function index()
	{
		$this->load->view('index');
	}

    public function getAllUri()
    {
        $allUris = $this->Welcome_model->getAllUri();

    }

    public function updateUri()
    {
        $menuUri = $this->input->post('menu');
        $banner1 = $this->input->post('banner1');
        $banner2 = $this->input->post('banner2');
        $banner3 = $this->input->post('banner3');
        $banner4 = $this->input->post('banner4');
        $tel = $this->input->post('tel');
        $this->Welcome_model->updateUri($menuUri,1);
        $this->Welcome_model->updateUri($banner1,2);
        $this->Welcome_model->updateUri($banner2,3);
        $this->Welcome_model->updateUri($banner3,4);
        $this->Welcome_model->updateUri($banner4,5);
        $this->Welcome_model->updateUri($tel,6);
    }
}
