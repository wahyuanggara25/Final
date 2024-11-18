<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function render_page($content, $data = NULL)
	{
		$data['head'] = $this->load->view('head', $data, TRUE);
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['js'] = $this->load->view('js', $data, TRUE);
		$data['content'] = $this->load->view($content, $data, TRUE);
		$data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
		$data['footer'] = $this->load->view('footer', $data, TRUE);
		$this->load->view('template', $data);
	}
}
