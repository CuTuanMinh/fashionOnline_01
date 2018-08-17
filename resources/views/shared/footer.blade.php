        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>E</span>-shopper</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="{{ asset('images/home/iframe1.png') }}" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="{{ asset('images/home/iframe2.png') }}" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="{{ asset('images/home/iframe3.png') }}" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="{{ asset('images/home/iframe4.png')}}" alt="" />
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o"></i>
                                        </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="address">
                                <img src="{{ asset('images/home/map.png')}}" alt="" />
                                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>{{ __('Service') }}</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">{{ __('Online Help') }}</a></li>
                                    <li><a href="#">{{ __('Contact Us') }}</a></li>
                                    <li><a href="#">{{ __('Order Status') }}</a></li>
                                    <li><a href="#">{{ __('Change Location') }}</a></li>
                                    <li><a href="#">{{ __('FAQs') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>{{ __('Quick Shop') }}</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>{{ __('Policies') }}</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">{{ __('Terms of Use') }}</a></li>
                                    <li><a href="#">{{ __('Privecy Policy') }}</a></li>
                                    <li><a href="#">{{ __('Refund Policy') }}</a></li>
                                    <li><a href="#">{{ __('Billing System') }}</a></li>
                                    <li><a href="#">{{ __('Ticket System') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>{{ __('About Shopper') }}</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">{{ __('Company Information') }}</a></li>
                                    <li><a href="#">{{ __('Careers') }}</a></li>
                                    <li><a href="#">{{ __('Store Location') }}</a></li>
                                    <li><a href="#">{{ __('Affillate Program') }}</a></li>
                                    <li><a href="#">{{ __('Copyright') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>{{ __('About Shopper') }}</h2>
                                    {!! Form::open(['url' => '#']) !!}
                                    {!! Form::text( 'email', null, ['placeholder' => __('Your email address') ]); !!}
                                    <!-- {!! Form::button( __('Submit Email'), array('class' => 'btn btn-default' )); !!} -->
                                    {{ Form::button( __('Submit Email'), ['type' => 'submit', 'class' => 'btn btn-default'])  }}
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                    {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © {{date('Y')}} E-SHOPPER Inc. All rights reserved.</p>
                        <p class="pull-right">Laravel product by <span><a target="_blank" href="#">James Nguyen</a></span> |  Designed by <span><a target="_blank" href="#">Themeum</a></span></p>
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->

