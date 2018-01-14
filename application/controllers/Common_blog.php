<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_blog extends CI_Controller
{
  private $menu = "common";
  private $writer;
  private $blog_id;

  public function __construct()
  {
	parent::__construct();

    $this->load->library('form_validation');
    $this->load->model('commonblog_model');
    $this->writer = $this->session->userdata('user_name');
    if($this->input->get('id') != null) {
        $this->blog_id = $this->input->get('id');
    }
  }

  function index()
  {
    $data['menu'] = $this->menu;
    $this->load->view('include/header', $data);
    $this->load->view('common_blog/list');
    $this->load->view('include/footer');
  }

  function write()
  {
    $result =  $this->commonblog_model->category_list(array(
      'group' => 'common'
    ));
    $data['menu'] = $this->menu;
    $data['category_list'] = $result;
    $this->load->view('include/header', $data);
    $this->load->view('common_blog/write', $data);
    $this->load->view('include/footer');
  }

  //게시글 등록 후 id반환
  function write_api()
  {
    $this->form_validation->set_rules('title', 'title', 'trim|required|max_length[100]');
    $this->form_validation->set_rules('category_name', 'category_name', 'trim|max_length[20]');
    $this->form_validation->set_rules('know', 'know', 'trim|max_length[1000]');
    $this->form_validation->set_rules('idea', 'idea', 'trim|max_length[2000]');
    $this->form_validation->set_rules('problem', 'problem', 'trim|max_length[1000]');
    $this->form_validation->set_rules('plan', 'plan', 'trim|max_length[1000]');
    $this->form_validation->set_rules('describe', 'describe', 'trim|max_length[5000]');

    if($this->form_validation->run() === true)
    {
        if($this->input->post('category_name') != "") //카테고리를 새로 입력한경우
        {
          $category_id = $this->commonblog_model->write_category(array(
            'category' => $this->input->post('category_name'),
            'delete_yn' => 'N',
            'writer' => $this->writer,
            'group' => 'common'
          ));
        }

        else if ($this->input->post('category_list') != "") //카테고리를 선택한경우
        {
          $category_id = $this->commonblog_model->get_id_category(array(
            'name' => $this->input->post('category_list'),
            'group' => 'common'
          ));
        }

        else
        {
          $category_id[0]['id'] = "카테고리 없음";
        }
        //print_r($category_id);
      $result= $this->commonblog_model->write(array(
        'writer' => $this->writer,
        'title' => $this->input->post('title'),
        'category' => $category_id[0]['id'],
        'know' => $this->input->post('know'),
        'idea' => $this->input->post('idea'),
        'problem' => $this->input->post('problem'),
        'plan' => $this->input->post('plan'),
        'describe' => $this->input->post('describe'),
        'delete_yn' => "N"
      ));
      redirect('common_blog_view?id='.$result[0]['id'], 'refresh');
    }
    else
    {
        redirect('/common_blog_write');
    }
  }
  // 전달받은 id의 값과 이름을 이용하여 게시글 반환
  function view()
  {
    if($this->input->get('id') != null) {
        $this->blog_id = $this->input->get('id');
    }
    $username = $this->session->userdata('user_name');
    $result =  $this->commonblog_model->view(array($this->blog_id));
    $result_comment = $this->commonblog_model->view_comment(array($this->blog_id));
    //print_r($blog_id);
    //print_r($result_comment);
    $describe = nl2br($result[0]['describe']);
    if($result != null){
        $data['writer'] = $result[0]['writer'];
        $data['write_date'] = $result[0]['write_date'];
        $data['title'] = $result[0]['title'];
        $data['category'] = $result[0]['category'];
        $data['know'] = $result[0]['know'];
        $data['idea'] = $result[0]['idea'];
        $data['problem'] = $result[0]['problem'];
        $data['plan'] = $result[0]['plan'];
        $data['describe'] = $describe;
        $data['write_date_month'] = substr($result[0]['write_date'], 5, 2);
        $data['write_date_day'] = substr($result[0]['write_date'], 8, 2);
        $data['blog_id'] = $this->blog_id;
    }
    else {
        $data['writer'] = "";
        $data['write_date'] = "";
        $data['title'] = "";
        $data['category'] = "";
        $data['know'] = "";
        $data['idea'] = "";
        $data['problem'] = "";
        $data['plan'] = "";
        $data['describe'] = "";
        $data['write_date_month'] = "";
        $data['write_date_day'] = "";
        $data['blog_id'] = "";
    }
    //print_r($result_comment);
    $data['menu'] = $this->menu;
    $this->load->view('include/header', $data);
    $data['comment'] = $result_comment;
    $this->load->view('common_blog/view', $data);
    $this->load->view('include/footer');
  }

  function blog_list()
  {
      $result =  $this->commonblog_model->blog_list();
      $category_list = $this->commonblog_model->category_list(array('group'=> "common"));

      $data['menu'] = $this->menu;
      $this->load->view('include/header', $data);
      $data['list'] = $result;
      $data['category_list'] = $category_list;
      $this->load->view('common_blog/list', $data);
      $this->load->view('include/footer');
  }

  function comment_write_api()
  {
    $this->form_validation->set_rules('comment_title', 'comment_title', 'trim|required|max_length[100]');
    $this->form_validation->set_rules('comment_content', 'comment_content', 'trim|required|max_length[500]');

    if($this->form_validation->run() === true)
    {
      $result= $this->commonblog_model->write_comment(array(
        'blog_id' => $this->input->post('blog_id'),
        'writer' => $this->writer,
        'title' => $this->input->post('comment_title'),
        'content' => $this->input->post('comment_content'),
        'group' => 'common',
        'delete_yn' => 'N'
      ));
      redirect('common_blog_view?id='.$this->input->post('blog_id'), 'refresh');
    }
    else
    {
        redirect('/common_blog_list');
    }
  }

  //입력한 값 보여줌
  function alter()
  {
    $this->blog_id = $this->input->get('id');
    $result =  $this->commonblog_model->view(array('blog_id' => $this->blog_id));
    //print_r($result);
    if($result != null){
        $data['id'] = $this->blog_id;
        $data['writer'] = $result[0]['writer'];
        $data['write_date'] = $result[0]['write_date'];
        $data['title'] = $result[0]['title'];
        $data['category'] = $result[0]['category'];
        $data['know'] = $result[0]['know'];
        $data['idea'] = $result[0]['idea'];
        $data['problem'] = $result[0]['problem'];
        $data['plan'] = $result[0]['plan'];
        $data['describe'] = $result[0]['describe'];
    }else {
      $data['id'] = "";
      $data['writer'] = "";
      $data['write_date'] = "";
      $data['title'] = "";
      $data['category'] = "";
      $data['know'] = "";
      $data['idea'] = "";
      $data['problem'] = "";
      $data['plan'] = "";
      $data['describe'] = "";
    }
    $data['menu'] = $this->menu;
    $this->load->view('include/header', $data);
    $this->load->view('common_blog/alter', $data);
    $this->load->view('include/footer');
  }

  function alter_api()
  {
    $this->form_validation->set_rules('title', 'title', 'trim|required|max_length[100]');
    $this->form_validation->set_rules('know', 'know', 'trim|max_length[1000]');
    $this->form_validation->set_rules('idea', 'idea', 'trim|max_length[2000]');
    $this->form_validation->set_rules('problem', 'problem', 'trim|max_length[1000]');
    $this->form_validation->set_rules('plan', 'plan', 'trim|max_length[1000]');
    $this->form_validation->set_rules('describe', 'describe', 'trim|max_length[5000]');

    if($this->form_validation->run() === true)
    {
      $result= $this->commonblog_model->alter(array(
        'id' => $this->input->post('id'),
        'writer' => $this->writer,
        'title' => $this->input->post('title'),
        'know' => $this->input->post('know'),
        'idea' => $this->input->post('idea'),
        'problem' => $this->input->post('problem'),
        'plan' => $this->input->post('plan'),
        'describe' => $this->input->post('describe'),
        'delete_yn' => "N"
      ));
      redirect('common_blog_view?id='.$this->input->post('id'), 'refresh');
    }
    else
    {
        redirect('/common_blog_write');
    }
  }
  //게시글 id 의 결과를 반환
  function delete_api()
  {
    $this->blog_id = $this->input->get('id');
    $result =  $this->commonblog_model->delete(array('blog_id' => $this->blog_id));
    $result2 =  $this->commonblog_model->comment_delete(array('blog_id' => $this->blog_id));
    //print_r( $this->input->get('category_id'));
    redirect('common_blog_list', 'refresh');
  }

  function comment_delete_api()
  {
    //$this->blog_id = $this->input->get('id');
    $result =  $this->commonblog_model->comment_delete_one(array('comment_id' => $this->input->get('comment_id')));
    //print_r( $this->input->get('comment_id'));
    redirect('common_blog_view?id='.$this->input->get('id'), 'refresh');
  }
}
