<div class="clearfix-30"></div>
<div class="full_box_sp_news">
      <div class="content_right">
        <div class="title_left">
            <a href="">Tin tức nổi bật</a> 
        </div>
        <div class="box_sp_news">
            <ul class="product_list_widget">
                <?php if (count($news)) {
                    foreach ($news as $key => $new) { ?>
                        <li>
                            <a href="<?= base_url('new/'.$new->alias.'.html')?>">
                                <img src="<?= base_url($new->image)?>">
                                <span class="product-title"> <?= $new->title?></span>
                            </a>
                        </li>
                    <?php   }
                } ?>
            </ul>
        </div>
    </div> 
</div>