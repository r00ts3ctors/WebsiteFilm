<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_film extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_film_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_film/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_film/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_film/index.html';
            $config['first_url'] = base_url() . 'data_film/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_film_model->total_rows($q);
        $data_film = $this->Data_film_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_film_data' => $data_film,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_film/data_film_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_film_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idfilm' => $row->idfilm,
		'idunik' => $row->idunik,
		'judulfilm' => $row->judulfilm,
		'idkatagori' => $row->idkatagori,
		'tahunfilm' => $row->tahunfilm,
		'gambar_besar' => $row->gambar_besar,
		'gambar_thumbel' => $row->gambar_thumbel,
		'trailer_link' => $row->trailer_link,
		'diskripsi' => $row->diskripsi,
	    );
            $this->load->view('data_film/data_film_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_film'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_film/create_action'),
	    'idfilm' => set_value('idfilm'),
	    'idunik' => set_value('idunik'),
	    'judulfilm' => set_value('judulfilm'),
	    'idkatagori' => set_value('idkatagori'),
	    'tahunfilm' => set_value('tahunfilm'),
	    'gambar_besar' => set_value('gambar_besar'),
	    'gambar_thumbel' => set_value('gambar_thumbel'),
	    'trailer_link' => set_value('trailer_link'),
	    'diskripsi' => set_value('diskripsi'),
	);
        $this->load->view('data_film/data_film_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idunik' => $this->input->post('idunik',TRUE),
		'judulfilm' => $this->input->post('judulfilm',TRUE),
		'idkatagori' => $this->input->post('idkatagori',TRUE),
		'tahunfilm' => $this->input->post('tahunfilm',TRUE),
		'gambar_besar' => $this->input->post('gambar_besar',TRUE),
		'gambar_thumbel' => $this->input->post('gambar_thumbel',TRUE),
		'trailer_link' => $this->input->post('trailer_link',TRUE),
		'diskripsi' => $this->input->post('diskripsi',TRUE),
	    );

            $this->Data_film_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_film'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_film_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_film/update_action'),
		'idfilm' => set_value('idfilm', $row->idfilm),
		'idunik' => set_value('idunik', $row->idunik),
		'judulfilm' => set_value('judulfilm', $row->judulfilm),
		'idkatagori' => set_value('idkatagori', $row->idkatagori),
		'tahunfilm' => set_value('tahunfilm', $row->tahunfilm),
		'gambar_besar' => set_value('gambar_besar', $row->gambar_besar),
		'gambar_thumbel' => set_value('gambar_thumbel', $row->gambar_thumbel),
		'trailer_link' => set_value('trailer_link', $row->trailer_link),
		'diskripsi' => set_value('diskripsi', $row->diskripsi),
	    );
            $this->load->view('data_film/data_film_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_film'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idfilm', TRUE));
        } else {
            $data = array(
		'idunik' => $this->input->post('idunik',TRUE),
		'judulfilm' => $this->input->post('judulfilm',TRUE),
		'idkatagori' => $this->input->post('idkatagori',TRUE),
		'tahunfilm' => $this->input->post('tahunfilm',TRUE),
		'gambar_besar' => $this->input->post('gambar_besar',TRUE),
		'gambar_thumbel' => $this->input->post('gambar_thumbel',TRUE),
		'trailer_link' => $this->input->post('trailer_link',TRUE),
		'diskripsi' => $this->input->post('diskripsi',TRUE),
	    );

            $this->Data_film_model->update($this->input->post('idfilm', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_film'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_film_model->get_by_id($id);

        if ($row) {
            $this->Data_film_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_film'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_film'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idunik', 'idunik', 'trim|required');
	$this->form_validation->set_rules('judulfilm', 'judulfilm', 'trim|required');
	$this->form_validation->set_rules('idkatagori', 'idkatagori', 'trim|required');
	$this->form_validation->set_rules('tahunfilm', 'tahunfilm', 'trim|required');
	$this->form_validation->set_rules('gambar_besar', 'gambar besar', 'trim|required');
	$this->form_validation->set_rules('gambar_thumbel', 'gambar thumbel', 'trim|required');
	$this->form_validation->set_rules('trailer_link', 'trailer link', 'trim|required');
	$this->form_validation->set_rules('diskripsi', 'diskripsi', 'trim|required');

	$this->form_validation->set_rules('idfilm', 'idfilm', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_film.php */
/* Location: ./application/controllers/Data_film.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-07-18 15:50:45 */
/* http://harviacode.com */