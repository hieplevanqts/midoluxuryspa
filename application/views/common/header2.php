<!DOCTYPE html>
<html xmlns:fb='http://www.facebook.com/2008/fbml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title><?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?></title>
    <link rel="shortcut icon" href="<?= base_url(@$this->option->favicon ) ?>"/>
    <meta name='description'
          content='<?= isset($seo['description']) ? $seo['description'] : @$this->option->site_description; ?>'/>
    <meta name='keywords'
          content='<?= isset($seo['keyword']) && $seo['keyword'] != '' ? $seo['keyword'] : $this->option->site_keyword; ?>'/>
    <meta name='robots' content='index,follow'/>
    <meta name='revisit-after' content='1 days'/>
    <meta http-equiv='content-language' content='vi'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="126821687974504" />
    <meta property="fb:admins" content="100006472503973"/>

    <link rel="canonical" href="<?=current_url();?>" />
    <!--    for facebook-->
    <meta property="og:title"
          content="<?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?>"/>
    <meta property="og:site_name" content="<?= @$this->option->site_name; ?>"/>
    <meta property="og:url" content="<?= current_url(); ?>"/>
    <meta property="og:description"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta property="og:type" content="<?= @$seo['type']; ?>"/>
    <meta property="og:image" content="<?= isset($seo['image']) && @$seo['image'] != '' ? base_url(@$seo['image']) : @$this->option->site_logo ; ?>"/>

    <meta property="og:locale" content="vi_VN"/>

    <!-- for Twitter -->
    <meta name="twitter:card"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta name="twitter:title"
          content="<?= isset($seo['title']) && $seo['title'] != '' ? $seo['title'] : @$this->option->site_name; ?>"/>
    <meta name="twitter:description"
          content="<?= isset($seo['description']) && $seo['description'] != '' ? $seo['description'] : @$this->option->site_description; ?>"/>
    <meta name="twitter:image"
          content="<?= isset($seo['image']) && $seo['image'] != '' ? base_url($seo['image']) : base_url(@$this->option->site_logo); ?>"/>

    <link href="<?=base_url()?>assets/css/front_end/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/font-awesome.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/owl.carousel2.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/owl.theme2.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/search.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/resetDefalt.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/setmedia.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/style00.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/jquery.2.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/menu-2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/style-img.js"></script>
     <script type="text/javascript" src="<?=site_url()?>assets/js/init.js"></script>
    <input type="hidden" value="<?= base_url()?>" id="base_url" name="">
</head>

<body id="homepage">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=126821687974504";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- begin container_header --><!-- end container_header -->


 <!-- begin header -->
 <header id="header">
    <div class="menu_mb butt_mobile visible-xs visible-sm clearfix">
        <button class="nav-toggle">
            <div class="icon-menu">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
        </button>
        <div class="text-center">
          <a href="<?=base_url()?>"> <img class="img_logo_mb" src="<?=base_url(@$this->option->site_logo)?>" alt="<?=@$this->option->site_name?>"/></a> 
        </div>
        <a href="<?=base_url('gio-hang')?>" class="box_cart_hd pull-right hidden-sm">
                            <div class="header__main__toggle_cart">
                            <span class="counter"><?=@$count?></span>
                        </div>
                          </a>
    </div><!-- /menu_mb -->
    <div class="clearfix clearfix-60 visible-sm visible-xs"></div>
    <section class="qts_head_top">
      
        <div class="clearfix"></div>
        <div class="content_hd_top">
            <div class="container">
                <div class="row_pc">
                    <div class="txt_welcome pull-left hidden-xs">
                        <a href="">Chào bạn, chúng tôi có thể giúp gì cho bạn ?</a>
                    </div>
                    <ul class="menu_header_top pull-right">
                        <?php if (count($menu_top_root)) : ?>
                        <?php foreach ($menu_top_root as $mtr) : ?>
                          <li><a href="<?=base_url($mtr->url)?>"><?=$mtr->name?></a></li>
                        <?php endforeach ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="clearfix"></div>
    <section class="qts_head_mid">
         <div class="container">
              <div class="row_pc">
                  <div class="row">
                      <div class="col-md-3 hidden-sm hidden-xs">
                          <h1 class="logo_pc">
                              <a href="<?=base_url()?>"><img src="<?=base_url(@$this->option->site_logo)?>" alt="<?=@$this->option->site_name?>"></a>
                          </h1>
                      </div>
                      <div class="col-md-5 col-xs-12">
                          <form class="search_box" action="<?=base_url('tim-kiem')?>" method="get">
                              <div class="input-group">
                                  <div class="input-group-btn search-panel">
                                      <button type="button" class="btn btn-default dropdown-toggle drop_search" data-toggle="dropdown">
                                          <span id="search_concept">Tất cả</span> <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                          <?php if (count($cate_header)) : ?>
                                          <?php foreach ($cate_header as $cate) : ?>
                                          <li data-id="<?=$cate->id?>" class="id_cate_search" ><a href="<?=base_url('danh-muc/'.$cate->alias.'.html')?>"><option><?=$cate->name?></option></a></li>
                                          <?php endforeach; ?>
                                          <?php endif; ?>
                                      </ul>
                                  </div>
                                  <input type="hidden" id="id_cate_input" name="cat" value="">
                                  <input type="text" class="form-control input_search" name="s" placeholder="Tìm kiếm sản phẩm...">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default but_search_top" type="submit"><img src="<?php echo base_url('img/ics.png') ?>" alt=""></button>
                                </span>
                              </div>
                              <script>
                              $(document).ready(function() {
                                $('.id_cate_search').click(function(){
                                  var id = $(this).attr('data-id');
                                  $('#id_cate_input').val(id);
                                });
                              });
                            </script>
                          </form>
                      </div>
                      <div class="col-md-4 hidden-sm hidden-xs">

                          <div class="hotline_header pull-left">
                              <span><?=@$this->option->hotline1?></span>
                          </div>
                          <a href="<?=base_url('gio-hang')?>" class="box_cart_hd pull-right hidden-sm">
                            <div class="header__main__toggle_cart">
                            <span class="counter"><?=@$count?></span>
                        </div>
                            <div class="info_cart text-left">
                            <span href="" class="lbl">Giỏ hàng</span>
                            <span href="" class="total-price ft-12"><span class="woocommerce-Price-amount amount"><?=@$count?> sản phẩm</span></span>
                        </div>
                        
                          </a>
                      </div>
                  </div>
              </div>
          </div>
    </section>
    <div class="clearfix"></div>
    <section class="qts_head_bot">
        <div class="sc_header_menu clearfix sticky-header">
            <div class="container">
                <div class="row_pc">

                    <div class="col-md-3 col-xs-12">
                        <div class="row">
                            <div class="clearfix">
                                <div class="menu_left clearfix">
                                    <h2 class="tit_prod_left tit_menu_hd"><i class="fa fa-bars"></i>Danh mục sản phẩm</h2>
                                    <div class="show_menu">
                                        <ul class="nav_prod_home">
                                            <?php if (count($cate_header)): ?>
                                            <?php foreach ($cate_header as $key => $value): ?>
                                            <li class="has-dropdown">
                                                <a href="<?= base_url('danh-muc/'.$value->alias.'.html')?>"><?=$value->name?></a>
                                                <?php if (count($value->cate_sub_1)): ?>
                                                <ul class="nav-dropdown sub_nav_prod_h">
                                                  <?php foreach ($value->cate_sub_1 as $key => $cate_sub_1): ?>
                                                    <li><a href="<?= base_url('danh-muc/'.$cate_sub_1->alias.'.html')?>"><?= $cate_sub_1->name?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                              <?php endif; ?>
                                            </li>
                                            <?php endforeach ?>
                                            <?php endif ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="row">
                                <div class="menu_main">
                                    <nav class="nav is-fixed" role="navigation">
                                        <div class="wrapper wrapper-flush">
                      <div class="nav-container">
                          <ul class="nav-menu menu clearfix">
                            
                              <?php if(count($menu_main_root)) : ?>
                                  <?php foreach ($menu_main_root as $key_r => $mr) : ?>
                                      <li class="menu-item <?php if(!empty($mr->menu_sub)): ?> has-dropdown <?php endif;?>">
                                          <a href="<?=base_url($mr->url);?>" class="menu-link ">
                                              <?=@$mr->name;?>
                                          </a>
                                           <?php if(!empty($mr->menu_sub)): ?>
                                          <ul class="nav-dropdown menu"> 
                                              <?php $i=0; foreach($mr->menu_sub as $menu_sub) : $i++; ?>
                                              <li class="menu-item">
                                                  <a href="<?=base_url($menu_sub->url);?>" class="menu-link"><?=@$menu_sub->name;?></a>
                                              </li>
                                               <?php endforeach;?>
                                          </ul>
                                          <?php endif;?>
                                      </li>
                                  <?php endforeach;?>
                                  <?php endif;?> 
                          </ul>
                      </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
</header>
  <!-- end header -->

  <script>
    $(function () {
        $(".slider_main").owlCarousel({
            items: 1,
            responsive: {
                    1200: { item: 1 }, // breakpoint from 1200 up
                    982: { items: 1 },
                    768: { items: 1 },
                    480: { items: 1 },
                    0: { items: 1, nav: false }
                },
                slideBy: 1,
                loop: true,
                rewind: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500, //slide speed smooth

                dots: true,
                dotsEach: false,
                nav: true,
                // navText: ['<img src="img/but-p.png"/>', '<img src="img/but-n.png"/>'],
                navText: ['<i class="fa fa-chevron-left"><i/>', '<i class="fa fa-chevron-right"><i/>'],
                // navSpeed: 250, //slide speed when click button

                autoWidth: false,
                margin: 0,

                lazyContent: false,
                lazyLoad: false,

                
                // animateIn:'faderIn',
                // animateOut:'faderOut',

                center: false,
                URLhashListener: false,

                video: false,
                videoHeight: false,
                videoWidth: false,
            });
    })
</script>
 

<!-- begin container_close_header --><!-- end container_close_header -->
<div class="clearfix"></div>

<!-- begin container_banner --><!-- end container_banner -->
<!-- begin banner --><!-- end banner -->
<!-- begin container_close_banner --><!-- end container_close_banner -->






<style type="text/css"></style>
<!-- begin container_body --><div class='container'><div class='row'><!-- end container_body -->
