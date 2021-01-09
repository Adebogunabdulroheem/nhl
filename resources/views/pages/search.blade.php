@extends('layouts.pages')

@section('title')
   Search
@endsection

@section('page')
    Search
@endsection

@section('content')

	<div class="blog_section">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
	               @if(isset($posts))
        				<p> The Search results for your query <b> {{ $search }} </b> are :</p>
	                @foreach ($posts as $row)
	                    <div class="lest_news_box_wrapper">
	                        <div class="lest_news_img_wrapper">
	                            <img src="/storage/cover_images/{{$row->cover_image}}" alt="blog_img">
	                            <div class="author-thumb">
	                                <div class="authpor_img">
	                                    <img src="images/blog_icon.png" class="img-responsive " alt="Image">
	                                </div>
	                                <div class="author_text">
	                                    <h1><a href="#">by- admin</a></h1>
	                                </div>
	                            </div>
	                            <div class="lest_news_date_wrapper">
	                                <ul>
	                                    <li>{{ $row->created_at->format('d') }}</li>
	                                    <li>{{ $row->created_at->format('F') }}</li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="lest_news_cont_wrapper">
	                            <h5><a href="/posts/{{$row->id}}">{{$row->title}}</a></h5>
	                            <p>{{ str_limit($row->Body, 300) }}</p>
	                            <h4><a href="/posts/{{$row->id}}">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
	                        </div>
	                        <!-- <div class="lest_news_cont_bottom">
	                            <div class="lest_news_cont_bottom_left sc_left_btm  sc_btn">
	                                <p><a href="blog_category.html#"><i class="fa fa-eye"></i>20,134</a></p>
	                            </div>
	                            <div class="lest_news_cont_bottom_center sc_center_btm sc_btn">
	                                <p><a href="blog_category.html#"><i class="fa fa-heart"></i>2,564</a></p>
	                            </div>
	                            <div class="lest_news_cont_bottom_right sc_right_btm sc_btn">
	                                <p><a href="blog_category.html#"><i class="fa fa-comment"></i>456</a></p>
	                            </div>
	                        </div> -->
	                    </div>
	                     @endforeach
	                     {!! $posts->render() !!}
	   
	                @else
	                    <p>No posts found</p>
	                @endif
	                </div>

	            </div>
	        </div>
	    </div>

@endsection