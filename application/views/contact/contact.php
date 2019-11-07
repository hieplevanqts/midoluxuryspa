<section id="qts_baner" class="hidden-xs" style="margin-top: 150px;">
    <div class="container">
   
    </div>
  </section>
  <div class="clearfix-40 visible-xs"></div>
  <div class="clearfix"></div>

 



<section id="qts_port">
    <div class="container">
      <div class="row_pc">
        <div class="tit_hot">
          

          <?=lang('contact')?>
        </div>
       

        
        
                              
               <div class="form-contact">
                                    
                  <form action="" method="post" class="validate form-horizontal" role="form">
                                          <div class="alert alert-success alert-dismissible" role="alert"
                                             style="position: fixed; right: 450px;background:none;;font-style:italic;
                                             top:250px; width: 650px;
                                             font-size:40px;padding: 2px; margin: auto; line-height: normal;
                                             color: red; border: none; text-shadow: 0px 0px 5px #ffff00;
                                             ">
                                             <?php if(isset($_SESSION['message'])){
                                                   echo $_SESSION['message']; unset($_SESSION['message']);}  ?>
                                          
               </div>
                                    <script type="text/javascript">
                                          (function () {
                                              setTimeout(showTooltip, 1500)
                                          })();
                                          
                                          function showTooltip() {
                                              $('.alert-success').fadeOut();
                                          }
                                       
               </script>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="   ">
                                             <input type="text" style="z-index: 0;" name="full_name" class="validate[required] form-control " id="personName"
                                                placeholder="<?=lang('name');?>" data-bind="value: name">
                                          </div>
                                          <div class="   ">
                                             <input  name="phone" class="validate[required,custom[phone]] form-control " id="phone"
                                                data-original-title="Your activation email will be sent to this address."
                                                data-bind="value: email, event: { change: checkDuplicateEmail }"
                                                type="text" style="z-index: 0;" class="form-control"  placeholder="<?=lang('phone');?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12" >
                                          <div class="   ">
                                             <input type="text"  style="z-index: 0;"  placeholder="<?=lang('email');?>"
                                                name="email" class="validate[required,custom[email]] form-control " id="personEmail"
                                                data-original-title="Your activation email will be sent to this address."
                                                data-bind="value: email, event: { change: checkDuplicateEmail }">
                                          </div>
                                          <div class="   " >
                                             <input type="text"  style="z-index: 0;" placeholder="<?=lang('diachi');?>"
                                                name="address" class="validate[required] form-control " id="personName"
                                                data-bind="value: name">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="">
                                       <textarea  name="comment"   class="form-control"
                                          rows="4" cols="78" placeholder="<?=lang('ghichu');?>"></textarea>
                                    </div>
                                    <div class="controls" style="margin-left: 40%;">
                                       <input type="submit"  name="sendcontact" id="signupuser"
                                          class="btn btn-primary btn-sm" style="    background: #a90e16;
                                          border-color: #a90e16;" value="<?=lang('guidi');?>" />
                                    </div>
                                    <!--end form-contact-->
                                 </form>
                                 
               <div class="clearfix-20"></div>
                                 
             <?=@$this->option->map_iframe;?>
                              
            </div>
                        
         </div>
                  
      </div>
               <!-- end mid_content --><!-- begin right_content -->
            
   </div>
      
</div>
   <!-- end right_content -->
</div>
<div class="clearfix"></div>
<style>
      .form-contact input {
      margin-bottom: 15px; 
      }
      #signupuser {
      margin-top: 15px;
      }
</style>


      </div>
    </div>
  </section>



</div>