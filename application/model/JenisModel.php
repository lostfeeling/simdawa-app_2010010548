<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisModel extends CI_Model
{

    private $tabel = "jenis_beasiswa";
    public function get_jenis()
    {
        return $this->db->get($this->tabel)->result();
    }
}
