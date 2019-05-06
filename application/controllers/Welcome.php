<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome_model');
    }
//加载首页
    public function index()
    {
        $this->load->view('index');
    }
//获得所有链接
    public function getAllUri()
    {
        header("Access-Control-Allow-Origin: * ");
        $allUris = $this->Welcome_model->getAllUri();
        echo json_encode($allUris);

    }
//更新链接
    public function updateUri()
    {

        $menuUri = $this->input->post('menu');
        $banner1 = $this->input->post('banner1');
        $banner2 = $this->input->post('banner2');
        $banner3 = $this->input->post('banner3');
        $banner4 = $this->input->post('banner4');
        $tel = $this->input->post('tel');
        $this->Welcome_model->updateUri($menuUri, 1);
        $this->Welcome_model->updateUri($banner1, 2);
        $this->Welcome_model->updateUri($banner2, 3);
        $this->Welcome_model->updateUri($banner3, 4);
        $this->Welcome_model->updateUri($banner4, 5);
        $this->Welcome_model->updateUri($tel, 6);
        $this->load->view('success');
    }
//访问量+1
    public function updateTraffic()
    {
        header("Access-Control-Allow-Origin: * ");
        $this->Welcome_model->updateTraffic();
        echo 'success';
    }
//获得当前访问量
    public function getTraffic()
    {
        header("Access-Control-Allow-Origin: * ");
        $traffic = $this->Welcome_model->getTraffic();
        echo json_encode($traffic);
    }
}
