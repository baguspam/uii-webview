<?php

date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];
$tgl_sekarang = date("Ymd");
$tgl_skrg     = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");



	//28 Oktober 2015
	function tgl_indo_nama($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	
	
	//28/10/2015
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = substr($tgl,5,2);
			$tahun = substr($tgl,0,4);
			return $tanggal.'/'.$bulan.'/'.$tahun;		 
	}
	
	//28102015
	function tgl_indo_tanpa_pemisah($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tanggal.''.$bulan.''.$tahun;		 
	}	

	//2015-10-28
	function tgl_inggris($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tahun.'-'.$bulan.'-'.$tanggal;		 
	}	
	
	//Kamis
	function nama_hari($tgl){
		$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$nmr_hari = date("w",strtotime($tgl));
		$nama_hari= $seminggu[$nmr_hari];
		return $nama_hari;
	}
	
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
function sel_bulan($bln){
				switch ($bln){
					case 1: 
						return "31";
						break;
					case 2:
						return "28";
						break;
					case 3:
						return "31";
						break;
					case 4:
						return "30";
						break;
					case 5:
						return "31";
						break;
					case 6:
						return "31";
						break;
					case 7:
						return "31";
						break;
					case 8:
						return "31";
						break;
					case 9:
						return "30";
						break;
					case 10:
						return "31";
						break;
					case 11:
						return "30";
						break;
					case 12:
						return "31";
						break;
				}
			} 
?>
