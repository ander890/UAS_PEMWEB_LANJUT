<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
    }

	public function index()
	{        
        $data["data_mahasiswa"] = $this->Mahasiswa_model->getAll();
		$this->load->view('mahasiswa/index', $data);
	}

    public function add()
	{        
        if(!@$_POST){
            $this->load->view('mahasiswa/add');
        }else{
            $this->Mahasiswa_model->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa berhasil disimpan.</div>');
            redirect("mahasiswa");
        }
	}

    public function edit($id = null){        
        if(!$id){
            redirect("mahasiswa");
        }

        if(!@$_POST){
            $data["data_mahasiswa"] = $this->Mahasiswa_model->getById($id);
            if(!$data["data_mahasiswa"]){
                redirect("mahasiswa");
            }

            $this->load->view('mahasiswa/edit', $data);
        }else{
            $this->Mahasiswa_model->update($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa berhasil diedit.</div>');
            redirect("mahasiswa/edit/".$id);
        }
	}

    public function hapus($id = null)
	{        
        if(!$id){
            redirect("mahasiswa");
        }

        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa berhasil dihapus.</div>');
        redirect("mahasiswa");
	}
}
