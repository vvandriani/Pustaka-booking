<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    // function check data
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function checkData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function grtUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}