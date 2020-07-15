<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perhitungan_model', 'perhitungan');
    }

    public function index()
    {
        $get['criteria'] = $this->perhitungan->getCriteria();
        $get['applicant'] = $this->perhitungan->getApplicant();
        $get['applicant_value'] = $this->perhitungan->getApplicantValue();

        foreach ($get['criteria'] as $count) {
            $results['criteria'][] = $this->perhitungan->getMaxMin($count['sifat'], $count['id']);
        }

        foreach ($get['applicant'] as $count) {
            $results['value'][] = $this->perhitungan->getValue($count['id']);
        }

        foreach ($get['criteria'] as $count) {
            $results['norm'][] = $this->perhitungan->getNorm($results['criteria'][$count['id'] - 1]['weight'], $count['id']);
        }

        foreach ($get['criteria'] as $count) {
            $results['norm_weight'][] =
                $this->perhitungan->getNormWeight($count['sifat'], $results['criteria'][$count['id'] - 1]['weight'], $count['id']);
        }

        $data['results']['criteria'] = $results['criteria'];
        $data['results']['value'] = $results['value'];
        $data['results']['norm'] = $results['norm'];
        $data['results']['norm_weight'] = $results['norm_weight'];
        $data['count']['criteria'] = $this->perhitungan->getCountCriteria();
        $data['count']['applicant'] = $this->perhitungan->getCountApplicant();
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

                $this->perhitungan->insert_temp($weight);
            }
            $i++;
        }

        foreach ($get['applicant'] as $count) {
            $results['total'][] = $this->perhitungan->getV($count['id']);
        }

        $data['results']['total'] = $results['total'];

        foreach ($results['total'] as $total) {
            $hasil = array(
                'pelamar_id' => $total['pelamar_id'],
                'hasil' => $total['V']
            );

            $this->perhitungan->insert_hasil($hasil);
        }

        foreach ($get['applicant'] as $count) {
            $results['total'][] = $this->perhitungan->getV($count['id']);
        }

        $this->perhitungan->delete_temp();

        $this->load->view('index', $data);
    }
}
