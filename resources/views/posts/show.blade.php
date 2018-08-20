@extends('layouts.app')

@section('title','Blog details')

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
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> {{$post->user->name}}</li>
                                <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($post->created_at))}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="">
                            <img src="{{asset("$post->image_url")}}" alt="">
                        </a>
                        <p>{{ $post->content }}</p>
                    </div>
                </div><!--/blog-post-area-->

                <div class="rating-area">
                    <ul class="ratings">
                        <li class="rate-this">Rate this item:</li>
                        <li>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star color"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </li>
                        <li class="color">(6 votes)</li>
                    </ul>
                    <ul class="tag">
                        <li>TAG:</li>
                        <li><a class="color" href="">something to tag <span>/</span></a></li>
                    </ul>
                </div><!--/rating-area-->

                <div class="socials-share">
                    <a href=""><img src="{{asset('images/blog/socials.png')}}" alt=""></a>
                </div><!--/socials-share-->

                <div class="tab-pane fade active in" id="reviews" >
                    <div class="col-sm-12">
                        @foreach ($comments as $comment)
                        <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="{{asset('images/blog/man-two.jpg')}}" alt="">
                                </a>
                                <div class="media-body">
                                    <ul class="sinlge-post-meta">
                                        <li><i class="fa fa-user"></i>{{$comment->user->name}}</li>
                                        <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($comment->create_at))}}</li>
                                        <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($comment->create_at))}}</li>
                                    </ul>
                                    <p>{{$comment->content}}</p>
                                    <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                                </div>
                        </li>
                        @endforeach
                        {!! Form::open (['method'=>'POST','url'=>'/comments/store']) !!}
                        {!! Form::hidden('post_id',$post->id)!!}
                        {!! Form::textarea('comment',null,['placeholder'=>_('Comment')]) !!}
                        {!! Form::submit( __('Submit') , ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
