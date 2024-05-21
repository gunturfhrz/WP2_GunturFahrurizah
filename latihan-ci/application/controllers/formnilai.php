<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formnilai extends CI_Controller {
	
	public function index()
	{
		$this->load->view('view-form-nilaimhs');
	}
	public function cetak()
	{
		$absen=$this->input->post('absen');
		$tugas=$this->input->post('tugas');
		$uts=$this->input->post('uts');
		$uas=$this->input->post('uas');

		$total=($absen*0.2)+($tugas*0.25)+($uts*0.25)+($uas*0.3);
		if ($total>=80)
		{
			$grade='A';
			$keterangan='lulus';
		}
		elseif  ($total>=70)
		{
			$grade='B';
			$keterangan='lulus';
		}
		elseif  ($total>=60)
		{
			$grade='C';
			$keterangan='lulus';
		}
		else
		{
			$grade='D';
			$keterangan='Tidak Lulus';
		}

		$data=[ 'nim'=>$this->input->post('nim'),
				'nama'=>$this->input->post('nama'),
				'kelas'=>$this->input->post('kelas'),
				'matakuliah'=>$this->input->post('matakuliah'),
				'sks'=> $this->input->post('sks'),
				'absen'=>$absen,
				'tugas'=>$tugas,
				'uts'=>$uts,
				'uas'=>$uas,
				'total'=>$total,
				'grade'=>$grade,
				'keterangan'=>$keterangan,
			];

		$this->load->view('view-tampil-nilaimhs',$data);
	}
}
