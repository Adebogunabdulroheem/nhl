@extends('layouts.pages')

@section('title')
   Blog Post
@endsection

@section('page')
    Blog
@endsection

@section('content')

<div class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                    <div class="lest_news_box_wrapper">
                        <div class="lest_news_img_wrapper">
                            <img src="/storage/cover_images/{{$post->cover_image}}" alt="blog_img">
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
                                    <li>{{ $post->created_at->format('d') }}</li>
                                    <li>{{ $post->created_at->format('F') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lest_news_cont_wrapper">
                            <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                            <p>{{ str_limit($post->Body, 300) }}</p>
                            <h4><a href="/posts/{{$post->id}}">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
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
                     {{$posts->links()}}
   
                @else
                    <p>No posts found</p>
                @endif
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
                        @if(count($posts) > 0)
                            @foreach ($posts as $post)
                            <div class="blog_wrapper1">
                                <div class="sc_blog_image">
                                    <img src="/storage/cover_images/{{$post->cover_image}}" class="img-responsive" alt="blog_img1" />
                                </div>
                                <div class="sc_blog_text">
                                    <h5><a href="/posts/{{$post->id}}">{{ str_limit($post->title, 30) }}</a></h5>
                                    <div class="sc_blog_date">{{ $post->created_at->format('F') }}{{ $post->created_at->format(' d, Y') }}</div>
                                </div>
                            </div>
                             @endforeach
                        @else
                            <p>No posts recently</p>
                        @endif
                        </div>
                    </div>
                    <div class="sidebar_widget">
                        <h4> subscribe</h4>
                        <div class="search_box_wrapper">
                            <h3>newsletter</h3>
                            <form class="search_form search_fom_2" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="your email id">
                                </div>
                                <button type="submit"><i class="fa fa-envelope"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection