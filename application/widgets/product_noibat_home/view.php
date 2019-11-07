 <section class="sc_service_home clearfix">
        <div class="container">
            <div class="row_pc">
                
                <h2 class="title_home clearfix"><a >spa service</a></h2>
                <div class="clearfix clearfix-35"></div>

                <div class="box_slider_service clearfix">
                    <div class="owl-carousel owl-theme slider_service">
                        




                         <?php if (count($pros)): 

                        foreach ($pros as $key => $pro):?>
                        <div class="item">
                            <div class="box_service clearfix">
                                <a href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>" class="img">
                                    <img class="w_100" style="height: 265px" src="<?= base_url('upload/img/products/' . $pro->pro_dir . '/thumbnail_1_' . @$pro->image) ?>" alt="">
                                </a>
                                <div class="clearfix"></div>
                                <h3 class="name"><a href="<?= base_url('san-pham/' . $pro->alias . '.html') ?>"><?= $pro->name ?></a></h3>
                            </div>
                        </div>

                        
                        <?php endforeach; endif; ?>

                       


                        

                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            var owl = $('.slider_service');
                            owl.owlCarousel({
                                items: 4,
                                loop: true,
                                margin: 30,
                                nav:true,
                                navText: ['<img src="img/icon_pri.png" alt="icon" />', '<img src="img/icon_next.png" alt="icon" />'],
                                autoplay: true,
                                lazyLoad: true,
                                autoplayTimeout: 3500,
                                autoplayHoverPause: false,
                                responsive:{
                                    1199:{
                                        items:4
                                    },
                                    979:{
                                        items:3
                                    },
                                    768:{
                                        items:2
                                    },
                                    479:{
                                        items:2
                                    },
                                    100:{
                                        items:1
                                    }
                                }
                            });
                        });
                    </script>
                </div>

            </div>
        </div>  
    </section>