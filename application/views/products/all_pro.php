<section id="qts_baner" class="hidden-xs" style="margin-top:150px;">

  </section>
  <div class="clearfix-30 visible-xs"></div>
  <div class="clearfix"></div>

  <section class="tap_menu">
    <div class="container">
      <div class="row_pc">
        <div class="tit_tap">
         

    

          
         

          


        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>

 


<section id="qts_port">
    <div class="container">
      <div class="row_pc">
        




 <?php $i=1; if (count($lists)) { foreach ($lists as $key => $pro) { $i++; ?>

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <a href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>"><img class="w_100" style="height: 250px" src="<?= base_url('upload/img/products/' . $pro->pro_dir . '/thumbnail_1_' . @$pro->image) ?>"></a>
          <div class="tit_port">
            <p> <a style="font-size: 18px;" href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>"> <?= $pro->name ?> </a></p>
          </div>
        </div>


       
<!-- bat dau -->
        <div class="modal fade" id="myModal_<?=$i?>" role="dialog" style="margin-top:200px;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?= $pro->name ?></h4>
          <p><?= $pro->description?></p>
          <p>Giá: <span><?=number_format($pro->price_sale)?>đ/kg</span></p>
        </div>
        <div class="modal-body">
          <h5>Thành phần</h5>
          <p><?= $pro->caption_3 ?></p>
          <span>Xuất Xứ: <?= $pro->caption_1 ?></span><br>
          <strong><img src="<?= base_url()?>img/icon.png">  <?= $pro->caption_2 ?></strong>
          
        </div>
      </div>
    </div>
  </div>

<!-- end -->


 <?php }}?>
        
<div class="clearfix"></div>
                    <div class="phantrang_prod">
                        <?php echo $this->pagination->create_links();?>
                    </div>
      </div>
    </div>
  </section>

  
