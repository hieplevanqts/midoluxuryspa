<input type="hidden" value="<?=base_url();?>" id="url_redriect">


<div class="clearfix-100 hidden-xs"></div>
<div class="clearfix-50 hidden-xs"></div>
<div class="clearfix-40 visible-xs"></div>
<div class="sc_form_qts sc_form_qts_spa">

   <div class="container">

      <div class="row_pc">

         <h2 class="title_home"><a href=""><?php if($this->language =='vi'):?>Make Appointment<?php else:?>약속하기<?php endif;?>

            </a>

          
            </h2>
<div class="clearfix-20"></div>
         <div class="row">

              <form class="form-group form-horizontal validate" action="<?=base_url('cart/sendOnpage')?>"  name="form_u_register"

                          id="register_user_frm" role="form" method="post">

               <input type="hidden" name="token" value="<?=$form_key;?>" />

               <div class="col-md-6">

                  <input type="text" name="fullname"  class="validate[required] form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>Your Name<?php else:?>당신의 이름<?php endif;?>">

               </div>

               <div class="col-md-6">

                  <input type="email" name="email" class="validate[required,custom[email]] form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>Your Email<?php else:?>귀하의 이메일<?php endif;?>">

               </div>

               <div class="col-md-12">

                  <input type="text" name="people" class="validate[required,custom[onlyNumberSp]] form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>How many people in your booking<?php else:?>예약 한 사람의 수<?php endif;?>">

               </div>

               <div class="col-md-12">

                  <input type="text" name="kind_service"  class="form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>What kind of services would you like<?php else:?>어떤 종류의 서비스를 원하십니까<?php endif;?>">

               </div>

               <div class="col-md-12">

                  <input type="date" name="startime" id="order_date"  class="validate[required] form-control input_from_re " placeholder="<?php if($this->language =='vi'):?>What date would you like to book<?php else:?>어떤 날짜로 예약하고 싶습니까<?php endif;?>" title="<?php if($this->language =='vi'):?>What date would you like to book<?php else:?>어떤 날짜로 예약하고 싶습니까<?php endif;?>">

               </div>

               <div class="col-md-12">

                  <input type="text" name="address" class="form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>If you would like a free pickup, please provide 

us your hotel name, address and room number<?php else:?>무료 픽업을 원하시면,

우리 호텔 이름, 주소 및 객실 번호<?php endif;?>" title="<?php if($this->language =='vi'):?>If you would like a free pickup, please provide 

us your hotel name, address and room number<?php else:?>무료 픽업을 원하시면,

우리 호텔 이름, 주소 및 객실 번호<?php endif;?>">

               </div>

               <div class="col-md-12">

                  <input type="text" name="comment" class="form-control input_from_re" placeholder="<?php if($this->language =='vi'):?>Any special request or question<?php else:?>특별한 요청이나 질문<?php endif;?>">

               </div>

               <div class="col-md-12">

                 <div class="form-group">

                            <label for="password" class="col-md-3 col-sm-3 control-label"><?php if($this->language =='vi'):?>Captcha code<?php else:?>보안 문자 코드<?php endif;?></label>

                            <div class="col-md-5 col-sm-5">

                                <div style="position: relative">

                                    <div id="error_captcha" class="text-danger"></div>

                                </div>

                                <input type="text" placeholder="..." class="form-control" name="captcha_user" id="captcha_user">



                            </div>

                            <div class="col-md-4 col-sm-4">
								
                                <img src="<?php echo base_url().$imageCaptchaPostAds; ?>" width="151" height="30" />
                             
							    <div id="captcha_img" class="pull-left"></div>
									<div  class="pull-left" style="padding: 5px 10px 10px 15px">
                                        <i class="fa fa-refresh" onclick="refresh_capcha()"></i>
                                    </div>
								
                                <input type="hidden" id="captcha_check" value="<?=@$captcha_check;?>">

                            </div>

                        </div>

               </div>

               <div class="col-md-12 group_but_form">

                  <button type="submit" id="btn-signups" class="form-control button_send"><?php if($this->language =='vi'):?>Send<?php else:?>보내다<?php endif;?></button>

               </div>   



            </form>

         </div>

      </div>

   </div>

</div>

 

<script type="text/javascript">

    $(document).ready(function(){

        $('#btn-signups').click(function(event ){

            event.preventDefault();

            $('#error_captcha').empty();

            jQuery('#register_user_frm').validationEngine({ focusFirstField: true });

            var valid = jQuery("#register_user_frm").validationEngine('validate');

            if(valid){

                $.ajax({

                    type: "POST",

                    dataType: "json",

                    url: base_url() + 'captchacode/checkCaptchaUser',

                    data: {code_captcha:$('#captcha_user').val(),captcha_check:$('#captcha_check').val()},

                    success: function (result) {

                        if(result.check==true){

                            document.form_u_register.submit();

                        }else{

                            $('#error_captcha').html(result.ms);

                        }

                    }

                })

            }

        });

    })
	

</script>



<style type="text/css">
  
  .input_from_re {
    margin-bottom: 30px;
    height: 43px;
}

.button_send {
    width: 10%;
    background: #fd030f;
    border: none;
    color: #fff;
    text-transform: uppercase;
    font-family: Roboto-Regular;
    margin: auto;
    margin-bottom: 67px;
}
</style>