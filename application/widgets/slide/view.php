

<?php if(count($slide_home)) : ?>
<div class="sc_slider_main">
    <div class="owl-carousel slider_main">
        <?php foreach($slide_home as $slide) {?>
        <div class="item">
            <a href="<?=@$slide->url;?>" class="h_4362"><img class="w_100" src="<?=base_url(@$slide->image);?>" alt="<?=$slide->title?>"/></a>
        </div>
        <?php } ?>
    </div>
</div>
<?php endif;?>

<script>
    $(function() {
                        $(".slider_main").owlCarousel({
                            items: 1,
                            responsive: {
                                1200: { item: 1, },// breakpoint from 1200 up
                                982: { items: 1, },
                                768: { items: 1, },
                                480: { items: 1, },
                                0: { items: 1, }
                            },
                            rewind: false,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: true,
                            smartSpeed: 500, //slide speed smooth

                            dots: true,
                            dotsEach: false,
                            loop: true,
                            nav: true,
                            navText: ['', ''],
                            // navSpeed: 250, //slide speed when click button

                            autoWidth: false,
                            margin: 10,

                            lazyContent: false,
                            lazyLoad: false,

                            animateIn: false,
                            animateOut: false,

                            center: false,
                            URLhashListener: false,

                            video: false,
                            videoHeight: false,
                            videoWidth: false,
                        });
                    });
</script>