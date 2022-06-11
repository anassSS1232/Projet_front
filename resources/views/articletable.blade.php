@extends('layouts.admin')
@extends('layouts.script')

@section('section')



<div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa fa-table me-1"></i>
                                Articles
                            </div>
<div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Start date</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Start date</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($article as $articlee)
                                        <tr>
                                            <td>{{$articlee->id_article}}</td>
                                            <td>{{$articlee->nom_article}}</td>
                                            <td>{{$articlee->nom_categorie}}</td>
                                            <td>{{$articlee->quantité}}</td>
                                            <td>2011/04/25</td>
                                            <td>{{$articlee->prix}} DH</td>
                                            <td class="text"><a href="/removearticle/{{$articlee->id_article}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> 
                                            <a href="/updatearticle/{{$articlee->id_article}}" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i> </a>
                                        </td>

                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>
            </div>
            </div>
            @endsection