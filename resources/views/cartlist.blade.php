@extends('layouts.app')
@extends('layouts.script')

@section('section')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Panier</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td><img src="/assets/images/book/{{$article->image}}" style=" width: 69px ; height: 71px;"/> </td>
                            <td>{{$article->nom_article}}</td>
                            <td>In stock</td>
                            <td><input class="form-control" name="quantite" type="number" value="1" /></td>
                            <td class="text-right">{{$article->prix}} DH</td>
                            <td class="text-right"><a href="/removecart/{{$article->panier_id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        @endforeach
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">{{$sum}} DH</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TAX</td>
                            <td class="text-right">25 DH</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{$sum+25}} DH</strong></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="/list" class="btn btn-block btn-light">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="/ordernow" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
