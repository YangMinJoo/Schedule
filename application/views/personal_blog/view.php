<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div id="content">
  <div class="container">
    <div class="row">
      <!--Main Content-->
      <div class="col-md-12">
        <h5 class="mb-5">
          <a href="<?php echo base_url(); ?>personal_blog"><i class="fa fa-arrow-left"></i> Back to Blog</a>
        </h5>
        <!-- Blog post -->
        <div class="row blog-post">
          <div class="col-md-1 date-md">
            <!-- Date desktop -->
            <div class="date-wrapper"> <span class="date-m bg-primary"><?php echo $write_date_month; ?>월</span> <span class="date-d"><?php echo $write_date_day; ?></span></div>
            <!-- Meta details desktop -->
            <p class="text-muted"> <i class="fa fa-user"></i><?php echo $writer; ?></p>
          </div>
          <div class="col-md-11">
            <div class="media-body">
              <h3 class="title media-heading" style="word-break:break-word;"><?php echo $title; ?></h3>
              <p><?php echo $category; ?></p>
              <!-- Meta details mobile -->
              <ul class="list-inline meta text-muted">
                <li class="list-inline-item"><i class="fa fa-calendar"></i><?php echo $write_date; ?></li>
                <li class="list-inline-item"><i class="fa fa-user"></i><?php echo $writer; ?></li>
              </ul>

              <!--Main content of post-->
              <div class="blog-content">
                <!-- <p class="lead">으아악</p> -->
                <div class="focus-box p-3 m-3">
                  <h5>Key Points</h5>
                  <ul class="list-unstyled list-lg" style="word-break:break-word;">
                    <li><i class="fa fa-check text-primary list-item-icon"></i>알게된것:<?php echo $know; ?></li>
                    <li><i class="fa fa-check text-primary list-item-icon"></i>문제점:<?php echo $problem; ?></li>
                    <li><i class="fa fa-check text-primary list-item-icon"></i>진행상황:<?php echo $plan; ?></li>
                  </ul>
                </div>
                <p><?php echo $describe; ?></p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- !col-md-12 -->
    </div>
    <!-- !row -->
  </div>
  <!-- !container -->
</div>
<!-- !content -->

<div class="colour-switcher">
  <a href="#" class="colour-switcher-toggle" data-toggle="class" data-target=".colour-switcher"> <i class="fa fa-bars"></i> </a>
  <div class="btn-group-sm mb-2" role="group" aria-label="delete_alter_btn">
    <button type="button" class="btn btn-sm btn-red-dark" onclick="location.href='personal_blog_alter?id=<?php echo $this->input->get('id');?>'"><i class="fa fa-file-text-o"></i> 수정</button>
    <button type="button" class="btn btn-sm btn-red-dark" id="deleteBtn"><i class="fa fa-trash"></i> 삭제</button>
  </div>
  <div class="btn-group-sm" role="group" aria-label="write_list_btn">
    <button type="button" class="btn btn-sm btn-red-dark" onclick="location.href='personal_blog_write'"><i class="fa fa-pencil-square-o"></i> 글쓰기</button>
    <button type="button" class="btn btn-sm btn-red-dark" onclick="location.href='personal_blog_list'"><i class="fa fa-list-ul"></i> 목록</button>
  </div>
</div>
<!-- colour-switcher -->

<script>
  $("#deleteBtn").on("click", function() {
    var confirm_ = confirm("정말로 삭제하시겠습니까?!");
    if(confirm_ == true) {
        location.href= "api_personal_blog_delete?id=<?php echo $this->input->get('id');?>";
    }
  });
</script>
