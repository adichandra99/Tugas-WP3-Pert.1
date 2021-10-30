<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function index()
	{
		$this->load->view('welcome message');
	}

	public function halo()
	{
		echo "<h1> MyBio </h1>";
        echo "Nama         : Adi Chandra Putra <br>
        Tempat Lahir    : Bekasi <br>
        Tanggal Lahir   : 06 April 1999";
	}
}
