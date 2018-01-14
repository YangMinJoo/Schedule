<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ======== @Region: #content ======== -->
<div id="content" class="py-5">
  <div class="container">
  <h3>공통 작업 일지 작성</h3>
  <div class="bg-faded p-3 col-md-12">
    <!-- <form id="personal_blog_write_form" method="POST" action="<?php echo base_url(); ?>api_personal_blog_write"> -->
    <?php echo validation_errors(); ?>
    <?php $attributes = array('id' => 'common_form'); echo form_open('api_common_blog_write', $attributes); ?>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">Title</label>
      <div class="col-md-10">
        <input name="title" type="text" value="<?php echo set_value('title'); ?>" class="form-control form-control-rounded" placeholder="제목" maxlength="100" required style="border-radius: 15px;">
      </div>
    </div>
    <div class="form-group row">
      <label for="text-input" class="col-sm-2 col-form-label">
          Category
          <a href="#" data-toggle="tooltip" title="" data-original-title="카테고리를 원래 있던 것에서 선택할경우, 골라주시고 아니면 새로 입력해주세요! 카테고리 입력은 신중하게 해주세요."><i class="fa fa-question-circle fa-lg text-danger"></i></a>
      </label>
      <div class="col-md-10">
          <select class="form-control mb-3" style="border-radius:15px;" name="category_list">
              <option value="">카테고리 선택</option>
<?php
if($category_list != null) {
for($i= 0; $i < count($category_list) ; $i++)
{
echo '<option value="';
echo $category_list[$i]['name'];
echo '">';
echo $category_list[$i]['name'];
echo '</option>';
}
}
?>
            </select>
          <input name="category_name" id="category_input" type="text" value="<?php echo set_value('category_name'); ?>" class="form-control form-control-rounded" placeholder="새로운 카테고리 등록" maxlength="20" style="border-radius: 15px;">
      </div>
    </div>
    <div class="form-group row">
      <label for="know" class="col-sm-2 col-form-label">Know</label>
      <div class="col-md-10">
        <input name="know" type="text" value="<?php echo set_value('know'); ?>" class="form-control form-control-rounded" placeholder="알게된 부분" maxlength="1000" style="border-radius: 15px;"/>
      </div>
    </div>
    <div class="form-group row">
      <label for="idea" class="col-sm-2 col-form-label">Idea</label>
      <div class="col-md-10">
        <textarea name="idea" type="text" value="<?php echo set_value('idea'); ?>" rows="5" class="form-control form-control-rounded" placeholder="아이디어" maxlength="2000" style="border-radius: 15px;"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="problem" class="col-sm-2 col-form-label">Problem</label>
      <div class="col-md-10">
        <textarea name="problem" type="text" value="<?php echo set_value('problem'); ?>" rows="3" class="form-control form-control-rounded" placeholder="막힌부분" maxlength="1000" style="border-radius: 15px;"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="plan" class="col-sm-2 col-form-label">Plan</label>
      <div class="col-md-10">
        <textarea name="plan" value="<?php echo set_value('plan'); ?>" rows="3" class="form-control form-control-rounded" placeholder="계획 진행 상황" maxlength="1000" style="border-radius: 15px;"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="describe" class="col-sm-2 col-form-label">Describe</label>
      <div class="col-md-10">
        <textarea name="describe" id="describe" value="<?php echo set_value('describe'); ?>" type="text" rows="17" class="form-control form-control-rounded" placeholder="상세 내용" maxlength="5000" style="border-radius: 15px;"></textarea>
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
     $("select[name=category_list]").attr("disabled", "true");

     if($("#category_input").val() == "")
     {
       $("select[name=category_list]").removeAttr("disabled");
     }
  });
});
</script>
