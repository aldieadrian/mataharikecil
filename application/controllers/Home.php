<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
    {
        $this->load->view('pages/homepage');
    }

    public function about_foundation()
    {
        $this->load->view('pages/about/about_foundation');
    }

    public function about_bandung()
    {
        $this->load->view('pages/about/about_bandung');
    }

    public function about_jakarta()
    {
        $this->load->view('pages/about/about_jakarta');
    }

    public function programs_vtp()
    {
        $this->load->view('pages/programs/program_vtp');
    }

    public function programs_mc()
    {
        $this->load->view('pages/programs/program_mc');
    }

    public function programs_iys()
    {
        $this->load->view('pages/programs/program_iys');
    }

    public function vtp_bandung()
    {
        $this->load->view('pages/voluntary/vtp_bandung');
    }

    public function vtp_jakarta()
    {
        $this->load->view('pages/voluntary/vtp_jakarta');
    }

    public function documentations()
    {
        $this->load->view('pages/documentations');
    }

    public function contact()
    {
        $this->load->view('pages/contact');
    }

    public function events()
    {
        $this->load->view('pages/maintenance');
    }


}


?>