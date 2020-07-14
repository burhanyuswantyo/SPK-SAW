<?php

class Kriteria_model extends CI_model
{
    public function getKriteria()
    {
        return $this->db->get('tb_kriteria')->result_array();
    }

    public function getKriteriaId($id)
    {
        return $this->db->get_where('tb_kriteria', array('id' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'kriteria' => $this->input->post('kriteria'),
            'bobot' => $this->input->post('bobot'),
            'sifat' => $this->input->post('sifat')
        ];

        $this->db->insert('tb_kriteria', $data);
    }

    public function update($id)
    {
        $data = [
            'kriteria' => $this->input->post('kriteria'),
            'bobot' => $this->input->post('bobot'),
            'sifat' => $this->input->post('sifat')
        ];

        $this->db->update('tb_kriteria', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('tb_kriteria', ['id' => $id]);
    }
}
