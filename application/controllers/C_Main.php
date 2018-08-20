<?php
	/**
	*
	*/
	class C_Main extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
			//$this->load->model('SampleModel');
		}

		public function index(){
			$this->load->view('index');
		}
		public function tampilevent(){
			$this->load->view('blog');
		}
		public function tampilachievement(){
			$this->load->view('Achievement');
		}
		public function tampilabout(){
			$this->load->view('About');
		}
		public function tampiljoin(){
			$this->load->view('jointrue');
		}
		public function tampiljoinfalse(){
			$this->load->view('joinfalse');
		}
		public function tampilarticle(){
			$this->load->view('Read-article');
		}
		public function tampilformjoin(){
			$this->load->view('Form_Join');
		}

	}
?>
