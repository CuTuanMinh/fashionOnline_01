                        <h2>{{ __('Categories') }}</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach ($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{url("/category/$category->id")}}">{{$category->name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>{{ __('Brands') }}</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach ($brands as $brand)
                                        <li><a href="{{url("/brand/$brand->id")}}">{{$brand->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
                        </div><!--/shipping-->
