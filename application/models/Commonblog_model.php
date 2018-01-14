<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Commonblog_model extends CI_Model {

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
        $sql = "CALL USP_COMMON_BLOG_WRITE(?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function write_comment($data)
    {
      /*
       board_id, writer, title, content, group, delete_yn
      */
      try {
        $sql = "CALL USP_COMMON_BLOG_COMMENT_WRITE(?, ?, ?, ?, ?, ?);";
        $result = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      return $result;
    }

    function view($data)
    {
      /*
       id
      */
      try {
        $sql = "CALL USP_COMMON_BLOG_VIEW_ID(?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();

      return $result;
    }

    function view_comment($data)
    {
      /*
       id
      */
      try {
        $sql = "CALL USP_COMMON_BLOG_VIEW_COMMENT_ID(?);";
        $query = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      $result = array();
      $result = $query->result_array();
      //print_r($result);
      return $result;
    }

    function write_category($data)
    {
      /*
       name, delete_yn, writer, group
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

    function blog_list()
    {
      try {
        $sql = "CALL USP_COMMON_BLOG_LIST;";
        $query = $this->db->query($sql);
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
         common
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

    function alter($data)
    {
      /*
        id, writer, title, know, idea, problem, plan, describe, delete_yn
      */
        try {
          $sql = "CALL USP_COMMON_BLOG_ALTER(?, ?, ?, ?, ?, ?, ?, ?, ?);";
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
        $sql = "CALL USP_COMMON_BLOG_DELETE(?);";
        $result = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      return $result;
    }

    function comment_delete($data)
    {
      /*
        id
      */
      try {
        $sql = "CALL USP_COMMON_BLOG_COMMENT_DELETE(?);";
        $result = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

      return $result;
    }

    function comment_delete_one($data)
    {
      /*
        id
      */
      try {
        $sql = "CALL USP_COMMON_BLOG_COMMENT_DELETE_ONE(?);";
        $result = $this->db->query($sql, $data);
      }
      catch (Exception $e) {
        return $e;
      }

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
