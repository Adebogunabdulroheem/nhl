@extends('layouts.blog')

@section('title')
   Blog Post
@endsection

@section('page')
    {{$post->title}}
@endsection

@section('content')
	<!--sc title section start-->
	<!-- blog_section start -->
	<div class="blog_section">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
	                <div class="lest_news_box_wrapper">
	                    <div class="lest_news_img_wrapper">
	                        <img src="/images/blog_categry_img_1.jpg" alt="blog_img">
	                        <div class="author-thumb">
	                            <div class="authpor_img">
	                                <img src="/images/blog_icon.png" class="img-responsive " alt="Image">
	                            </div>
	                            <div class="author_text">
	                                <h1><a href="blog_single.html#">by- admin</a></h1>
	                            </div>
	                        </div>
	                        <div class="lest_news_date_wrapper">
	                            <ul>
	                                <li>15</li>
	                                <li>feb</li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="lest_news_cont_wrapper news_blog_btm_bordr">
	                        <h5><a href="blog_single.html#">{{$post->title}}</a></h5>
	                        <p class="sc_bottompadder20">{{$post->Body}}</p>
	                        <div class="lest_news_cont_bottom sc_blog_btm_div">
	                            <div class="lest_news_cont_bottom_left sc_left_btm">
	                                <p><a href="blog_single.html#"><i class="fa fa-eye"></i>20,134</a></p>
	                            </div>
	                            <div class="lest_news_cont_bottom_center sc_center_btm">
	                                <p><a href="blog_single.html#"><i class="fa fa-heart"></i>2,564</a></p>
	                            </div>
	                            <div class="lest_news_cont_bottom_right sc_right_btm">
	                                <p><a href="blog_single.html#"><i class="fa fa-comment"></i>456</a></p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="blg_sngle_man_div sc_toppadder50">
	                    <div class="blog_single_comment_heading_wrapper sc_bottompadder50">
	                        <div class="abt_heading_wrapper cmnt_heading">
	                            <h1 class="med_bottompadder20">comments (04)</h1>
	                        </div>
	                    </div>
	                    <div class="comment_box_blog">
	                        <div class="blog_comment1_wrapper">
	                            <div class="blog_comment1_img">
	                                <img src="/images/cmt_1.png" alt="comment_img" class="img-responsive" />
	                            </div>
	                            <div class="blog_comment1_cont">
	                                <h3>Jhaon Doe</h3>
	                                <p><span>sept 29, 2018 - <a href="blog_single.html#">reply</a></span>
	                                </p>
	                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
	                            </div>
	                        </div>
	                        <div class="blog_comment1_wrapper cmnt_wraper_2">
	                            <div class="blog_comment1_img">
	                                <img src="/images/cmnt_3.png" alt="comment_img" class="img-responsive" />
	                            </div>
	                            <div class="blog_comment1_cont">
	                                <h3>Jhon smith</h3>
	                                <p><span>sept 29, 2018 - <a href="blog_single.html#">reply</a></span>
	                                </p>
	                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
	                            </div>
	                        </div>
	                        <div class="blog_comment1_wrapper cmnt_wraper_2">
	                            <div class="blog_comment1_img">
	                                <img src="/images/cmnt_2.png" alt="comment_img" class="img-responsive" />
	                            </div>
	                            <div class="blog_comment1_cont">
	                                <h3>sandy Doe</h3>
	                                <p><span>sept 29, 2018 - <a href="blog_single.html#">reply</a></span>
	                                </p>
	                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
	                            </div>
	                        </div>
	                        <div class="blog_comment1_wrapper cmnt_wraper_2">
	                            <div class="blog_comment1_img">
	                                <img src="/images/cmt_1.png" alt="comment_img" class="img-responsive" />
	                            </div>
	                            <div class="blog_comment1_cont">
	                                <h3>sent france</h3>
	                                <p><span>sept 29, 2018 - <a href="blog_single.html#">reply</a></span>
	                                </p>
	                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
	                            </div>
	                        </div>

	                    </div>
	                </div>
	                <div class="cmnt_area_div_mn sc_toppadder50 sc_bottompadder2100">
	                    <div class="cmnt_area sc_bottompadder50">
	                        <div class="abt_heading_wrapper cmnt_heading">
	                            <h1 class="med_bottompadder20">leave a comment</h1>

	                        </div>
	                    </div>
	                    <div class="row cont_main_section">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                            <div class="contect_form1">
	                                <input type="text" placeholder="Name">
	                            </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                            <div class="contect_form1">
	                                <input type="email" placeholder="E-mail">
	                            </div>
	                        </div>
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                            <div class="contect_form4">
	                                <textarea rows="6" placeholder="Comment"></textarea>
	                            </div>
	                        </div>
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                            <div class="contact_btn_wrapper sc_toppadder30">
	                                <ul>
	                                    <li><a href="blog_single.html#">send a comment</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
	                <div class="sidebar_widget">
	                    <form class="search_form" role="search">
	                        <div class="form-group">
	                            <input type="text" class="form-control" placeholder="Search here">
	                        </div>
	                        <button type="submit"><i class="fa fa-search"></i></button>
	                    </form>
	                </div>
	                <div class="sidebar_widget">
	                    <h4>resent news</h4>
	                    <div class="latest_post_wrapper">
	                        <div class="blog_wrapper1">
	                            <div class="sc_blog_image">
	                                <img src="/images/blog_cat_1.png" class="img-responsive" alt="blog_img1" />
	                            </div>
	                            <div class="sc_blog_text">
	                                <h5><a href="blog_single.html#">Lorem  sepum  the menus view.</a></h5>
	                                <div class="sc_blog_date">June 28, 2018</div>
	                            </div>
	                        </div>
	                        <div class="blog_wrapper2">
	                            <div class="sc_blog_image">
	                                <img src="/images/blog_cat_2.png" class="img-responsive" alt="blog_img2" />
	                            </div>
	                            <div class="sc_blog_text">
	                                <h5><a href="blog_single.html#">Lorem  sepum  the menus view.</a></h5>
	                                <div class="sc_blog_date">June 28, 2018</div>
	                            </div>
	                        </div>
	                        <div class="blog_wrapper3">
	                            <div class="sc_blog_image">
	                                <img src="/images/blog_cat_3.png" class="img-responsive" alt="blog_img3" />
	                            </div>
	                            <div class="sc_blog_text">
	                                <h5><a href="blog_single.html#">Lorem  sepum  the menus view.</a></h5>
	                                <div class="sc_blog_date">June 28, 2018</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	              
	            </div>
	        </div>
	    </div>
	</div>
	<!--blog  section end-->

@endsection
