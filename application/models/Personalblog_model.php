<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Personalblog_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db->initialize();
    }

    function write($data)
    {
      /*
       writer, title, category, know, idea, problem, plan, describe, delete_yn
      */
      try {
        $sql = "CALL USP_PERSONAL_BLOG_WRITE(?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function view($data)
    {
      /*
       writer, id
      */
      try {
        $sql = "CALL USP_PERSONAL_BLOG_VIEW_ID(?, ?);";//"select * from personal_blog where writer='양민주';";//
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function alter($data)
    {
      /*
        id, writer, title, know, idea, problem, plan, describe, delete_yn
      */
        try {
          $sql = "CALL USP_PERSONAL_BLOG_ALTER(?, ?, ?, ?, ?, ?, ?, ?, ?);";
          $query = $this->db->query($sql, $data);
        }
        catch (Exception $e) {
          return $e;
        }

        $result = array();
        $result = $query->result_array();

        return $result;
    }
    function delete($data)
    {
      /*
        id
      */
      try {
        $sql = "CALL USP_PERSONAL_BLOG_DELETE(?);";
        $result = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      return $result;
    }

    function delete_category($data)
    {
      /*
        id, personal
      */
      try {
        $sql = "CALL USP_CATEGORY_DELETE(?, ?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }
      $result = array();
      $result = $query->result_array();
      return $result;
    }

    function write_category($data)
    {
      /*
       name, delete_yn, writer,group
      */
      try {
        $sql = "CALL USP_CATEGORY_WRITE(?, ?, ?, ?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }
      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function blog_list($data)
    {
      /*
        writer
      */
      try {
        $sql = "CALL USP_PERSONAL_BLOG_LIST(?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function category_list($data)
    {
      /*
        personal
      */
      try {
        $sql = "CALL USP_CATEGORY_LIST(?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function get_id_category($data)
    {
      /*
       name, group
      */
      try {
        $sql = "CALL USP_CATEGORY_GET_ID(?, ?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }
      $result = array();
      $result = $query->result_array();

      return $result;
    }

}
