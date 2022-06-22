<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Create By ARYO
 */
class Mod_admin extends CI_Model
{
    public function count_all()
    {

        $this->db->from('aplikasi');
        return $this->db->count_all_results();
    }
    public function admin()
    {
        $query = $this->db->query("
        select * from tbl_user
        ");
        return $query;
    }
    public function post()
    {
        $query = $this->db->query("
        select * from post
        ");
        return $query;
    }
    public function postedit($id)
    {
        $query = $this->db->query("
        select * from post where id_post = " . $id . "
        ");
        return $query;
    }
}
