@extends('layouts.app')
@extends('layouts.script')

@section('section')

<div class="container mb-4">
    <div class="row">
        <div class="table-responsive">
            <div class="col-12">
            <table class="table">
            <tbody>
                <tr>
                <td>Amount</td>
                <td>{{$total}} DH</td>
                </tr>
                <tr>
                <td>Tax</td>
                <td>25 DH</td>
                </tr>
                <tr>
                <td>Total Amount</td>
                <td>{{$total+25}} DH</td>
                </tr>
            </tbody>
            </table>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Address</label>
                    <textarea name="adress" class="form-control" placeholder="" required></textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Order Now</button>
            </form>
</div>
</div>
</div>
</div>


@endsection
