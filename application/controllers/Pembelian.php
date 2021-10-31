<?php
class Pembelian extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-pembelian');
    }

    public function cetak()
    {
            $data =[
                'nama' => $this->input->post('nama'),
                'tlp' => $this->input->post('tlp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
                ];
        $this->load->view('data-pembelian', $data);
    }
}

?>;