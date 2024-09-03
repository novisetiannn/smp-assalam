<?php

class Pegawai extends CI_Model {

    function get_data($table){
        return $this->db->get($table);
    }
    function insert_data($table, $data){
        return $this->db->insert($table, $data);
    }

}
