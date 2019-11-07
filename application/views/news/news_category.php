
<div class="clearfix-100 hidden-xs"></div>
<div class="clearfix-50 hidden-xs"></div>
<div class="clearfix-20 visible-xs"></div>

<section id="qts_baner">
    <div class="container">
      <div class="row_pc">

        <h2 class="title_home clearfix"><a><?= $cate_current->name?></a></h2>

        <div class="clearfix-20"></div>
        <div style="font-size: 14px; line-height: 26px">
         
         

         <ul class="list_page_news imgRow">
                            <?php if (count($list)) {
                                foreach ($list as $key => $new) { ?>
                                    <li class="clearfix">
                                        <a href="<?= base_url('new/'.$new->alias.'.html')?>" title="" class="img-news-page reRenderImg"><img class="w_100" src="<?= base_url($new->image)?>" alt=""/></a>
                                        <div class="dcs-new-page">
                                            <h3 class="name-new-page">
                                                <a href="<?= base_url('new/'.$new->alias.'.html')?>" title=""><?= $new->title?></a>
                                            </h3>
                                            <?= $new->description?>
                                            <div class="view-news-page clearfix">
                                                <span class="date-time pull-left"><?= date('d',$new->time)?> Tháng <?= date('m',$new->time)?>, <?= date('Y',$new->time)?></span>
                                                <a href="<?= base_url('new/'.$new->alias.'.html')?>" title="" class="btn btn-view-page pull-right">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php    }
                            } ?>
                        </ul>


<div class="clearfix"></div>
                          <div class="pull-right">
                             <?php echo $this->pagination->create_links();?>
                           </div> 

        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>

 
 





</div>

<style type="text/css">
.list_page_news .bg-page-news{
background:#f4f4f4;
}
.list_page_news  li{
list-style: none;
}
.list_page_news .name-new-page{
margin-bottom: 10px;
font-size: 14px;
padding: 5px 0;
max-height: 40px;
line-height: 18px;
overflow: hidden;
-webkit-box-orient: vertical;
text-overflow: ellipsis;
white-space: normal;
-webkit-line-clamp: 2;
display: -webkit-box;
margin-top: 0;
}
.list_page_news .name-new-page a{
color: #000;
font-weight: bold;
text-transform: uppercase;
}
.list_page_news .name-new-page a:hover{
text-decoration: underline;
}
.list_page_news .dcs-new-page{
text-align: justify;
font-size: 14px;
color:#1e1e1e;
}
.list_page_news .view-news-page{
margin-top: 5px;
}
.list_page_news .date-time{
font-size: 12px;
font-family: arial;
color: #8c8d8b;
margin-top: 10px;
}
.list_page_news .btn-view-page{
color:#000;
font-size: 12px;
padding: 3px 12px;
}
.list_page_news .btn-view-page:hover{
color:#000;
text-decoration: underline;
}
.list_page_news li{
padding: 10px 0px;
border-bottom: 1px dotted #888;
}
.list_page_news li:last-child{
border-bottom: 0;
}
.list_page_news .pagination .active a{
background:#75b306;
}
.list_page_news .pagination li a{
margin: 0px 1px;
border-radius:0px!important;
}
/*end news page ----->*/
.list_page_news .name-detail{
text-align: center;
font-size: 25px;
font-family:UVNHongHaHep;
text-transform: uppercase;
color: #75b306;
padding-bottom: 5px;
border-bottom: 1px solid #cecece;
margin-bottom: 15px;
}
.list_page_news .content img{
border: 5px solid #75b306;
}
.list_page_news .bl-fb img{
border: transparent;
}
.img-news-page{
display: block;
float: left;
width: 250px;
margin-right: 15px;
}
.img-news-page:hover{
opacity: 0.8;
}
.dcs-new-page{
overflow: hidden;
}
.dcs-new-page p{
max-height: 80px;
overflow: hidden;
-webkit-box-orient: vertical;
text-overflow: ellipsis;
white-space: normal;
-webkit-line-clamp: 4;
display: -webkit-box;
}
@media (max-width:480px) {
.img-news-page{
float: none;
width: 100%;
margin-right: 0;
margin-bottom: 15px;
}
}
</style>