<article>

  <div class="clearfix"></div>

  <div class="row">

        <div class="clearfix-20"></div>

   <div class="col-md-12">

      <ul class="breadcrumb">

           <li><a href="<?= base_url();?>">Trang chủ</a></li>

           <li class="active"><a href="">Tìm kiếm</a></li>

       </ul>

   </div>

      

      <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">

                <div class="">

                    <div class="root_left">

                    <?=@$home_left;?>

                    </div>

                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <div class=""> 

                    <div class="root_content">

                        <div class="qts_content_home"> 

                            <div class="title_left"><a href="javascript:void(0)">Kết quả tìm kiếm</a></div>

                        <div class="clearfix"></div>

                        <div class="row row-13">

                            <?php if (count($lists)) { foreach ($lists as $key => $pro) { ?>

                        <!-- begin content_search -->



                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-480-12 pdd-13">



                    <div class="">



                        <!-- begin sub temp pro -->



                        <div class="full_box_sp">



                            <div class="img_box_sp h_7489">



                                <a href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>"><img



                                        src="<?= base_url('upload/img/products/' . $pro->pro_dir . '/thumbnail_1_' . @$pro->image) ?>"



                                        class="w_100" alt="<?= $pro->name ?>"/></a>



                            </div>



                            <div class="text_box_sp">



                                <h3 class="name_sp">



                                    <a href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>"><?= $pro->name ?></a>



                                </h3>



                                <p>

                                    Giá:

                                            <?php if($pro->price_sale >0) {?>

                                            

                                            <?=number_format($pro->price_sale)?>

                                            <span>đ</span>

                                            <?php }else{?>

                                            Liên hệ

                                            <?php }?>

                                </p>







                                <a title="" href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>" class="btn buy-prod" >Mua hàng</a>



                            </div>







                        </div>



                         <!-- end sub temp pro -->



                    </div>



                </div> 

                    <?php }}?>

                        </div>

                        

                    </div>

                        <div class="phantrang_prod">

                            <?php echo $this->pagination->create_links();?>

                        </div>

                    </div>

                  </div>

            </div>

  </div>

      

<div class="clearfix"></div>

</article>