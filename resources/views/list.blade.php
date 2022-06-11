@extends('layouts.app')
@extends('layouts.script')

@section('section')

<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="{{ route('advance_search') }}" method="GET">
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" name="nom_article" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" name="Categorie_idCategorie" id="inputCategory4" placeholder="Category">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" name="prix" id="inputLocation4" placeholder="Price">
							</div>
							<div class="form-group col-md-2">

								<button type="submit" class="btn btn-primary">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">

		
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">All Category</h4>
	<form action="{{ route('advance_search') }}" method="GET">
	<ul class="category-list">
		<li><a href="?nom_article=&Categorie_idCategorie=drama&prix=" value="drama"  name="Categorie_idCategorie" >Drama <span>93</span></a></li>
		<li><a href="?nom_article=&Categorie_idCategorie=action&prix="  name="Categorie_idCategorie">Action <span>233</span></a></li>
		<li><a href="category.html">Real Estate  <span>183</span></a></li>
		<li><a href="category.html">Romance <span>343</span></a></li>
		<li><a href="category.html">Science Fiction (Sci-Fi) <span>343</span></a></li>
		<li><a href="category.html">Biographies <span>343</span></a></li>
		<li><a href="category.html">True Crime <span>343</span></a></li>
		<li><a href="category.html">Cookbooks <span>343</span></a></li>

	</ul>
	</form>
</div>



				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Short</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="category.html"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="category.html" class="text-info"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- ad listing list  -->
                @foreach($article as $articlee)
				<div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
            <a href="detail/{{$articlee->id_article}}">
                <img src="/assets/images/book/{{$articlee->image}} " style="
    width: 243px;
    height: 215px;
" class="img-fluid" alt="">
            </a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">
                        <div>
                            <a href="detail/{{$articlee->id_article}}" class="font-weight-bold">{{$articlee->nom_article}}</a>
                        </div>
                        <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item"><a href="category.html"> <i class="fa fa-folder-open-o"></i> {{$articlee->nom_categorie}}</a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-calendar"></i>26th December</a></li>
                        </ul>
                        <p >{{$articlee->description}}</p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-ratings float-lg-right pb-3">
                        <ul class="list-inline">
						<a href="single.html" class="font-weight-bold">{{$articlee->prix}} DH</a>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

				<!-- ad listing list  -->

				<!-- pagination -->
				<div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="{{$article->previousPageUrl()}}" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only"></span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="{{$article->url(1)}}">1</a></li>
							<li class="page-item "><a class="page-link" href="{{$article->url(2)}}">2</a></li>
							
							@if ($article->currentPage() > 3)
							<li class="page-item"><a class="page-link" href="{{$article->url(3)}}">3</a></li>
							@endif
							@if ($article->currentPage() > 4)
							<li class="page-item"><a class="page-link" href="{{$article->url(3)}}">4</a></li>
							@endif
							@if ($article->currentPage() > 5)
							<li class="page-item"><a class="page-link" href="{{$article->url(3)}}">5</a></li>
							@endif
							@if ($article->currentPage() > 6)
							<li class="page-item"><a class="page-link" href="{{$article->url(3)}}">6</a></li>
							@endif
							@if ($article->currentPage() > 7)
							<li class="page-item"><a class="page-link" href="{{$article->url(3)}}">7</a></li>
							@endif
							
							<li class="page-item">
								<a class="page-link" href="{{$article->nextPageUrl()}}" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->
			</div>
		</div>
	</div>
</section>

@endsection
