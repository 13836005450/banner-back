<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    public function getAllUri()
    {
        $sql = "SELECT * FROM t_banner";
        return $this->db->query($sql)->result();
    }

    public function updateUri($uri,$id)
    {
        $sql = "UPDATE t_banner
                set uri = '$uri'
                where id = $id";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function updateTraffic()
    {
        $sql = "update t_traffic set traffic=traffic+1";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function getTraffic()
    {
        $sql = "SELECT * FROM t_traffic";
        return $this->db->query($sql)->row();
    }
}