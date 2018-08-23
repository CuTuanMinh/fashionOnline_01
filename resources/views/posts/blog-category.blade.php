@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2>{{ __('Categories') }}</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    @foreach ($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{url("/blog/category/$category->id")}}">{{$category->name}}</a></h4>
                                </div>
                            </div>
                    @endforeach
                </div><!--/category-products-->
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From Our Blog</h2>
                    @foreach ($category_single->post as $post)
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i>{{$post->user->name}}</li>
                                <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($post->created_at))}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="{{route('posts.show',$post->id)}}">
                            <img src="{{asset("$post->image_url")}}" alt="">
                        </a>
                        <p>{{str_limit($post->content, 200)}}</p>
                        <a  class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Read More</a>
                    </div>
                    @endforeach
                    <br>
                    {{-- {{$posts->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
