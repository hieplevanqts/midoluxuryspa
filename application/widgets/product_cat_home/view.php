 <!-- begin prod -->
 <div class="box_cl">
     <?php if (count($cate_home)) : ?>
<?php foreach ($cate_home as $cate_parent) : ?>

 <div class="container">
    <div class="row_pc">
        <h2 class="title_home clearfix">
            <span class="pull-left"><?=$cate_parent->name?></span>
            <a class="pull-right" href="<?=base_url('danh-muc/'.$cate_parent->alias.'.html')?>">Xem tất cả</a>
        </h2>
        <div class="clearfix clearfix-15"></div>
        <div class="col-md-3 col-xs-12">
            <div class="row">
                <div class="qts_left_content">
                    <div class="menu_left clearfix">
                        <h2 class="tit_prod_left hidden">Danh mục sản phẩm</h2>
                       
                            <ul class="nav_prod_home">
                                <?php if (count($cate_parent->cate_sub)) : ?>
                                <?php $i=0; foreach ($cate_parent->cate_sub as $sub_cate) : $i++; ?>
                                <li class="<?=$i==1?'active':'';?>">
                                    <a class="hidden-xs" data-toggle="tab" href="#home<?=$i?>-<?=$cate_parent->id?>"><?=$sub_cate->name?></a>
                                    <a class="visible-xs" href="<?=base_url('danh-muc/'.$sub_cate->alias.'.html')?>"><?=$sub_cate->name?></a>
                                    <a href="<?=base_url('danh-muc/'.$sub_cate->alias.'.html')?>" data-toggle="tooltip" title="Xem thêm sản phẩm khác" class="readmore hidden-sm hidden-xs">+</a>
                                </li>
                                <?php endforeach; ?>
                                <?php endif; ?>

                            </ul>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12">
            <div class="row">
                <div class="tab-content">

                     <?php if (count($cate_parent->cate_sub)) : ?>
                      <?php $i=0; foreach ($cate_parent->cate_sub as $sub_cate) : $i++; ?>
                      <div id="home<?=$i?>-<?=$cate_parent->id?>" class="tab-pane fade <?=$i==1?'in active':'';?>">
                        <?php if (count($cate_parent->pro)) : ?>
                            <?php foreach ($cate_parent->pro as $pro) : ?>
                            <!-- begin tem pro home -->
                            <div class="col-sm-3 col-xs-6 col-480-12">
                                <div class="row">
                                    <!-- begin sub temp pro -->
                                    <div class="box_prod">
                                        <a href="<?=base_url('san-pham/'.$pro->alias.'.html')?>" class="img_prod h_85"><img src="<?=base_url('upload/img/products/'.$pro->pro_dir.'/thumbnail_1_'.@$pro->image)?>" class="w_100" alt="<?=$pro->name?>"></a>
                                        <div class="sub_prod">
                                            <h3 class="name_prod"><a href="<?=base_url('san-pham/'.$pro->alias.'.html')?>"><?=$pro->name?></a></h3>
                                            <div class="clearfix"></div>
                                            <div class="price_prod">
                                                <p><?php if ($pro->price_sale != 0) {
                                                  echo number_format($pro->price_sale).'VND';
                                                 } else {echo "Liên hệ"; } ?> </p>

                                                <?php if ($pro->price != 0) : ?>
                                                <del><?=number_format($pro->price)?> VND</del>
                                                <?php endif; ?>

                                            </div>
                                            <?php if ($pro->price != 0) : ?>
                                            <?php $sale = ($pro->price - $pro->price_sale)/$pro->price*100;
                                            $sale = ceil($sale);
                                             ?>
                                            <div class="sale_nb">
                                                <span>-<?=@$sale?>%</span>
                                            </div>
                                            <?php endif; ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- end sub temp pro -->
                                </div>
                            </div>
                            <!-- end tem pro home -->
                            <?php endforeach; ?>
                            <?php endif; ?>
                      </div>
                      <?php endforeach; ?>
                      <?php endif; ?>

                </div>
                

            </div>
        </div>
    </div>
    <div class="clearfix clearfix-30"></div>
</div>

<?php endforeach; ?>
<?php endif; ?>


     <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
 </div>

 <!-- end prod -->