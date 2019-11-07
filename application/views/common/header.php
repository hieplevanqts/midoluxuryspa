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
    <link href="<?=base_url()?>assets/css/front_end/owl.carousel.min.css"rel="stylesheet">
    <link href="<?=base_url()?>assets/css/front_end/owl.theme.default.min.css"rel="stylesheet">
    <link href="<?=base_url()?>assets/css/front_end/menu-2.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/animate.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/style00.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/front_end/setmedia.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('assets/plugin/ValidationEngine/css/validationEngine.jquery.css')?>">

    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/menu-2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/style-img.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/front_end/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



    
    

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


<header id="header">

    <div class="menu_mb butt_mobile visible-xs visible-sm clearfix">
        <button class="nav-toggle">
            <div class="icon-menu">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </div>
        </button>
        <div class="text-center logo_mb">
            <a href="<?=base_url()?>"> <img src="<?=base_url(@$this->option->site_logo)?>" alt=""></a>
        </div>
        <div class="list_lang pull-right">
            <a href="<?=base_url('home/lang/ja')?>"><img src="<?=base_url()?>img/lang_ja.png"></a>
            <a href="<?=base_url('home/lang/ko')?>"><img src="<?=base_url()?>img/lang_ko.png"></a>
            <a href="<?=base_url('home/lang/vi')?>"><img src="<?=base_url()?>img/lang_au.png"></a>
        </div>
    </div><!-- /menu_mb -->
    <div class="clearfix clearfix-62 visible-sm visible-xs"></div>

    <section class="sc_head_top clearfix">
        <div class="container">
            <div class="row_pc">

                <div class="slogan_head"><?=@$this->option->slogan;?></div>
                <div class="right_head clearfix">
                    <div class="list_lang">
                        <a href="<?=base_url('home/lang/ja')?>"><img src="<?=base_url()?>img/lang_ja.png"></a>
                        <a href="<?=base_url('home/lang/ko')?>"><img src="<?=base_url()?>img/lang_ko.png"></a>
                        <a href="<?=base_url('home/lang/vi')?>"><img src="<?=base_url()?>img/lang_au.png"></a>
                    </div>
                    <div class="hotline_head">
                        <i class="fa fa-phone icon"></i>
                        <a class="text" href="tel:<?=@$this->option->hotline1;?>"><?=@$this->option->hotline1;?></a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section class="sc_head_bot sticky-header clearfix">
        <div class="container">

            <div class="menu_main">
                <nav class="nav is-fixed" role="navigation">
                    <div class="wrapper wrapper-flush">
                        <div class="nav-container">
                            <ul class="nav-menu menu clearfix">
                                

                                
                                
                                 <?php if(count($menu_main_root)) : ?>

                                  <?php $i=0; foreach ($menu_main_root as $key_r => $mr) : $i++; ?>

                                  <?php if($i <4){ ?>
                                
                                <li class="menu-item has-dropdown"><a href="<?=base_url($mr->url);?>" class="menu-link "><?=@$mr->name;?></a>
                                    
                                      <?php if (count($mr->menu_sub)): ?>
                                        <ul class="nav-dropdown menu">
                                        <?php foreach ($mr->menu_sub as $key => $menu_sub) { ?>
                 
                                        <li class="menu-item"><a href="<?= base_url($menu_sub->url)?>" class="menu-link"><?= $menu_sub->name?></a></li>

                                        <?php } ?> 

                                    </ul>
                                     <?php endif ?> 
                                </li>


                                <?php } ?>
                                 <?php endforeach;?>

                                  <?php endif;?> 
                          



                                <li class="menu-item menu-item-logo hidden-sm hidden-xs"><a href="<?=base_url()?>" class="menu-link menu-link-logo"><img src="<?=base_url(@$this->option->site_logo)?>"></a></li>

                                

                                <?php if(count($menu_main_root)) : ?>

                                  <?php $i=0; foreach ($menu_main_root as $key_r => $mr) : $i++; ?>

                                  <?php if($i >3){ ?>
                                
                                <li class="menu-item has-dropdown"><a href="<?=base_url($mr->url);?>" class="menu-link "><?=@$mr->name;?></a>
                                    
                                      <?php if (count($mr->menu_sub)): ?>
                                        <ul class="nav-dropdown menu">
                                        <?php foreach ($mr->menu_sub as $key => $menu_sub) { ?>
                 
                                        <li class="menu-item"><a href="<?= base_url($menu_sub->url)?>" class="menu-link"><?= $menu_sub->name?></a></li>

                                        <?php } ?> 

                                    </ul>
                                     <?php endif ?> 
                                </li>


                                <?php } ?>
                                 <?php endforeach;?>

                                  <?php endif;?> 
                          


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
 
        </div>
    </section>

</header>

<div class="clearix"></div>

 