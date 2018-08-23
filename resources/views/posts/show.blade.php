<!DOCTYPE html>
<html lang="app()->getLocale()">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Details</title>
        <link href= "{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/jquery-prettyPhoto/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href=" {{ asset('bower_components/animate.css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/responsive/vendor/responsive.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
    </head><!--/head-->

    <body>
        {{-- @include('shared.header') --}}
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +846969696969</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> E_Shopper@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="{{ route('home') }}"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    VI
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="">Tiếng Việt</a></li>
                                    <li><a href="">English</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ Auth::check() ? route('users.show') : route('login') }}"><i class="fa fa-user"></i> {{ Auth::check() ? Auth::user()->name : __('Account') }}</a></li>
                                    <li><a href=""><i class="fa fa-star"></i> {{ __('Wishlist') }}</a></li>
                                    <li><a href="#"><i class="fa fa-crosshairs"></i> {{ __('Checkout') }}</a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i> {{ __('Cart') }}</a></li>
                                    @if(Auth::check())
                                    <li><a href = "{{ route('logout') }}" onclick= "event.preventDefault();
                                        document.getElementById('logout-form').submit(); "><i class="fa fa-lock"></i> {{ __('Logout') }}</a>
                                        {!! Form::open(array('route' => 'logout' , 'method' => 'POST' , 'id' => 'logout-form' , 'style' => 'display: none;' )) !!}
                                        {!! Form::close() !!}
                                    @else
                                    <li><a href= "{{ route('login') }}"><i class="fa fa-lock"></i> {{ __('Login') }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{route('home')}}" >{{ __('Home') }}</a></li>
                                    <li><a href="{{route('product')}}" >{{ __('Products') }}</a></li>
                                    <li><a href="{{ route('posts.index') }}" >{{ __('Blog') }}</a></li>
                                    <li><a href="#" >{{ __('Contact Us') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <form action="/search/post" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="search_box pull-right">
                                    <input type="text" name="keyword" autocomplete="on" placeholder="Search"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

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
                        {{-- <li class="media"> --}}
                                <a class="pull-left" href="#">
                                    @if (is_null($comment->user->image_url))
                                        <img class="media-object" src="{{asset('images/blog/default-avatar.png')}}" alt="" width="35" height="35">
                                    @else 
                                        <img class="media-object" src="{{asset("$comment->user->image_url")}}" alt="" width="35" height="35">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <ul class="sinlge-post-meta">
                                        <li><i class="fa fa-user"></i>{{$comment->user->name}}</li>
                                        <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($comment->created_at))}}</li>
                                        <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($comment->created_at))}}</li>
                                    </ul>
                                    <p>{{$comment->content}}</p>
                                    {{-- <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a> --}}
                                    @foreach ($comment->reply as $reply)
                                                {{-- <li class="media"> --}}
                                                    <a class="pull-left" href="#">
                                                        @if (is_null($reply->user->image_url))
                                                            <img class="media-object" src="{{asset('images/blog/default-avatar.png')}}" alt="" width="35" height="35">
                                                        @else 
                                                            <img class="media-object" src="{{asset("$reply->user->image_url")}}" alt="" width="35" height="35">
                                                        @endif
                                                    </a>
                                                    <div class="media-body">
                                                        <ul class="sinlge-post-meta">
                                                            <li><i class="fa fa-user"></i>{{$reply->user->name}}</li>
                                                            <li><i class="fa fa-clock-o"></i> {{date("h:i:s A", strtotime($reply->created_at))}}</li>
                                                            <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($reply->created_at))}}</li>
                                                        </ul>
                                                        <p>{{$reply->content}}</p>
                                                    </div>
                                                {{-- </li> --}}
                                    @endforeach
                                    {!! Form::open (['method'=>'POST','url'=>'/reply/store']) !!}
                                    {!! Form::hidden('comment_id',$comment->id)!!}
                                    {!! Form::text('reply',null,['placeholder'=>_('Comment')]) !!}
                                    {!! Form::submit( __('Reply') , ['class' => 'btn btn-default']) !!}
                                    {!! Form::close() !!}
                                    <br>
                                </div>
                        {{-- </li> --}}
                        @endforeach
                        {{$comments->links()}}
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

{{-- @endsection --}}









        {{-- @yield('content') --}}
        @include('shared.footer')
        <script src="{{ asset('bower_components/jquery/jquery.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/scrollup/js/jquery.scrollUp.min.js') }}"></script>
        <!-- <script src="{{ asset('js/price-range.js') }}"></script> -->
        <script src="{{ asset('bower_components/jquery-prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

