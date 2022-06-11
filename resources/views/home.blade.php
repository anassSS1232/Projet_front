@extends('layouts.app')
@extends('layouts.script')

@section('section')


    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>The Online </h1>
                        <p>library of ebooks and digital books</p>
                        <div class="short-popular-category-list text-center">
                            <h2>Popular Category</h2>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-bed"></i> Classics</a></li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-grav"></i> Horror</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-car"></i> Real Estate</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-cutlery"></i> Romance</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-coffee"></i> Biographies</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-md-12 align-content-center">
                                            <form action="{{ route('advance_search') }}" method="GET">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <input type="text" class="form-control my-2 my-lg-1" name="nom_article" id="inputtext4" placeholder="What are you looking for">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                            <option>Category</option>
                                                            <option value="1">Classics</option>
                                                            <option value="2">Horror</option>
                                                            <option value="3">Real Estate</option>
															<option value="4">Romance</option>
															<option value="5">Science Fiction (Sci-Fi)</option>
															<option value="6">Biographies</option>
															<option value="7">True Crime</option>
															<option value="8">Cookbooks</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control my-2 my-lg-1" name="prix" id="inputLocation4" placeholder="Price">
                                                    </div>
                                                    <div class="form-group col-md-2 align-self-center">
                                                        <button type="submit" class="btn btn-primary">Search Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <!--===================================
    =            Client Slider            =
    ====================================-->


    <!--===========================================
    =            Popular deals section            =
    ============================================-->


    <section class="popular-deals section bg-gray">
	    <div class="container">
		    <div class="row">
			    <div class="col-md-12">
				    <div class="section-title">
                        <h2>FEATURED BOOKS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
				@foreach($article as $articlee)
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
						
        <div class="product-item bg-light">
        <div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="detail/{{$articlee->id_article}}">
				<img class="card-img-top img-fluid" src="/assets/images/book/{{$articlee->image}}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="detail/{{$articlee->id_article}}">{{$articlee->nom_article}}</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>{{$articlee->nom_categorie}}</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>26th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">{{$articlee->description}}</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
        </div>
        </div>

					</div>
					@endforeach

    </section>

	

    <!--==========================================
    =            All Category Section            =
    ===========================================-->
   


    <!--====================================
    =            Call to Action            =
    =====================================-->

    <section class="call-to-action overly bg-3 section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-8">
                    <div class="content-holder">
                        <h2>Start today to get more exposure and
                        grow your business</h2>
                        <ul class="list-inline mt-30">
                            <li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a></li>
                            <li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
@endsection


