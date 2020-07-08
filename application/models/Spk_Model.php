<?php
class Spk_Model extends CI_Model
{
	public function getCriteria()
	{
		return $this->db->get('tb_kriteria')->result_array();
	}

	public function getApplicant()
	{
		return $this->db->get('tb_pelamar')->result_array();
	}

	public function getApplicantValue()
	{
		return $this->db->get('tb_nilai_pelamar')->result_array();
	}

	public function getCountCriteria()
	{
		return $this->db->get('tb_kriteria')->num_rows();
	}

	public function getCountApplicant()
	{
		return $this->db->get('tb_pelamar')->num_rows();
	}

	public function getMaxMin($id = 1)
	{
		$query = "
			SELECT MAX(`tb_nilai_pelamar`.`nilai`) AS 'max', `tb_kriteria`.`sifat`
			FROM `tb_pelamar`
			JOIN `tb_nilai_pelamar`
			ON `tb_pelamar`.`id` = `tb_nilai_pelamar`.`pelamar_id`
			JOIN`tb_kriteria`
			ON `tb_kriteria`.`id` = `tb_nilai_pelamar`.`kriteria_id`
			WHERE `tb_kriteria`.`id` = '$id'
		";

		return $this->db->query($query)->row_array();
	}

	public function getValue($id = 1)
	{
		$query = "
		SELECT `tb_pelamar`.`nama`, `tb_nilai_pelamar`.`kriteria_id`, `tb_nilai_pelamar`.`nilai` 
		FROM `tb_pelamar` 
		JOIN `tb_nilai_pelamar` 
		ON `tb_pelamar`.`id` = `tb_nilai_pelamar`.`pelamar_id` 
		JOIN`tb_kriteria` 
		ON `tb_kriteria`.`id` = `tb_nilai_pelamar`.`kriteria_id` 
		WHERE `tb_pelamar`.`id` = '$id' 
		";

		return $this->db->query($query)->result_array();
	}

	public function getNorm($max, $criteria_id)
	{
		$query = "
			SELECT `tb_pelamar`.`nama`, `tb_nilai_pelamar`.`kriteria_id`,`tb_nilai_pelamar`.`nilai`, (`tb_nilai_pelamar`.`nilai` / '$max') AS 'norm'
			FROM `tb_pelamar` 
			JOIN `tb_nilai_pelamar` 
			ON `tb_pelamar`.`id` = `tb_nilai_pelamar`.`pelamar_id` 
			JOIN`tb_kriteria` 
			ON `tb_kriteria`.`id` = `tb_nilai_pelamar`.`kriteria_id` 
			WHERE `tb_kriteria`.`id` = '$criteria_id'
		";

		return $this->db->query($query)->result_array();
	}

	public function getNormWeight($max, $criteria_id)
	{
		$query = "
			SELECT `tb_pelamar`.`id`, `tb_pelamar`.`nama`, `tb_nilai_pelamar`.`kriteria_id`, ((`tb_nilai_pelamar`.`nilai` / '$max') * `tb_kriteria`.`bobot`) AS 'norm'
			FROM `tb_pelamar` 
			JOIN `tb_nilai_pelamar` 
			ON `tb_pelamar`.`id` = `tb_nilai_pelamar`.`pelamar_id` 
			JOIN`tb_kriteria` 
			ON `tb_kriteria`.`id` = `tb_nilai_pelamar`.`kriteria_id` 
			WHERE `tb_kriteria`.`id` = '$criteria_id'
		";

		return $this->db->query($query)->result_array();
	}

	public function insert_temp($data)
	{
		$this->db->insert('tb_temp', $data);
	}

	public function getV($pelamar_id)
	{
		$query = "
			SELECT SUM(`norm`) AS 'V' FROM `tb_temp` WHERE `pelamar_id` = '$pelamar_id'
		";

		return $this->db->query($query)->row_array();
	}
}
