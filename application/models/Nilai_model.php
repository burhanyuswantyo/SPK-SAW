<?php

class Nilai_model extends CI_model
{
    public function getNilai()
    {
        return $this->db->get('tb_nilai_pelamar')->result_array();
    }

    public function getNilaiId($id)
    {
        $query = "
            SELECT `tb_kriteria`.`id`, `tb_kriteria`.`kriteria`, `tb_nilai_pelamar`.`nilai` 
            FROM `tb_kriteria` 
            JOIN `tb_nilai_pelamar` 
            ON `tb_kriteria`.`id` = `tb_nilai_pelamar`.`kriteria_id` 
            WHERE `tb_nilai_pelamar`.`pelamar_id` = 1
        ";

        return $this->db->query($query)->result_array();
    }

    public function update()
    {
        for ($i = 0; $i < count($this->input->post('id')); $i++) {
            $id = $this->input->post('id')[$i];
            $data = [
                'nilai' => $this->input->post('nilai')[$i]
            ];
            $this->db->update('tb_nilai_pelamar', $data, ['id' => $id]);
        }

        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
    }
}
