<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ======== @Region: #content ======== -->
<div id="content">
  <div class="container">
    <h2 class="title-divider">
      <span>개인
        <span class="font-weight-normal text-muted">작업일지</span>
      </span>
      <small>Personal Work</small>
    </h2>

    <div class="row">
      <!--Blog Grid -->
      <div class="col-md-9 order-md-2 blog-roll blog-list">
        <div class="blog-roll blog-grid" data-toggle="isotope-grid" data-isotope-options='{"itemSelector": ".grid-item"}'>
          <div class="row">
<?php
/*
            <div class="col-sm-6 col-md-4  grid-item">
              <div class="blog-post">
                <h4 class="timeline-item-title">
                  <a href="#" class="text-blue-dark">개발 작업일지 - 홈페이지</a>
                </h4>
                <div class="mt-4">
                  <div class="date-wrapper date-wrapper-horizontal">
                    <span class="date-m bg-primary">August</span>
                    <span class="date-d">15</span>
                  </div>
                  <a href="#" class="text-primary">양민주</a>
                </div>
              </div>
            </div>
*/
?>
<?php
for($i= 0; $i < count($list) ; $i++)
{
$write_date_month = substr($list[$i]['write_date'], 5, 2);
$write_date_day = substr($list[$i]['write_date'], 8, 2);

echo  '<div class="col-sm-6 col-md-4  grid-item"><div class="blog-post" style="word-break:break-word;"><h4 class="timeline-item-title"><a href="personal_blog_view?id=';
echo $list[$i]['id'];
echo '" class="text-blue-dark">';
echo $list[$i]['title'];
echo '</a></h4><div class="mt-4"><div class="date-wrapper date-wrapper-horizontal"><span class="date-m bg-primary">';
echo $write_date_month;
echo '월</span><span class="date-d">';
echo $write_date_day;
echo '</span></div><a href="#" class="text-primary">&nbsp;';
echo $list[$i]['writer'];
echo '</a></div></div></div>';
}
?>

          </div>
        </div>
      </div>
      <!-- end blog -->
    <div class="col-md-3 order-md-1 sidebar-left d-none d-sm-block">

    <!-- @Element: Search form -->
      <div class="mb-4">
        <div class="btn-group " role="group" aria-label="Write Group">
           <button type="button" class="btn btn-red-dark" onclick="location.href='personal_blog_write'"><i class="fa fa-pencil-square-o"></i> 글쓰기</button>&nbsp;
           <button type="button" class="btn btn-red-dark" onclick="location.href='personal_blog_list'"><i class="fa fa-list-ul"></i> 목록</button>
         </div>
      </div>

        <!-- @Element: Archive -->
      <div class="mb-4">
        <h4 class="title-divider">
          <span>Category</span>
        </h4>
      </div>
      <div class="mb-4">
        <ul class="list-unstyled list-lg tags">
<?php
for($i= 0; $i < count($category_list) ; $i++)
{
echo '<li><i class="fa fa-angle-right fa-fw"></i>';
echo $category_list[$i]['name'];
echo '</a></li>';
}
?>
        </ul>
      </div>
    </div>
          <!-- end sidebar-left -->
      <div class="pagination d-block col-md-12">
        <button type="button" class="btn btn-secondary btn-lg btn-block" hidden>더보기</button>
      </div>
    </div>
    <!-- end row -->
  </div>
  <!--.container-->
</div>
<!--#content-->
<div class="colour-switcher d-block d-sm-none">
  <a href="#" class="colour-switcher-toggle" data-toggle="class" data-target=".colour-switcher"> <i class="fa fa-bars"></i> </a>
  <div class="btn-group-sm " role="group" aria-label="Basic example">
    <button type="button" class="btn btn-sm btn-red-dark" onclick="location.href='common_blog_write'"><i class="fa fa-pencil-square-o"></i> 글쓰기</button>
    <button type="button" class="btn btn-sm btn-red-dark" onclick="location.href='common_blog_list'"><i class="fa fa-list-ul"></i> 목록</button>
  </div>
</div>
<!-- end colour-switcher" -->
