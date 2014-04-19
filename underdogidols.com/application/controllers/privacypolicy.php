<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacypolicy extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['title'] = "Privacy Policy | Underdog Idols";
        $this->data['content_header'] = content_page_header($this->pages['privacypolicy']);
		$this->template('privacypolicy');
	}

    public function __destruct()
    {
        parent::__destruct();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */