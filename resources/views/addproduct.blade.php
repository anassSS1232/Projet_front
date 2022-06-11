@extends('layouts.admin')
@extends('layouts.script')

@section('section')
<div id="layoutSidenav_content">
        <form action="{{ route('create.book') }}" method="POST">
        @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Add Book</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Book:</h6>
                            <input type="text"id="nom_article" name="nom_article" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There">
                            <h6 class="font-weight-bold pt-4 pb-1">Quantity :</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                    <input type="number" name="quantité" value="personal" id="quantité" class="border w-100 p-2 bg-white text-capitalize">
                                   
                                </div>
                                
                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                            <textarea name="description" id="description" class="border p-3 w-100" rows="7" placeholder="Write details about your product"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Book Category:</h6>
                            <select name="Categorie_idCategorie" id="Categorie_idCategorie" class="w-100">
                                <option >Select category</option>
                                @foreach($items as $item)
                                <option value="{{ $item->idCategorie }}">{{ $item->nom_categorie }}</option>
                                @endforeach 
                            </select>
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1">Book Price :</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input type="text" name="prix" class="border-0 py-2 w-100 price" placeholder="Price"
                                            id="prix">
                                    </div>
                                </div>
                            </div>
                            <div class="choose-file text-center my-4 py-4 rounded">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                    <span class="d-block">or</span>
                                    <input type="file" class="d-block btn bg-primary text-white my-3 select-files" id="image" name="image" value="Select Files">
                                    <span class="d-block">Maximum upload file size: 500 KB</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary d-block mt-2">Add Book</button>

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