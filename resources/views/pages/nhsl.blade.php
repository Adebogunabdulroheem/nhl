@extends('layouts.app')

@section('title')
    NAVY HOTELS & SUITES LIMITED
@endsection

@section('content')
        <!--slider section start-->
        <div class="slider_wrapper">
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1050_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <!--<li data-index="rs-2938" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!- MAIN IMAGE -->
                           <!--  <img src="images/main_slider.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> -->
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <!-- <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-2" data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']" data-y="['top','top','top','bottom']" data-voffset="['70','70','580','63']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;"><img src="images/off.png" alt="" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" data-no-retina> </div> -->

                            <!-- LAYER NR. 7 -->
                            <!-- <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background" id="slide-2938-layer-3" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-50','20','130','200']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','75','60']" data-width="100%" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap;text-transform:uppercase; color:#ffffff; font-family:Poppins; font-weight:900; "><span>We care</span> About Your
                                <br> Protaction</div> -->

                            <!-- LAYER NR. 9 -->
                          <!--   <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-4" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['60','180', 300','330']" data-fontsize="['16','16','16','16']" data-lineheight="['24','24','24','22']" data-width="['448','370','360','300']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; font-family:Poppins; white-space: normal;">Our portfolio includes some of the most prominent clients.
                                <br/> You can be a part now! </div> -->

                            <!-- LAYER NR. 10 -->
                           <!--  <div class="tp-caption rev-btn rev-btn " id="slide-2938-layer-5" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','300','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:1px solid rgba(255, 255, 255, 0.17);bg:transparent;bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 100; white-space: nowrap; font-size: 16px; line-height: 48px; font-weight: 600; color: #ffffff;font-family:Poppins;background-color:#254a93;border:1px solid #254a93;letter-spacing:1px; display:inline-block;">Read More </div> ->

                        </li> -->
                        <!-- SLIDE  -->
                        <li data-index="rs-2939" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Examples" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/holtell.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-7" data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']" data-y="['top','top','top','bottom']" data-voffset="['70','70','580','63']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;"><img src="images/off.png" alt="" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background" id="slide-2938-layer-8" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-50','20','130','200']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','75','60']" data-width="100%" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap;text-transform:uppercase; color:#ffffff; font-family:Poppins;font-weight:900;"><span>We care</span> About Your
                                <br> Protaction</div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-9" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['60','180','300','320']" data-fontsize="['16','16','16','16']" data-lineheight="['24','24','24','22']" data-width="['448','356','334','277']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; font-family:Poppins; white-space: normal; color: white;">Our portfolio includes some of the most prominent clients.
                                <br/> You can be a part now! </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption rev-btn rev-btn " id="slide-2938-layer-10" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','270','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:1px solid rgba(255, 255, 255, 0.17);bg:transparent;bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 100; white-space: nowrap; font-size: 16px; line-height: 48px; font-weight: 600; color: #ffffff;font-family:Poppins;background-color:#254a93;border:1px solid #254a93;letter-spacing:1px; display:inline-block;">Read More </div>

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2940" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Easy to Use" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/hotel.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-12" data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']" data-y="['top','top','top','bottom']" data-voffset="['70','70','580','63']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;"><img src="images/off.png" alt="" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background" id="slide-2938-layer-13" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-50','20','130','220']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','75','60']" data-width="100%" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap;text-transform:uppercase; color:#ffffff; font-family:Poppins;font-weight:900; "><span>We care</span> About Your
                                <br> Protaction</div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-14" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['60','180','300','340']" data-fontsize="['16','16','16','16']" data-lineheight="['24','24','24','22']" data-width="['448','356','334','277']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; font-family:Poppins; white-space: normal;color: white;">Our portfolio includes some of the most prominent clients.
                                <br/> You can be a part now! </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption rev-btn rev-btn " id="slide-2938-layer-15" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','270','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;border:1px solid rgba(255, 255, 255, 0.17);bg:transparent;bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 100; white-space: nowrap; font-size: 16px; line-height: 48px; font-weight: 600; color: #ffffff;font-family:Poppins;background-color:#254a93;border:1px solid #254a93;letter-spacing:1px; display:inline-block;">Read More </div>

                            <!-- LAYER NR. 10 -->
                        </li>
                        <!-- SLIDE  -->
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>








        <!--sc title section start-->
        <div class="title_main_div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="sc_tittle_cont_wrapper">
                                <div class="sc_tittle_cont">
                                    <h1>Navy Hotels & Suites Limited</h1>
                                    <ul class="page-breadcrum">
                                        <li><a href="/">Home</a>
                                        </li>
                                        <li class="icon_breamcum"> > </li>
                                        <li>nhsl</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sc title section start-->
    <!-- service single section start-->
	<div class="serv_single_section sc_toppadder100">
	<div class="container">
	<div class="row">
	 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sc_srv_img_wrapper">
                        <img src="images/hotel.jpg" alt="img" class="img-responsive">
                     </div>
              </div>
			   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abt_heading_wrapper choose_line">
                        <h1 class="sc_bottompadder20">Who we are</h1>
                    </div>
                    <div class="abt_txt">
                        <p class="sc_toppadder30">Navy Hotels & Suites Limited is engaged in the provision of hotel and accommodation services, hospitality and ancillary functions. Navy Hotels & Suites Limited utilizes the services of reputable hotel management companies with the objectives to achieve efficiency in service delivery and effective coordination. Navy Hotels & Suites Limited offers discount hotel accommodation for Armed Forces personnel while members of the public pay the prevailing market accommodation rates. Navy Hotels & Suites Limited leverages the services of own staff, mostly civilian hospitality specialist and consultants to drive the highly specialized activity of the hotel.</p>
                    </div>
                </div>
             </div>
           </div>
       </div>
   	<!--service single section end-->
	<!--choose wrapper start-->
    <div class="choose_wrapper sc_toppadder100 sc_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 accordionTwo">
                    <div class="abt_heading_wrapper choose_line">
                        <h1 class="sc_bottompadder20">About NHSL</h1>
                    </div>
                    <div class="panel-group sc_toppadder50" id="accordionTwoRight">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwoRight" href="index.html#collapseTwoRightone" aria-expanded="false">
                                VISION
                              </a>
                            </h4>
                            </div>
                            <div id="collapseTwoRightone" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <div class="text-accordion">
                                        <p>
                                            To provide quality hotel and hospitality services to esteemed customers in line with global practices.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwoRight" href="index.html#collapseTwoRightTwo" aria-expanded="false">
                              MISSION
                              </a>
                            </h4>
                            </div>
                            <div id="collapseTwoRightTwo" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <div class="text-accordion">
                                        <p>
                                           To engage in providing guests with quality service by paying attention to details backed with a well-trained and dedicated work force.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwoRight" href="index.html#collapseTwoRightThree" aria-expanded="false">
                              CORE VALUES
                              </a>
                            </h4>
                            </div>
                            <div id="collapseTwoRightThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <div class="text-accordion">
                                        <p>
                                            •    Partners with private investors through Build, Operate and Transfer (BOT) in order to provide decent and affordable hotel services within the hospitality industry.
                                            <br>
                                            •   Maintain impeccable services through provision of clean and serene environment to enable quest satisfaction.
                                            <br>
                                            •   Harnessing local content participation in the hospitality industry through personnel development and incentives toward ensuring customers satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwoRight" href="index.html#collapseTwoRightFour" aria-expanded="false">
                              OPERATING OUTLET
                              </a>
                            </h4>
                            </div>
                            <div id="collapseTwoRightFour" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <div class="text-accordion">
                                        <p>
                                           <b>•    The Admiralty Suites Kaduna</b><br>
                                            The Admiralty Suites, kaduna is located at No 3 Race Course Road, by Murtala Mohammed Square, Kaduna. It is strategically located in a quiet, secured and serene environment. This outlet provides services such as; lodging, bar, restaurant, conferencing, laundering, and catering services. <br>
                                            <b>•   The Nigerian Navy Conference Centre</b><br>
                                            The Nigerian Navy Conference Centre is located within the Naval Dockyard, Wilmot Point Ahmadu Bello way, Victoria Island, Lagos. The Conference Centre is located in a highly secure environment and equipped with most modern state of the arts equipment.
                                            The Conference Centre is fully adaptable to 500 man event centre. The centre provides an excellence view of the Lagos lagoon and Atlantic ocean, This centre in recent time hosted the international Sea Power Symposium as part of activities to mark the Nigerian Navy 60th Anniversary Celebration which is a notable international event with many maritime countries in attendances.  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of /.panel-group-->
                </div>
                <!--end of /.col-sm-6-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 accordionTwo accordionfour">
                   <div class="abt_img">
                       <img src="images/holtel.jpg" alt="img" class="img-responsive">
                   </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
        </div>
    </div>
    <!--choose wrapper end-->
    <!-- counter section start -->
    <div class="counterFour">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-multiple-users-silhouette"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">612</span>
                        </div>
                        <h4><a href="index.html#">happy clients</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-protection"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">12</span>
                        </div>
                        <h4><a href="index.html#">year experince</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-policeman"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">345</span>
                        </div>
                        <h4><a href="index.html#">our employees</a></h4>

                    </div>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-6">
                    <div class="count_div wow  zoomIn   animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn  ;">
                        <div class="counter-bdr">
                            <span class="icon-one"><i class="flaticon-world"></i></span>
                        </div>
                        <div class="count-description">
                            <span class="timer">18</span>
                        </div>
                        <h4><a href="index.html#">officies worldwide</a></h4>

                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!--counter section end -->
	<!--Gallery area start here-->
    <div class="gallery-area sc_toppadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="gallery_heading_wrapper">
                        <h2>latest works </h2>
                        <h1 class="sc_bottompadder20">the work gallery</h1>
                        <p class="sc_bottompadder40">Packages and web page editors now use Lorem Ipsum as their default model and a search par toffor will uncover many web sites still in their.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="gallery" class="gall-img col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="filter filter-demo portfolio-nav">
                        <ul>
                            <li class="button galery_hover_div" data-filter="*">
                                <div class="gallery_cont1_img">
                                    <i class="flaticon-protection"></i>
                                </div>
                                <span>home security</span>
                            </li>
                            <li class="button galery_hover_div" data-filter=".branding">
                                <div class="gallery_cont1_img">
                                    <i class="flaticon-multiple-users-silhouette"></i>
                                </div>
                                <span>office security</span>
                            </li>
                            <li class="button galery_hover_div" data-filter=".ux">
                                <div class="gallery_cont1_img">
                                    <i class="flaticon-policeman"></i>
                                </div>
                                <span>security guard</span>
                            </li>
                            <li class="button galery_hover_div" data-filter=".rresentation">
                                <div class="gallery_cont1_img">
                                    <i class="flaticon-home-lock"></i>
                                </div>
                                <span>safety lockers</span>
                            </li>
                        </ul>
                    </div>
                    <div class="grid">
                        <div class="grid-item rresentation branding * pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_1.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_1.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <span><i class="fa fa-search"></i></span>
                                                <h1>dog <br>security</h1>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item ux * pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_2.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_2.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br>security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item ux branding pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_3.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_3.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog<br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item rresentation branding pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_2.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_2.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item rresentation * pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_4jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_4.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item rresentation pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_5.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_5.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item rresentation pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_7.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_7.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item ux rresentation pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_9.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_9.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item branding * pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_6.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_6.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="grid-item branding ux pd-0">
                            <div class="gallery-list">
                                <figure>
                                    <div class="over">
                                        <a href="images/port_8.jpg" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><img src="images/port_8.jpg" alt="" />
                                            <div class="tab_img_overlay">
                                                <h1>dog <br> security</h1>
                                                <span><i class="fa fa-search"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery area end here-->
@endsection