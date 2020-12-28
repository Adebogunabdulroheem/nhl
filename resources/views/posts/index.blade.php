@extends('layouts.pages')

@section('title')
   Blog Post
@endsection

@section('page')
    Blog
@endsection

@section('content')

    </div>
    <!--sc title section start-->
    <!-- blog_section start -->
    @if(count($posts) > 0)

        @foreach ($posts as $post)

            <div class="blog_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div class="lest_news_box_wrapper">
                                    <div class="lest_news_img_wrapper">
                                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="blog_img">
                                        <div class="author-thumb">
                                            <div class="authpor_img">
                                                <img src="/images/logo_1.png" class="img-responsive " alt="Image">
                                            </div>
                                            <div class="author_text">
                                                <h1><a href="blog_category.html#">by- admin</a></h1>
                                            </div>
                                        </div>
                                        <div class="lest_news_date_wrapper">
                                            <ul>
                                                <li>15</li>
                                                <li>feb</li>
                                                <li>feb</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lest_news_cont_wrapper">
                                        <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                                        <p>{{$post->Body}}</p>
                                        <h4><a href="/posts/{{$post->id}}">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        @endforeach
   
    @else
        <p>No posts found</p>
    @endif
    <!-- blog_section end -->
@endsection
