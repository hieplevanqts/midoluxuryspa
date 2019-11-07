<div class="clearfix-100"></div>
<div class="clearfix-50"></div>

<section id="qts_baner">
    <div class="container">
      <div class="row_pc">

        <h2 class="title_home clearfix"><a><?=$cate_current->name?></a></h2>

        <div class="clearfix-20"></div>
        <div style="font-size: 14px; line-height: 26px">
         
         

          <h2 class="title_detail"><?= $news->title?></h2>
                              <div class="post-date"><?=@$weekday?></div>
                              <div class="content content_news">
                                 <span class="tit-content"><?=$news->description?></span>
                                 <div class="clearfix-10"></div>
                                 <div class="fixcontent">
                                 <?= $news->content?>
                                 </div>
                              </div>
                              <div class="clearfix-50"></div>
                              <div class="news-lq">
                                 <h2 class="title_detail"><a href="javascript:void(0)">Bài viết liên quan</a></h2>
                                 <div class="clearfix-15"></div>
                                 <ul class="list-video clearfix">
                                    <?php if (count($new_same)) : ?>
                                    <?php foreach ($new_same as $new) : ?>
                                    <li class="col-xs-6 col-480-12">
                                       <a href="<?=base_url('new/'.$new->alias.'.html')?>">
                                          <img src="<?php echo base_url($new->image) ?>">
                                          <h3><?=$new->title?> </h3>
                                       </a>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                 </ul>
                              </div>


        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>

 
 





</div>

<style type="text/css">
.titleBox {
   margin-bottom: 15px;
}
.back_link ul li{
display: inline-block;
}
.back_link ul li a{
display: block;
color: #7e7e7e;
font-size: 14px;
padding: 0 7px;
position: relative;
}
.back_link ul li:not(:last-child) a:after{
position: absolute;
content: '>';
display: inline-block;
top: 0;
right: -6px;
}
.back_link ul li:first-child a{
padding-left: 0;
}
.title_detail {
font-size: 18px;
color: #000;
font-weight: bold;
margin-bottom: 7px;
}
.back_link{
padding-bottom: 7px;
border-bottom: 1px solid #ddd;
}
.content{
font-size: 14px;
color: 000;
line-height: 22px;
text-align: justify;
}
.content img{
max-width: 100%;
display: block;
margin: 10px auto;
}
.tit-content{
font-weight: bold;
display: block;
}
.news-lq h3{
position: relative;
}
.news-lq h3 img{
float: none !important;
width: 24px !important;
height: auto !important;
}
.list-video {
padding: 0px 10px 26px 0px;
background: #fff; }
.list-video li {
margin-bottom: 20px;
padding-left: 0 !important; }
.list-video li:last-child {
margin-bottom: 0; }
.list-video li:hover h3 {
color: red; }
.list-video li a {
display: block; }
.list-video li a img {
width: 89px;
height: 60px;
float: left;
margin-right: 7px; }
.list-video li a h3 {
font-size: 14px;
color: #000;
line-height: 24px;
max-height: 60px;
overflow: hidden;
-webkit-box-orient: vertical;
text-overflow: ellipsis;
white-space: normal;
-webkit-line-clamp: 2;
display: -webkit-box; }
 
</style>