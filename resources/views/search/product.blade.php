@extends('layouts.app')

@section('title', 'Home')

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

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@if (count($outputs)>0) 
							<p>The search results for <b>{{$keyword}}</b> are: </p><br><br>
							@foreach ($outputs as $output)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{$output->image_url}}" alt="" />
											<h2>{{$output->price}}$</h2>
											<p>{{$output->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$output->price}}$</h2>
												<p>{{$output->name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="{{url("product/details/$output->id")}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
											</div>
										</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach
							{{$outputs->links()}}
						@else <h3>NO RESULTS</h3>
						@endif
				
			
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
@endsection