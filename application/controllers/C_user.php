<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function index()
	{
        $data['berita']= $this->Model->berita_home();
        $this->load->view('user/header');		
        $this->load->view('user/home',$data);
        $this->load->view('user/footer');
        // print_r($data);
		// $this->load->view('layout/footer');		
// redirect('c_user');
    }
    public function blog()
    {
        $data['berita']=$this->Model->berita_user();
        $this->load->view('user/header');		
        $this->load->view('user/blog',$data);
        $this->load->view('user/footer');
        // print_r($data);
    }
    public function gallery()
    {
        $this->load->view('user/header');		
        $this->load->view('user/gallery');
        $this->load->view('user/footer');
    }
    public function contact()
    {
        $this->load->view('user/header');		
        $this->load->view('user/contact');
        $this->load->view('user/footer');
    }
    public function details_berita($id)
    {
        // $visitbulanini = $this->db->query("SELECT COUNT(hits) as total FROM statistik WHERE month(tanggal)='".date('m')."'")->row_array(); echo $visitbulanini['total'];
        
        $kode=$this->uri->segment(3);
        $data['details'] = $this->Model->details_berita($id);
        $this->load->view('user/header');
        $this->load->view('user/details_berita',$data);
        $this->load->view('user/footer');
        // print_r($data);
    }
    public function olahraga()
    {
        
        $this->load->view('user/olahraga', $data, FALSE);
        
    }
}
