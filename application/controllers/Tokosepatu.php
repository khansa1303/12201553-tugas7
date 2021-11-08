<?php
class tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[1]',
            [
                'required' => 'Isikan Nama',
                'min_length' => 'Nama Terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules(
            'no',
            'no hp',
            'required|min_length[9]',
            [
                'required' => 'Isikan Nomor HP',
                'min_length' => 'Nomor Terlalu Pendek'
            ]
        );

        if ($this->form_validation->run() != true)
        {
            $this->load->view('view-form-tokosepatu');
        }
        else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'size' => $this->input->post('size'),
                'harga' => $this->input->post('harga'),
            ];

            if ($this->input->post('merk') == "nike"){
                $data['harga'] = 375000;
            } elseif ($this->input->post('merk') == "adidas"){
                $data['harga'] = 300000;
            } elseif ($this->input->post('merk') == "kickers"){
                $data['harga'] = 250000;
            } elseif ($this->input->post('merk') == "eiger"){
                $data['harga'] = 275000;
            } elseif ($this->input->post('merk') == "bucherri"){
                $data['harga'] = 400000;
            }

            $this->load->view('view-data-tokosepatu', $data);
        }
    }
}