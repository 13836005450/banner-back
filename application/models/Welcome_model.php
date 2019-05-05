<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    public function getAllUri()
    {
        $sql = "SELECT * FROM t_banner where id=1 or id=2";
        return $this->db->query($sql)->result();
    }

    public function updateUri($uri,$id)
    {
        $sql = "UPDATE t_banner a
                set a.uri = $uri
                where id = $id";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
}