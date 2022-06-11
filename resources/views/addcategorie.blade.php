@extends('layouts.admin')
@extends('layouts.script')

@section('section')
<div id="layoutSidenav_content">
        <form action="{{ route('creat.cat') }}" method="POST">
        @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Add Category</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Category:</h6>
                            <input type="text"id="nom_categorie" name="nom_categorie" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There">
                        </div>
                    <button type="submit" class="btn btn-primary d-block mt-2">Add Category</button>

            </fieldset>
            <!-- Post Your ad end -->

            <!-- seller-information start -->
          
            <!-- seller-information end-->

            <!-- ad-feature start -->
            
            <!-- ad-feature start -->

            <!-- submit button -->
        </form>
    </div>
    </div>

@endsection