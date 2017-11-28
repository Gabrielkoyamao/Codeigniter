<?php

class User_model extends CI_Model
{

    function __construct() {

        parent::__construct();
    }

    public function AddUserModel($data){
        
        // print_r( $data );
        // die;
        
        $add = array(

            'mail'          =>  $data['email'],
            'first_name'    =>  $data['first_name'],
            'last_name'     =>  $data['last_name']
        );

        $this->db->insert('users', $add);

        $id = $this->db->insert_id();

        $senhaSHA1 = array(
            'password' => sha1($id . $data['senha'])
        );

        $this->db->where('id', $id);
        $this->db->update('users', $senhaSHA1);

    }

    public function loginModel( $data ){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('mail', $data['email']);
        
        $query = $this->db->get()->row_array();

        return $query;
    }
}
