<?php

class Produto_model extends CI_Model
{

    function __construct() {

        parent::__construct();
    }

    public function addProdutoModel($data){

        return $this->db->insert('produto', $data);
                
    }

    public function ListModel(){

        $this->db->select('*');
        $this->db->from('produto');

        return $this->db->get()->result_array(); 

    }


}
