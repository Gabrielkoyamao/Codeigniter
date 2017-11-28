<?php

class Produto_list_model extends CI_Model
{

    function __construct() {

        parent::__construct();
    }

    public function listar(){

        $query = $this->db->query("SELECT nome, preco FROM produto");

        return $query->result_array();

    }   

}
