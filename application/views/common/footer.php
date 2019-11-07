<footer id="footer">

    <section class="sc_footer_top clearfix">
        <div class="container">
            <div class="row_pc">
                
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <h4 class="title_footer cl_e6b22c"><?=@$this->option->site_name;?></h4>
                        <div class="clearfix clearfix-25"></div>
                        <ul class="list_add_footer">
                            <?=@$this->option->shipping;?>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h4 class="title_footer">Follow Us</h4>
                        <div class="clearfix clearfix-25"></div>
                        <ul class="list_link_footer">
                            <li class="item">
                                <a href="<?=@$this->option->site_fanpage;?>" title=""><img class="icon" src="img/link_fb.png" alt="">Facebook</a>
                            </li>
                            <li class="item">
                                <a href="<?=@$this->option->link_gg;?> " title=""><img class="icon" src="img/link_zalo.png" alt="">Zalo</a>
                            </li>
                            <li class="item">
                                <a href="<?=@$this->option->link_printer;?>" title=""><img class="icon" src="img/link_wc.png" alt="">Wechat</a>
                            </li>
                            <li class="item">
                                <a href="<?=@$this->option->link_linkedin;?>" title=""><img class="icon" src="img/link_ko.png" alt="">Kakao talk</a>
                            </li>
                            <li class="item">
                                <a href=" <?=@$this->option->link_tt;?>   " title=""><img class="icon" src="img/link_viber.png" alt="">Viber</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix visible-sm visible-xs"></div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4 class="title_footer">Map</h4>
                        <div class="clearfix clearfix-25"></div>
                        <div class="map_footer">

                          <?=@$this->option->map_iframe;?>
                          
                            
                        </div>
                    </div>
                </div>  

            </div>
        </div>  
    </section>

    <div class="clearfix"></div>

    <section class="sc_copyright clearfix">
        <div class="container">
            <div class="row_pc">
                
                <div class="copyright">Copyright @ 2019 Mido Spa. <a href="">Design and QTS</a></div>
                
            </div>  
        </div>
    </section>

    <a href="#top" id="go_top"><i class="fa fa-angle-up"></i></a>

    <script type="text/javascript">
        $("a[href='#top']").click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() >=200) {
                $('#go_top').show();
            }
            else {
                $('#go_top').hide();
            }
        });
    </script>


</footer>

</body>
</html>



    <a href="#top" id="go_top"><i class="fa fa-arrow-up icon_next"></i></a> 

</footer> 

<script src="<?= base_url()?>assets/plugin/ValidationEngine/js/jquery.validationEngine-vi.js"

            charset="utf-8"></script>

<script src="<?= base_url()?>assets/plugin/ValidationEngine/js/jquery.validationEngine.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $('.validate ').validationEngine();

    });

</script>



<?php if ($this->session->userData('mess')) { ?>

<div id="show_success_mss" style="position: fixed; top: 150px; right: 20px;z-index: 99999">

   <div class="alert alert-success alert-dismissible" role="alert">

      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span

         aria-hidden="true">&times;</span></button>

      <?= $this->session->userData('mess'); ?>

   </div>

   <?php

      $this->session->unset_userdata('mess'); ?>

</div>

<?php } ?>

<script>

   setTimeout(function () {

       jQuery('#show_success_mss').fadeOut().empty();

   }, 5000);

</script>



<script type="text/javascript" src="<?=base_url()?>assets/js/front_end/owl.carousel2.min.js"></script>

</body>

</html>

