<?php

class Pelamar_model extends CI_model
{
    public function getPelamar()
    {
        return $this->db->get_where('tb_pelamar', array('is_active' => 1))->result_array();
    }

    public function getPelamarId($id)
    {
        return $this->db->get_where('tb_pelamar', array('id' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'periode' => $this->input->post('periode')
        ];

        $this->db->insert('tb_pelamar', $data);
    }

    public function update($id)
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'periode' => $this->input->post('periode')
        ];

        $this->db->update('tb_pelamar', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('tb_pelamar', ['id' => $id]);
    }
}
