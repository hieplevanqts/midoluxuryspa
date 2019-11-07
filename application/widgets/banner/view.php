

<?php if(count($slides)) : ?>
<section class="sc_slider_main clearfix fadeInDown wow">
        <div class="owl-carousel owl-theme slider_main">
            <?php foreach($slides as $slide) {?>

            <div class="item">
                <a href="<?=base_url(@$slide->url);?>"><img class="w_100" src="<?=base_url(@$slide->image);?>" alt=""/></a>
            </div>
<?php } ?>  

        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                var owl = $('.slider_main');
                owl.owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 10,
                    nav:true,
                    autoplay: true,
                    lazyLoad: true,
                    autoplayTimeout: 3500,
                    autoplayHoverPause: false,
                    responsive:{
                        1199:{
                            items:1
                        },
                        979:{
                            items:1
                        },
                        768:{
                            items:1
                        },
                        479:{
                            items:1
                        },
                        100:{
                            items:1
                        }
                    }
                });
            });
        </script>
    </section>

    <div class="clearfix clearfix-20"></div>





<?php endif;?> 

