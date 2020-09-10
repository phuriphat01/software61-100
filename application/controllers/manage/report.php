<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    public function __construct(){
        parent::__construct();
        echo "Constructor"."</br>";
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "Report Index";
    }
    public function _hello()
    {
        echo "</br>"."Hello world";
    }
    public function showname($name="john",$lastname="wick"){
        echo "My name is " .$name."".$lastname;
        $this->_hello();
	}
	public function showview(){
		$this->load->view("hello_view");
		$this->load->view("hello_view");
		$this->load->view("hello_view");
	}
	public function showuser(){
		$data['name']="Mario";
		$data['lastname'] = "MaoLoer";
		$data['age'] = 18;
		$this->load->view("user_page",$data);
	}
	public function getuser($p1=null,$p2=null,$p3=null){
		$data['name']=$p1;
		$data['lastname'] = $p2;
		$data['age'] = $p3;
		$this->load->view("user_page",$data);
	}
	public function showbooks(){
		$data["books"] = array("Java","Kotlin","PHP");
		$this->load->view("books_page",$data);
	}
}
