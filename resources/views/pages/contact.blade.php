@extends('layouts.pages')

@section('title')
    Contact us for any project
@endsection

@section('page')
    Contact Us
@endsection

@section('content')
    <!--sc contact us section start-->
    <div class="sc_contact_us_section sc_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="top_serv_box">
                        <ul>
                            <li class="galery_hover_div top_serv_box_txt cnt_box_txts wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="contact_us.html#"><i class="fa fa-map-marker"></i></a>
                                </div>
                                <span>location</span>
                                <p class="sc_bottompadder10">78 - California,US
                                    <br>125- maxicocity , India </p>
                            </li>
                            <li class="galery_hover_div top_serv_box_txt  cnt_box_txts wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="contact_us.html#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <span>email address</span>
                                <p class="sc_bottompadder10">mail@example.com
                                    <br>guard@example.com</p>
                            </li>
                            <li class="galery_hover_div top_serv_box_txt cnt_box_txts wow  zoomIn animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <div class="gallery_cont1_img cntct_icon">
                                    <a href="contact_us.html#"><i class="fa fa-phone"></i></a>
                                </div>
                                <span>contact</span>
                                <p class="sc_bottompadder10">+61 5478-125-125
                                    <br>+91 97586-123-123</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="cmnt_area_div_mn sc_toppadder80 sc_bottompadder80">
                        <div class="cmnt_area sc_bottompadder50">
                            <div class="abt_heading_wrapper">
                                <h1 class="med_bottompadder20">leave a comment</h1>

                            </div>
                        </div>
                        <div class="row">
						<form>
						<div class="cont_main_section sc_toppadder30">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contect_form1">
                                    <input type="text" name="full_name" placeholder="Full Name" class="require"><i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="contect_form1">
                                    <input type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid."><i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contect_form4">
                                    <textarea rows="6" name="message" placeholder="Message" class="require"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="response"></div>	
                                <div class="cntct_2_btn_wrapper sc_toppadder40">
                                      <button type="button" class="submitForm" type="contact">submit</button>
                                </div>
                            </div>
                        </div>
						</form>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us section end-->
   
    <!-- map Script-->
 @endsection