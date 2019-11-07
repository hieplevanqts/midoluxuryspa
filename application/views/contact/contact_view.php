<div class="clearfix"></div>
    <!-- begin left_content --> <!-- end left_content --><!-- begin mid_content -->
                    <div class="root_content qts_content_home">
                        
                            <h2 class="title_home"><a href="javascript:void(0)">Liên hệ</a></h2>
                        <div class="clearfix-15"></div>
                        <div class="">
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
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-right: 10px;">
                                                <div class="form-group w_100">
                                                            <input type="text" style="z-index: 0;" name="full_name" class="validate[required] form-control " id="personName"
                                                                   placeholder="<?=lang('name');?>" data-bind="value: name">
                                                </div>
                                                <div class="form-group w_100">
                                                            <input  name="phone" class="validate[required,custom[phone]] form-control " id="phone"
                                                                    data-original-title="Your activation email will be sent to this address."
                                                                    data-bind="value: email, event: { change: checkDuplicateEmail }"
                                                                    type="text" style="z-index: 0;" class="form-control"  placeholder="<?=lang('phone');?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-left: 10px;" >
                                                <div class="form-group w_100">
                                                            <input type="text"  style="z-index: 0;"  placeholder="<?=lang('email');?>"
                                                                   name="email" class="validate[required,custom[email]] form-control " id="personEmail"
                                                                   data-original-title="Your activation email will be sent to this address."
                                                                   data-bind="value: email, event: { change: checkDuplicateEmail }">
                                                </div>
                                                <div class="form-group w_100" >
                                                            <input type="text"  style="z-index: 0;" placeholder="<?=lang('diachi');?>"
                                                                   name="address" class="validate[required] form-control " id="personName"
                                                                   data-bind="value: name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group w_100" style="    padding: 5px;">
                                                        <textarea  name="comment"   class="form-control "
                                                                   rows="4" cols="78" placeholder="<?=lang('ghichu');?>"></textarea>
                                            </div>
                                            <div class="controls" style="margin-left: 40%;">
                                                <input type="submit"  name="sendcontact" id="signupuser"
                                                       class="btn btn-primary btn-sm" style="    background: #a90e16;
    border-color: #a90e16;" value="<?=lang('guidi');?>" />
                                            </div><!--end form-contact-->
                                        </form>
                                        <div class="clearfix-20"></div>
                                        <div class="map">
                                        <?php
                                        $map_title = '';
                                        $map_phone = '';
                                        $map_adrdress = '';
                                        if($this->option->map_title !=''){
                                            $map_title = '<div class="map_title"><b>'.$this->option->map_title.'</b></div>';
                                        }
                                        if($this->option->map_adrdress !=''){
                                            $map_adrdress = '<div><b>Địa chỉ: </b>'.$this->option->map_adrdress.'</div>';
                                        }

                                        if($this->option->map_phone !=''){
                                            $map_phone = '<div><b>Điện thoại: </b>'.$this->option->map_phone.'</div>';
                                        }
                                        $hien_map = "'".$map_title.''.$map_adrdress.''.$map_phone."'";
                                        ?>
                                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                                        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1w21tUvxObGqTgv2fKillyxFfQxICJbs&language=vi"></script>
                                        <script type="text/javascript">
                                            var map;
                                            var infowindow;
                                            var marker = new Array();
                                            var old_id = 0;
                                            var infoWindowArray = new Array();
                                            var infowindow_array = new Array();

                                            function initialize() {
                                                var defaultLatLng = new google.maps.LatLng<?=$this->option->hdfMap;?>;
                                                var myOptions = {zoom: 15, center: defaultLatLng, scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP };
                                                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                                                map.setCenter(defaultLatLng);
                                                var arrLatLng = new google.maps.LatLng<?=$this->option->hdfMap;?>;
                                                infoWindowArray[10349] =<?=$hien_map;?>;
                                                loadMarker(arrLatLng, infoWindowArray[10349], 10349);
                                                moveToMaker(10349);
                                            }
                                            function loadMarker(myLocation, myInfoWindow, id) {
                                                marker[id] = new google.maps.Marker({position: myLocation, map: map, visible: true});
                                                var popup = myInfoWindow;
                                                infowindow_array[id] = new google.maps.InfoWindow({ content: popup});
                                                google.maps.event.addListener(marker[id], 'mouseover', function () {
                                                    if (id == old_id) return;
                                                    if (old_id > 0) infowindow_array[old_id].close();
                                                    infowindow_array[id].open(map, marker[id]);
                                                    old_id = id;
                                                });
                                                google.maps.event.addListener(infowindow_array[id], 'closeclick', function () {
                                                    old_id = 0;
                                                });
                                            }
                                            function moveToMaker(id) {
                                                var location = marker[id].position;
                                                map.setCenter(location);
                                                if (old_id > 0) infowindow_array[old_id].close();
                                                infowindow_array[id].open(map, marker[id]);
                                                old_id = id;
                                            }
                                        </script>
                                        <style type="text/css">
                                            body {
                                                margin: 0;
                                                padding: 0;
                                            }
                                        </style>
                                        <body onLoad="initialize()" onUnload="GUnload()">
                                        <div id="map_canvas" style="width:100%; height: 350px"></div>
                                        </body>
                                    </div>
                                       </div>
                                    </div>
                        </div>
                <!-- end mid_content --><!-- begin right_content --> <!-- end right_content -->
<div class="clearfix"></div>
