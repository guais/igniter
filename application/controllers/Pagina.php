<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct(){
        parent::__construct();
        
        $this->load->model('Exemplo_model', 'apelido'); 
    }
    
	public function index(){
        
        $dados['titulo'] = 'Início';
        
		$this->load->view('blog', $dados);    
	}
    
    public function contato(){
		$dados['titulo'] = 'Contato';
        
		$this->load->view('contato', $dados);    
	}
    
}
