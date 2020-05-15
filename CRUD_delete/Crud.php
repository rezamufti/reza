<?php 
    class Crud extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('m_data');
            $this->load->helper('url');
            
        }
        function index(){
            $data['tb_kedai'] = $this->m_data->tampil_data()->result();
            $this->load->view('v_tampil',$data);
        }
        function tambah(){
            $this->load->view('v_input');
        }
        function tambahAksi(){
            $pemilik = $this->input->post('pemilik');
            $jam_buka = $this->input->post('jam buka');
     
            $data = array(
                'pemilik' => $pemilik,
                'jam buka' => $jam_buka
                );
            $this->m_data->input_data($data,'tb_kedai');
            redirect('crud/index');
        }
        function hapus($id_kedai){
            $where = array('id_kedai' => $id_kedai);
            $this->m_data->hapus_data($where,'tb_kedai');
            redirect('crud/index');
        }
        function edit($id_kedai){
            $where = array('id_kedai' => $id_kedai);
            $data['tb_kedai'] = $this->m_data->edit_data($where,'tb_kedai')->result();
            $this->load->view('v_edit',$data);
        }
        function update(){
    
            $pemilik = $this->input->post('pemilik');
            $jam_buka = $this->input->post('jam buka');
         
            $data = array(
                'pemilik' => $pemilik,
                'jam buka' => $jam_buka
            );
         
            $where = array(
                'id_kedai' => $id_kedai
            );
         
            $this->m_data->update_data($where,$data,'tb_kedai');
            redirect('crud/index');
        }
    } 
    ?>