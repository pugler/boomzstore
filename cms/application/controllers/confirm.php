<?php

class Confirm extends Controller {

    function Confirm()
    {
        parent::Controller();
    }
    
    function index($id=null, $table=null)
    {  
			$data['title']		= 'Login';
			$data['id']			= $id;
			$data['table']		= $table;

			$this->load->view('confirm', $data);
    }

    function dodelete($where=null, $table=null)
    {
			$data['where'] = $where;
			$data['table'] = $table;
			if($where!='' AND $table!=''):
				$this->delete_model->deleteData($where, $table);
			endif;
			$this->load->view('dodelete', $data);

    }

}