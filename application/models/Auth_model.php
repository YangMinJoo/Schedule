<?php
class Auth_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db->initialize();
    }

    function gets()
    {
        return $this->db->query("SELECT * FROM user")->result();
    }

    function add($option)
    {
        $this->db->set('userid', $option['userid']);
        $this->db->set('username', $option['username']);
        $this->db->set('password', $option['password']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        return $result;
    }

    function get($option)
    {
       $result = $this->db->get_where('user', array('userid'=>$option['userid']))->row();
       var_dump($this->db->last_query());
       return $result;
    }
}
