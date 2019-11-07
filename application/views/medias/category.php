<style>

img.btn.btn-info.btn-lg {
    background: none;
    border: none;
    padding: 0;
    border-radius: 0;
  }
  .tit_port {
    text-align: center;
    padding: 10px 0 20px 0;
    font-weight: 600;
    font-size: 16px;
}
.title_prod p {
    text-align: center;
    font-size: 20px;
    padding: 20px 0;
}
button.owl-next {
    font-size: 32px;
    color: #000 !important;
}
button.owl-prev {
    font-size: 32px;
    color: #000 !important;
}
.owl-next i
{
    position: absolute;
    top: 144px;
    right:0;
    font-size: 60px;
    color: #999;
}
.owl-prev i
{
    position: absolute;
    top: 144px;
    font-size: 60px;
    color: #999;
}
.bbb
{
    display: flex;
    flex-wrap: wrap;
}
}
</style>


<div class="clearfix-100 hidden-xs"></div>
<div class="clearfix-50 hidden-xs"></div>
<div class="clearfix-40 visible-xs"></div>

<article>
   <div class="container">
       <div class="row_pc">
           <div class="row">
               <div class="clearfix"></div>
                   <!-- begin left_content -->
                   <div class="col-md-12">

                     <h2 class="title_home clearfix"><a><?=$cate_curent->name?></a></h2>


                         <!-- end left_content --><!-- begin mid_content -->
                         <div class="">
                            <div class="qts_content_home">
                              
                               <div class="clearfix-15"></div>
                               <div class="row bbb">
                                  <?php if (count($news_bycate)) { 
                                      $i=1;
                                      foreach ($news_bycate as $key => $pro) { ?>
                                  <!-- begin content_category_pro -->
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <div class="box_hot box_pro_cate">
                                                <div class="img_box reRenderImg"><a href="" data-toggle="modal" data-target="#myModal<?=$i;?>"><img class="w_100" src="<?=base_url(@$pro->image)?>" alt="<?=$pro->name?>"></a></div>
                                                <div class="txt_box">
                                                    <a href="" data-toggle="modal" data-target="#myModal<?=$i;?>"><?=$pro->name?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix-15"></div>
                                    </div>
                                  <!-- end content_category_pro -->
                                  <?php $i++; }}?>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="phantrang_prod">
                               <?php echo $this->pagination->create_links();?>
                            </div>
                         </div>
                         <!-- end mid_content --><!-- begin right_content -->
                      
                   </div>
                   <!-- end right_content -->
                   <div class="clearfix"></div>
           </div>
       </div>
   </div>
   
</article>

<style type="text/css">
  
  .txt_box a {
    font-size: 18px;
    font-family: 'Roboto-Regular';
    text-transform: uppercase;
    color: #000;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    line-height: 40px;
    display: block;
}
.box_hot {
    position: relative;
}
</style>







<?php if (count($news_bycate)) { 
        $j=1;
        foreach ($news_bycate as $key => $pro) { ?>

<div id="myModal<?=$j;?>" class="modal fade" role="dialog" style="z-index: 999999999999999999;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?=@$pro->name;?></h4>
      </div>
      <div class="modal-body">
       <!-- ********** -->
       <div class="owl-carousel slide_img_sm2">
       <?php if (count($pro->img)) { 

        foreach ($pro->img as $v) { ?>
        <div class="item"> 
          <div class="image_ext">
            <a href=""><img src="<?=base_url(@$v->image);?>" style="width:100%;height:400px;" class="image"></a>
            <div class="overlay"><?=@$pro->name;?></div>
          </div>
        </div>
        <?php  }}?>
      </div>
      <!-- *********** -->
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

  </div>
</div>

<?php $j++; }}?>














<script type="text/javascript">
 $(function() {
            $(".slide_img_sm2").owlCarousel({

                items: 1,
                responsive: {
                    1200: { item: 4  }, // breakpoint from 1200 up
                    982: { items: 3 },
                    768: { items: 2 },
                    480: { items: 1 },
                    0: { items: 1 }
                },
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 500, //slide speed smooth

                dots: false,
                dotsEach: false,
                nav: true,
                navText: ['<i class="fa fa-angle-left icon_slider"></i>', '<i class="fa fa-angle-right icon_slider"></i>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 10,
            });
        });
      </script>