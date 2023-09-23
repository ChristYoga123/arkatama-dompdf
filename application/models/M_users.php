<?php 

class M_users extends CI_Model
{
    protected $table = "users";
    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $this->db->select("*")->limit(1);
        $this->db->from($this->table);
        $data = $this->db->get();

        return $data->result();
    }
}

?>