


<ul class="ul_right_head_top">
    <?php if(count($menu_root)) : ?>
    <?php foreach ($menu_root as $key_r => $mr) : ?>
        <li><a href="<?= base_url($mr->url)?>" title="<?=@$mr->name;?>" <?=@$mr->name;?></a></li>
        <?php endforeach;?>
    <?php endif;?>
</ul>