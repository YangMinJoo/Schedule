<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ======== @Region: #content ======== -->
<div id="content" class="py-5">
  <div class="container">
  <h3>작성한 일지 수정중...</h3>
  <p>모두다 수정할 필요없어요! 수정하고 싶은 부분만 수정부탁드려요~! :D</p>
  <div class="bg-faded p-3 col-md-12">
    <!-- <form id="personal_blog_write_form" method="POST" action="<?php echo base_url(); ?>api_personal_blog_write"> -->
    <?php echo validation_errors(); ?>
    <?php echo form_open('api_personal_blog_alter'); ?>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Title</label>
      <div class="col-md-10">
        <input name="id" type="text" value="<?php echo $id ?>" hidden />
        <input name="title" type="text" value="<?php echo $title; ?>" class="form-control form-control-rounded" placeholder="제목" maxlength="100" required style="border-radius: 15px;">
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">
          Category
          <a href="#" data-toggle="tooltip" title="" data-original-title="수정할 때 카테고리를 변경할 수 없어요!"><i class="fa fa-question-circle fa-lg text-danger"></i></a>
      </label>
      <div class="col-md-10">
          <input name="category_name" type="text" value="<?php echo $category; ?>" class="form-control form-control-rounded" placeholder="새로운 카테고리 등록" maxlength="20" style="border-radius: 15px;" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Know</label>
      <div class="col-md-10">
        <textarea name="know" type="text" rows="3" class="form-control form-control-rounded" placeholder="알게된 부분" maxlength="1000" style="border-radius: 15px;"><?php echo $know; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Idea</label>
      <div class="col-md-10">
        <textarea name="idea" type="text" rows="5" class="form-control form-control-rounded" placeholder="아이디어" maxlength="2000" style="border-radius: 15px;"><?php echo $idea; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Problem</label>
      <div class="col-md-10">
        <textarea name="problem" type="text" rows="3" class="form-control form-control-rounded" placeholder="막힌부분" maxlength="1000" style="border-radius: 15px;"><?php echo $problem; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Plan</label>
      <div class="col-md-10">
        <textarea name="plan" type="text" rows="3" class="form-control form-control-rounded" placeholder="계획 진행 상황" maxlength="1000" style="border-radius: 15px;"><?php echo $plan; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Describe</label>
      <div class="col-md-10">
        <textarea name="describe" type="text" rows="17" class="form-control form-control-rounded" placeholder="상세 내용" maxlength="5000" style="border-radius: 15px;"><?php echo $describe; ?></textarea>
      </div>
    </div>
    <p id="err_sel"></p>

  </div>
  <!-- !bd-faded -->
  <div class="bg-faded p-3 mt-2 col-md-12">
    <div class="btn btn-group">
      <input type="submit" id="blog_submit_btn" class="mr-3 btn btn-lg btn-red-dark btn-invert" value="저장">
      <button type="button" class="btn btn-lg btn-brown btn-invert">취소</button>
    </div>
  </div>
  <?php echo form_close(); ?>
  </div>
  <!-- !container -->
</div>
<!-- !content -->

<script>
$(document).ready(function(){
  $("#category_input").on("keyup keypress", function (){
     $("select[name=category_list]").not(":selected").attr("disabled", "disabled");
  });

});
</script>
