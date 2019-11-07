<!-- begin khuyenmai -->
<section class="sc-sanpham-cate">
  <div class="title_left">
    <a href="">Sản phẩm nổi bật</a>
  </div> 
  <ul>
    <?php if (count($pros)) : ?>
      <?php foreach ($pros as $pro) : ?>
        <li> 
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

</li>
<?php endforeach; ?>
<?php endif; ?>
</ul>

</section>
<!-- end khuyenmai -->