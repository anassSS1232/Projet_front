@extends('layouts.app')
@extends('layouts.script')

@section('section')



<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
              <img src="{{asset('assets/images/user/user-thumb.jpg')}}" alt="" class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center">{{session('user.nom')}} {{session('user.prenom')}}</h5>
            <p>Joined February 06, 2017</p>
            <a href="/profil" class="btn btn-main-sm">Edit Profile</a>
          </div>
          <!-- Dashboard Links -->
         
        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Mes Achats</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Book Title</th>
                <th class="text-center">Category</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($commande as $commandee)

              <tr>

                <td class="product-thumb">
                  <img width="80px" height="auto" src="/assets/images/book/{{$commandee->image}}" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">{{$commandee->nom_article}}</h3>
                  <span><strong>Reserved on: </strong><time>{{$commandee->date_commande}}</time> </span>
                  <span class="status active"><strong>Status</strong>{{$commandee->etat_commande}}</span>
                  <span class="location"><strong>Location</strong>{{$commandee->adress}}</span>
                </td>
                <td class="product-category"><span class="categories">{{$commandee->nom_categorie}}</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

        </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
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
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>

@endsection
