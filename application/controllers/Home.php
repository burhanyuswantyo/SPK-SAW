<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Spk_Model', 'spk');
	}

	public function index()
	{
		$get['criteria'] = $this->spk->getCriteria();
		$get['applicant'] = $this->spk->getApplicant();
		$get['applicant_value'] = $this->spk->getApplicantValue();

		foreach ($get['criteria'] as $count) {
			$results['criteria'][] = $this->spk->getMaxMin($count['sifat'], $count['id']);
		}

		foreach ($get['applicant'] as $count) {
			$results['value'][] = $this->spk->getValue($count['id']);
		}

		foreach ($get['criteria'] as $count) {
			$results['norm'][] = $this->spk->getNorm($results['criteria'][$count['id'] - 1]['weight'], $count['id']);
		}

		foreach ($get['criteria'] as $count) {
			$results['norm_weight'][] =
				$this->spk->getNormWeight($results['criteria'][$count['id'] - 1]['weight'], $count['id']);
		}

		$data['results']['criteria'] = $results['criteria'];
		$data['results']['value'] = $results['value'];
		$data['results']['norm'] = $results['norm'];
		$data['results']['norm_weight'] = $results['norm_weight'];
		$data['count']['criteria'] = $this->spk->getCountCriteria();
		$data['count']['applicant'] = $this->spk->getCountApplicant();
		$data['weights'] = $get['criteria'];


		$i = 0;
		while ($i < $data['count']['criteria']) {
			$j = 0;
			while ($j < $data['count']['applicant']) {
				$weight = array(
					'pelamar_id' => $results['norm_weight'][$i][$j]['id'],
					'kriteria_id' => $results['norm_weight'][$i][$j]['kriteria_id'],
					'norm' => $results['norm_weight'][$i][$j]['norm']
				);
				$j++;

				$this->spk->insert_temp($weight);
			}
			$i++;
		}

		foreach ($get['applicant'] as $count) {
			$results['total'][] = $this->spk->getV($count['id']);
		}

		$data['results']['total'] = $results['total'];

		foreach ($results['total'] as $total) {
			$hasil = array(
				'pelamar_id' => $total['pelamar_id'],
				'hasil' => $total['V']
			);

			$this->spk->insert_hasil($hasil);
		}

		echo '<pre>';
		var_dump($results['total']);
		echo '</pre>';

		$this->load->view('index', $data);
	}
}
