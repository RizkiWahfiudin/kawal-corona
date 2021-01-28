<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends WahfiudinController {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		include APPPATH.'views/tool/function.php';
	}
	public function index() {
		$d['title']= 'Beranda';
		$indonesia= file_get_contents('https://api.kawalcorona.com/indonesia');
		$d['total_indonesia']= json_decode($indonesia);

		$provinsi= file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		$d['total_provinsi']= json_decode($provinsi);
		
		$date= date("d-m-Y H:i:s");
		$lastupdate= explode("-", $date);
		$d['last_update']= $lastupdate[0].' '.bulan($lastupdate[1]).' '.$lastupdate[2].' WIB';
		
		$this->template->covid19('home',$d);
	}
	public function allglobal() {
		$d['title']= 'Global';
		$positifglobal= file_get_contents('https://api.kawalcorona.com/positif');
		$d['positif_global']= json_decode($positifglobal);
		
		$sembuhglobal= file_get_contents('https://api.kawalcorona.com/sembuh');
		$d['sembuh_global']= json_decode($sembuhglobal);
		
		$meninggalglobal= file_get_contents('https://api.kawalcorona.com/meninggal');
		$d['meninggal_global']= json_decode($meninggalglobal);
		
		$allglobal= file_get_contents('https://api.kawalcorona.com');
		$d['data_global']= json_decode($allglobal);

		$date= date("d-m-Y H:i:s");
		$lastupdate= explode("-", $date);
		$d['last_update']= $lastupdate[0].' '.bulan($lastupdate[1]).' '.$lastupdate[2].' WIB';
		
		$this->template->covid19('global',$d);
	}
	public function hospital() {
		$d['title']= 'Daftar Rumah Sakit Rujukan';
		$rumahsakit= file_get_contents('https://dekontaminasi.com/api/id/covid19/hospitals');
		$d['rumah_sakit']= json_decode($rumahsakit);

		$this->template->covid19('hospital',$d);
	}
}