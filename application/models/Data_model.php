<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
    function insert_data($table,$data) {
        $this->db->insert($table,$data);
    }
    function get_table_data($table) {
        $res=$this->db->get($table);
        return $res->result_array();
    }
    function get_modify_data($table,$id){
        $this->db->where('id',$id);
        $res=$this->db->get($table);
        $data=$res->result_array();
        return $data[0];
    }
    function delete_record($table,$id) {
        $this->db->where('id',$id);
        $this->db->delete($table);
    }
    function update_data($table,$data,$id){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }
}
