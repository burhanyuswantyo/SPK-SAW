<?php

class Hasil_model extends CI_model
{
    public function getHasil()
    {
        $query = "
            SELECT `tb_pelamar`.`nik`, `tb_pelamar`.`nama`, `tb_pelamar`.`periode`, `tb_hasil`.`hasil`, `tb_pelamar`.`is_active`
            FROM `tb_pelamar`
            JOIN `tb_hasil`
            ON `tb_pelamar`.`id` = `tb_hasil`.`pelamar_id`
            WHERE `tb_pelamar`.`is_active` = 0
            ORDER BY `tb_hasil`.`hasil` DESC
        ";

        return $this->db->query($query)->result_array();
    }

    public function getHasilPeriod($period)
    {
        $query = "
            SELECT `tb_pelamar`.`nik`, `tb_pelamar`.`nama`, `tb_pelamar`.`periode`, `tb_hasil`.`hasil`, `tb_pelamar`.`is_active`
            FROM `tb_pelamar`
            JOIN `tb_hasil`
            ON `tb_pelamar`.`id` = `tb_hasil`.`pelamar_id`
            WHERE `tb_pelamar`.`is_active` = 0 AND `tb_pelamar`.`periode` = '$period'
            ORDER BY `tb_hasil`.`hasil` DESC
        ";

        return $this->db->query($query)->result_array();
    }

    public function insert()
    {
        $data = [
            'kriteria' => $this->input->post('kriteria'),
            'bobot' => $this->input->post('bobot'),
            'sifat' => $this->input->post('sifat')
        ];

        $this->db->insert('tb_hasil', $data);
    }
}
