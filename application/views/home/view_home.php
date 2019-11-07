<article id="body_home">
<?=$banner?>




   <?=$product_noibat_home?>

    <div class="clearfix"></div>

    <section class="sc_about_home clearfix">
        <div class="container">
            <div class="row_pc">
                
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="left_about clearfix">
                            <h2 class="title"><span><?=@$this->option->site_name;?></span></h2>
                            <div class="clearfix clearfix-20"></div>
                            <div class="list_add_about">
                                 <?=@$this->option->timeopen;?>
                                <div class="clearfix"></div>
                                Email:   <?=@$this->option->site_email;?>
                                <div class="clearfix"></div>
                                Hotline:  <?=@$this->option->hotline1;?>
                            </div>
                            <div class="clearfix clearfix-30"></div>
                            <div class="map clearfix">
                                <?=@$this->option->map_iframe;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">


                        <div class="right_about clearfix">
                            <h2 class="title"><span><?=lang('contact')?></span></h2>
                            <div class="clearfix clearfix-20"></div>


                            <form class="validate form_regis_about" action="<?= base_url('lien-he')?>" method="post" accept-charset="utf-8">
                                <input name="full_name" class="input validate[required] form-control "   type=""  placeholder="<?=lang('name')?>">
                                <div class="clearfix clearfix-15"></div>
                                <input name="email" class="input validate[required,custom[email]] form-control "  type=""  placeholder="<?=lang('email')?>">
                                <div class="clearfix clearfix-15"></div>
                                <input name="phone" class="input validate[required,custom[phone]] form-control "  type=""  placeholder="<?=lang('phone')?>">
                                <div class="clearfix clearfix-15"></div>
                                
                                <textarea class="textarea" type="" name="comment" placeholder="<?=lang('ghichu')?>"></textarea>
                                <div class="clearfix clearfix-15"></div>

                                <input type="submit"  name="sendcontact" id="signupuser"
                                          class="btn btn-send"  value="<?=lang('guidi');?>" />

                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</article>

<div class="clearfix"></div>