<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends WahfiudinController {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		include APPPATH.'views/tool/function.php';
	}
	public function index(){
		$d['title']= 'Beranda';
		$indonesia= file_get_contents('https://api.kawalcorona.com/indonesia');
		$d['total_indonesia']= json_decode($indonesia);

		$provinsi= file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		$d['total_provinsi']= json_decode($provinsi);
		
		// $lastupdate = file_get_contents('https://api.kawalcorona.com');
		// $d['last_update']= json_decode($lastupdate);
		// $lastupdate = NULL;
		// foreach ($d['last_update'][19] as $key => $value) {
		// 	$lastupdate = date("Y-m-d H:i:s", 1072200600);
		// }
		$date= date("d-m-Y H:i:s");
		$lastupdate= explode("-", $date);
		$d['last_update']= $lastupdate[0].' '.bulan($lastupdate[1]).' '.$lastupdate[2].' WIB';
		// var_dump($d['last_update']);
		
		$this->template->covid19('home',$d);
	}
	public function allglobal(){
		$d['title']= 'Global';
		//positif global
		$positifglobal= file_get_contents('https://api.kawalcorona.com/positif');
		// $positifglobal= file_get_contents(base_url('corona/positif'));
		$d['positif_global']= json_decode($positifglobal);
		//sembuh global
		$sembuhglobal= file_get_contents('https://api.kawalcorona.com/sembuh');
		// $sembuhglobal= file_get_contents(base_url('corona/sembuh'));
		$d['sembuh_global']= json_decode($sembuhglobal);
		//meninggal global
		$meninggalglobal= file_get_contents('https://api.kawalcorona.com/meninggal');
		// $meninggalglobal= file_get_contents(base_url('corona/meninggal'));
		$d['meninggal_global']= json_decode($meninggalglobal);
		//global
		$allglobal= file_get_contents('https://api.kawalcorona.com');
		// $allglobal= file_get_contents(base_url('corona/global'));
		$d['data_global']= json_decode($allglobal);

		$date= date("d-m-Y H:i:s");
		$lastupdate= explode("-", $date);
		$d['last_update']= $lastupdate[0].' '.bulan($lastupdate[1]).' '.$lastupdate[2].' WIB';
		$this->template->covid19('global',$d);
	}
}