<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('cartmodel');
    }
 // them san pham sa chon vao don hang
    public function addCartItemSelect()
    {
        $data = array();
        $qty = $this->input->post('qty');
        $id = $this->input->post('id');
        $color = $this->input->post('color');
        $size = $this->input->post('size');

        $pro = $this->cartmodel->getFirstRowWhere('product',array(
            'id' => $id
        ));

        $arr = array();
        if($this->cart->contents()){
            foreach ($this->cart->contents() as $item){
                if ($item['id']==$id){
                    $arr = array('rowid'=>$item['rowid'],
                        'qty'=>++$item['qty']);
                    $this->cart->update($arr);
                }
                else{
                    $arr = array(
                        'id' => $id,
                        'qty' => $qty,
                        'price_old'   => $pro->price,
                        'price'   => $pro->price_sale,
                        'name'    => $pro->name,
                        'alias'   => $pro->alias,
                        'image'   => $pro->image,
                        'pro_dir' => $pro->pro_dir,
                    );
                    $this->cart->insert($arr);
                }
            }
        }else{
            $arr = array(
                'id' => $id,
                'qty' => $qty,
                'price_old'   => $pro->price,
                'price'   => $pro->price_sale,
                'name'    => $pro->name,
                'alias'   => $pro->alias,
                'image'   => $pro->image,
                'pro_dir' => $pro->pro_dir,
            );
            $this->cart->insert($arr);
        }
        $data['items'] = $this->cart->contents();
        $data['count']=$this->cart->total_items();
        sleep(1);
        $this->load->view('carts/view_listcart',$data);
    }
  // cap nhat so luong don hang
public function updateQuantityP()
    {
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        $total = $this->cart->total_items();
        $data = array(
            'rowid' => $item,
            'qty'   => $qty
        );
        $this->cart->update($data);
        $data['check'] = true;
        $data['count']=$this->cart->total_items();
        sleep(1);
        $data['items'] = $this->cart->contents();
        $this->load->view('carts/update_cartp',$data);
    }
// thông tin dat hang
public function order(){
        $data = array();
        $data['items'] = $this->cart->contents();
        if(count($data['items']) < 1){
            redirect(base_url('cart/cartEmpty'));
        }

        $pay_ship = '';$coupon='';
        $pay_ship = (int) @$_POST['shipping'];
        $coupon = (int) @$_POST['coupon'];
        $sub_total = (int) @$_POST['subtotal'];
        if($this->input->post('shipping')){
            $this->session->set_userData('payship',$this->input->post('shipping'));
        }
        if($this->input->post('coupon')){
            $this->session->set_userData('coupon',$this->input->post('coupon'));
        }
        if($this->input->post('subtotal')){
            $this->session->set_userData('subtotal',$this->input->post('subtotal'));
        }
        if($this->session->userData('coupon') == 0){
            $total = $this->session->userData('subtotal') + $this->session->userData('payship');
        }else{
            $total = $this->session->userData('subtotal') - ($this->session->userData('subtotal') + $this->session->userData('payship'))*$this->session->userData('coupon') / 100;
        }
        $this->session->set_userData('total',$total);
        $data['payship'] = $this->session->userData('payship');
        $data['coupon'] = $this->session->userData('coupon');
        $data['subtotal'] = $this->session->userData('subtotal');
        $data['total'] = $this->session->userData('total');
        $data['items'] = $this->cart->contents();

        $dataUser = $this->session->userData('userData');
        $data['user'] = $this->cartmodel->getFirstRowWhere('users',array(
            'email' => $dataUser['email'],
        ));
        $data['form_key'] = $keyform = rand();
        $data['ships'] =  $this->cartmodel->get_data('province',null,null);
        $this->session->set_userdata('tokenkey',$keyform);

        $seo = array(
            'title' => 'Cart info'
        );
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/view_order',$data);
        $this->LoadFooter();
    }
// gio hang rỗng
   public function cartEmpty(){
        $data = array();
        $seo = array(
            'title' => 'Cart info'
        );
        
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/cart_empty',$data);
        $this->LoadFooter();
    }
// view gio hang
    public function checkout()
    {
        $data = array();
        $seo = array(
            'title' => 'Giỏ hàng'
        );
        $data['form_key'] = $keyform = rand();
        $this->session->set_userdata('form_key',$keyform);
        $data['items'] = $this->cart->contents();
        $data['ships'] = $this->cartmodel->get_data('province',null);
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/view_checkout',$data);
        $this->LoadFooter();
    }

    public function booking()
    {
        $data = array();
        $seo = array(
            'title' => 'Booking'
        );
        $this->load->helper('unlink');
        unlink_captcha($this->session->userdata('sessionPathCaptchaPostAds'));
        #BEGIN: Create captcha post ads
        $this->load->library('captcha');
        $codeCaptcha = $this->captcha->code(5);
        $this->session->set_userdata('sessionCaptchaPostAds', $codeCaptcha);
        $imageCaptcha = 'assets/captcha/'.md5(microtime()).'posa.jpg';
        $this->session->set_userdata('sessionPathCaptchaPostAds', $imageCaptcha);
        $this->captcha->create($codeCaptcha, $imageCaptcha);
        if(file_exists($imageCaptcha))
        {
            $data['imageCaptchaPostAds'] = $imageCaptcha;
            $data['captcha_check'] = $codeCaptcha;
        }
        $data['code_captcha'] = $codeCaptcha;
        $data['form_key'] = $keyform = rand();
        // var_dump($data['form_key']);die;
        // echo $imageCaptcha; die();
        $this->session->set_userdata('tokenkey',$keyform);
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/booking',$data);
        $this->LoadFooter();
    }
 //check ma giam gia
    public function checkCoupon(){
        $code = trim($_POST['code']);
        $shipping = trim($_POST['shipping']);

        $item = $this->cartmodel->getFirstRowWhere('code_sale',array(
            'code' => $code
        ));
        $check = false;
        if(!empty($item)){
            $check = true;
            $data['coupon_price'] =$couponcode = $item->price;
            $this->session->set_userData('coupon',$data['coupon_price']);
        }
        if($shipping==0){
            $price_shipping = 0;
        }else{
            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(
                'id' => $shipping
            ));
            $price_shipping = $data['item']->price;
        }
        $data['total_cart'] = $this->cart->total() - $this->cart->total()*$couponcode/100 + $price_shipping;
        $data['check'] = $check;
        echo json_encode($data);
    }
 //cap nhat gia don hang khi chon khu vuc shipping
    public function update_shipping(){
        $couponcode = trim($_POST['couponcode']);
        $shipping = trim($_POST['shipping']);
        $price_shipping = $this->cartmodel->getFirstRowWhere('province',array(
            'id' => $shipping
        ));
        if($shipping==0){
            $price_shipping = 0;
        }else{
            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(
                'id' => $shipping
            ));
            $price_shipping = $data['item']->price;
        }
        $data['total_cart'] = $this->cart->total() - $this->cart->total()*$couponcode/100 + $price_shipping;
        $data['price_shipping'] =$price_shipping;
        echo json_encode($data);
    }
// hiện thị lại đơn hang khi câp nhật số lượng
    public function displayCart(){
        $data['items'] = $this->cart->contents();
        $this->load->view('carts/view_displaycart',$data);
    }
 // cap nhat lai gio hang khi tang so luong
public function updateQuantity()
    {
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        $couponcode = $this->input->post('couponcode');
        $shipping = $this->input->post('shipping');
        $data = array(
            'rowid' => $item,
            'qty'   => $qty
        );
        $this->cart->update($data);
        $data['check'] = true;
        sleep(1);
        $price_shipping = $this->cartmodel->getFirstRowWhere('province',array(
            'id' => $shipping
        ));
        if($shipping==0){
            $price_shipping = 0;
        }else{
            $data['item'] = $this->cartmodel->getFirstRowWhere('province',array(
                'id' => $shipping
            ));
            $price_shipping = $data['item']->price;
        }
        $total1= $this->cart->total() - $this->cart->total()*$couponcode/100;
        $data['total_cart'] = $total1 + $price_shipping;
        $data['id_province'] = $shipping;
        $data['shipping'] = $price_shipping;
        $data['couponcode'] = $couponcode;
        $data['items'] = $this->cart->contents();
        $data['ships'] = $this->cartmodel->get_data('province',null);
        $this->load->view('carts/update_cart',$data);
    }

 // gui don hang
 public function sendOnpage()
    {
        if($this->input->post('token') !='' && $this->input->post('token') == $this->session->userdata('tokenkey'))
        {
//var_dump($this->input->post('token'));die;
            $user = $this->session->userdata('userData');
            $user_info = $this->cartmodel->getFirstRowWhere('users',array(
                'lever' => @$user['lever'],
                'email' => @$user['email'],
            ));
            $carts = $this->cart->contents();
            $payment = '';
            if($this->input->post('payment') == 1){
                $payment = "Thanh toán tiền mặt khi nhận hàng.";
            }elseif($this->input->post('payment') == 2){
                $payment = "Nhận hàng và thanh toán tại Thương mại thủ đô";
            }else{
                $payment = "Chuyển khoản qua máy ATM & Ngân hàng";
            }
            $arr = array(
                'fullname' => $this->input->post('fullname'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'address2' => $this->input->post('address2'),
                'people' => $this->input->post('people'),
                'kind_service' => $this->input->post('kind_service'),
                'startime' => $this->input->post('startime'),
                 'catime' => $this->input->post('catime'),
                'note' => $this->input->post('comment'),
                'code_sale' => $this->input->post('coupon'),
                'price_ship' => $this->input->post('price_shipping'),
                'total_price' => $this->input->post('subtotal'),
                'mobile' => $this->input->post('phone_other'),
                'startplaces' => $payment,
                'time' => time(),
                'user_id' => @$user_info->id,
            );

            $id=$this->cartmodel->Add('order',$arr);
            if($id)
            {
                foreach ($carts as $v) {
                    $detai_order=array(
                        'order_id' => $id,
                        'item_id' => $v['id'],
                        'count' => $v['qty'],
                        'price' => $v['price_old'],
                        'price_sale' => $v['price'],
                        'name' => $v['name'],
                        'subtotal' => $v['subtotal'],
                        'pro_dir' => $v['pro_dir'],
                        'alias' => $v['alias'],
                        'image' => $v['image'],
                        //'size' => $v['size'],
                        //'color' => $v['color']
                    );
                    $id_order_item=$this->cartmodel->Add('order_item',$detai_order);
                }
                $code = 'DH_'.date('d').$id;
                $this->cartmodel->Update_where('order',array(
                    'id' => $id
                ),
                    array(
                        'code' => $code
                    )
                );
               $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'cskhwebsite@gmail.com', 
                'smtp_pass' => 'hbfbiskcrdarzwty', 
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'wordwrap' => TRUE
            );
                $this->load->library('email', $config);
//                 $htm = '<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#caf6ea">
//                             <thead>
//                             <tr style="background:#92ddc9">
//                                 <td>Stt</td>
//                                 <td>Tên sản phẩm</td>
//                                 <td>Số lượng</td>
//                                 <td>Đơn giá(vnđ)</td>
//                                 <td>Thành tiền(vnđ)</td>
//                             </tr>
//                             </thead>
//                             <tbody>';
//                 $subtotal = 0;
//                 $totals = 0;
//                 $tongtien = 0;
//                 $stt = 0;

//                 foreach($carts as $key => $tcat){
//                     $stt ++;
//                     $subtotal = $tcat['price']*$tcat['qty'];
// //                    $code_sale = $this->input->post('code_sale_all');
// //                    $price_ship = $this->input->post('price_ship');
// //                    $total_sale= $subtotal*$code_sale/100;

//                     $tongtien += $subtotal;
//                     $totals += $subtotal ;
//                     $htm .='<tr>';
//                     $htm .='<td>'.($stt).'</td>';
//                     $htm .='<td>'.$tcat['name'].'<br>';
//                     $htm .='</td>';
//                     $htm .='<td>'.$tcat['qty'].'</td>';
//                     $htm .='<td>'.number_format($tcat['price']).'</td>';
//                     $htm .='<td>'.number_format($tcat['price']*$tcat['qty']).'</td>';
//                     $htm .='</tr>';
//                 }

//                 $htm .='<tr><td colspan="5" align="right"><span style="color:red">Tổng tiền đơn hàng:'.number_format($tongtien).'&nbsp;vnđ</span></td></tr>';
//                 $htm .='<tr><td colspan="5" align="right"><span style="color:red">Tổng tiền thanh toán là:'.number_format($totals).'&nbsp;vnđ</span></td></tr>';
//                 $htm .='</tbody>';
//                 $htm .='</table>';


                $subject = $this->option->site_name.' - Email Booking'.'['.$code.']';
                $img ='<p><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';
                $img_footer ='<p style="float: right" class="pull-right"><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';

                $message = '';
                $message .= $img;
                $message .= '<p><h2 style="color: green">Email booking!</h2></p>';
                $message .='<p>Dear &nbsp;'.$this->input->post('fullname').',<p>';
                $message .='<b>Customer information:</b></br>';
                $message .='<p>Full name: '.$this->input->post('fullname').'<p></br>';
                $message .='<p>Email: '.$this->input->post('email').'<p></br>';
                 $message .='<p>Date: '.$this->input->post('startime').'<p></br>';
                 $message .='<p>Time: '.$this->input->post('catime').'<p></br>';
                // $message .='<p>Điện thoại:'.$this->input->post('phone').'<p></br>';
                 $message .='<p>Treatment Using: '.$this->input->post('kind_service').'<p></br>';
                 $message .='<p>Number of people booking: '.$this->input->post('people').'<p></br>';
                $message .='<p>Address to pickup: '.$this->input->post('address').'<p></br>';
 
                $message .= '<p><b>Code orders: </b>'.$code.'</p>';
            
                $message .='<p><b>And more :</b></p>';
                $message .='<p style="border: 1px solid #e7d17a;padding: 8px">Payment by: Visa, cash, ....Please kindly wait for our confirmation.</p>';
                $message .=$htm;

                $message .='<br>After your booking process has been done, we will check first our availability</p>';
               
                $message .='<br>Please kindly wait for our confirmation.</p>';
                $message .='<p>If you did not receive the confirmation of your booking within 2 hours, please email us at info@midospa.com</p>';
                $message .='<p>or contact Kakao talk  ID: midospa - Kakao talk number : +84985694900</p>';
                $message .='<p><br><br><br>(<span style="color:red">*</span>)This is an automated mail system sent, please do not reply (Reply) back to this mail.</p>';
                 
                $message .=$img_footer;
                // Get full html:
                $body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>' . htmlspecialchars($subject, ENT_QUOTES, $this->email->charset) . '</title>
                            <style type="text/css">
                                body {
                                    font-family: Arial, Verdana, Helvetica, sans-serif;
                                    font-size: 16px;
                                }
                            </style>
                        </head>
                        <body>
                        ' . $message . '
                        </body>
                        </html>';
                //$this->email->send();
                  
                  $receiver_email = $this->input->post('email') . ','.@$this->option->site_email;
                $this->email->set_newline("\r\n");
                $this->email->from(@$this->option->site_email,'Email Booking'); // change it to yours
                $this->email->to($this->input->post('email'));
                $this->email->subject($subject);
                $this->email->message($body);
                $this->email->send();
         
              
                 $subject2 = $this->option->site_name.' - Email Booking'.'['.$code.']';
                $img2 ='<p><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';
                $img_footer2 ='<p style="float: right" class="pull-right"><img src="'.base_url(@$this->option->site_logo).'" alt=""/></p>';

                $message2 = '';
                $message2 .= $img2;
                $message2 .= '<p><h2 style="color: green">Email booking!</h2></p>';
                $message2 .='<p>Dear &nbsp;'.$this->input->post('fullname').',<p>';
                $message2 .='<b>Customer information:</b></br>';
                $message2 .='<p>Full name: '.$this->input->post('fullname').'<p></br>';
                $message2 .='<p>Email: '.$this->input->post('email').'<p></br>';
                 $message2 .='<p>Date: '.$this->input->post('startime').'<p></br>';
                 $message2 .='<p>Time: '.$this->input->post('catime').'<p></br>';
                // $message .='<p>Điện thoại:'.$this->input->post('phone').'<p></br>';
                 $message2 .='<p>Treatment Using: '.$this->input->post('kind_service').'<p></br>';
                 $message2 .='<p>Number of people booking: '.$this->input->post('people').'<p></br>';
                $message2 .='<p>Address to pickup: '.$this->input->post('address').'<p></br>';
 
                $message2 .= '<p><b>Code orders: </b>'.$code.'</p>';
            
                $message2 .='<p><b>And more :</b></p>';
                $message2 .='<p style="border: 1px solid #e7d17a;padding: 8px">Payment by: Visa, cash, ....Please kindly wait for our confirmation.</p>';
                $message2 .=$htm;

                $message2 .='<br>After your booking process has been done, we will check first our availability</p>';
               
                $message2 .='<br>Please kindly wait for our confirmation.</p>';
                $message2 .='<p>If you did not receive the confirmation of your booking within 2 hours, please email us at info@midospa.com</p>';
                $message2 .='<p>or contact Kakao talk  ID: midospa - Kakao talk number : +84985694900</p>';
                $message2 .='<p><br><br><br>(<span style="color:red">*</span>)This is an automated mail system sent, please do not reply (Reply) back to this mail.</p>';
                 
                $message2 .=$img_footer2;
                // Get full html:
                $body2 ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>' . htmlspecialchars($subject2, ENT_QUOTES, $this->email->charset) . '</title>
                            <style type="text/css">
                                body {
                                    font-family: Arial, Verdana, Helvetica, sans-serif;
                                    font-size: 16px;
                                }
                            </style>
                        </head>
                        <body>
                        ' . $message2 . '
                        </body>
                        </html>';

                $receiver_email = $this->input->post('email') . ','.@$this->option->site_email;
                $this->email->set_newline("\r\n");
             
                $this->email->from(@$this->option->site_email,'Booking từ website'); // change it to yours
                $this->email->to($this->option->site_email);
                $this->email->subject($subject2);
                $this->email->message($body2);
                $this->email->send();
                
               $this->session->unset_userdata('total');
                $this->session->unset_userdata('user_name');
                $this->session->unset_userdata('address');
                $this->session->unset_userdata('phone');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('payship');
                //unset cart
                $this->cart->destroy();
                if($this->language=='vi'){
                $this->session->set_flashdata("mess", "Congratulations on your successful order!");
                }else{
                    $this->session->set_flashdata("mess", "성공적인 주문을 축하드립니다!");
                }
                redirect(base_url());
            }
        }
        else{
            return false;
        }
    }
// danh hang thanh cong
 public function order_success(){
        $data = array();
        $seo = array(
            'title' => 'Đặt hàng thành công'
        );
        $data['order'] = $this->cartmodel->getFirstRowWhere('order');
       // $data['item'] = $this->cartmodel->Get_product_order($data['order']->id);
        $this->LoadHeader(null,$seo,false);
        $this->load->view('carts/success',$data);
        $this->LoadFooter();
    }





    public function add(){
        if($this->input->post('form_key') && $this->input->post('form_key') == $this->session->userdata('keyform'))
        {
            $id = trim($this->input->post('product'));
            $color = $this->input->post('color');
            $item = $this->cartmodel->getFirstRowWhere('product',array(
                'id' => $id
            ));
            if($this->input->post('qty')){
                $qty = $this->input->post('qty');
            }else{
                $qty = 1;
            }
            $arr = array();
            if(!empty($item)){
                $arr = array(
                    'id' => $id,
                    'qty' => $qty,
                    'price_old'   => $item->price,
                    'price'   => $item->price_sale,
                    'name'    => $item->name,
                    'alias'   => $item->alias,
                    'image'   => $item->image,
                    'pro_dir' => $item->pro_dir,
                    'color' => $color
                );
                $this->cart->insert($arr);
            }else{
                return false;
            }
        }else{
            return false;
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('gio-hang'));
    }


    public function update()
    {
        // Get the total number of items in cart
        if($this->input->post('form_key') && $this->input->post('form_key') == $this->session->userdata('form_key'))
        {
            $total = $this->cart->total_items();

            // Retrieve the posted information
            $item = $this->input->post('rowid');
            $qty = $this->input->post('qty');

            // Cycle true all items and update them
            for($i=0;$i < $total;$i++)
            {
                // Create an array with the products rowid's and quantities.
                $data = array(
                    'rowid' => @$item[$i],
                    'qty'   => @$qty[$i]
                );

                // Update the cart with the new information
                $this->cart->update($data);
            }
        }
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function deleteone()
    {
        $rowid = (string) $this->input->get('id');
        if($rowid != null){
            $data = array(
                'rowid' => @$rowid,
                'qty'   => 0
            );
            $this->cart->update($data);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function deleteAll()
    {
        $this->cart->destroy();
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function payment()
    {
        $data = array();
        $data['payship'] = $this->session->userData('payship');
        $data['coupon'] = $this->session->userData('coupon');
        $data['subtotal'] = $this->session->userData('subtotal');
        $data['total'] = $this->session->userData('total');
        $this->session->set_userData('user_name',$this->input->post('fullname'));
        $this->session->set_userData('phone',$this->input->post('phone'));
        $this->session->set_userData('email',$this->input->post('email'));
        $this->session->set_userData('address',$this->input->post('address'));
        $data['items'] = $this->cart->contents();
        $data['form_key'] = $keyform = rand();
        $this->session->set_userData('tokenkey',$keyform);
        $seo = array(
            'title' => 'Payment'
        );
        $this->LoadHeader('common/cat_header',$seo,false);
        $this->load->view('carts/payment',$data);
        $this->LoadFooter();
    }



    public function addCart_now(){
        if($this->input->get('id'))
        {
            $id = trim($this->input->get('id'));
            $item = $this->cartmodel->getFirstRowWhere('product',array(
                'id' => $id
            ));
            $arr = array();
            if(!empty($item)){
                $arr = array(
                    'id' => $id,
                    'qty' => 1,
                    'price'   => $item->price_sale,
                    'price_old'   => $item->price,
                    'name'    => $item->name,
                    'alias'   => $item->alias,
                    'image'   => $item->image,
                    'pro_dir' => $item->pro_dir,
                    'color' => $color
                );
                $this->cart->insert($arr);
                $this->session->set_userData('mess','Sản phẩm đã được cho vào giỏ hàng !');
            }else{
                return false;
            }
        }else{
            return false;
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect($_SERVER['HTTP_REFERER']);
    }




}
