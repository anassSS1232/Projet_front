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
                                Users
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Mail</th>
                                            <th>Registration Date </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Mail</th>
                                            <th>Registration Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->nom}} {{$user->prenom}}</td>
                                            <td>{{$user->telephone}}</td>
                                            <td>{{$user->adress}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>             
                    </div>                        
                    </div>
                </main>
            </div>
            </div>
            @endsection